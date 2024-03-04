<?php

namespace App\Repository;

use App\Entity\RecapDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RecapDetails>
 *
 * @method RecapDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecapDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecapDetails[]    findAll()
 * @method RecapDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecapDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecapDetails::class);
    }

//    /**
//     * @return RecapDetails[] Returns an array of RecapDetails objects
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

//    public function findOneBySomeField($value): ?RecapDetails
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
