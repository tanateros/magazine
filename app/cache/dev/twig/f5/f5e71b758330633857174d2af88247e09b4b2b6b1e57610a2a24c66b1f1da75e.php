<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9d48dc585b133eca3b9092c408c0328410752b74e4c837ff83e14ea89892203f extends Twig_Template
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
        $__internal_f542ed9f900c5a9ea34ea374ffff9156602eea27da9bd3e3cee823ec035bdc56 = $this->env->getExtension("native_profiler");
        $__internal_f542ed9f900c5a9ea34ea374ffff9156602eea27da9bd3e3cee823ec035bdc56->enter($__internal_f542ed9f900c5a9ea34ea374ffff9156602eea27da9bd3e3cee823ec035bdc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f542ed9f900c5a9ea34ea374ffff9156602eea27da9bd3e3cee823ec035bdc56->leave($__internal_f542ed9f900c5a9ea34ea374ffff9156602eea27da9bd3e3cee823ec035bdc56_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
