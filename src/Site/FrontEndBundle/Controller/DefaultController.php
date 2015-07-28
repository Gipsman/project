<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    }
    
    public function homeAction($page)
    {   
      $paginator=$this->get('knp_paginator');
      $em=$this->get('doctrine.orm.entity_manager');
      $posts=$em->getRepository('SiteBackEndBundle:Post')
      ->findAll();
      //->counter();
       // dump($posts);      
      $data=$paginator->paginate($posts,$page,1);
      return $this->render('SiteFrontEndBundle::home.html.twig', array('posts' => $data));
    }
   
    /*
    public function usersAction()
    {   
        $em=$this->get('doctrine.orm.entity_manager');
        $tags=$em->getRepository('SiteBackEndBundle:Tags')
        ->findAll();
       //dump($arr);
       return $this->render('SiteFrontEndBundle::users.html.twig', array('tags' => $tags));
    }
   */
     
    public function usersAction($slug) {
        $posts=$htis->get('service')
                    ->getPostsByTag($slug);
        return $this->render('SiteFrontEndBundle::users.html.twig', array('posts' => $post));
    }     
      

}
