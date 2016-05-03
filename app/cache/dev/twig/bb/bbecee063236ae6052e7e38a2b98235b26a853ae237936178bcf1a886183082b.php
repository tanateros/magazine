<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_d0c700ecbcdc79fc88159733fa68c1543797cc3b815bcd2c51c7d39d993c3f38 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d805d15ccb4efa6fd09c8ed60e1f6e97e6b10151bfdaaf910f6585022fd06bc9 = $this->env->getExtension("native_profiler");
        $__internal_d805d15ccb4efa6fd09c8ed60e1f6e97e6b10151bfdaaf910f6585022fd06bc9->enter($__internal_d805d15ccb4efa6fd09c8ed60e1f6e97e6b10151bfdaaf910f6585022fd06bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d805d15ccb4efa6fd09c8ed60e1f6e97e6b10151bfdaaf910f6585022fd06bc9->leave($__internal_d805d15ccb4efa6fd09c8ed60e1f6e97e6b10151bfdaaf910f6585022fd06bc9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1f8a8d6fad93e8bf47d39eabc864e4dfb9da8b3d87f4ab5d3cde49832ac27ae8 = $this->env->getExtension("native_profiler");
        $__internal_1f8a8d6fad93e8bf47d39eabc864e4dfb9da8b3d87f4ab5d3cde49832ac27ae8->enter($__internal_1f8a8d6fad93e8bf47d39eabc864e4dfb9da8b3d87f4ab5d3cde49832ac27ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1f8a8d6fad93e8bf47d39eabc864e4dfb9da8b3d87f4ab5d3cde49832ac27ae8->leave($__internal_1f8a8d6fad93e8bf47d39eabc864e4dfb9da8b3d87f4ab5d3cde49832ac27ae8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
