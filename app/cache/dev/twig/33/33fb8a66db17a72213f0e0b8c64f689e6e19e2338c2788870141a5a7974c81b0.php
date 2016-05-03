<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7dc87429a80dbdab60757f3b4a54a0646b88b3bd0445f173a72a75faf3514150 extends Twig_Template
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
        $__internal_63544f7690b2d3205816a9a5648a5ff6bde078274287ffb2d87f01d8f4d56288 = $this->env->getExtension("native_profiler");
        $__internal_63544f7690b2d3205816a9a5648a5ff6bde078274287ffb2d87f01d8f4d56288->enter($__internal_63544f7690b2d3205816a9a5648a5ff6bde078274287ffb2d87f01d8f4d56288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_63544f7690b2d3205816a9a5648a5ff6bde078274287ffb2d87f01d8f4d56288->leave($__internal_63544f7690b2d3205816a9a5648a5ff6bde078274287ffb2d87f01d8f4d56288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
