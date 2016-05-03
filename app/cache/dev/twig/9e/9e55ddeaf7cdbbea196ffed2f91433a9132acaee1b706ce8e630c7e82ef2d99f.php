<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_c87f87bbcda7890d20b977e870873562c51869a9a861285d5a67284a92309647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3e0bfacd00666b0177690fbc7f6a7ae8855e7c3cb48b456b19bad9aa34bf209 = $this->env->getExtension("native_profiler");
        $__internal_d3e0bfacd00666b0177690fbc7f6a7ae8855e7c3cb48b456b19bad9aa34bf209->enter($__internal_d3e0bfacd00666b0177690fbc7f6a7ae8855e7c3cb48b456b19bad9aa34bf209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e0bfacd00666b0177690fbc7f6a7ae8855e7c3cb48b456b19bad9aa34bf209->leave($__internal_d3e0bfacd00666b0177690fbc7f6a7ae8855e7c3cb48b456b19bad9aa34bf209_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
