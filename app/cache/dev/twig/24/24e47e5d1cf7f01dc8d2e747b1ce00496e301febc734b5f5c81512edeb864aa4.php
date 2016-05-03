<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_7b72c2c7d3ea1ed34c01b3613c5525b91bfcf54a60b0afcd73b3559d80e10f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2ec508883d31cce456b777019a33d81d17b2dbcf6df38df0e949d15a1f7016ce = $this->env->getExtension("native_profiler");
        $__internal_2ec508883d31cce456b777019a33d81d17b2dbcf6df38df0e949d15a1f7016ce->enter($__internal_2ec508883d31cce456b777019a33d81d17b2dbcf6df38df0e949d15a1f7016ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec508883d31cce456b777019a33d81d17b2dbcf6df38df0e949d15a1f7016ce->leave($__internal_2ec508883d31cce456b777019a33d81d17b2dbcf6df38df0e949d15a1f7016ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0507d067229898678bce55128f8095f004caa4196c27576315558bb2f4a69919 = $this->env->getExtension("native_profiler");
        $__internal_0507d067229898678bce55128f8095f004caa4196c27576315558bb2f4a69919->enter($__internal_0507d067229898678bce55128f8095f004caa4196c27576315558bb2f4a69919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0507d067229898678bce55128f8095f004caa4196c27576315558bb2f4a69919->leave($__internal_0507d067229898678bce55128f8095f004caa4196c27576315558bb2f4a69919_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
