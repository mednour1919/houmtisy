<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    //    /**
    //     * @return Reservation[] Returns an array of Reservation objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reservation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    
    /**
     * Recherche des réservations par critères
     * 
     * @param string $query Le terme de recherche
     * @return Reservation[] Un tableau d'objets Reservation
     */
    public function findBySearch(string $query)
    {
        return $this->createQueryBuilder('r')
            ->where('r.numPLACE LIKE :query')
            ->orWhere('r.marque LIKE :query')
            ->orWhere('r.idStation LIKE :query')
            // Adaptez les champs selon votre structure de données
            ->setParameter('query', '%'.$query.'%')
            ->orderBy('r.dateReservation', 'DESC')
            ->getQuery()
            ->getResult();
    }
}