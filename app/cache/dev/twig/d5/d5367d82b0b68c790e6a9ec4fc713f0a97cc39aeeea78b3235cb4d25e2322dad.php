<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_da5718aeb8f17148c3ca1f8f687b7721fa4a3747f6208b58c54ad825b8ad2a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b7058f683d09eb5b66c7e7db8a1c4ac499680e0ebbaefbd2b81dbb76ea5735ac = $this->env->getExtension("native_profiler");
        $__internal_b7058f683d09eb5b66c7e7db8a1c4ac499680e0ebbaefbd2b81dbb76ea5735ac->enter($__internal_b7058f683d09eb5b66c7e7db8a1c4ac499680e0ebbaefbd2b81dbb76ea5735ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7058f683d09eb5b66c7e7db8a1c4ac499680e0ebbaefbd2b81dbb76ea5735ac->leave($__internal_b7058f683d09eb5b66c7e7db8a1c4ac499680e0ebbaefbd2b81dbb76ea5735ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79daf4d72c15096a1286a2934188370ff641e3b6ae3cf52fbf3adafdb65c49e6 = $this->env->getExtension("native_profiler");
        $__internal_79daf4d72c15096a1286a2934188370ff641e3b6ae3cf52fbf3adafdb65c49e6->enter($__internal_79daf4d72c15096a1286a2934188370ff641e3b6ae3cf52fbf3adafdb65c49e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_79daf4d72c15096a1286a2934188370ff641e3b6ae3cf52fbf3adafdb65c49e6->leave($__internal_79daf4d72c15096a1286a2934188370ff641e3b6ae3cf52fbf3adafdb65c49e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
