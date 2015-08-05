<?php
namespace Site\BackEndBundle\Service;

use Site\BackEndBundle\Entity\Post;

class PostManager
{
    public function createPost($date,$title, $content, $preview, $slug) {
    $post= new Post;
    $post->setTitle($title);    
    $post->setContent($content);
    $post->setPreview($preview);
    $post->setSlug($slug);
    
        
    $em->persist($post);  
    $em->flush();
    }
    
    public function catAction($date) {
                
    $posts=$this->getEm();
            
    $em=$this->get('doctrine.orm.entity_manager');
    $category=$em->getRepository('SiteBackEndBundle:Category')
                 ->find($data['category']);
    post -> setCategory($cat);
    }
    
}

