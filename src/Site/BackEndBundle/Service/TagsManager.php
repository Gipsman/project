<?php
namespace Site\BackEndBundle\Service;

class TagsManager
{
    protected $container;
    
    function __construct($container)
    {
        $this->container=$container;
    }
    /*
     *get posts by slug      
     */
    public function getPostByTag($slug) {
        $posts=$this->getEm()
                    ->getRepository('SiteBackEndBundle:Tags')
                    ->findOneBySlug($slug)
                    ->getPosts();
        return $posts;
    }    
   /*
    * получит ем
    */
    private function getEm() {
     return $this->container->get('doctrine.orm.entity_manager');

}
}


