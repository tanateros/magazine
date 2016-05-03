<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_46b013e73052fba97593324ddcbaed2cec57383ae9a25fefca99efe9288a0b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_400d0574ffb2631a274b46aef8bf0635fe5712a1175193ae42ba645958a85a8b = $this->env->getExtension("native_profiler");
        $__internal_400d0574ffb2631a274b46aef8bf0635fe5712a1175193ae42ba645958a85a8b->enter($__internal_400d0574ffb2631a274b46aef8bf0635fe5712a1175193ae42ba645958a85a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_400d0574ffb2631a274b46aef8bf0635fe5712a1175193ae42ba645958a85a8b->leave($__internal_400d0574ffb2631a274b46aef8bf0635fe5712a1175193ae42ba645958a85a8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b94d16b9f14c6002141fd90b244cab21696f099539094df9f19db14939779205 = $this->env->getExtension("native_profiler");
        $__internal_b94d16b9f14c6002141fd90b244cab21696f099539094df9f19db14939779205->enter($__internal_b94d16b9f14c6002141fd90b244cab21696f099539094df9f19db14939779205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b94d16b9f14c6002141fd90b244cab21696f099539094df9f19db14939779205->leave($__internal_b94d16b9f14c6002141fd90b244cab21696f099539094df9f19db14939779205_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
