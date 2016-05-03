<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_e385a26a35aa523700ef02aa45d1bc56e2bbd4fe95aab4a430c82e7b95fe3512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343b55dec3ea08fe1194a65a7cae5c33f62011c85569b6f5f669cfa6d55e5e2b = $this->env->getExtension("native_profiler");
        $__internal_343b55dec3ea08fe1194a65a7cae5c33f62011c85569b6f5f669cfa6d55e5e2b->enter($__internal_343b55dec3ea08fe1194a65a7cae5c33f62011c85569b6f5f669cfa6d55e5e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343b55dec3ea08fe1194a65a7cae5c33f62011c85569b6f5f669cfa6d55e5e2b->leave($__internal_343b55dec3ea08fe1194a65a7cae5c33f62011c85569b6f5f669cfa6d55e5e2b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
