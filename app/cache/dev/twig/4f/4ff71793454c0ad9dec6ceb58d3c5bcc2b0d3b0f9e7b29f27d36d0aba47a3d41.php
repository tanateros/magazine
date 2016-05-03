<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_09bfb897bd5f5899e9078be81a8d7353cdefa389f91c3afbf9c39248374c0aaa extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb23e3013b292eb55bdd89670ebb28c203e12f47272e3350e3a58f3f2b0e59c3 = $this->env->getExtension("native_profiler");
        $__internal_eb23e3013b292eb55bdd89670ebb28c203e12f47272e3350e3a58f3f2b0e59c3->enter($__internal_eb23e3013b292eb55bdd89670ebb28c203e12f47272e3350e3a58f3f2b0e59c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb23e3013b292eb55bdd89670ebb28c203e12f47272e3350e3a58f3f2b0e59c3->leave($__internal_eb23e3013b292eb55bdd89670ebb28c203e12f47272e3350e3a58f3f2b0e59c3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd9c55b6e37b5d0d4366c5f1b0c72e57db7e7dea55c0da730fcdaaa524f53ac3 = $this->env->getExtension("native_profiler");
        $__internal_cd9c55b6e37b5d0d4366c5f1b0c72e57db7e7dea55c0da730fcdaaa524f53ac3->enter($__internal_cd9c55b6e37b5d0d4366c5f1b0c72e57db7e7dea55c0da730fcdaaa524f53ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_cd9c55b6e37b5d0d4366c5f1b0c72e57db7e7dea55c0da730fcdaaa524f53ac3->leave($__internal_cd9c55b6e37b5d0d4366c5f1b0c72e57db7e7dea55c0da730fcdaaa524f53ac3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
