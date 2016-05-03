<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0595727d43df2271c567950eb2f6024939aaebf4cb0a0c50dcf98f28d1444549 extends Twig_Template
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
        $__internal_c411bcba605b817a14fa71479693d63c44327e225c22f1fd418d689294609ffc = $this->env->getExtension("native_profiler");
        $__internal_c411bcba605b817a14fa71479693d63c44327e225c22f1fd418d689294609ffc->enter($__internal_c411bcba605b817a14fa71479693d63c44327e225c22f1fd418d689294609ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_c411bcba605b817a14fa71479693d63c44327e225c22f1fd418d689294609ffc->leave($__internal_c411bcba605b817a14fa71479693d63c44327e225c22f1fd418d689294609ffc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
