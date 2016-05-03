<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6ef1f62d135261611cb5ca99b0db8fcc9702fef858c1b7d0989fb713186afdd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63cfa19de05cfab39a02f29e009ef67f281f935d4e0d28a77633619ac4834e35 = $this->env->getExtension("native_profiler");
        $__internal_63cfa19de05cfab39a02f29e009ef67f281f935d4e0d28a77633619ac4834e35->enter($__internal_63cfa19de05cfab39a02f29e009ef67f281f935d4e0d28a77633619ac4834e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_63cfa19de05cfab39a02f29e009ef67f281f935d4e0d28a77633619ac4834e35->leave($__internal_63cfa19de05cfab39a02f29e009ef67f281f935d4e0d28a77633619ac4834e35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
