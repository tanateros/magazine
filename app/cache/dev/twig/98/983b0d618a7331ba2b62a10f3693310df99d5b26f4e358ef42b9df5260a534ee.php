<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_60dbc42f60ec24d4bec68e15cd7b04bad228e60f55079df223a3b28ac7c2bb2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_571478d3c9dc174ce84802623870a41c142de53430b954ace0e9368e6fa263a8 = $this->env->getExtension("native_profiler");
        $__internal_571478d3c9dc174ce84802623870a41c142de53430b954ace0e9368e6fa263a8->enter($__internal_571478d3c9dc174ce84802623870a41c142de53430b954ace0e9368e6fa263a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571478d3c9dc174ce84802623870a41c142de53430b954ace0e9368e6fa263a8->leave($__internal_571478d3c9dc174ce84802623870a41c142de53430b954ace0e9368e6fa263a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3acec32080008f900208e28b2e5a0b103eedf237e152949e6b7674790b78d096 = $this->env->getExtension("native_profiler");
        $__internal_3acec32080008f900208e28b2e5a0b103eedf237e152949e6b7674790b78d096->enter($__internal_3acec32080008f900208e28b2e5a0b103eedf237e152949e6b7674790b78d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3acec32080008f900208e28b2e5a0b103eedf237e152949e6b7674790b78d096->leave($__internal_3acec32080008f900208e28b2e5a0b103eedf237e152949e6b7674790b78d096_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
