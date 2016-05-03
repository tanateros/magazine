<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_58e1700b566c10e900ca0908f717feed263c376c5a6ac66692f5d38df74dfeff extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb1243d26adeafb8784c2c1be82ebc096e4a343a3c1bae0991f07ae57cc4fbb3 = $this->env->getExtension("native_profiler");
        $__internal_fb1243d26adeafb8784c2c1be82ebc096e4a343a3c1bae0991f07ae57cc4fbb3->enter($__internal_fb1243d26adeafb8784c2c1be82ebc096e4a343a3c1bae0991f07ae57cc4fbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1243d26adeafb8784c2c1be82ebc096e4a343a3c1bae0991f07ae57cc4fbb3->leave($__internal_fb1243d26adeafb8784c2c1be82ebc096e4a343a3c1bae0991f07ae57cc4fbb3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a86d1f2e75b0aba6d209b722a03c82a84e5109436819cbb8e7bf1f9528d01b06 = $this->env->getExtension("native_profiler");
        $__internal_a86d1f2e75b0aba6d209b722a03c82a84e5109436819cbb8e7bf1f9528d01b06->enter($__internal_a86d1f2e75b0aba6d209b722a03c82a84e5109436819cbb8e7bf1f9528d01b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a86d1f2e75b0aba6d209b722a03c82a84e5109436819cbb8e7bf1f9528d01b06->leave($__internal_a86d1f2e75b0aba6d209b722a03c82a84e5109436819cbb8e7bf1f9528d01b06_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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
