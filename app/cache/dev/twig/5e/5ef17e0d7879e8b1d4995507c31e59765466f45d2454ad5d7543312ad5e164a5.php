<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_9a8111e3a34ed11682cdc16d7a40c4a630531856964c0a23a51fb7cdbde4afab extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d4a473586d4e7bc087f7b2c46752c1b85f8a0f67996c5ba4cd599db066a5341 = $this->env->getExtension("native_profiler");
        $__internal_5d4a473586d4e7bc087f7b2c46752c1b85f8a0f67996c5ba4cd599db066a5341->enter($__internal_5d4a473586d4e7bc087f7b2c46752c1b85f8a0f67996c5ba4cd599db066a5341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4a473586d4e7bc087f7b2c46752c1b85f8a0f67996c5ba4cd599db066a5341->leave($__internal_5d4a473586d4e7bc087f7b2c46752c1b85f8a0f67996c5ba4cd599db066a5341_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_80dfb6cf317b04e661ce9c84abdf6da360655a7c9d7a0d416c56926b37bfcd8e = $this->env->getExtension("native_profiler");
        $__internal_80dfb6cf317b04e661ce9c84abdf6da360655a7c9d7a0d416c56926b37bfcd8e->enter($__internal_80dfb6cf317b04e661ce9c84abdf6da360655a7c9d7a0d416c56926b37bfcd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_80dfb6cf317b04e661ce9c84abdf6da360655a7c9d7a0d416c56926b37bfcd8e->leave($__internal_80dfb6cf317b04e661ce9c84abdf6da360655a7c9d7a0d416c56926b37bfcd8e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
