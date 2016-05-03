<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2b7801434efb9dda793f5d94367f5e43a08f58d41cd20500aa06d2449a27c5d5 extends Twig_Template
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
        $__internal_cc069554acded929077c91332367564b0ddc8e9180e23efad8ae78fb30cbb127 = $this->env->getExtension("native_profiler");
        $__internal_cc069554acded929077c91332367564b0ddc8e9180e23efad8ae78fb30cbb127->enter($__internal_cc069554acded929077c91332367564b0ddc8e9180e23efad8ae78fb30cbb127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_cc069554acded929077c91332367564b0ddc8e9180e23efad8ae78fb30cbb127->leave($__internal_cc069554acded929077c91332367564b0ddc8e9180e23efad8ae78fb30cbb127_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
