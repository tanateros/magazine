<?php

/* @SonataAdmin/CRUD/list_date.html.twig */
class __TwigTemplate_0c45568bbbf46ff790df8a9349bf35db19751e18baa9f04f0a656de5f032a720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dd6feca58c64e04cd37392e0682f687deec704b051995de458fc4cfdec73530 = $this->env->getExtension("native_profiler");
        $__internal_8dd6feca58c64e04cd37392e0682f687deec704b051995de458fc4cfdec73530->enter($__internal_8dd6feca58c64e04cd37392e0682f687deec704b051995de458fc4cfdec73530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd6feca58c64e04cd37392e0682f687deec704b051995de458fc4cfdec73530->leave($__internal_8dd6feca58c64e04cd37392e0682f687deec704b051995de458fc4cfdec73530_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f416d4ea1a880162b74ab4c950ec32fbb1cfb995d80a150227f6688006ae8883 = $this->env->getExtension("native_profiler");
        $__internal_f416d4ea1a880162b74ab4c950ec32fbb1cfb995d80a150227f6688006ae8883->enter($__internal_f416d4ea1a880162b74ab4c950ec32fbb1cfb995d80a150227f6688006ae8883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_f416d4ea1a880162b74ab4c950ec32fbb1cfb995d80a150227f6688006ae8883->leave($__internal_f416d4ea1a880162b74ab4c950ec32fbb1cfb995d80a150227f6688006ae8883_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
