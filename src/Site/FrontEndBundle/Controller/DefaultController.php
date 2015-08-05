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
    
       public function postsByCatAction($slug)
    {
        $posts= $this->get('tags_manager')->getPostsByCategory($slug);
//        $paginator=  $this->get('knp_paginator');
//        $data=$paginator->paginate($posts, $page, 1);
        return $this->render('SiteFrontEndBundle::users.html.twig', array('posts'=> $posts));
    }
         
    public function usersAction($slug) {
        $posts=$this->get('tags_manager')
                    ->getPostByTag($slug);
        return $this->render('SiteFrontEndBundle::users.html.twig', array('posts' => $posts));
    }
    
      
    public function newsAction()
    {
      $em=$this->get('doctrine.orm.entity_manager');
      $category=$em->getRepository('SiteBackEndBundle:Category')
      ->findAll();
     // $tags=$em->getRepository('SiteBackEndBundle:Tags')
      //->findAll();
      dump($category);
        return $this->render('SiteFrontEndBundle::news.html.twig', array('cats' => $category));
    }
    
    public function newsCreateAction($data) {
        $request=$this->get('request');
        $request->get('data');
        $em->remove($odj);
    }

}
