<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_49b44f31b6bd85ea464f6d26285fe4bbd9ce5ccef0d0ce06daf43136048fc1c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_4a2753780ac9c118801de12f2444e3475ed95344ef9490c0be0ad3353a7a9104 = $this->env->getExtension("native_profiler");
        $__internal_4a2753780ac9c118801de12f2444e3475ed95344ef9490c0be0ad3353a7a9104->enter($__internal_4a2753780ac9c118801de12f2444e3475ed95344ef9490c0be0ad3353a7a9104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2753780ac9c118801de12f2444e3475ed95344ef9490c0be0ad3353a7a9104->leave($__internal_4a2753780ac9c118801de12f2444e3475ed95344ef9490c0be0ad3353a7a9104_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6193827bc25c225197ba56f875f780bb8a30e8b22a1fe81c79bcdb8e01d74237 = $this->env->getExtension("native_profiler");
        $__internal_6193827bc25c225197ba56f875f780bb8a30e8b22a1fe81c79bcdb8e01d74237->enter($__internal_6193827bc25c225197ba56f875f780bb8a30e8b22a1fe81c79bcdb8e01d74237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_6193827bc25c225197ba56f875f780bb8a30e8b22a1fe81c79bcdb8e01d74237->leave($__internal_6193827bc25c225197ba56f875f780bb8a30e8b22a1fe81c79bcdb8e01d74237_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
