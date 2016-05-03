<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_366df5da9fc899d4e73027f832fde71e6404cf2d110fb4fff6c16d9dbfac2d83 extends Twig_Template
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
        $__internal_c7b75f324c007ad56d4b886b6af3e93d9848d28a6da7c6cd17044281bfaf1941 = $this->env->getExtension("native_profiler");
        $__internal_c7b75f324c007ad56d4b886b6af3e93d9848d28a6da7c6cd17044281bfaf1941->enter($__internal_c7b75f324c007ad56d4b886b6af3e93d9848d28a6da7c6cd17044281bfaf1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_c7b75f324c007ad56d4b886b6af3e93d9848d28a6da7c6cd17044281bfaf1941->leave($__internal_c7b75f324c007ad56d4b886b6af3e93d9848d28a6da7c6cd17044281bfaf1941_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
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
/* <form action="{{ path('fos_user_group_edit', {'groupname': groupname} ) }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
