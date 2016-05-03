<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_32388d832bddb3182ca6ef59ec892482999469a17af752709f9c046b9b5df74f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3179ce9637994a474b2cbcfc154fe4e70c8ae8cf39c95a66a07423a5162e50a8 = $this->env->getExtension("native_profiler");
        $__internal_3179ce9637994a474b2cbcfc154fe4e70c8ae8cf39c95a66a07423a5162e50a8->enter($__internal_3179ce9637994a474b2cbcfc154fe4e70c8ae8cf39c95a66a07423a5162e50a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3179ce9637994a474b2cbcfc154fe4e70c8ae8cf39c95a66a07423a5162e50a8->leave($__internal_3179ce9637994a474b2cbcfc154fe4e70c8ae8cf39c95a66a07423a5162e50a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1a1e6600d1400b779f9cdeba1ae7e46242c79a6724d785a0b4e442a1f2a21a9a = $this->env->getExtension("native_profiler");
        $__internal_1a1e6600d1400b779f9cdeba1ae7e46242c79a6724d785a0b4e442a1f2a21a9a->enter($__internal_1a1e6600d1400b779f9cdeba1ae7e46242c79a6724d785a0b4e442a1f2a21a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_1a1e6600d1400b779f9cdeba1ae7e46242c79a6724d785a0b4e442a1f2a21a9a->leave($__internal_1a1e6600d1400b779f9cdeba1ae7e46242c79a6724d785a0b4e442a1f2a21a9a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
