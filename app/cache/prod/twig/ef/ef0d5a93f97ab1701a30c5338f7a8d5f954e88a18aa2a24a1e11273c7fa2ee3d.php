<?php

/* default/login.html.twig */
class __TwigTemplate_fc978bfbeb26fa1f995ea549bf97037b96c013f97af63c25ce6b264d2eb024f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30f20085aa9520861dbcb169070896adfb575debee59c322084003c969d21ebb = $this->env->getExtension("native_profiler");
        $__internal_30f20085aa9520861dbcb169070896adfb575debee59c322084003c969d21ebb->enter($__internal_30f20085aa9520861dbcb169070896adfb575debee59c322084003c969d21ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f20085aa9520861dbcb169070896adfb575debee59c322084003c969d21ebb->leave($__internal_30f20085aa9520861dbcb169070896adfb575debee59c322084003c969d21ebb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdea4501159f5967961e5a73857e9064d98af09179232d6de6d3cf3f5e584e4f = $this->env->getExtension("native_profiler");
        $__internal_bdea4501159f5967961e5a73857e9064d98af09179232d6de6d3cf3f5e584e4f->enter($__internal_bdea4501159f5967961e5a73857e9064d98af09179232d6de6d3cf3f5e584e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    login
";
        
        $__internal_bdea4501159f5967961e5a73857e9064d98af09179232d6de6d3cf3f5e584e4f->leave($__internal_bdea4501159f5967961e5a73857e9064d98af09179232d6de6d3cf3f5e584e4f_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     login*/
/* {% endblock %}*/
/* */
