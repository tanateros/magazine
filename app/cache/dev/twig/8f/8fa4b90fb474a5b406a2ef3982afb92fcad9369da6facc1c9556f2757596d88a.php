<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_39604fda8456f2e9e902069ea7d1d3efdd831da8fe94269e6d33bf6cc69e0f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0829dab23be02cf917cdfc84398a7424e286fc8c4163c103fc1e13d08bdd52b = $this->env->getExtension("native_profiler");
        $__internal_d0829dab23be02cf917cdfc84398a7424e286fc8c4163c103fc1e13d08bdd52b->enter($__internal_d0829dab23be02cf917cdfc84398a7424e286fc8c4163c103fc1e13d08bdd52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0829dab23be02cf917cdfc84398a7424e286fc8c4163c103fc1e13d08bdd52b->leave($__internal_d0829dab23be02cf917cdfc84398a7424e286fc8c4163c103fc1e13d08bdd52b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
