<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_0720a83232bf87ed869d02b1447691ec48817f3c3efcd95bd6a83721829527cb extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_509877b49f08eb557b907f0013038bee1fdd5c69d48351c34340a4af9832aea7 = $this->env->getExtension("native_profiler");
        $__internal_509877b49f08eb557b907f0013038bee1fdd5c69d48351c34340a4af9832aea7->enter($__internal_509877b49f08eb557b907f0013038bee1fdd5c69d48351c34340a4af9832aea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509877b49f08eb557b907f0013038bee1fdd5c69d48351c34340a4af9832aea7->leave($__internal_509877b49f08eb557b907f0013038bee1fdd5c69d48351c34340a4af9832aea7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3234e6cf946829eb86558ae47cc25c45b90a919a7d360cf128a6ce995dc7430 = $this->env->getExtension("native_profiler");
        $__internal_a3234e6cf946829eb86558ae47cc25c45b90a919a7d360cf128a6ce995dc7430->enter($__internal_a3234e6cf946829eb86558ae47cc25c45b90a919a7d360cf128a6ce995dc7430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a3234e6cf946829eb86558ae47cc25c45b90a919a7d360cf128a6ce995dc7430->leave($__internal_a3234e6cf946829eb86558ae47cc25c45b90a919a7d360cf128a6ce995dc7430_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
