<?php

namespace Site\BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteBackEndBundle:Default:index.html.twig', array('name' => $name));
    }
}
