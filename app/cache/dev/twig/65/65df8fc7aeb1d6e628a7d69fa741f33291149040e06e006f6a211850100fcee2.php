<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_2e66e4cd11eb5482814150ead746c4059baede4756bb16738ed3a8b41ecc5ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_a0da6b1c266620f31c934a81eb19b8c4bff1ec33e12be8c0da10ef367ea70c29 = $this->env->getExtension("native_profiler");
        $__internal_a0da6b1c266620f31c934a81eb19b8c4bff1ec33e12be8c0da10ef367ea70c29->enter($__internal_a0da6b1c266620f31c934a81eb19b8c4bff1ec33e12be8c0da10ef367ea70c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0da6b1c266620f31c934a81eb19b8c4bff1ec33e12be8c0da10ef367ea70c29->leave($__internal_a0da6b1c266620f31c934a81eb19b8c4bff1ec33e12be8c0da10ef367ea70c29_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6db3781118d82a909111d85e537c970e7303be793661931b70bd936f40c0e958 = $this->env->getExtension("native_profiler");
        $__internal_6db3781118d82a909111d85e537c970e7303be793661931b70bd936f40c0e958->enter($__internal_6db3781118d82a909111d85e537c970e7303be793661931b70bd936f40c0e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <i class=\"icon-ok-circle\"></i>";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        } else {
            // line 20
            echo "        <i class=\"icon-ban-circle\"></i>";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6db3781118d82a909111d85e537c970e7303be793661931b70bd936f40c0e958->leave($__internal_6db3781118d82a909111d85e537c970e7303be793661931b70bd936f40c0e958_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  50 => 20,  47 => 18,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <i class="icon-ok-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}*/
/*     {% else %}*/
/*         <i class="icon-ban-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
