<?php

namespace App\Repository;

use App\Entity\Boxe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Boxe>
 *
 * @method Boxe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Boxe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Boxe[]    findAll()
 * @method Boxe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoxeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Boxe::class);
    }

//    /**
//     * @return Boxe[] Returns an array of Boxe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Boxe
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
