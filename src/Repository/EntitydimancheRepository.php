<?php

namespace App\Repository;

use App\Entity\Entitydimanche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Entitydimanche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entitydimanche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entitydimanche[]    findAll()
 * @method Entitydimanche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntitydimancheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entitydimanche::class);
    }

    // /**
    //  * @return Entitydimanche[] Returns an array of Entitydimanche objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Entitydimanche
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
