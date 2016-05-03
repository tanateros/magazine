<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_debb3306f176855caeb2322b2c05543f1ac9810bd4458d6de4a4b992984c7a54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e417840df4426638e2270f7c94a1a3c1d19540b5222f62f5a4d7920592b76f8e = $this->env->getExtension("native_profiler");
        $__internal_e417840df4426638e2270f7c94a1a3c1d19540b5222f62f5a4d7920592b76f8e->enter($__internal_e417840df4426638e2270f7c94a1a3c1d19540b5222f62f5a4d7920592b76f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e417840df4426638e2270f7c94a1a3c1d19540b5222f62f5a4d7920592b76f8e->leave($__internal_e417840df4426638e2270f7c94a1a3c1d19540b5222f62f5a4d7920592b76f8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_136e5d51b99fa4c1744f73a061abc5e6cff41e0e5a3b014b02996b9b4f640380 = $this->env->getExtension("native_profiler");
        $__internal_136e5d51b99fa4c1744f73a061abc5e6cff41e0e5a3b014b02996b9b4f640380->enter($__internal_136e5d51b99fa4c1744f73a061abc5e6cff41e0e5a3b014b02996b9b4f640380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_136e5d51b99fa4c1744f73a061abc5e6cff41e0e5a3b014b02996b9b4f640380->leave($__internal_136e5d51b99fa4c1744f73a061abc5e6cff41e0e5a3b014b02996b9b4f640380_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
