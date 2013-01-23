<?php

namespace PHRentals\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\EntityManager;

/**
 * ReservationSetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationSetRepository extends EntityRepository
{
	
	public function findNextRef()
	{
		$ref = $this->getEntityManager()
		->createQuery('SELECT MAX(p.ref) FROM PHRentalsMainBundle:ReservationSet p')
		->getSingleScalarResult();
		//$ref= $result[0]->;
		$ref++;
		
		return $ref;
	}
	
	
	
}