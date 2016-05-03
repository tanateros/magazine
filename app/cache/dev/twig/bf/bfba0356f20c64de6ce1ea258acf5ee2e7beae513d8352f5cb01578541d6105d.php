<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_069d8658f74283c59fc3978dafa0fb4171c1a73b7222d3500e9c3aa47c7eae67 extends Twig_Template
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
        $__internal_45c320f354251e399cead8ed8085ad5b3e9c01a09cda4eec6c51cafa283b8440 = $this->env->getExtension("native_profiler");
        $__internal_45c320f354251e399cead8ed8085ad5b3e9c01a09cda4eec6c51cafa283b8440->enter($__internal_45c320f354251e399cead8ed8085ad5b3e9c01a09cda4eec6c51cafa283b8440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_45c320f354251e399cead8ed8085ad5b3e9c01a09cda4eec6c51cafa283b8440->leave($__internal_45c320f354251e399cead8ed8085ad5b3e9c01a09cda4eec6c51cafa283b8440_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
