<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_d08a47471ca988312ffe3036599d9725729a440ddb260c5c895e61a5f79321e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51b67a29819f1208417e8ba05d080634358cb169a40ab24ab94c7b31cd31245f = $this->env->getExtension("native_profiler");
        $__internal_51b67a29819f1208417e8ba05d080634358cb169a40ab24ab94c7b31cd31245f->enter($__internal_51b67a29819f1208417e8ba05d080634358cb169a40ab24ab94c7b31cd31245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b67a29819f1208417e8ba05d080634358cb169a40ab24ab94c7b31cd31245f->leave($__internal_51b67a29819f1208417e8ba05d080634358cb169a40ab24ab94c7b31cd31245f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f9dfd9c342fd8db1fdb99b01fae74030efeb3d7a23eb342c4d79870027411df = $this->env->getExtension("native_profiler");
        $__internal_2f9dfd9c342fd8db1fdb99b01fae74030efeb3d7a23eb342c4d79870027411df->enter($__internal_2f9dfd9c342fd8db1fdb99b01fae74030efeb3d7a23eb342c4d79870027411df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_2f9dfd9c342fd8db1fdb99b01fae74030efeb3d7a23eb342c4d79870027411df->leave($__internal_2f9dfd9c342fd8db1fdb99b01fae74030efeb3d7a23eb342c4d79870027411df_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
