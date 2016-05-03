<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_9b9329e3df0cb39990a1133ade699d59781da790c765728b236716816c79bc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_74fb94ef354d06e8f327c1deebfe9091da5cb99b375f21f933f342728c8d16b0 = $this->env->getExtension("native_profiler");
        $__internal_74fb94ef354d06e8f327c1deebfe9091da5cb99b375f21f933f342728c8d16b0->enter($__internal_74fb94ef354d06e8f327c1deebfe9091da5cb99b375f21f933f342728c8d16b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fb94ef354d06e8f327c1deebfe9091da5cb99b375f21f933f342728c8d16b0->leave($__internal_74fb94ef354d06e8f327c1deebfe9091da5cb99b375f21f933f342728c8d16b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e73f40a5cbc8ec831238404d36c7f4d72fe940e3eb2cf76dc2704831c49ffec5 = $this->env->getExtension("native_profiler");
        $__internal_e73f40a5cbc8ec831238404d36c7f4d72fe940e3eb2cf76dc2704831c49ffec5->enter($__internal_e73f40a5cbc8ec831238404d36c7f4d72fe940e3eb2cf76dc2704831c49ffec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e73f40a5cbc8ec831238404d36c7f4d72fe940e3eb2cf76dc2704831c49ffec5->leave($__internal_e73f40a5cbc8ec831238404d36c7f4d72fe940e3eb2cf76dc2704831c49ffec5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
