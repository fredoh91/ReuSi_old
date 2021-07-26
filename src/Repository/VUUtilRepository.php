<?php

namespace App\Repository;

use App\Entity\VUUtil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VUUtil|null find($id, $lockMode = null, $lockVersion = null)
 * @method VUUtil|null findOneBy(array $criteria, array $orderBy = null)
 * @method VUUtil[]    findAll()
 * @method VUUtil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VUUtilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VUUtil::class);
    }

    // /**
    //  * @return VUUtil[] Returns an array of VUUtil objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VUUtil
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
