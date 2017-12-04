<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 04/12/2017
 * Time: 11:20
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
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
                'username' => 'admin',
                'email' => 'admin@creche-lpl.fr',
                'plainpassword' => 'admin',
                'usergroup' => $this->getReference('usergroup-0'),
            ],
            [
                'username' => 'jeanne',
                'email' => 'jeanne@creche-lpl.fr',
                'plainpassword' => 'jeanne',
                'usergroup' => $this->getReference('usergroup-1'),
            ],
        ];

        foreach ($datas as $i => $data){
            $user = new User();
            $user->setUsername($data['username']);
            $user->setEmail($data['email']);
            $user->setPlainPassword($data['plainpassword']);
            $user->setEnabled(true);

            $user->setGroup($data['usergroup']);
            if($i==0){
                $user->setRoles(array('ROLE_ADMIN'));
            }

            $manager->persist($user);
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
        return 2;
    }
}