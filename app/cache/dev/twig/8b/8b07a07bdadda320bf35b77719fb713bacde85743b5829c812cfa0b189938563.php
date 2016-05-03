<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_6b5e92ecb4c8d3a9a650a9ccb922a310adb02fe19217517750ecc2fbdb60b168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_df4bdc1a048c5eb534a7fdd4f81da00ab134f8e68ad5381574bfcd008e13bfb2 = $this->env->getExtension("native_profiler");
        $__internal_df4bdc1a048c5eb534a7fdd4f81da00ab134f8e68ad5381574bfcd008e13bfb2->enter($__internal_df4bdc1a048c5eb534a7fdd4f81da00ab134f8e68ad5381574bfcd008e13bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4bdc1a048c5eb534a7fdd4f81da00ab134f8e68ad5381574bfcd008e13bfb2->leave($__internal_df4bdc1a048c5eb534a7fdd4f81da00ab134f8e68ad5381574bfcd008e13bfb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08e8714d545cad52d3f5bfe01b0b5e5df7fd36bb31617c552ccac6fe2ada9c46 = $this->env->getExtension("native_profiler");
        $__internal_08e8714d545cad52d3f5bfe01b0b5e5df7fd36bb31617c552ccac6fe2ada9c46->enter($__internal_08e8714d545cad52d3f5bfe01b0b5e5df7fd36bb31617c552ccac6fe2ada9c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_08e8714d545cad52d3f5bfe01b0b5e5df7fd36bb31617c552ccac6fe2ada9c46->leave($__internal_08e8714d545cad52d3f5bfe01b0b5e5df7fd36bb31617c552ccac6fe2ada9c46_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
