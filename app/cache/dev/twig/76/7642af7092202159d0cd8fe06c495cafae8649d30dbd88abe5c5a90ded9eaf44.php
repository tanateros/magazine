<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a249f00098b370dc323b13c65921aa96b81ec37a5446edb041942032f60cac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_17bf4ea3058bb7260236ba559ac977918ecccd73854c4dc4659bda976b1628f3 = $this->env->getExtension("native_profiler");
        $__internal_17bf4ea3058bb7260236ba559ac977918ecccd73854c4dc4659bda976b1628f3->enter($__internal_17bf4ea3058bb7260236ba559ac977918ecccd73854c4dc4659bda976b1628f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17bf4ea3058bb7260236ba559ac977918ecccd73854c4dc4659bda976b1628f3->leave($__internal_17bf4ea3058bb7260236ba559ac977918ecccd73854c4dc4659bda976b1628f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79daa9f9ab7c77f208ec70f0126ff469b03a9adc180b168957f65dcff365e1ac = $this->env->getExtension("native_profiler");
        $__internal_79daa9f9ab7c77f208ec70f0126ff469b03a9adc180b168957f65dcff365e1ac->enter($__internal_79daa9f9ab7c77f208ec70f0126ff469b03a9adc180b168957f65dcff365e1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_79daa9f9ab7c77f208ec70f0126ff469b03a9adc180b168957f65dcff365e1ac->leave($__internal_79daa9f9ab7c77f208ec70f0126ff469b03a9adc180b168957f65dcff365e1ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>*/
/*     {% if app.session is not empty %}*/
/*         {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*         {% if targetUrl is not empty %}<p><a href="{{ targetUrl }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
