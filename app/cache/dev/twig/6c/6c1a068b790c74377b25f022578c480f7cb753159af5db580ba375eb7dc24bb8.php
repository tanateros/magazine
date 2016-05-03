<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_2c033671e35ce24c57989b7de647c26ad4349005fb1bc1db1a8e47d313973ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29b5d28f55d763f9de0f26f47cff2b1740722538a366fdae3845d61f5a41092e = $this->env->getExtension("native_profiler");
        $__internal_29b5d28f55d763f9de0f26f47cff2b1740722538a366fdae3845d61f5a41092e->enter($__internal_29b5d28f55d763f9de0f26f47cff2b1740722538a366fdae3845d61f5a41092e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_29b5d28f55d763f9de0f26f47cff2b1740722538a366fdae3845d61f5a41092e->leave($__internal_29b5d28f55d763f9de0f26f47cff2b1740722538a366fdae3845d61f5a41092e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f19a8fafcc2b299043f10f289c52d46ad72a5a860c4c4d51bbf55a4704e7bf81 = $this->env->getExtension("native_profiler");
        $__internal_f19a8fafcc2b299043f10f289c52d46ad72a5a860c4c4d51bbf55a4704e7bf81->enter($__internal_f19a8fafcc2b299043f10f289c52d46ad72a5a860c4c4d51bbf55a4704e7bf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f19a8fafcc2b299043f10f289c52d46ad72a5a860c4c4d51bbf55a4704e7bf81->leave($__internal_f19a8fafcc2b299043f10f289c52d46ad72a5a860c4c4d51bbf55a4704e7bf81_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_e7eb2770956b069ca9de9780ff053947113a95df2150257f104fee046a9f9731 = $this->env->getExtension("native_profiler");
        $__internal_e7eb2770956b069ca9de9780ff053947113a95df2150257f104fee046a9f9731->enter($__internal_e7eb2770956b069ca9de9780ff053947113a95df2150257f104fee046a9f9731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_e7eb2770956b069ca9de9780ff053947113a95df2150257f104fee046a9f9731->leave($__internal_e7eb2770956b069ca9de9780ff053947113a95df2150257f104fee046a9f9731_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_b0bbf714a36d81f028fb7a15247f8142965bc249e311e4ff95d35cf5d4223b9c = $this->env->getExtension("native_profiler");
        $__internal_b0bbf714a36d81f028fb7a15247f8142965bc249e311e4ff95d35cf5d4223b9c->enter($__internal_b0bbf714a36d81f028fb7a15247f8142965bc249e311e4ff95d35cf5d4223b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_b0bbf714a36d81f028fb7a15247f8142965bc249e311e4ff95d35cf5d4223b9c->leave($__internal_b0bbf714a36d81f028fb7a15247f8142965bc249e311e4ff95d35cf5d4223b9c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
