<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_d85fc0ab98602f135b67c8c511ad44964dafa2f540579ac0ad592517300b725e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2681f6f4a888e2e519075f718c9d2b615ddfc3d328a1e6b41f11fe1c8993d502 = $this->env->getExtension("native_profiler");
        $__internal_2681f6f4a888e2e519075f718c9d2b615ddfc3d328a1e6b41f11fe1c8993d502->enter($__internal_2681f6f4a888e2e519075f718c9d2b615ddfc3d328a1e6b41f11fe1c8993d502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2681f6f4a888e2e519075f718c9d2b615ddfc3d328a1e6b41f11fe1c8993d502->leave($__internal_2681f6f4a888e2e519075f718c9d2b615ddfc3d328a1e6b41f11fe1c8993d502_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
