<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_53b5a8daee39f3f0233e5bffb714c8ad896919b00f26bbca11e8c7d7bfdc323e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34eab43af89919d3e1f32b0e6d26a62ac32c329ebdb7cc4b76a2081b80a82ea2 = $this->env->getExtension("native_profiler");
        $__internal_34eab43af89919d3e1f32b0e6d26a62ac32c329ebdb7cc4b76a2081b80a82ea2->enter($__internal_34eab43af89919d3e1f32b0e6d26a62ac32c329ebdb7cc4b76a2081b80a82ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34eab43af89919d3e1f32b0e6d26a62ac32c329ebdb7cc4b76a2081b80a82ea2->leave($__internal_34eab43af89919d3e1f32b0e6d26a62ac32c329ebdb7cc4b76a2081b80a82ea2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c707f1a8964fa5e7d8759fe2667438b8395dc5824baf99b333e136d1c8ad6b5d = $this->env->getExtension("native_profiler");
        $__internal_c707f1a8964fa5e7d8759fe2667438b8395dc5824baf99b333e136d1c8ad6b5d->enter($__internal_c707f1a8964fa5e7d8759fe2667438b8395dc5824baf99b333e136d1c8ad6b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c707f1a8964fa5e7d8759fe2667438b8395dc5824baf99b333e136d1c8ad6b5d->leave($__internal_c707f1a8964fa5e7d8759fe2667438b8395dc5824baf99b333e136d1c8ad6b5d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
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
