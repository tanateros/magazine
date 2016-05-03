<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_980b59c5bf4339ae2c686fb3fefdb649b191278f2e1e1e4c699535e549e91a21 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c067a7bc5d55103704616f1c7d5b7d9b5dc8e80eee80eca84e7da16068df9e87 = $this->env->getExtension("native_profiler");
        $__internal_c067a7bc5d55103704616f1c7d5b7d9b5dc8e80eee80eca84e7da16068df9e87->enter($__internal_c067a7bc5d55103704616f1c7d5b7d9b5dc8e80eee80eca84e7da16068df9e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c067a7bc5d55103704616f1c7d5b7d9b5dc8e80eee80eca84e7da16068df9e87->leave($__internal_c067a7bc5d55103704616f1c7d5b7d9b5dc8e80eee80eca84e7da16068df9e87_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7846adf7761e9c58dacdf1b6c5573c0330f796148b4ece75b49c229ab5ecd78e = $this->env->getExtension("native_profiler");
        $__internal_7846adf7761e9c58dacdf1b6c5573c0330f796148b4ece75b49c229ab5ecd78e->enter($__internal_7846adf7761e9c58dacdf1b6c5573c0330f796148b4ece75b49c229ab5ecd78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_7846adf7761e9c58dacdf1b6c5573c0330f796148b4ece75b49c229ab5ecd78e->leave($__internal_7846adf7761e9c58dacdf1b6c5573c0330f796148b4ece75b49c229ab5ecd78e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
