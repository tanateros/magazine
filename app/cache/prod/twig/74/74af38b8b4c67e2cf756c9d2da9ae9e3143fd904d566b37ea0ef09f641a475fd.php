<?php

/* @SonataAdmin/CRUD/show_url.html.twig */
class __TwigTemplate_fda42df422ab8500f3d99156cba9e9b7db7ccf1b9bdf4dab6be8d27b0c9b074a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_url.html.twig", 12);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "url", array());
                // line 22
                echo "        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()), array(0 => "edit", 1 => "show")))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array()));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "identifier_parameter_name", array(), "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "identifier_parameter_name", array()) => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "normalizedidentifier", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array()), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()), (isset($context["parameters"]) ? $context["parameters"] : null));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()), (isset($context["parameters"]) ? $context["parameters"] : null));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) ? $context["value"] : null);
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol", array()), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = twig_replace_filter((isset($context["value"]) ? $context["value"] : null), array("http://" => "", "https://" => ""));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["url_address"]) ? $context["url_address"] : null), "html", null, true);
            echo "\">";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "safe", array())) {
                // line 47
                echo (isset($context["value"]) ? $context["value"] : null);
            } else {
                // line 49
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            }
            // line 51
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  118 => 49,  115 => 47,  113 => 46,  110 => 45,  107 => 44,  104 => 43,  101 => 42,  99 => 41,  96 => 40,  93 => 39,  90 => 38,  88 => 37,  85 => 36,  82 => 35,  79 => 34,  76 => 33,  73 => 32,  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  56 => 25,  53 => 24,  51 => 23,  48 => 22,  45 => 21,  43 => 20,  40 => 19,  36 => 17,  33 => 16,  31 => 15,  28 => 14,  11 => 12,);
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
/*     {% if value is empty %}*/
/*         &nbsp;*/
/*     {% else %}*/
/*         {% if field_description.options.url is defined %}*/
/*             {# target url is string #}*/
/*             {% set url_address = field_description.options.url %}*/
/*         {% elseif field_description.options.route is defined and field_description.options.route.name not in ['edit', 'show'] %}*/
/*             {# target url is Symfony route #}*/
/*             {% set parameters = field_description.options.route.parameters|default([]) %}*/
/* */
/*             {# route with paramter related to object ID #}*/
/*             {% if field_description.options.route.identifier_parameter_name is defined %}*/
/*                 {% set parameters = parameters|merge({(field_description.options.route.identifier_parameter_name):(admin.normalizedidentifier(object))}) %}*/
/*             {% endif %}*/
/* */
/*             {% if field_description.options.route.absolute|default(false) %}*/
/*                 {% set url_address = url(field_description.options.route.name, parameters) %}*/
/*             {% else %}*/
/*                 {% set url_address = path(field_description.options.route.name, parameters) %}*/
/*             {% endif %}*/
/*         {% else %}*/
/*             {# value is url #}*/
/*             {% set url_address = value %}*/
/*         {% endif %}*/
/* */
/*         {% if field_description.options.hide_protocol|default(false) %}*/
/*             {% set value = value|replace({'http://': '', 'https://': ''}) %}*/
/*         {% endif %}*/
/* */
/*         <a href="{{ url_address }}">*/
/*             {%- if field_description.options.safe -%}*/
/*                 {{- value|raw -}}*/
/*             {%- else -%}*/
/*                 {{- value -}}*/
/*             {%- endif -%}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
