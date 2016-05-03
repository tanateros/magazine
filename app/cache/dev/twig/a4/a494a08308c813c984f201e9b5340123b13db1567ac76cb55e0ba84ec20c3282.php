<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f246aa08f4d1bc8dd89ee95e0765f56477b88fc3845a62623b4954d50e9d0f9a extends Twig_Template
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
        $__internal_33a690634e3bf2e15d4c78a445ed8a2eaa11be193c56a7384aaf33b6a10f80a6 = $this->env->getExtension("native_profiler");
        $__internal_33a690634e3bf2e15d4c78a445ed8a2eaa11be193c56a7384aaf33b6a10f80a6->enter($__internal_33a690634e3bf2e15d4c78a445ed8a2eaa11be193c56a7384aaf33b6a10f80a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_33a690634e3bf2e15d4c78a445ed8a2eaa11be193c56a7384aaf33b6a10f80a6->leave($__internal_33a690634e3bf2e15d4c78a445ed8a2eaa11be193c56a7384aaf33b6a10f80a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
