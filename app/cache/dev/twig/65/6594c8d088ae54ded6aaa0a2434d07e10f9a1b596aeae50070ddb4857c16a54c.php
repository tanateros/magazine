<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_4b24d3b3668bb79e0b5447ce0c9c7417867847b524ac2b852bea95232e86e29e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9299240ab780df8e7dd47f64d3ce0625387742516350a4a0f8cbb900a97de20 = $this->env->getExtension("native_profiler");
        $__internal_c9299240ab780df8e7dd47f64d3ce0625387742516350a4a0f8cbb900a97de20->enter($__internal_c9299240ab780df8e7dd47f64d3ce0625387742516350a4a0f8cbb900a97de20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9299240ab780df8e7dd47f64d3ce0625387742516350a4a0f8cbb900a97de20->leave($__internal_c9299240ab780df8e7dd47f64d3ce0625387742516350a4a0f8cbb900a97de20_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
