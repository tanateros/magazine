<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_524279b873767dbf121d2b64767af948f9f423e9d0f851b43d37975a3d112832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_656ea19b3d1878de1ec893484dfcb2ebe0c8adf561b9353c9be080ff43a7d2fb = $this->env->getExtension("native_profiler");
        $__internal_656ea19b3d1878de1ec893484dfcb2ebe0c8adf561b9353c9be080ff43a7d2fb->enter($__internal_656ea19b3d1878de1ec893484dfcb2ebe0c8adf561b9353c9be080ff43a7d2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656ea19b3d1878de1ec893484dfcb2ebe0c8adf561b9353c9be080ff43a7d2fb->leave($__internal_656ea19b3d1878de1ec893484dfcb2ebe0c8adf561b9353c9be080ff43a7d2fb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6e2f7858605355d55dcbd170fb5513429e87e76c45a1baac496aac09a15c5cf4 = $this->env->getExtension("native_profiler");
        $__internal_6e2f7858605355d55dcbd170fb5513429e87e76c45a1baac496aac09a15c5cf4->enter($__internal_6e2f7858605355d55dcbd170fb5513429e87e76c45a1baac496aac09a15c5cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_6e2f7858605355d55dcbd170fb5513429e87e76c45a1baac496aac09a15c5cf4->leave($__internal_6e2f7858605355d55dcbd170fb5513429e87e76c45a1baac496aac09a15c5cf4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
