<?php

namespace App\Repository;

use App\Entity\Boxeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Boxeur>
 *
 * @method Boxeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Boxeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Boxeur[]    findAll()
 * @method Boxeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BoxeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Boxeur::class);
    }

//    /**
//     * @return Boxeur[] Returns an array of Boxeur objects
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

//    public function findOneBySomeField($value): ?Boxeur
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
