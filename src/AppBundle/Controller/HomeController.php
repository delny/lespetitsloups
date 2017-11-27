<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 27/11/2017
 * Time: 10:14
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        return $this->render(':Home:index.html.twig',[]);
    }
}