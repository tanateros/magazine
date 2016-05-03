<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b39e43c285fbf034b8be260b2fdac84cd01701e5d6865e1130362c9fed4ff327 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ef74821380dc5de3e08ebbdc41a334614af875c5e59bfb2e4d8e52a684201066 = $this->env->getExtension("native_profiler");
        $__internal_ef74821380dc5de3e08ebbdc41a334614af875c5e59bfb2e4d8e52a684201066->enter($__internal_ef74821380dc5de3e08ebbdc41a334614af875c5e59bfb2e4d8e52a684201066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef74821380dc5de3e08ebbdc41a334614af875c5e59bfb2e4d8e52a684201066->leave($__internal_ef74821380dc5de3e08ebbdc41a334614af875c5e59bfb2e4d8e52a684201066_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3a3a047ac5e8bbcaf90712f65d1d9542cff168d2520c0279587dff2a3e0116f = $this->env->getExtension("native_profiler");
        $__internal_f3a3a047ac5e8bbcaf90712f65d1d9542cff168d2520c0279587dff2a3e0116f->enter($__internal_f3a3a047ac5e8bbcaf90712f65d1d9542cff168d2520c0279587dff2a3e0116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f3a3a047ac5e8bbcaf90712f65d1d9542cff168d2520c0279587dff2a3e0116f->leave($__internal_f3a3a047ac5e8bbcaf90712f65d1d9542cff168d2520c0279587dff2a3e0116f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
