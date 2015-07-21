<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Site\BackEndBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title',NULL, array('label'=>'титул'))
            ->add('preview',NULL, array('label'=>'предпросмотр'))
            ->add('content',NULL, array('label'=>'контент'))
            ->add('created',NULL, array('label'=>'дата создания'))
            ->add('slug',NULL, array('label'=>'ссылка'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title' ,NULL, array('label '=>'титул'))
            ->add('created',NULL, array('label'=>'дата создания'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('id')
        ->add('title',NULL, array('label'=>'титул'))
        ->add('preview',NULL, array('label'=>'предпросмотр'))
        ->add('content',NULL, array('label'=>'контент'))
        ->add('created',NULL, array('label'=>'дата создания'))
        ->add('slug',NULL, array('label'=>'ссылка'))
        ;
    }
}