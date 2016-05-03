<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3b9a3685e221b4e18bbee946acef50723ded7b4f6a225f69408c5f889ec2042e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a3d7bab46fafae3ef9e58f52d7c6204a6cf7f5e9124cc8c89bd5c4c9c31fea59 = $this->env->getExtension("native_profiler");
        $__internal_a3d7bab46fafae3ef9e58f52d7c6204a6cf7f5e9124cc8c89bd5c4c9c31fea59->enter($__internal_a3d7bab46fafae3ef9e58f52d7c6204a6cf7f5e9124cc8c89bd5c4c9c31fea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d7bab46fafae3ef9e58f52d7c6204a6cf7f5e9124cc8c89bd5c4c9c31fea59->leave($__internal_a3d7bab46fafae3ef9e58f52d7c6204a6cf7f5e9124cc8c89bd5c4c9c31fea59_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d7290e15386031384a6d5445296b229e1d9ab46c42a8c98d2fa03cfab34d38b = $this->env->getExtension("native_profiler");
        $__internal_6d7290e15386031384a6d5445296b229e1d9ab46c42a8c98d2fa03cfab34d38b->enter($__internal_6d7290e15386031384a6d5445296b229e1d9ab46c42a8c98d2fa03cfab34d38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6d7290e15386031384a6d5445296b229e1d9ab46c42a8c98d2fa03cfab34d38b->leave($__internal_6d7290e15386031384a6d5445296b229e1d9ab46c42a8c98d2fa03cfab34d38b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
