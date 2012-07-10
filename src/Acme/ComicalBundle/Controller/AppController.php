<?php

namespace Acme\ComicalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* AppController
*
* @author natsunandesu
*/
abstract class AppController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
