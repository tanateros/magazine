<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_cc03b10c22ca7c3a09c56d6a57e6063e5bd3f03f7c89eec58d23a198101657fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_6b73ab59bc236f64750b5a2fe5536466305acb31f021538b834320c3f985d7f5 = $this->env->getExtension("native_profiler");
        $__internal_6b73ab59bc236f64750b5a2fe5536466305acb31f021538b834320c3f985d7f5->enter($__internal_6b73ab59bc236f64750b5a2fe5536466305acb31f021538b834320c3f985d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b73ab59bc236f64750b5a2fe5536466305acb31f021538b834320c3f985d7f5->leave($__internal_6b73ab59bc236f64750b5a2fe5536466305acb31f021538b834320c3f985d7f5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_624f2184973e5f372862e6a79ba2ba881002de1c4922dc85a60abb99bbf22772 = $this->env->getExtension("native_profiler");
        $__internal_624f2184973e5f372862e6a79ba2ba881002de1c4922dc85a60abb99bbf22772->enter($__internal_624f2184973e5f372862e6a79ba2ba881002de1c4922dc85a60abb99bbf22772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_624f2184973e5f372862e6a79ba2ba881002de1c4922dc85a60abb99bbf22772->leave($__internal_624f2184973e5f372862e6a79ba2ba881002de1c4922dc85a60abb99bbf22772_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
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
