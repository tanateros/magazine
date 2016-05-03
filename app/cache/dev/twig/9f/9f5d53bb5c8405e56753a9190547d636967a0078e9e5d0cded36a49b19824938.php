<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_ba479ad81655559d70b02437b01cd07eefd0fdc6331bce0cc61329f81370df59 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3175778da1753cefa6af793f400892b9bc5ef00ebb9630fbf025523ae362672 = $this->env->getExtension("native_profiler");
        $__internal_d3175778da1753cefa6af793f400892b9bc5ef00ebb9630fbf025523ae362672->enter($__internal_d3175778da1753cefa6af793f400892b9bc5ef00ebb9630fbf025523ae362672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3175778da1753cefa6af793f400892b9bc5ef00ebb9630fbf025523ae362672->leave($__internal_d3175778da1753cefa6af793f400892b9bc5ef00ebb9630fbf025523ae362672_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e4afff0aea4c7c4a36ee1a27985fac7b531e62425b2a6b2b96176798a118f555 = $this->env->getExtension("native_profiler");
        $__internal_e4afff0aea4c7c4a36ee1a27985fac7b531e62425b2a6b2b96176798a118f555->enter($__internal_e4afff0aea4c7c4a36ee1a27985fac7b531e62425b2a6b2b96176798a118f555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e4afff0aea4c7c4a36ee1a27985fac7b531e62425b2a6b2b96176798a118f555->leave($__internal_e4afff0aea4c7c4a36ee1a27985fac7b531e62425b2a6b2b96176798a118f555_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
