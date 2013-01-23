<?php

namespace PHRentals\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AddressRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AddressRepository extends EntityRepository
{
	
	public function findAllOrderedByName()
	{
		return $this->getEntityManager()
		->createQuery('SELECT p FROM PHRentalsMainBundle:Address p ORDER BY p.name ASC')
		->getResult();
	}

}
