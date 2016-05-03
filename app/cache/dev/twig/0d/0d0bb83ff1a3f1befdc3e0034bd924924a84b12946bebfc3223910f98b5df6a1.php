<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_32cbb5bc8b26d198f653e8825217f12d5342a6027dce16e3418facd74c4fbfcb extends Twig_Template
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
        $__internal_f3b3d716a1bbd4a7cfa5e7e71b0cbc2345b9562768af704104a421934ea20103 = $this->env->getExtension("native_profiler");
        $__internal_f3b3d716a1bbd4a7cfa5e7e71b0cbc2345b9562768af704104a421934ea20103->enter($__internal_f3b3d716a1bbd4a7cfa5e7e71b0cbc2345b9562768af704104a421934ea20103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f3b3d716a1bbd4a7cfa5e7e71b0cbc2345b9562768af704104a421934ea20103->leave($__internal_f3b3d716a1bbd4a7cfa5e7e71b0cbc2345b9562768af704104a421934ea20103_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
