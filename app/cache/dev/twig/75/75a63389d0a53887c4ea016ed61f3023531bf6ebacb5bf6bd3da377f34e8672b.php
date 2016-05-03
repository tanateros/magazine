<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0c024dae193529a3023b43b0fd86f965f165e20447818909eb2a8a46604065be extends Twig_Template
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
        $__internal_889064b6405f0999e442f0407afb054f0728ba1bef328c1bd721a99c4b6e4fd5 = $this->env->getExtension("native_profiler");
        $__internal_889064b6405f0999e442f0407afb054f0728ba1bef328c1bd721a99c4b6e4fd5->enter($__internal_889064b6405f0999e442f0407afb054f0728ba1bef328c1bd721a99c4b6e4fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_889064b6405f0999e442f0407afb054f0728ba1bef328c1bd721a99c4b6e4fd5->leave($__internal_889064b6405f0999e442f0407afb054f0728ba1bef328c1bd721a99c4b6e4fd5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
