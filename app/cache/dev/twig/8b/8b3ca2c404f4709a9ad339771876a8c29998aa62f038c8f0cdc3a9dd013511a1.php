<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_e3accfe42217361174193dd96f6a4fcd5aee41fd14819f77c9551341361deb15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_836f3cf98a18cf31d1d5a7bef7ae174a10f0252ebc606635f81d367ab803ac28 = $this->env->getExtension("native_profiler");
        $__internal_836f3cf98a18cf31d1d5a7bef7ae174a10f0252ebc606635f81d367ab803ac28->enter($__internal_836f3cf98a18cf31d1d5a7bef7ae174a10f0252ebc606635f81d367ab803ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_836f3cf98a18cf31d1d5a7bef7ae174a10f0252ebc606635f81d367ab803ac28->leave($__internal_836f3cf98a18cf31d1d5a7bef7ae174a10f0252ebc606635f81d367ab803ac28_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_aef242d32e629aba6c6f16e3ddfc90e7b6e7b98508ec3eb7285dfe32ca8f8a0c = $this->env->getExtension("native_profiler");
        $__internal_aef242d32e629aba6c6f16e3ddfc90e7b6e7b98508ec3eb7285dfe32ca8f8a0c->enter($__internal_aef242d32e629aba6c6f16e3ddfc90e7b6e7b98508ec3eb7285dfe32ca8f8a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_aef242d32e629aba6c6f16e3ddfc90e7b6e7b98508ec3eb7285dfe32ca8f8a0c->leave($__internal_aef242d32e629aba6c6f16e3ddfc90e7b6e7b98508ec3eb7285dfe32ca8f8a0c_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd57dea8ed488d9560917bd4333c8266903cdf1a6e31d83e1e1be4677dc85696 = $this->env->getExtension("native_profiler");
        $__internal_cd57dea8ed488d9560917bd4333c8266903cdf1a6e31d83e1e1be4677dc85696->enter($__internal_cd57dea8ed488d9560917bd4333c8266903cdf1a6e31d83e1e1be4677dc85696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_cd57dea8ed488d9560917bd4333c8266903cdf1a6e31d83e1e1be4677dc85696->leave($__internal_cd57dea8ed488d9560917bd4333c8266903cdf1a6e31d83e1e1be4677dc85696_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
