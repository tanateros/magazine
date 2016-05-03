<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_aa817979fec4be0f1ef185c6f81c7aba121331ad5f43a2026ff6d877c2d73df8 extends Twig_Template
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
        $__internal_2baaab0a63bef94f12680f2c72384f38feb9e956938c2c85a468282b46fdc7a2 = $this->env->getExtension("native_profiler");
        $__internal_2baaab0a63bef94f12680f2c72384f38feb9e956938c2c85a468282b46fdc7a2->enter($__internal_2baaab0a63bef94f12680f2c72384f38feb9e956938c2c85a468282b46fdc7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_2baaab0a63bef94f12680f2c72384f38feb9e956938c2c85a468282b46fdc7a2->leave($__internal_2baaab0a63bef94f12680f2c72384f38feb9e956938c2c85a468282b46fdc7a2_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_9191c66ea685ed7b0d6cfe632b30a264bcbb2e0c59498fcb6870c220580b114e = $this->env->getExtension("native_profiler");
        $__internal_9191c66ea685ed7b0d6cfe632b30a264bcbb2e0c59498fcb6870c220580b114e->enter($__internal_9191c66ea685ed7b0d6cfe632b30a264bcbb2e0c59498fcb6870c220580b114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_9191c66ea685ed7b0d6cfe632b30a264bcbb2e0c59498fcb6870c220580b114e->leave($__internal_9191c66ea685ed7b0d6cfe632b30a264bcbb2e0c59498fcb6870c220580b114e_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4f5a9c656f2b0b26403083094a29049cb609c6a0bcd4d9a87a28d2549310554 = $this->env->getExtension("native_profiler");
        $__internal_c4f5a9c656f2b0b26403083094a29049cb609c6a0bcd4d9a87a28d2549310554->enter($__internal_c4f5a9c656f2b0b26403083094a29049cb609c6a0bcd4d9a87a28d2549310554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_c4f5a9c656f2b0b26403083094a29049cb609c6a0bcd4d9a87a28d2549310554->leave($__internal_c4f5a9c656f2b0b26403083094a29049cb609c6a0bcd4d9a87a28d2549310554_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_7ce1c7a1e18d2f8325c2eb76b22d8694173976229c7e83cee3e4010119c5c380 = $this->env->getExtension("native_profiler");
        $__internal_7ce1c7a1e18d2f8325c2eb76b22d8694173976229c7e83cee3e4010119c5c380->enter($__internal_7ce1c7a1e18d2f8325c2eb76b22d8694173976229c7e83cee3e4010119c5c380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_7ce1c7a1e18d2f8325c2eb76b22d8694173976229c7e83cee3e4010119c5c380->leave($__internal_7ce1c7a1e18d2f8325c2eb76b22d8694173976229c7e83cee3e4010119c5c380_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
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
