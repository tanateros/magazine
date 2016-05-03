<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4ea48b26ca1bcfcbed9a6fab05c566f492284d31785444ffd95deb0eefaf2ff2 extends Twig_Template
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
        $__internal_61f98ba6cb4339a670f6ba47290522b902857a643f11ac7149271fdbae8e47af = $this->env->getExtension("native_profiler");
        $__internal_61f98ba6cb4339a670f6ba47290522b902857a643f11ac7149271fdbae8e47af->enter($__internal_61f98ba6cb4339a670f6ba47290522b902857a643f11ac7149271fdbae8e47af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_61f98ba6cb4339a670f6ba47290522b902857a643f11ac7149271fdbae8e47af->leave($__internal_61f98ba6cb4339a670f6ba47290522b902857a643f11ac7149271fdbae8e47af_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e7be7c58098f02c7643eea276b09a885298b16f3e5c38d104530d9af2eac503d = $this->env->getExtension("native_profiler");
        $__internal_e7be7c58098f02c7643eea276b09a885298b16f3e5c38d104530d9af2eac503d->enter($__internal_e7be7c58098f02c7643eea276b09a885298b16f3e5c38d104530d9af2eac503d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e7be7c58098f02c7643eea276b09a885298b16f3e5c38d104530d9af2eac503d->leave($__internal_e7be7c58098f02c7643eea276b09a885298b16f3e5c38d104530d9af2eac503d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3133ec3b7f82ab33c98799c6e5c61eac8dac525edb4df0c7e8ba9d3697f3df9f = $this->env->getExtension("native_profiler");
        $__internal_3133ec3b7f82ab33c98799c6e5c61eac8dac525edb4df0c7e8ba9d3697f3df9f->enter($__internal_3133ec3b7f82ab33c98799c6e5c61eac8dac525edb4df0c7e8ba9d3697f3df9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3133ec3b7f82ab33c98799c6e5c61eac8dac525edb4df0c7e8ba9d3697f3df9f->leave($__internal_3133ec3b7f82ab33c98799c6e5c61eac8dac525edb4df0c7e8ba9d3697f3df9f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a428a75fdd0ede3521258926df1484e7638ea2b24a1023cdc08c8baf3032b2ae = $this->env->getExtension("native_profiler");
        $__internal_a428a75fdd0ede3521258926df1484e7638ea2b24a1023cdc08c8baf3032b2ae->enter($__internal_a428a75fdd0ede3521258926df1484e7638ea2b24a1023cdc08c8baf3032b2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a428a75fdd0ede3521258926df1484e7638ea2b24a1023cdc08c8baf3032b2ae->leave($__internal_a428a75fdd0ede3521258926df1484e7638ea2b24a1023cdc08c8baf3032b2ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
