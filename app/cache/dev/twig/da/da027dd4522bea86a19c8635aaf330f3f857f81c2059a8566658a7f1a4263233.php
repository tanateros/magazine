<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_bfc4dba1ce449290329bdfebd62316b4a26fefdbab13f652ab0b54a3bc4387c9 extends Twig_Template
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
        $__internal_d62f65c7982713e7bf093bf25db23e2623b3689bbd9d6002a68aa4285e948c40 = $this->env->getExtension("native_profiler");
        $__internal_d62f65c7982713e7bf093bf25db23e2623b3689bbd9d6002a68aa4285e948c40->enter($__internal_d62f65c7982713e7bf093bf25db23e2623b3689bbd9d6002a68aa4285e948c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d62f65c7982713e7bf093bf25db23e2623b3689bbd9d6002a68aa4285e948c40->leave($__internal_d62f65c7982713e7bf093bf25db23e2623b3689bbd9d6002a68aa4285e948c40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
