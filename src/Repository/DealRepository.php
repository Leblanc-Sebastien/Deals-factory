<?php

namespace App\Repository;

use App\Entity\Deal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Deal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deal[]    findAll()
 * @method Deal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DealRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Deal::class);
    }


    /**
     * Return all deal per page
     *
     * @param integer $page
     * @param integer $pageLimit
     * @return void
     */
    public function getPaginatedAnnonces(int $page, int $pageLimit){
        $query = $this->createQueryBuilder('deal')
            ->orderBy('deal.createdAt')
            ->setFirstResult(($page * $pageLimit)- $pageLimit)
            ->setMaxResults($pageLimit)
            ;
        
        return $query->getQuery()->getResult();
    }

    /**
     * Return the count of all Deals
     *
     * @return int
     */
    public function getTotalDeals(){

        $total = (int)count($this->findall());

        return $total;
    }

    // /**
    //  * @return Deal[] Returns an array of Deal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Deal
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
