<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6ff564495c90de6a8d790547b1d6144cf6233fd0579dceffa8fe609b3191f3e7 extends Twig_Template
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
        $__internal_9348afa2c6f76d5708835c5b5e551dd280e9cb45462dbc52b0ace054c3759228 = $this->env->getExtension("native_profiler");
        $__internal_9348afa2c6f76d5708835c5b5e551dd280e9cb45462dbc52b0ace054c3759228->enter($__internal_9348afa2c6f76d5708835c5b5e551dd280e9cb45462dbc52b0ace054c3759228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9348afa2c6f76d5708835c5b5e551dd280e9cb45462dbc52b0ace054c3759228->leave($__internal_9348afa2c6f76d5708835c5b5e551dd280e9cb45462dbc52b0ace054c3759228_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
