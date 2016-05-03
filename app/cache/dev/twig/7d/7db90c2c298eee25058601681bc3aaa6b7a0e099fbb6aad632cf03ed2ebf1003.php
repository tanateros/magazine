<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3480abbf487a3e029aef31cca298344dc50d16e3519ac48e9aa1b898ff39b5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d713c966837cdf65b974086128b58b8dfc1571599a6f75b94d031221d3fb54 = $this->env->getExtension("native_profiler");
        $__internal_f8d713c966837cdf65b974086128b58b8dfc1571599a6f75b94d031221d3fb54->enter($__internal_f8d713c966837cdf65b974086128b58b8dfc1571599a6f75b94d031221d3fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d713c966837cdf65b974086128b58b8dfc1571599a6f75b94d031221d3fb54->leave($__internal_f8d713c966837cdf65b974086128b58b8dfc1571599a6f75b94d031221d3fb54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c9ab0ccbb95420f2059d2b0f45ec25ec41c7404ba7348c961cf9279861f9c2d = $this->env->getExtension("native_profiler");
        $__internal_4c9ab0ccbb95420f2059d2b0f45ec25ec41c7404ba7348c961cf9279861f9c2d->enter($__internal_4c9ab0ccbb95420f2059d2b0f45ec25ec41c7404ba7348c961cf9279861f9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4c9ab0ccbb95420f2059d2b0f45ec25ec41c7404ba7348c961cf9279861f9c2d->leave($__internal_4c9ab0ccbb95420f2059d2b0f45ec25ec41c7404ba7348c961cf9279861f9c2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
