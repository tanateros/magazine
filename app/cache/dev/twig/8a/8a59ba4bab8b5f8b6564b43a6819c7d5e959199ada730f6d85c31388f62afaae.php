<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e4a7aad567bf44ef87f7ce745acfd519bc51c9301a8d56e2acc8479371d3c185 extends Twig_Template
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
        $__internal_aeb51827176a1d61d38758d279c40c0ec12b3ba1c305d076a7eac744a0d05fe3 = $this->env->getExtension("native_profiler");
        $__internal_aeb51827176a1d61d38758d279c40c0ec12b3ba1c305d076a7eac744a0d05fe3->enter($__internal_aeb51827176a1d61d38758d279c40c0ec12b3ba1c305d076a7eac744a0d05fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aeb51827176a1d61d38758d279c40c0ec12b3ba1c305d076a7eac744a0d05fe3->leave($__internal_aeb51827176a1d61d38758d279c40c0ec12b3ba1c305d076a7eac744a0d05fe3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
