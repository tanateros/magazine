<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_1b058138c40d3658315f9ea5044a170967f03667fe43735144a06c1233abcb6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_datetime.html.twig", 12);
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
        $__internal_f33c58cd37050323184b1f469efcbb404e4c69f503ac03a99a933a409ad282a5 = $this->env->getExtension("native_profiler");
        $__internal_f33c58cd37050323184b1f469efcbb404e4c69f503ac03a99a933a409ad282a5->enter($__internal_f33c58cd37050323184b1f469efcbb404e4c69f503ac03a99a933a409ad282a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33c58cd37050323184b1f469efcbb404e4c69f503ac03a99a933a409ad282a5->leave($__internal_f33c58cd37050323184b1f469efcbb404e4c69f503ac03a99a933a409ad282a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bb3770d203eaf685851f0bc69493631c984a83a118816931985b7a950972a98c = $this->env->getExtension("native_profiler");
        $__internal_bb3770d203eaf685851f0bc69493631c984a83a118816931985b7a950972a98c->enter($__internal_bb3770d203eaf685851f0bc69493631c984a83a118816931985b7a950972a98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_bb3770d203eaf685851f0bc69493631c984a83a118816931985b7a950972a98c->leave($__internal_bb3770d203eaf685851f0bc69493631c984a83a118816931985b7a950972a98c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
