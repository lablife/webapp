<?php

namespace Acme\ComicalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
* RegisterController.
*
* @author dj <m.ece0113@gmail.com>
*
* @Route("/Register")
*/

class RegisterController extends AppController
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        return array();
    }
}
