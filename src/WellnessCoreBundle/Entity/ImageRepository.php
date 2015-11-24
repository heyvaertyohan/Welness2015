<?php

namespace WellnessCoreBundle\Entity;

/**
 * ImageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImageRepository extends \Doctrine\ORM\EntityRepository
{
    public function getListImages($maxResult, $typeImg, $categServiceId)
    {
        $qb = $this->createQueryBuilder('i');
        $qb->leftJoin('i.user', 'p');
        $qb->orderBy('i.id', 'DESC');
        $qb->where('i.type = :type');
        $qb->setParameter('type', $typeImg);

        if($maxResult!=0){
            $qb->setMaxResults($maxResult);
        }

        if ($categServiceId != 0) {
            $qb->andWhere('i.categoryService = :categServiceId');
            $qb->setParameter('categServiceId', $categServiceId);
        }
        $query = $qb->getQuery();

        /*dump($categServiceId);
        dump($typeImg);
        dump($query);*/

        $result = $query->getResult();

        return $result;
    }

}