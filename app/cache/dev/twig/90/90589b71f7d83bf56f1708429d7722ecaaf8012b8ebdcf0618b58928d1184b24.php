<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_452d0053765918e1a41ff054bff81c675716c1f54218c1e3e20a4ca72055f07f extends Twig_Template
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
        $__internal_9511e5174b358df52a0ce1fc3fc8c126f8bea1610b4019833c142057a2f2f3e1 = $this->env->getExtension("native_profiler");
        $__internal_9511e5174b358df52a0ce1fc3fc8c126f8bea1610b4019833c142057a2f2f3e1->enter($__internal_9511e5174b358df52a0ce1fc3fc8c126f8bea1610b4019833c142057a2f2f3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9511e5174b358df52a0ce1fc3fc8c126f8bea1610b4019833c142057a2f2f3e1->leave($__internal_9511e5174b358df52a0ce1fc3fc8c126f8bea1610b4019833c142057a2f2f3e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
