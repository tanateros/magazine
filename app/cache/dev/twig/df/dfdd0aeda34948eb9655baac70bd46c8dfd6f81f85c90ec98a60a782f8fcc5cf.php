<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_96b73e3c5e22ea528c75b3431cc106f68650bb6615e0b2c68e2c7dfebf8c1488 extends Twig_Template
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
        $__internal_75d5c80a5355a65a7f69f29deadc09311dc73549b837ad561375acd362025926 = $this->env->getExtension("native_profiler");
        $__internal_75d5c80a5355a65a7f69f29deadc09311dc73549b837ad561375acd362025926->enter($__internal_75d5c80a5355a65a7f69f29deadc09311dc73549b837ad561375acd362025926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_75d5c80a5355a65a7f69f29deadc09311dc73549b837ad561375acd362025926->leave($__internal_75d5c80a5355a65a7f69f29deadc09311dc73549b837ad561375acd362025926_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
