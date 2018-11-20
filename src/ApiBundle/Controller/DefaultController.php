<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/api/test")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return 'test1';
        // return $this->render('ApiBundle:Default:index.html.twig');
    }

    /**
     * @Route("/test1")
     * @Method({"GET"})
     */
    public function testAction()
    {
        //return 'test1';
        return $this->render('ApiBundle:Default:index.html.twig');
    }
}
