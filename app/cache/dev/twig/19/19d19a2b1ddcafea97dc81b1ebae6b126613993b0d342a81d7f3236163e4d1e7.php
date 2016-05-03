<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_ae670f1eecdb624f27ecce4762686707f50bf83ad9136c4bbd632130caacccea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_9baf80195c0e461603ab3eae9702d2295dad241d4c127b368eccb23056e2ef81 = $this->env->getExtension("native_profiler");
        $__internal_9baf80195c0e461603ab3eae9702d2295dad241d4c127b368eccb23056e2ef81->enter($__internal_9baf80195c0e461603ab3eae9702d2295dad241d4c127b368eccb23056e2ef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9baf80195c0e461603ab3eae9702d2295dad241d4c127b368eccb23056e2ef81->leave($__internal_9baf80195c0e461603ab3eae9702d2295dad241d4c127b368eccb23056e2ef81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f9ef2e70ab0efae15bf3e1de8fb492bcfb3d3e34bcf6816a13df77ebbf32b83 = $this->env->getExtension("native_profiler");
        $__internal_2f9ef2e70ab0efae15bf3e1de8fb492bcfb3d3e34bcf6816a13df77ebbf32b83->enter($__internal_2f9ef2e70ab0efae15bf3e1de8fb492bcfb3d3e34bcf6816a13df77ebbf32b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2f9ef2e70ab0efae15bf3e1de8fb492bcfb3d3e34bcf6816a13df77ebbf32b83->leave($__internal_2f9ef2e70ab0efae15bf3e1de8fb492bcfb3d3e34bcf6816a13df77ebbf32b83_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
