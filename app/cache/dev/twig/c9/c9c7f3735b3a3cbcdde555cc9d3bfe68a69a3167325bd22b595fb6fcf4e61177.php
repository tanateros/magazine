<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_dbc836f8f4d546009e0ed23c5d96d60ea66d16709d9f284460ef24183ca47b96 extends Twig_Template
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
        $__internal_6cf027091fd9b69a73ad90f68a5c81db9d8d244095bd9d558ce531e2959dca18 = $this->env->getExtension("native_profiler");
        $__internal_6cf027091fd9b69a73ad90f68a5c81db9d8d244095bd9d558ce531e2959dca18->enter($__internal_6cf027091fd9b69a73ad90f68a5c81db9d8d244095bd9d558ce531e2959dca18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6cf027091fd9b69a73ad90f68a5c81db9d8d244095bd9d558ce531e2959dca18->leave($__internal_6cf027091fd9b69a73ad90f68a5c81db9d8d244095bd9d558ce531e2959dca18_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aeed2288ba670a3d2adb61288de32cb18df0cf447dacf5bf75a4442a5e52ce82 = $this->env->getExtension("native_profiler");
        $__internal_aeed2288ba670a3d2adb61288de32cb18df0cf447dacf5bf75a4442a5e52ce82->enter($__internal_aeed2288ba670a3d2adb61288de32cb18df0cf447dacf5bf75a4442a5e52ce82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aeed2288ba670a3d2adb61288de32cb18df0cf447dacf5bf75a4442a5e52ce82->leave($__internal_aeed2288ba670a3d2adb61288de32cb18df0cf447dacf5bf75a4442a5e52ce82_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_66de8e67c99d5d059d811622d15af2df513dcbb36bd92fa0f061643edfceeb2e = $this->env->getExtension("native_profiler");
        $__internal_66de8e67c99d5d059d811622d15af2df513dcbb36bd92fa0f061643edfceeb2e->enter($__internal_66de8e67c99d5d059d811622d15af2df513dcbb36bd92fa0f061643edfceeb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_66de8e67c99d5d059d811622d15af2df513dcbb36bd92fa0f061643edfceeb2e->leave($__internal_66de8e67c99d5d059d811622d15af2df513dcbb36bd92fa0f061643edfceeb2e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7544c442c7ff598db750b70c3e012ccb095170541ba4868c21fa339563e4e222 = $this->env->getExtension("native_profiler");
        $__internal_7544c442c7ff598db750b70c3e012ccb095170541ba4868c21fa339563e4e222->enter($__internal_7544c442c7ff598db750b70c3e012ccb095170541ba4868c21fa339563e4e222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7544c442c7ff598db750b70c3e012ccb095170541ba4868c21fa339563e4e222->leave($__internal_7544c442c7ff598db750b70c3e012ccb095170541ba4868c21fa339563e4e222_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
