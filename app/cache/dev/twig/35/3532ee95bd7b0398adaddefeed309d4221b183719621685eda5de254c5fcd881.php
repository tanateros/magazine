<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_e5d9329683cb5bc9cb67800bf040e9c94e6a609c81fbced0f2ed404de1bd88a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cbf83b68acd9740784e5986da7102ab8661e915b85cc619d9e895d684f3ebf0 = $this->env->getExtension("native_profiler");
        $__internal_3cbf83b68acd9740784e5986da7102ab8661e915b85cc619d9e895d684f3ebf0->enter($__internal_3cbf83b68acd9740784e5986da7102ab8661e915b85cc619d9e895d684f3ebf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cbf83b68acd9740784e5986da7102ab8661e915b85cc619d9e895d684f3ebf0->leave($__internal_3cbf83b68acd9740784e5986da7102ab8661e915b85cc619d9e895d684f3ebf0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
