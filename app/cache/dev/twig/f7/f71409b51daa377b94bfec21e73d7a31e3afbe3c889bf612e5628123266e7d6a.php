<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a8d1f63c5e34638d48624b147147495f8ba2754f09c718393f925f643c4a8af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8aff8e1a45335a6495ceb797bfa73a809836ee340c8b1d64ff140383d6daf150 = $this->env->getExtension("native_profiler");
        $__internal_8aff8e1a45335a6495ceb797bfa73a809836ee340c8b1d64ff140383d6daf150->enter($__internal_8aff8e1a45335a6495ceb797bfa73a809836ee340c8b1d64ff140383d6daf150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aff8e1a45335a6495ceb797bfa73a809836ee340c8b1d64ff140383d6daf150->leave($__internal_8aff8e1a45335a6495ceb797bfa73a809836ee340c8b1d64ff140383d6daf150_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb82951d04b59b7f1081cedf447117d2fbf261b30f06c4170a25e3e0b2aa4684 = $this->env->getExtension("native_profiler");
        $__internal_bb82951d04b59b7f1081cedf447117d2fbf261b30f06c4170a25e3e0b2aa4684->enter($__internal_bb82951d04b59b7f1081cedf447117d2fbf261b30f06c4170a25e3e0b2aa4684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bb82951d04b59b7f1081cedf447117d2fbf261b30f06c4170a25e3e0b2aa4684->leave($__internal_bb82951d04b59b7f1081cedf447117d2fbf261b30f06c4170a25e3e0b2aa4684_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
