<?php

namespace Site\BackEndBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends EntityRepository
{
	public function counter()
	{
		$qb=$This->createQueryBuilder('p');
		$qb->SELECT('COUNT(p.id)');
		return $qb->getQuery()->getSingleScalarResult();
	}
}
