<?php

/* @SonataAdmin/CRUD/base_standard_edit_field.html.twig */
class __TwigTemplate_46f001f0de09d64fdd7c93ed30367a436b09e1d57625d8e7c0a2f7b606f629ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92cd9b46529f3df3b54f207830adee8463aae35fb4f5895dd35975f10288cc2d = $this->env->getExtension("native_profiler");
        $__internal_92cd9b46529f3df3b54f207830adee8463aae35fb4f5895dd35975f10288cc2d->enter($__internal_92cd9b46529f3df3b54f207830adee8463aae35fb4f5895dd35975f10288cc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_92cd9b46529f3df3b54f207830adee8463aae35fb4f5895dd35975f10288cc2d->leave($__internal_92cd9b46529f3df3b54f207830adee8463aae35fb4f5895dd35975f10288cc2d_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_ed3d032c84b83d6fc1edde8f6061de5116f8092c7583ab8a0212296dc22f7843 = $this->env->getExtension("native_profiler");
        $__internal_ed3d032c84b83d6fc1edde8f6061de5116f8092c7583ab8a0212296dc22f7843->enter($__internal_ed3d032c84b83d6fc1edde8f6061de5116f8092c7583ab8a0212296dc22f7843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_ed3d032c84b83d6fc1edde8f6061de5116f8092c7583ab8a0212296dc22f7843->leave($__internal_ed3d032c84b83d6fc1edde8f6061de5116f8092c7583ab8a0212296dc22f7843_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_a4fe691dbadb80a895de6efc358796ce669902f3d9b71797b4eb9bc436f098f8 = $this->env->getExtension("native_profiler");
        $__internal_a4fe691dbadb80a895de6efc358796ce669902f3d9b71797b4eb9bc436f098f8->enter($__internal_a4fe691dbadb80a895de6efc358796ce669902f3d9b71797b4eb9bc436f098f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_a4fe691dbadb80a895de6efc358796ce669902f3d9b71797b4eb9bc436f098f8->leave($__internal_a4fe691dbadb80a895de6efc358796ce669902f3d9b71797b4eb9bc436f098f8_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_241c7c76240bc67e45e6519d5e0583e0007ff0cb5f1f4731c41c6fd9396e2ed9 = $this->env->getExtension("native_profiler");
        $__internal_241c7c76240bc67e45e6519d5e0583e0007ff0cb5f1f4731c41c6fd9396e2ed9->enter($__internal_241c7c76240bc67e45e6519d5e0583e0007ff0cb5f1f4731c41c6fd9396e2ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_241c7c76240bc67e45e6519d5e0583e0007ff0cb5f1f4731c41c6fd9396e2ed9->leave($__internal_241c7c76240bc67e45e6519d5e0583e0007ff0cb5f1f4731c41c6fd9396e2ed9_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_51cc2969546d894972cf21f9a8421240a6535db171738849f9ebb20698c3d23e = $this->env->getExtension("native_profiler");
        $__internal_51cc2969546d894972cf21f9a8421240a6535db171738849f9ebb20698c3d23e->enter($__internal_51cc2969546d894972cf21f9a8421240a6535db171738849f9ebb20698c3d23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_51cc2969546d894972cf21f9a8421240a6535db171738849f9ebb20698c3d23e->leave($__internal_51cc2969546d894972cf21f9a8421240a6535db171738849f9ebb20698c3d23e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
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
/* <div class="form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}" id="sonata-ba-field-container-{{ field_element.vars.id }}">*/
/*     {% block label %}*/
/*         {% if field_description.options.name is defined %}*/
/*             {{ form_label(field_element, field_description.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(field_element) }}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     <div class="col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/* */
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*         {% if field_description.help %}*/
/*             <span class="help-block">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>*/
/*         {% endif %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
