<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_21cb0870bc1bce2dc548f90d2d9e64d64241f584274dd3bac7ebd97f9c10c34c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f8d8a8a041a63c1bec0166346734614d6818e1857cad3ef6e6e155b94a37067 = $this->env->getExtension("native_profiler");
        $__internal_4f8d8a8a041a63c1bec0166346734614d6818e1857cad3ef6e6e155b94a37067->enter($__internal_4f8d8a8a041a63c1bec0166346734614d6818e1857cad3ef6e6e155b94a37067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8d8a8a041a63c1bec0166346734614d6818e1857cad3ef6e6e155b94a37067->leave($__internal_4f8d8a8a041a63c1bec0166346734614d6818e1857cad3ef6e6e155b94a37067_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a5fe46b247e242a3dc21a83910f61eb6db9d4571b3807e3bfb8b9fc2d6cb2a34 = $this->env->getExtension("native_profiler");
        $__internal_a5fe46b247e242a3dc21a83910f61eb6db9d4571b3807e3bfb8b9fc2d6cb2a34->enter($__internal_a5fe46b247e242a3dc21a83910f61eb6db9d4571b3807e3bfb8b9fc2d6cb2a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a5fe46b247e242a3dc21a83910f61eb6db9d4571b3807e3bfb8b9fc2d6cb2a34->leave($__internal_a5fe46b247e242a3dc21a83910f61eb6db9d4571b3807e3bfb8b9fc2d6cb2a34_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
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
