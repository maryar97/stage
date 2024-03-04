<?php

namespace App\Repository;

use App\Entity\Formedeboxe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Formedeboxe>
 *
 * @method Formedeboxe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formedeboxe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formedeboxe[]    findAll()
 * @method Formedeboxe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormedeboxeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formedeboxe::class);
    }

//    /**
//     * @return Formedeboxe[] Returns an array of Formedeboxe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Formedeboxe
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
