<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_aadbf74bfd440f20d3f7b065562033ed78070f3e283309807805c9908ea92cbb extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ca9730f4e9e77f646348a6491d8f66bb5ef211b7c855589ebe241e019f5101 = $this->env->getExtension("native_profiler");
        $__internal_81ca9730f4e9e77f646348a6491d8f66bb5ef211b7c855589ebe241e019f5101->enter($__internal_81ca9730f4e9e77f646348a6491d8f66bb5ef211b7c855589ebe241e019f5101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ca9730f4e9e77f646348a6491d8f66bb5ef211b7c855589ebe241e019f5101->leave($__internal_81ca9730f4e9e77f646348a6491d8f66bb5ef211b7c855589ebe241e019f5101_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2d0bf52cb496b10541c703457f52d3a25fa7f2be05be88574de06db3f61b216 = $this->env->getExtension("native_profiler");
        $__internal_e2d0bf52cb496b10541c703457f52d3a25fa7f2be05be88574de06db3f61b216->enter($__internal_e2d0bf52cb496b10541c703457f52d3a25fa7f2be05be88574de06db3f61b216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e2d0bf52cb496b10541c703457f52d3a25fa7f2be05be88574de06db3f61b216->leave($__internal_e2d0bf52cb496b10541c703457f52d3a25fa7f2be05be88574de06db3f61b216_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
