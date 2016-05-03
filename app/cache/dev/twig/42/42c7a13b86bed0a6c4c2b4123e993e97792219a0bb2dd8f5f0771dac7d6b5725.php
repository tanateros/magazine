<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_06e56a72feb2c7293735c0e795a7c872652920ca07c785069dfb70f91a2f9759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0fc46fe72107cf2f0cf75ecc30c6683198596dcb9b14ce7fc773e55d9239e6bb = $this->env->getExtension("native_profiler");
        $__internal_0fc46fe72107cf2f0cf75ecc30c6683198596dcb9b14ce7fc773e55d9239e6bb->enter($__internal_0fc46fe72107cf2f0cf75ecc30c6683198596dcb9b14ce7fc773e55d9239e6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc46fe72107cf2f0cf75ecc30c6683198596dcb9b14ce7fc773e55d9239e6bb->leave($__internal_0fc46fe72107cf2f0cf75ecc30c6683198596dcb9b14ce7fc773e55d9239e6bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6d9f95f1e563c6abda644d41bf90a9ac2146b84d143c4d6be5e5f360014adb0 = $this->env->getExtension("native_profiler");
        $__internal_e6d9f95f1e563c6abda644d41bf90a9ac2146b84d143c4d6be5e5f360014adb0->enter($__internal_e6d9f95f1e563c6abda644d41bf90a9ac2146b84d143c4d6be5e5f360014adb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e6d9f95f1e563c6abda644d41bf90a9ac2146b84d143c4d6be5e5f360014adb0->leave($__internal_e6d9f95f1e563c6abda644d41bf90a9ac2146b84d143c4d6be5e5f360014adb0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
