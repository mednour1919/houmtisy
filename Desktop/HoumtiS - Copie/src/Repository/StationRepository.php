<?php

namespace App\Repository;

use App\Entity\Station;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Station>
 */
class StationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Station::class);
    }

    /**
     * Trouve les stations par zone
     * 
     * @param string $zone La zone à rechercher
     * @return Station[] Liste des stations dans la zone spécifiée
     */
    public function findByZone(string $zone): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.zone LIKE :zone')
            ->setParameter('zone', '%'.$zone.'%')
            ->orderBy('s.nomStation', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Calcule le nombre total de places disponibles dans toutes les stations
     * 
     * @return int Nombre total de places
     */
    public function getTotalCapacite(): int
    {
        $result = $this->createQueryBuilder('s')
            ->select('SUM(s.capacite) as totalCapacite')
            ->getQuery()
            ->getSingleScalarResult();
            
        return (int)$result;
    }
    
    /**
     * Calcule le nombre total de places disponibles dans une zone spécifique
     * 
     * @param string $zone La zone à calculer
     * @return int Nombre total de places dans la zone
     */
    public function getCapaciteByZone(string $zone): int
    {
        $result = $this->createQueryBuilder('s')
            ->select('SUM(s.capacite) as zoneCapacite')
            ->andWhere('s.zone LIKE :zone')
            ->setParameter('zone', '%'.$zone.'%')
            ->getQuery()
            ->getSingleScalarResult();
            
        return (int)$result;
    }

    //    /**
    //     * @return Station[] Returns an array of Station objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Station
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}