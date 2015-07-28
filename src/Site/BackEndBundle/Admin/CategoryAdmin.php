<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Site\BackEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name',NULL, array('label'=>'имя'))            
            ->add('created',NULL, array('label'=>'дата создания'))
            ->add('slug',NULL, array('label'=>'ссылка'))                            
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name',NULL, array('label'=>'имя'))            
            ->add('created',NULL, array('label'=>'дата создания'))
            ->add('slug',NULL, array('label'=>'ссылка')) 
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('id')
        ->add('name',NULL, array('label'=>'имя'))            
        ->add('created',NULL, array('label'=>'дата создания'))
        ->add('slug',NULL, array('label'=>'ссылка')) 
        ;
    }
}
