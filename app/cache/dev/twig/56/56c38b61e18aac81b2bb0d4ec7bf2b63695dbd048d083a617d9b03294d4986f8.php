<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_aa566bd02c4149f9f56ed9e4677ed9ae640cc608b8d22375866e23ed6f1c50c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_16950280bf8edd216b7619aeafef2e42e3216ff0077e55d3dfbf76e3e6a49411 = $this->env->getExtension("native_profiler");
        $__internal_16950280bf8edd216b7619aeafef2e42e3216ff0077e55d3dfbf76e3e6a49411->enter($__internal_16950280bf8edd216b7619aeafef2e42e3216ff0077e55d3dfbf76e3e6a49411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16950280bf8edd216b7619aeafef2e42e3216ff0077e55d3dfbf76e3e6a49411->leave($__internal_16950280bf8edd216b7619aeafef2e42e3216ff0077e55d3dfbf76e3e6a49411_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1416166c048b9539e97599b087985efc895d6d0b6425743dfb66a8d2efeeed09 = $this->env->getExtension("native_profiler");
        $__internal_1416166c048b9539e97599b087985efc895d6d0b6425743dfb66a8d2efeeed09->enter($__internal_1416166c048b9539e97599b087985efc895d6d0b6425743dfb66a8d2efeeed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_1416166c048b9539e97599b087985efc895d6d0b6425743dfb66a8d2efeeed09->leave($__internal_1416166c048b9539e97599b087985efc895d6d0b6425743dfb66a8d2efeeed09_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
