<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_86935866d7d07d1b883d64590d4b25e6cad5c1f27373563732ae9bec2a6e3add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19036540466b0aa68c09c7cbb4a1d1e93091724871c9b2db67d18dc8320ef777 = $this->env->getExtension("native_profiler");
        $__internal_19036540466b0aa68c09c7cbb4a1d1e93091724871c9b2db67d18dc8320ef777->enter($__internal_19036540466b0aa68c09c7cbb4a1d1e93091724871c9b2db67d18dc8320ef777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19036540466b0aa68c09c7cbb4a1d1e93091724871c9b2db67d18dc8320ef777->leave($__internal_19036540466b0aa68c09c7cbb4a1d1e93091724871c9b2db67d18dc8320ef777_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2db100eaa4b754010ae1ecf6b8f5c769846df202073b6435f7ed28055a9430d0 = $this->env->getExtension("native_profiler");
        $__internal_2db100eaa4b754010ae1ecf6b8f5c769846df202073b6435f7ed28055a9430d0->enter($__internal_2db100eaa4b754010ae1ecf6b8f5c769846df202073b6435f7ed28055a9430d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2db100eaa4b754010ae1ecf6b8f5c769846df202073b6435f7ed28055a9430d0->leave($__internal_2db100eaa4b754010ae1ecf6b8f5c769846df202073b6435f7ed28055a9430d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
