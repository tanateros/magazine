<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_08d9cb6fb460bfaea862d1435d0ad39205e188a6f1ac3ee7a37cf09d5705cdf9 extends Twig_Template
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
        $__internal_c39e532e05bb328b1f17237e7e742b1afb5365c07697bd2a3da36ccc9d1ebd15 = $this->env->getExtension("native_profiler");
        $__internal_c39e532e05bb328b1f17237e7e742b1afb5365c07697bd2a3da36ccc9d1ebd15->enter($__internal_c39e532e05bb328b1f17237e7e742b1afb5365c07697bd2a3da36ccc9d1ebd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_c39e532e05bb328b1f17237e7e742b1afb5365c07697bd2a3da36ccc9d1ebd15->leave($__internal_c39e532e05bb328b1f17237e7e742b1afb5365c07697bd2a3da36ccc9d1ebd15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
