<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_48d36f36a9d3761a47db1c0c4e52ca2a97da192ae55483a751949aa3596f52ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f947ebf88a071e2d6e848b045aad8f742bbd81a72a49884df7a7bd8fb410b31 = $this->env->getExtension("native_profiler");
        $__internal_3f947ebf88a071e2d6e848b045aad8f742bbd81a72a49884df7a7bd8fb410b31->enter($__internal_3f947ebf88a071e2d6e848b045aad8f742bbd81a72a49884df7a7bd8fb410b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f947ebf88a071e2d6e848b045aad8f742bbd81a72a49884df7a7bd8fb410b31->leave($__internal_3f947ebf88a071e2d6e848b045aad8f742bbd81a72a49884df7a7bd8fb410b31_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
