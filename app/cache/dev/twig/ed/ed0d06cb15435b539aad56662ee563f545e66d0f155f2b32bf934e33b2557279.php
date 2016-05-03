<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_3f39ce5dee6585c0fb6ba6f7d48e08087f5afbb6b7e9741651a00a894659b967 extends Twig_Template
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
        $__internal_420e5ffd909f00f6ee589c5d9f3039346ecf7cffb2c2e6bbb575b047153d0865 = $this->env->getExtension("native_profiler");
        $__internal_420e5ffd909f00f6ee589c5d9f3039346ecf7cffb2c2e6bbb575b047153d0865->enter($__internal_420e5ffd909f00f6ee589c5d9f3039346ecf7cffb2c2e6bbb575b047153d0865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_420e5ffd909f00f6ee589c5d9f3039346ecf7cffb2c2e6bbb575b047153d0865->leave($__internal_420e5ffd909f00f6ee589c5d9f3039346ecf7cffb2c2e6bbb575b047153d0865_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
