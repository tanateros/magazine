<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fe172785bfd11577f48096f9b84f0cfcf0e2d331d31e9fca22e59894ef89f6fd extends Twig_Template
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
        $__internal_50388e2055345c013a5a516f351a199efa1ccde3bb9dc3423d7c279acd2fd3b5 = $this->env->getExtension("native_profiler");
        $__internal_50388e2055345c013a5a516f351a199efa1ccde3bb9dc3423d7c279acd2fd3b5->enter($__internal_50388e2055345c013a5a516f351a199efa1ccde3bb9dc3423d7c279acd2fd3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_50388e2055345c013a5a516f351a199efa1ccde3bb9dc3423d7c279acd2fd3b5->leave($__internal_50388e2055345c013a5a516f351a199efa1ccde3bb9dc3423d7c279acd2fd3b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
