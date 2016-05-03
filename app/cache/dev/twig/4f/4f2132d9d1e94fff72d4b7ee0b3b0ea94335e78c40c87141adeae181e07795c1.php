<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_efe7a8bfd4e8ff1db2e4de7603c00b7e34c2e769b91bf2ae5b6488e4b7aa6ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_631d447b74101ca94e1317459267de756446f2d1bb0654fd1fa5a9d236d5f361 = $this->env->getExtension("native_profiler");
        $__internal_631d447b74101ca94e1317459267de756446f2d1bb0654fd1fa5a9d236d5f361->enter($__internal_631d447b74101ca94e1317459267de756446f2d1bb0654fd1fa5a9d236d5f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_631d447b74101ca94e1317459267de756446f2d1bb0654fd1fa5a9d236d5f361->leave($__internal_631d447b74101ca94e1317459267de756446f2d1bb0654fd1fa5a9d236d5f361_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2751cfba4b95bfb65112e9f202a3bfc762c485e60f5821df45b74bb48510035b = $this->env->getExtension("native_profiler");
        $__internal_2751cfba4b95bfb65112e9f202a3bfc762c485e60f5821df45b74bb48510035b->enter($__internal_2751cfba4b95bfb65112e9f202a3bfc762c485e60f5821df45b74bb48510035b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2751cfba4b95bfb65112e9f202a3bfc762c485e60f5821df45b74bb48510035b->leave($__internal_2751cfba4b95bfb65112e9f202a3bfc762c485e60f5821df45b74bb48510035b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4a40a876685add404fbb4ef13ec31c17485b29dfd306f64f5515ed3d65ad5581 = $this->env->getExtension("native_profiler");
        $__internal_4a40a876685add404fbb4ef13ec31c17485b29dfd306f64f5515ed3d65ad5581->enter($__internal_4a40a876685add404fbb4ef13ec31c17485b29dfd306f64f5515ed3d65ad5581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4a40a876685add404fbb4ef13ec31c17485b29dfd306f64f5515ed3d65ad5581->leave($__internal_4a40a876685add404fbb4ef13ec31c17485b29dfd306f64f5515ed3d65ad5581_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_568cef94259d62856d40254d211c4f7a54f98d9c89d1a7a1c52f2c3d2161063b = $this->env->getExtension("native_profiler");
        $__internal_568cef94259d62856d40254d211c4f7a54f98d9c89d1a7a1c52f2c3d2161063b->enter($__internal_568cef94259d62856d40254d211c4f7a54f98d9c89d1a7a1c52f2c3d2161063b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_568cef94259d62856d40254d211c4f7a54f98d9c89d1a7a1c52f2c3d2161063b->leave($__internal_568cef94259d62856d40254d211c4f7a54f98d9c89d1a7a1c52f2c3d2161063b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
