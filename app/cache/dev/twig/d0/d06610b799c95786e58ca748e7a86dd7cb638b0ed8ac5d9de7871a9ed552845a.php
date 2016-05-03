<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_ed6992635790244f3fdfe6a28491e576c59a6ab6b920fedbe884bd201125fcd2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43b9a76f6301bf50af28dbde316f96b0f97085d532c640d38cc67a0f3e64ed23 = $this->env->getExtension("native_profiler");
        $__internal_43b9a76f6301bf50af28dbde316f96b0f97085d532c640d38cc67a0f3e64ed23->enter($__internal_43b9a76f6301bf50af28dbde316f96b0f97085d532c640d38cc67a0f3e64ed23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b9a76f6301bf50af28dbde316f96b0f97085d532c640d38cc67a0f3e64ed23->leave($__internal_43b9a76f6301bf50af28dbde316f96b0f97085d532c640d38cc67a0f3e64ed23_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0203eca33e9ab2ba64f993ed13003b9c794064c052528889d59c62a4562e7aa1 = $this->env->getExtension("native_profiler");
        $__internal_0203eca33e9ab2ba64f993ed13003b9c794064c052528889d59c62a4562e7aa1->enter($__internal_0203eca33e9ab2ba64f993ed13003b9c794064c052528889d59c62a4562e7aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array())), "html", null, true);
            echo "
    ";
        }
        
        $__internal_0203eca33e9ab2ba64f993ed13003b9c794064c052528889d59c62a4562e7aa1->leave($__internal_0203eca33e9ab2ba64f993ed13003b9c794064c052528889d59c62a4562e7aa1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% if field_description.options.catalogue is not defined %}*/
/*         {{value|trans}}*/
/*     {% else %}*/
/*         {{value|trans({}, field_description.options.catalogue)}}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
