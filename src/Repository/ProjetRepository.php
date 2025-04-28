<?php

namespace App\Repository;

use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projet>
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    /**
     * Recherche avancée avec filtres et tri
     */
    public function findBySearchAndSort(
        string $search = '', 
        string $sort = 'id', 
        string $direction = 'asc',
        ?string $statut = null,
        ?\DateTimeInterface $dateDebutFrom = null,
        ?\DateTimeInterface $dateDebutTo = null
    ): array {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.fournisseur', 'f');

        $this->applySearchFilter($qb, $search);
        $this->applyStatutFilter($qb, $statut);
        $this->applyDateFilters($qb, $dateDebutFrom, $dateDebutTo);
        $this->applySorting($qb, $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * Applique le filtre de recherche texte
     */
    private function applySearchFilter(QueryBuilder $qb, string $search): void
{
    if (!empty($search)) {
        // Vérifie si la recherche est un ID numérique
        if (is_numeric($search)) {
            $qb->andWhere('p.id = :id')
               ->setParameter('id', (int) $search);
        } else {
            $qb->andWhere('
                p.nom LIKE :search OR 
                p.statut LIKE :search OR 
                p.description LIKE :search OR 
                f.nom LIKE :search
            ')
            ->setParameter('search', '%'.$search.'%');
        }
    }
}

    /**
     * Applique le filtre par statut
     */
    private function applyStatutFilter(QueryBuilder $qb, ?string $statut): void
    {
        if (!empty($statut)) {
            $qb->andWhere('p.statut = :statut')
               ->setParameter('statut', $statut);
        }
    }

    /**
     * Applique les filtres par date
     */
    private function applyDateFilters(
        QueryBuilder $qb,
        ?\DateTimeInterface $dateDebutFrom,
        ?\DateTimeInterface $dateDebutTo
    ): void {
        if ($dateDebutFrom) {
            $qb->andWhere('p.dateDebut >= :dateDebutFrom')
               ->setParameter('dateDebutFrom', $dateDebutFrom);
        }

        if ($dateDebutTo) {
            $qb->andWhere('p.dateDebut <= :dateDebutTo')
               ->setParameter('dateDebutTo', $dateDebutTo);
        }
    }

    /**
     * Applique le tri
     */
    private function applySorting(QueryBuilder $qb, string $sort, string $direction): void
    {
        $validSorts = ['id', 'nom', 'statut', 'budget', 'dateDebut', 'dateFin'];
        $sort = in_array($sort, $validSorts) ? $sort : 'id';
        $direction = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';

        $qb->orderBy('p.'.$sort, $direction);
    }

    /**
     * Récupère les statistiques globales
     */
    public function getStats(): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('
                COUNT(p.id) as total,
                SUM(p.budget) as total_budget,
                SUM(p.depense) as total_depense,
                AVG(p.budget) as avg_budget
            ');

        return $qb->getQuery()->getSingleResult();
    }

    /**
     * Récupère les statistiques par statut
     */
    public function getStatsByStatut(): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('
                p.statut,
                COUNT(p.id) as count,
                SUM(p.budget) as total_budget
            ')
            ->groupBy('p.statut');

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les projets en retard (date fin dépassée)
     */
    public function findLateProjects(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.dateFin < :now')
            ->andWhere('p.statut NOT IN (:completedStatuses)')
            ->setParameter('now', new \DateTime())
            ->setParameter('completedStatuses', ['terminé', 'annulé'])
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets à venir (date début dans le futur)
     */
    public function findUpcomingProjects(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.dateDebut > :now')
            ->orderBy('p.dateDebut', 'ASC')
            ->setParameter('now', new \DateTime())
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les projets pour un fournisseur donné
     */
    public function findByFournisseur(int $fournisseurId): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.fournisseur = :fournisseurId')
            ->setParameter('fournisseurId', $fournisseurId)
            ->orderBy('p.dateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Sauvegarde une entité Projet
     */
    public function save(Projet $entity, bool $flush = true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Supprime une entité Projet
     */
    public function remove(Projet $entity, bool $flush = true): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Pagination avec filtres
     */
    public function findPaginated(
        int $page = 1,
        int $limit = 10,
        array $filters = []
    ): array {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.fournisseur', 'f');

        // Applique les filtres
        foreach ($filters as $field => $value) {
            if (!empty($value)) {
                $qb->andWhere("p.$field = :$field")
                   ->setParameter($field, $value);
            }
        }

        // Pagination
        $qb->setFirstResult(($page - 1) * $limit)
           ->setMaxResults($limit);

        return [
            'results' => $qb->getQuery()->getResult(),
            'total' => $this->count($filters)
        ];
    }

    /**
     * Compte avec filtres
     */
    public function count(array $filters = []): int
    {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.id)');

        foreach ($filters as $field => $value) {
            if (!empty($value)) {
                $qb->andWhere("p.$field = :$field")
                   ->setParameter($field, $value);
            }
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }
}