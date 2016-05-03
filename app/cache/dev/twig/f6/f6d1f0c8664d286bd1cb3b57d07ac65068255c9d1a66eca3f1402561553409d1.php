<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8cab709c4ce2cf3c225597faa202956d04d660bf6075396d6b9ad012f8ef3a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d24c927f5e126aeed50f6ca8f7e81f4557c4fdb9d1c95d6f7a7ef0cb7f36bf91 = $this->env->getExtension("native_profiler");
        $__internal_d24c927f5e126aeed50f6ca8f7e81f4557c4fdb9d1c95d6f7a7ef0cb7f36bf91->enter($__internal_d24c927f5e126aeed50f6ca8f7e81f4557c4fdb9d1c95d6f7a7ef0cb7f36bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24c927f5e126aeed50f6ca8f7e81f4557c4fdb9d1c95d6f7a7ef0cb7f36bf91->leave($__internal_d24c927f5e126aeed50f6ca8f7e81f4557c4fdb9d1c95d6f7a7ef0cb7f36bf91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_598aa6d07fa2f31331c030e00d9f3b3f8f5a51c031a73350646655592fe5089c = $this->env->getExtension("native_profiler");
        $__internal_598aa6d07fa2f31331c030e00d9f3b3f8f5a51c031a73350646655592fe5089c->enter($__internal_598aa6d07fa2f31331c030e00d9f3b3f8f5a51c031a73350646655592fe5089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_598aa6d07fa2f31331c030e00d9f3b3f8f5a51c031a73350646655592fe5089c->leave($__internal_598aa6d07fa2f31331c030e00d9f3b3f8f5a51c031a73350646655592fe5089c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
