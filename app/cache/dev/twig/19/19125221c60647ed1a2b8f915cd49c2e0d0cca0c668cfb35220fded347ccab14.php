<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_42e8fa0a72ff1edee4bf2020d827ee33c7943ea535ce7e94ea83a49ed8a970f6 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995775cdc6de68ed03b9f881de2b3d4e6a831672ccfccf0342a95ddca5636cee = $this->env->getExtension("native_profiler");
        $__internal_995775cdc6de68ed03b9f881de2b3d4e6a831672ccfccf0342a95ddca5636cee->enter($__internal_995775cdc6de68ed03b9f881de2b3d4e6a831672ccfccf0342a95ddca5636cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995775cdc6de68ed03b9f881de2b3d4e6a831672ccfccf0342a95ddca5636cee->leave($__internal_995775cdc6de68ed03b9f881de2b3d4e6a831672ccfccf0342a95ddca5636cee_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_71c7f2096a9d587b881c19231f2cd4d98aea77b53df71e36dd2e6748db96f107 = $this->env->getExtension("native_profiler");
        $__internal_71c7f2096a9d587b881c19231f2cd4d98aea77b53df71e36dd2e6748db96f107->enter($__internal_71c7f2096a9d587b881c19231f2cd4d98aea77b53df71e36dd2e6748db96f107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_71c7f2096a9d587b881c19231f2cd4d98aea77b53df71e36dd2e6748db96f107->leave($__internal_71c7f2096a9d587b881c19231f2cd4d98aea77b53df71e36dd2e6748db96f107_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
