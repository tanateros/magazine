<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_81762051589c45cda25757a19ede38d75c426fb6aa1ed9e17e2fde87c88ada37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1648218cb016c9f43457ea26bb9d04d2e677547a6453068c8b00b3639a645d03 = $this->env->getExtension("native_profiler");
        $__internal_1648218cb016c9f43457ea26bb9d04d2e677547a6453068c8b00b3639a645d03->enter($__internal_1648218cb016c9f43457ea26bb9d04d2e677547a6453068c8b00b3639a645d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1648218cb016c9f43457ea26bb9d04d2e677547a6453068c8b00b3639a645d03->leave($__internal_1648218cb016c9f43457ea26bb9d04d2e677547a6453068c8b00b3639a645d03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_126afd925653e45e777a1613170c97bb51cfc7b1931f324e492760595c66fe98 = $this->env->getExtension("native_profiler");
        $__internal_126afd925653e45e777a1613170c97bb51cfc7b1931f324e492760595c66fe98->enter($__internal_126afd925653e45e777a1613170c97bb51cfc7b1931f324e492760595c66fe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_126afd925653e45e777a1613170c97bb51cfc7b1931f324e492760595c66fe98->leave($__internal_126afd925653e45e777a1613170c97bb51cfc7b1931f324e492760595c66fe98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
