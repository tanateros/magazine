<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_8290b0899ba42caf7a3dedfd6c6ea3fd38af0932bbba3258961413dba93cc784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_ba5cca5b1078910042fbb6682f0247fa10674ada53548cc6e4b7706a48e233e3 = $this->env->getExtension("native_profiler");
        $__internal_ba5cca5b1078910042fbb6682f0247fa10674ada53548cc6e4b7706a48e233e3->enter($__internal_ba5cca5b1078910042fbb6682f0247fa10674ada53548cc6e4b7706a48e233e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5cca5b1078910042fbb6682f0247fa10674ada53548cc6e4b7706a48e233e3->leave($__internal_ba5cca5b1078910042fbb6682f0247fa10674ada53548cc6e4b7706a48e233e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b02e77640cd42593360dd2971fca74d5a4625c0fe308ca956107d89a6cc5830 = $this->env->getExtension("native_profiler");
        $__internal_8b02e77640cd42593360dd2971fca74d5a4625c0fe308ca956107d89a6cc5830->enter($__internal_8b02e77640cd42593360dd2971fca74d5a4625c0fe308ca956107d89a6cc5830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8b02e77640cd42593360dd2971fca74d5a4625c0fe308ca956107d89a6cc5830->leave($__internal_8b02e77640cd42593360dd2971fca74d5a4625c0fe308ca956107d89a6cc5830_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
