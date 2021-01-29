<?php

namespace App\Repository;

use App\Entity\Calculate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Calculate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calculate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calculate[]    findAll()
 * @method Calculate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalculateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calculate::class);
    }

    // /**
    //  * @return Calculate[] Returns an array of Calculate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Calculate
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
