<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_a55d6aa91bbbadf92045425b32c11b41e9f905b0b1251e3a57a7464b1064f2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_c1e8100d7fc1894c452a0271bf85522b67731b070dab958f5264345b11dcaaf6 = $this->env->getExtension("native_profiler");
        $__internal_c1e8100d7fc1894c452a0271bf85522b67731b070dab958f5264345b11dcaaf6->enter($__internal_c1e8100d7fc1894c452a0271bf85522b67731b070dab958f5264345b11dcaaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e8100d7fc1894c452a0271bf85522b67731b070dab958f5264345b11dcaaf6->leave($__internal_c1e8100d7fc1894c452a0271bf85522b67731b070dab958f5264345b11dcaaf6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5356b6ce60181561146d332d5b74ffaa09e407f7c403a920b75ea0d074a4d31 = $this->env->getExtension("native_profiler");
        $__internal_b5356b6ce60181561146d332d5b74ffaa09e407f7c403a920b75ea0d074a4d31->enter($__internal_b5356b6ce60181561146d332d5b74ffaa09e407f7c403a920b75ea0d074a4d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b5356b6ce60181561146d332d5b74ffaa09e407f7c403a920b75ea0d074a4d31->leave($__internal_b5356b6ce60181561146d332d5b74ffaa09e407f7c403a920b75ea0d074a4d31_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
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
