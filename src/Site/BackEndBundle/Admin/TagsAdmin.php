<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Site\BackEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class TagsAdmin extends Admin
{
    
    
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name',NULL, array('label'=>'name'))
            ->add('created',NULL, array('label'=>'дата создания'))
            ->add('slug',NULL, array('label'=>'ссылка'))
        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name' ,NULL, array('label '=>'name'))
            ->add('created',NULL, array('label'=>'дата создания'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('id')
        ->add('name',NULL, array('label'=>'name'))        
        ->add('created',NULL, array('label'=>'дата создания'))
        ->add('slug',NULL, array('label'=>'ссылка'))
        ;
    }
}