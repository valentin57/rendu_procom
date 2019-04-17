<?php

namespace App\Repository;

use App\Entity\ProdTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProdTime|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProdTime|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProdTime[]    findAll()
 * @method ProdTime[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdTimeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProdTime::class);
    }

    public function sumProjectTime(ProdTime $prodTime)
    {
      return $this->createQueryBuilder('s')
        ->andWhere('s.prodtime = :prodtime')
        ->setParameter('prodtime', $prodTime)
        ->select('SUM(fc.time) as sumProjectTime');
    }

    // /**
    //  * @return ProdTime[] Returns an array of ProdTime objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProdTime
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
