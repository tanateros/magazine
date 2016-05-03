<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig */
class __TwigTemplate_7fac3a7962f57e6acfc00e4c00753042be3abbeafa87d6361cc3a161568f0383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig", 12);
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
        $__internal_7d3208b01e7a2f01a09d7cd5841438996b855c669e458437ad8a700fe50528ea = $this->env->getExtension("native_profiler");
        $__internal_7d3208b01e7a2f01a09d7cd5841438996b855c669e458437ad8a700fe50528ea->enter($__internal_7d3208b01e7a2f01a09d7cd5841438996b855c669e458437ad8a700fe50528ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3208b01e7a2f01a09d7cd5841438996b855c669e458437ad8a700fe50528ea->leave($__internal_7d3208b01e7a2f01a09d7cd5841438996b855c669e458437ad8a700fe50528ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_06edb728f229df67770514527ce5cbafb075a91128014f3406522bcde0ca74eb = $this->env->getExtension("native_profiler");
        $__internal_06edb728f229df67770514527ce5cbafb075a91128014f3406522bcde0ca74eb->enter($__internal_06edb728f229df67770514527ce5cbafb075a91128014f3406522bcde0ca74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
        
        $__internal_06edb728f229df67770514527ce5cbafb075a91128014f3406522bcde0ca74eb->leave($__internal_06edb728f229df67770514527ce5cbafb075a91128014f3406522bcde0ca74eb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  54 => 19,  46 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value %}*/
/*         {% if field_description.hasAssociationAdmin and field_description.associationadmin.hasRoute('edit') and field_description.associationadmin.isGranted('EDIT') %}*/
/*             <a href="{{ field_description.associationadmin.generateObjectUrl(field_description.options.route.name, value, field_description.options.route.parameters) }}">{{ value|render_relation_element(field_description) }}</a>*/
/*         {% else %}*/
/*             {{ value|render_relation_element(field_description) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
