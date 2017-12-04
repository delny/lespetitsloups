<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 04/12/2017
 * Time: 11:17
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\UserGroup;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserGroupData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $datas = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Employe',
            ],
            [
                'name' => 'Parent',
            ],
        ];
        foreach ($datas as $i => $data) {
            $userGroup = new UserGroup();
            $userGroup->setName($data['name']);
            $manager->persist($userGroup);
            $this->addReference('usergroup-'.$i, $userGroup);
        }
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}