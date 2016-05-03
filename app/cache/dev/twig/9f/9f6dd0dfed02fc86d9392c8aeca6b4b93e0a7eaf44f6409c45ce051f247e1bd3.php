<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b3593c4e8d1fd9be89421f4669aeaec23a355f10e8abe4858a304db3b122cb54 extends Twig_Template
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
        $__internal_5f6ca52e454a620d032ad644ac1c1c2661c3c4cf3f62e0288f1d9a2ebc085734 = $this->env->getExtension("native_profiler");
        $__internal_5f6ca52e454a620d032ad644ac1c1c2661c3c4cf3f62e0288f1d9a2ebc085734->enter($__internal_5f6ca52e454a620d032ad644ac1c1c2661c3c4cf3f62e0288f1d9a2ebc085734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_5f6ca52e454a620d032ad644ac1c1c2661c3c4cf3f62e0288f1d9a2ebc085734->leave($__internal_5f6ca52e454a620d032ad644ac1c1c2661c3c4cf3f62e0288f1d9a2ebc085734_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
