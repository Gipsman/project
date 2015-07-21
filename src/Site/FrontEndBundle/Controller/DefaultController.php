<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    }
    
    public function homeAction()
    {   
      $em=$this->get('doctrine.orm.entity_manager');
      $posts=$em->getRepository('SiteBackEndBundle:Post')
      ->findAll();
       // dump($posts);
      return $this->render('SiteFrontEndBundle::home.html.twig', array('posts' => $posts));
    }
    public function usersAction()
    {   
        $em=$this->get('doctrine.orm.entity_manager');
        $tags=$em->getRepository('SiteBackEndBundle:Tags')
        ->findAll();
       //dump($arr);
       return $this->render('SiteFrontEndBundle::users.html.twig', array('tags' => $tags));
    }
}
