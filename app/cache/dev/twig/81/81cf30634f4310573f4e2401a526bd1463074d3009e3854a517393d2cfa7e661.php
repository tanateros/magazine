<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ee954f613c88efb531836a8cc273a6d4abc52e6a15fd284fd70b8dbdbb817aaa extends Twig_Template
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
        $__internal_9def6f23a35ba77ca438aaadd7f447b733442ed7dd8fb6dff170130237c26b8d = $this->env->getExtension("native_profiler");
        $__internal_9def6f23a35ba77ca438aaadd7f447b733442ed7dd8fb6dff170130237c26b8d->enter($__internal_9def6f23a35ba77ca438aaadd7f447b733442ed7dd8fb6dff170130237c26b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_9def6f23a35ba77ca438aaadd7f447b733442ed7dd8fb6dff170130237c26b8d->leave($__internal_9def6f23a35ba77ca438aaadd7f447b733442ed7dd8fb6dff170130237c26b8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
