<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_cf8c20ca8d1f4a9a00e50ee71fbb0fa6de42300eb50fffb9f821cbb6e6e305ee extends Twig_Template
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
        $__internal_129f33424acc6eee135a59c4c9955e0b54db5ed943c6bcc22a6d6869899cdbf8 = $this->env->getExtension("native_profiler");
        $__internal_129f33424acc6eee135a59c4c9955e0b54db5ed943c6bcc22a6d6869899cdbf8->enter($__internal_129f33424acc6eee135a59c4c9955e0b54db5ed943c6bcc22a6d6869899cdbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_129f33424acc6eee135a59c4c9955e0b54db5ed943c6bcc22a6d6869899cdbf8->leave($__internal_129f33424acc6eee135a59c4c9955e0b54db5ed943c6bcc22a6d6869899cdbf8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
