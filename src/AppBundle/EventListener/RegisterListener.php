<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 04/12/2017
 * Time: 14:47
 */

namespace AppBundle\EventListener;


use AppBundle\Manager\UserGroupManager;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegisterListener extends Controller implements EventSubscriberInterface
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    /**
     * {@inheritdoc}
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_INITIALIZE => 'beforeRegister',
        );
    }

    /**
     * Just for test
     */
    public function beforeRegister(UserEvent $event)
    {
        // Here add modifications to do before register is completed
    }
}