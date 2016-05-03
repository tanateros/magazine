<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c19c783ea1c2fc2693bbe67eca34c9cf775fbd219333258699e7dd8383efd470 extends Twig_Template
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
        $__internal_d86bc4ade9a16fd5de9d3238064759c7ae1b6c5897020feab5a51c318021cf83 = $this->env->getExtension("native_profiler");
        $__internal_d86bc4ade9a16fd5de9d3238064759c7ae1b6c5897020feab5a51c318021cf83->enter($__internal_d86bc4ade9a16fd5de9d3238064759c7ae1b6c5897020feab5a51c318021cf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d86bc4ade9a16fd5de9d3238064759c7ae1b6c5897020feab5a51c318021cf83->leave($__internal_d86bc4ade9a16fd5de9d3238064759c7ae1b6c5897020feab5a51c318021cf83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
