<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_23b75be51bec6f707c65ec7a7a8dd591d03b64b8cdaf613e20d6aba09ebd0b3f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0d7cdad9ac334f9e1935e08561dda33d897866c60536c8967c96c27e24f1d78 = $this->env->getExtension("native_profiler");
        $__internal_e0d7cdad9ac334f9e1935e08561dda33d897866c60536c8967c96c27e24f1d78->enter($__internal_e0d7cdad9ac334f9e1935e08561dda33d897866c60536c8967c96c27e24f1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d7cdad9ac334f9e1935e08561dda33d897866c60536c8967c96c27e24f1d78->leave($__internal_e0d7cdad9ac334f9e1935e08561dda33d897866c60536c8967c96c27e24f1d78_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_71f52b879813c287098bed174bb84101f54c0c5a5164350919fec5b044eaf717 = $this->env->getExtension("native_profiler");
        $__internal_71f52b879813c287098bed174bb84101f54c0c5a5164350919fec5b044eaf717->enter($__internal_71f52b879813c287098bed174bb84101f54c0c5a5164350919fec5b044eaf717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_71f52b879813c287098bed174bb84101f54c0c5a5164350919fec5b044eaf717->leave($__internal_71f52b879813c287098bed174bb84101f54c0c5a5164350919fec5b044eaf717_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
