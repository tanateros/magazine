<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_04776f4092a782c916a9d6af732bfa8874204f65e2dec49b0b43799f15929b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_cb237125fa73e364d1956209c8222323549dc75cd39249077fc360789fbc85e3 = $this->env->getExtension("native_profiler");
        $__internal_cb237125fa73e364d1956209c8222323549dc75cd39249077fc360789fbc85e3->enter($__internal_cb237125fa73e364d1956209c8222323549dc75cd39249077fc360789fbc85e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb237125fa73e364d1956209c8222323549dc75cd39249077fc360789fbc85e3->leave($__internal_cb237125fa73e364d1956209c8222323549dc75cd39249077fc360789fbc85e3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_80879966a8d98f14917a21b78c98b88d4099153d15dfdcc5593e091b8b7ef7c7 = $this->env->getExtension("native_profiler");
        $__internal_80879966a8d98f14917a21b78c98b88d4099153d15dfdcc5593e091b8b7ef7c7->enter($__internal_80879966a8d98f14917a21b78c98b88d4099153d15dfdcc5593e091b8b7ef7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_80879966a8d98f14917a21b78c98b88d4099153d15dfdcc5593e091b8b7ef7c7->leave($__internal_80879966a8d98f14917a21b78c98b88d4099153d15dfdcc5593e091b8b7ef7c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
