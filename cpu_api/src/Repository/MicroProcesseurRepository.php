<?php

namespace App\Repository;

use App\Entity\MicroProcesseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MicroProcesseur>
 *
 * @method MicroProcesseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method MicroProcesseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method MicroProcesseur[]    findAll()
 * @method MicroProcesseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MicroProcesseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MicroProcesseur::class);
    }

//    /**
//     * @return MicroProcesseur[] Returns an array of MicroProcesseur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MicroProcesseur
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
