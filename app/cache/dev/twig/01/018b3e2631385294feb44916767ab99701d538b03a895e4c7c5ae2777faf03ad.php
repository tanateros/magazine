<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_0590b8ea9153651fb3f21e17cdeda092347866ebdf2e31f3835c430f1bdef6af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_af7842484abb396686569d4964e0c43726db89679b82f48380e4653196366921 = $this->env->getExtension("native_profiler");
        $__internal_af7842484abb396686569d4964e0c43726db89679b82f48380e4653196366921->enter($__internal_af7842484abb396686569d4964e0c43726db89679b82f48380e4653196366921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af7842484abb396686569d4964e0c43726db89679b82f48380e4653196366921->leave($__internal_af7842484abb396686569d4964e0c43726db89679b82f48380e4653196366921_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d51486f29a8f47bbcb954caeea4bb0f019241aa1ac6758d1309c1b042afbd33b = $this->env->getExtension("native_profiler");
        $__internal_d51486f29a8f47bbcb954caeea4bb0f019241aa1ac6758d1309c1b042afbd33b->enter($__internal_d51486f29a8f47bbcb954caeea4bb0f019241aa1ac6758d1309c1b042afbd33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d51486f29a8f47bbcb954caeea4bb0f019241aa1ac6758d1309c1b042afbd33b->leave($__internal_d51486f29a8f47bbcb954caeea4bb0f019241aa1ac6758d1309c1b042afbd33b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
