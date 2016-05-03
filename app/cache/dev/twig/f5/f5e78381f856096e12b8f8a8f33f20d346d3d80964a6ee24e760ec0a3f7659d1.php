<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_4d4643e59b426f45843ff64104d0498cfee9c369837b4509da3c0664f0aaef24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c7baebb9cf2a01cfd3702146a12e61a87dd38cd1d1befb5df9499c566aff5de = $this->env->getExtension("native_profiler");
        $__internal_9c7baebb9cf2a01cfd3702146a12e61a87dd38cd1d1befb5df9499c566aff5de->enter($__internal_9c7baebb9cf2a01cfd3702146a12e61a87dd38cd1d1befb5df9499c566aff5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_9c7baebb9cf2a01cfd3702146a12e61a87dd38cd1d1befb5df9499c566aff5de->leave($__internal_9c7baebb9cf2a01cfd3702146a12e61a87dd38cd1d1befb5df9499c566aff5de_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_a9b907dd0cee93460c502caa6c9e31dad30d43d99c6ad3405ff41d40887a0c09 = $this->env->getExtension("native_profiler");
        $__internal_a9b907dd0cee93460c502caa6c9e31dad30d43d99c6ad3405ff41d40887a0c09->enter($__internal_a9b907dd0cee93460c502caa6c9e31dad30d43d99c6ad3405ff41d40887a0c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_a9b907dd0cee93460c502caa6c9e31dad30d43d99c6ad3405ff41d40887a0c09->leave($__internal_a9b907dd0cee93460c502caa6c9e31dad30d43d99c6ad3405ff41d40887a0c09_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_e8d789b8b42414ce28b6722d69e595ee799f80fa1ff1d3ca49b4b5fe2895538e = $this->env->getExtension("native_profiler");
        $__internal_e8d789b8b42414ce28b6722d69e595ee799f80fa1ff1d3ca49b4b5fe2895538e->enter($__internal_e8d789b8b42414ce28b6722d69e595ee799f80fa1ff1d3ca49b4b5fe2895538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_e8d789b8b42414ce28b6722d69e595ee799f80fa1ff1d3ca49b4b5fe2895538e->leave($__internal_e8d789b8b42414ce28b6722d69e595ee799f80fa1ff1d3ca49b4b5fe2895538e_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_71a9fcc745bce61dab7e96cefd7465bf72a1653214d9c7e8106a6c4435c39714 = $this->env->getExtension("native_profiler");
        $__internal_71a9fcc745bce61dab7e96cefd7465bf72a1653214d9c7e8106a6c4435c39714->enter($__internal_71a9fcc745bce61dab7e96cefd7465bf72a1653214d9c7e8106a6c4435c39714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_71a9fcc745bce61dab7e96cefd7465bf72a1653214d9c7e8106a6c4435c39714->leave($__internal_71a9fcc745bce61dab7e96cefd7465bf72a1653214d9c7e8106a6c4435c39714_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
