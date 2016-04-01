<?php

namespace WellnessCoreBundle\Repository;

/**
 * TrainingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrainingRepository extends \Doctrine\ORM\EntityRepository
{
    public function getListTraining($maxResult)
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