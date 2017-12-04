<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 04/12/2017
 * Time: 14:59
 */

namespace AppBundle\Manager;


use AppBundle\Entity\UserGroup;
use Doctrine\ORM\EntityManagerInterface;

class UserGroupManager
{
    private $manager;

    /**
     * UserGroupManager constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->manager = $entityManager;
    }

}