<?php

namespace WellnessCoreBundle\Repository;

/**
 * PromotionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PromotionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastListPromotions($maxResult)
    {
        $qb = $this->createQueryBuilder('p');
        $qb->orderBy('p.id', 'DESC');

        if($maxResult!=0){
            $qb->setMaxResults($maxResult);
        }

        $query = $qb->getQuery();
        $result = $query->getResult();

        return $result;
    }
}
