<?php

/* @SonataAdmin/CRUD/base_list_flat_field.html.twig */
class __TwigTemplate_7d8a513af602a40e5ad690ad9c546d039be968cb43f3d80dbb8382514ed40530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d7d86f5fcf8afe34e8db24ff2bfac1cca098c251d77159495f00ed29e577afb = $this->env->getExtension("native_profiler");
        $__internal_6d7d86f5fcf8afe34e8db24ff2bfac1cca098c251d77159495f00ed29e577afb->enter($__internal_6d7d86f5fcf8afe34e8db24ff2bfac1cca098c251d77159495f00ed29e577afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_field.html.twig"));

        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute(        // line 14
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(        // line 16
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
        
        $__internal_6d7d86f5fcf8afe34e8db24ff2bfac1cca098c251d77159495f00ed29e577afb->leave($__internal_6d7d86f5fcf8afe34e8db24ff2bfac1cca098c251d77159495f00ed29e577afb_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_d9b2aa4177b854446e3cc02a8941ff25ad1c03d817e78c090ae9616c6e55cd0c = $this->env->getExtension("native_profiler");
        $__internal_d9b2aa4177b854446e3cc02a8941ff25ad1c03d817e78c090ae9616c6e55cd0c->enter($__internal_d9b2aa4177b854446e3cc02a8941ff25ad1c03d817e78c090ae9616c6e55cd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        
        $__internal_d9b2aa4177b854446e3cc02a8941ff25ad1c03d817e78c090ae9616c6e55cd0c->leave($__internal_d9b2aa4177b854446e3cc02a8941ff25ad1c03d817e78c090ae9616c6e55cd0c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  54 => 25,  48 => 23,  44 => 21,  42 => 20,  38 => 19,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 13,  26 => 12,  23 => 11,);
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
/* <span class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}" objectId="{{ admin.id(object) }}">*/
/*     {% if*/
/*             field_description.options.identifier is defined*/
/*         and field_description.options.route is defined*/
/*         and admin.isGranted(field_description.options.route.name == 'show' ? 'VIEW' : field_description.options.route.name|upper, object)*/
/*         and admin.hasRoute(field_description.options.route.name)*/
/*     %}*/
/*         <a href="{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}">*/
/*             {%- block field %}{{ value }}{% endblock -%}*/
/*         </a>*/
/*     {% else %}*/
/*         {{ block('field') }}*/
/*     {% endif %}*/
/* </span>*/
/* */
