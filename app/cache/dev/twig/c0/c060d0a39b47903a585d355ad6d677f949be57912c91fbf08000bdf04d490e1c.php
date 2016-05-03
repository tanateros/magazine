<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_9379c96f17ad61237bcb9811c0719d626be7d204c062a4085822a1b69f496419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_778294c3e4832031048b9b6d1b90129128c334618ed9dde5fb214e6a640ba4c1 = $this->env->getExtension("native_profiler");
        $__internal_778294c3e4832031048b9b6d1b90129128c334618ed9dde5fb214e6a640ba4c1->enter($__internal_778294c3e4832031048b9b6d1b90129128c334618ed9dde5fb214e6a640ba4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_778294c3e4832031048b9b6d1b90129128c334618ed9dde5fb214e6a640ba4c1->leave($__internal_778294c3e4832031048b9b6d1b90129128c334618ed9dde5fb214e6a640ba4c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01bad7a488a7c16e1681c4bfae28ac7fc3b182f4f17acb05f22cd0745fa78930 = $this->env->getExtension("native_profiler");
        $__internal_01bad7a488a7c16e1681c4bfae28ac7fc3b182f4f17acb05f22cd0745fa78930->enter($__internal_01bad7a488a7c16e1681c4bfae28ac7fc3b182f4f17acb05f22cd0745fa78930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_01bad7a488a7c16e1681c4bfae28ac7fc3b182f4f17acb05f22cd0745fa78930->leave($__internal_01bad7a488a7c16e1681c4bfae28ac7fc3b182f4f17acb05f22cd0745fa78930_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
