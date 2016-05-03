<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_16a1f4e763822363d7437599142c0350e681ace7382f4fe7b6e156cb6b7dedad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b15165f0878dbcb9cd5880381d8b7bf8d9e76159a91f09836028079b82de7335 = $this->env->getExtension("native_profiler");
        $__internal_b15165f0878dbcb9cd5880381d8b7bf8d9e76159a91f09836028079b82de7335->enter($__internal_b15165f0878dbcb9cd5880381d8b7bf8d9e76159a91f09836028079b82de7335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_b15165f0878dbcb9cd5880381d8b7bf8d9e76159a91f09836028079b82de7335->leave($__internal_b15165f0878dbcb9cd5880381d8b7bf8d9e76159a91f09836028079b82de7335_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_5536b424a8152e8db4426cbf0c198265b703b2d022ad25e10f091506d90e7c2c = $this->env->getExtension("native_profiler");
        $__internal_5536b424a8152e8db4426cbf0c198265b703b2d022ad25e10f091506d90e7c2c->enter($__internal_5536b424a8152e8db4426cbf0c198265b703b2d022ad25e10f091506d90e7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
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
        }
        // line 23
        echo "    ";
        
        $__internal_5536b424a8152e8db4426cbf0c198265b703b2d022ad25e10f091506d90e7c2c->leave($__internal_5536b424a8152e8db4426cbf0c198265b703b2d022ad25e10f091506d90e7c2c_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_45c502677b8fa9ac2ccba5a6d1d7b5a5decc4aa15c0a69fe259959092a403c4a = $this->env->getExtension("native_profiler");
        $__internal_45c502677b8fa9ac2ccba5a6d1d7b5a5decc4aa15c0a69fe259959092a403c4a->enter($__internal_45c502677b8fa9ac2ccba5a6d1d7b5a5decc4aa15c0a69fe259959092a403c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_45c502677b8fa9ac2ccba5a6d1d7b5a5decc4aa15c0a69fe259959092a403c4a->leave($__internal_45c502677b8fa9ac2ccba5a6d1d7b5a5decc4aa15c0a69fe259959092a403c4a_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_cae767231cecabc07688ba41e6ad26d7438e61bc5ed7f7375684205d79787b5d = $this->env->getExtension("native_profiler");
        $__internal_cae767231cecabc07688ba41e6ad26d7438e61bc5ed7f7375684205d79787b5d->enter($__internal_cae767231cecabc07688ba41e6ad26d7438e61bc5ed7f7375684205d79787b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_cae767231cecabc07688ba41e6ad26d7438e61bc5ed7f7375684205d79787b5d->leave($__internal_cae767231cecabc07688ba41e6ad26d7438e61bc5ed7f7375684205d79787b5d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
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
/* <div id="sonata-ba-field-container-{{ field_element.vars.id }}" class="sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}">*/
/* */
/*     {% block label %}*/
/*         {% if inline == 'natural' %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*     <div class="sonata-ba-field-error-messages">*/
/*         {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
