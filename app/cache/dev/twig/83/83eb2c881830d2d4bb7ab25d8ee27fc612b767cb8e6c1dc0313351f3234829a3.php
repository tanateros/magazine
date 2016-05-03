<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dd8a6d046b7f1daebb99d8c405e91360f3bf45b5e56fe3e10d8da2df4dae9a81 extends Twig_Template
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
        $__internal_f4d16ff36ce835d3324990d6c6be79bfe32ea409028bef06fc888553636694a9 = $this->env->getExtension("native_profiler");
        $__internal_f4d16ff36ce835d3324990d6c6be79bfe32ea409028bef06fc888553636694a9->enter($__internal_f4d16ff36ce835d3324990d6c6be79bfe32ea409028bef06fc888553636694a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f4d16ff36ce835d3324990d6c6be79bfe32ea409028bef06fc888553636694a9->leave($__internal_f4d16ff36ce835d3324990d6c6be79bfe32ea409028bef06fc888553636694a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
