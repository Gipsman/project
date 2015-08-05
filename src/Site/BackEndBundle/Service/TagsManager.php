<?php
namespace Site\BackEndBundle\Service;

class TagsManager
{
    protected $container;
    
    function __construct($cont)
    {
        $this->container=$cont;
    }
    /*
     *get posts by slug      
     */
    public function getPostByTag($slug) {
        $posts=$this->getEm()
                    ->getRepository('SiteBackEndBundle:Tags')
                    ->findOneBySlug($slug)
                    ->getPost();
        return $posts;
    }    
    
    public function getPostsByCategory($slug)
    {
        $posts= $this->getEm()
                     ->getRepository('SiteBackEndBundle:Category')
                     ->findOneBySlug($slug)
                     ->getPosts();
             dump($posts);
                     
            return $posts;
    }
   /*
    * получит ем
    */
    private function getEm() {
     return $this->container->get('doctrine.orm.entity_manager');

}

}


