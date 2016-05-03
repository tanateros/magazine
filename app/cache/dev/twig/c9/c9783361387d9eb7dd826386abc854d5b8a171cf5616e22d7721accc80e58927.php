<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_725baadc8910bc92859533d7824c1aab8db4e7da26240d0bb2ea1a57882f78f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_612a957990061a4a91207609ed476364c88add3a385edecc4990c96eee7d844a = $this->env->getExtension("native_profiler");
        $__internal_612a957990061a4a91207609ed476364c88add3a385edecc4990c96eee7d844a->enter($__internal_612a957990061a4a91207609ed476364c88add3a385edecc4990c96eee7d844a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_612a957990061a4a91207609ed476364c88add3a385edecc4990c96eee7d844a->leave($__internal_612a957990061a4a91207609ed476364c88add3a385edecc4990c96eee7d844a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a013c21cbe20cab46696a40b6239f61ebf82e6cbe4343b3d098c3e983c7b033 = $this->env->getExtension("native_profiler");
        $__internal_3a013c21cbe20cab46696a40b6239f61ebf82e6cbe4343b3d098c3e983c7b033->enter($__internal_3a013c21cbe20cab46696a40b6239f61ebf82e6cbe4343b3d098c3e983c7b033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3a013c21cbe20cab46696a40b6239f61ebf82e6cbe4343b3d098c3e983c7b033->leave($__internal_3a013c21cbe20cab46696a40b6239f61ebf82e6cbe4343b3d098c3e983c7b033_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
