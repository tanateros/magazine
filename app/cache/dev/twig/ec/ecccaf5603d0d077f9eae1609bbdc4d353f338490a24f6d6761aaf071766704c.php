<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_652efcf2e0c7e604458e9362ecae2f12b6bbaaa1726fac9ab32a88059f863a2a extends Twig_Template
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
        $__internal_12df81b2e672c10286ea6f3cfbcde6837c25f6554078c2ad939caeb4a158eb55 = $this->env->getExtension("native_profiler");
        $__internal_12df81b2e672c10286ea6f3cfbcde6837c25f6554078c2ad939caeb4a158eb55->enter($__internal_12df81b2e672c10286ea6f3cfbcde6837c25f6554078c2ad939caeb4a158eb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_12df81b2e672c10286ea6f3cfbcde6837c25f6554078c2ad939caeb4a158eb55->leave($__internal_12df81b2e672c10286ea6f3cfbcde6837c25f6554078c2ad939caeb4a158eb55_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_92a2aa2f21bdde539a125745c6d859fc4c48c31b7c353b1d657c6f47dd698506 = $this->env->getExtension("native_profiler");
        $__internal_92a2aa2f21bdde539a125745c6d859fc4c48c31b7c353b1d657c6f47dd698506->enter($__internal_92a2aa2f21bdde539a125745c6d859fc4c48c31b7c353b1d657c6f47dd698506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_92a2aa2f21bdde539a125745c6d859fc4c48c31b7c353b1d657c6f47dd698506->leave($__internal_92a2aa2f21bdde539a125745c6d859fc4c48c31b7c353b1d657c6f47dd698506_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_7c6f102b2aebd9d94bfe1f6c766fc31a49173684c037012951325ad6c775cd6f = $this->env->getExtension("native_profiler");
        $__internal_7c6f102b2aebd9d94bfe1f6c766fc31a49173684c037012951325ad6c775cd6f->enter($__internal_7c6f102b2aebd9d94bfe1f6c766fc31a49173684c037012951325ad6c775cd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_7c6f102b2aebd9d94bfe1f6c766fc31a49173684c037012951325ad6c775cd6f->leave($__internal_7c6f102b2aebd9d94bfe1f6c766fc31a49173684c037012951325ad6c775cd6f_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_cc630cdbf6308e03187ac0092aca17abd70b2192886d1d6c579bca2936afa538 = $this->env->getExtension("native_profiler");
        $__internal_cc630cdbf6308e03187ac0092aca17abd70b2192886d1d6c579bca2936afa538->enter($__internal_cc630cdbf6308e03187ac0092aca17abd70b2192886d1d6c579bca2936afa538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_cc630cdbf6308e03187ac0092aca17abd70b2192886d1d6c579bca2936afa538->leave($__internal_cc630cdbf6308e03187ac0092aca17abd70b2192886d1d6c579bca2936afa538_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
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
