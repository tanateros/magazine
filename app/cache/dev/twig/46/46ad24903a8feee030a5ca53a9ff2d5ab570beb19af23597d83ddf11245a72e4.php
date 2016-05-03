<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b9e484dc7bf9440c34db3c656830d3361d7554610c7b394e5961b1a6a98886d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42f8ab3f6945f4130ab5d27961a333c16f28207ba36dea4f04c26750fe66cf8c = $this->env->getExtension("native_profiler");
        $__internal_42f8ab3f6945f4130ab5d27961a333c16f28207ba36dea4f04c26750fe66cf8c->enter($__internal_42f8ab3f6945f4130ab5d27961a333c16f28207ba36dea4f04c26750fe66cf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f8ab3f6945f4130ab5d27961a333c16f28207ba36dea4f04c26750fe66cf8c->leave($__internal_42f8ab3f6945f4130ab5d27961a333c16f28207ba36dea4f04c26750fe66cf8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_858ef5415c1ea4733644c5c72cab8f4928ce1f9fe4eb18031cdd5382408db388 = $this->env->getExtension("native_profiler");
        $__internal_858ef5415c1ea4733644c5c72cab8f4928ce1f9fe4eb18031cdd5382408db388->enter($__internal_858ef5415c1ea4733644c5c72cab8f4928ce1f9fe4eb18031cdd5382408db388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_858ef5415c1ea4733644c5c72cab8f4928ce1f9fe4eb18031cdd5382408db388->leave($__internal_858ef5415c1ea4733644c5c72cab8f4928ce1f9fe4eb18031cdd5382408db388_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
