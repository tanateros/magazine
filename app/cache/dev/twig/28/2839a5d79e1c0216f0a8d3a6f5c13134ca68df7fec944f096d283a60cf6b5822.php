<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_517c40eabcc8f6e4a3693f9557301dafa6d42bdcb287081a009368812c9ac3fa extends Twig_Template
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
        $__internal_3cb27de61111a6c287ecbd0fed9b82182d54f7b987794ec7f9c7209918f2c422 = $this->env->getExtension("native_profiler");
        $__internal_3cb27de61111a6c287ecbd0fed9b82182d54f7b987794ec7f9c7209918f2c422->enter($__internal_3cb27de61111a6c287ecbd0fed9b82182d54f7b987794ec7f9c7209918f2c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3cb27de61111a6c287ecbd0fed9b82182d54f7b987794ec7f9c7209918f2c422->leave($__internal_3cb27de61111a6c287ecbd0fed9b82182d54f7b987794ec7f9c7209918f2c422_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29c3bd43c0558862bbf8532df92ed7a4ab2420afe8460d4884da1e6df4950bfd = $this->env->getExtension("native_profiler");
        $__internal_29c3bd43c0558862bbf8532df92ed7a4ab2420afe8460d4884da1e6df4950bfd->enter($__internal_29c3bd43c0558862bbf8532df92ed7a4ab2420afe8460d4884da1e6df4950bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_29c3bd43c0558862bbf8532df92ed7a4ab2420afe8460d4884da1e6df4950bfd->leave($__internal_29c3bd43c0558862bbf8532df92ed7a4ab2420afe8460d4884da1e6df4950bfd_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e38f4fd4bfccaaf3bb8d8428c3649608ade37efc424bbeb635ec00f36bebd3f1 = $this->env->getExtension("native_profiler");
        $__internal_e38f4fd4bfccaaf3bb8d8428c3649608ade37efc424bbeb635ec00f36bebd3f1->enter($__internal_e38f4fd4bfccaaf3bb8d8428c3649608ade37efc424bbeb635ec00f36bebd3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e38f4fd4bfccaaf3bb8d8428c3649608ade37efc424bbeb635ec00f36bebd3f1->leave($__internal_e38f4fd4bfccaaf3bb8d8428c3649608ade37efc424bbeb635ec00f36bebd3f1_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_024777bd26ea3d4f8a5a9694103b33953e7c1a5b65442608942a3e7ea42c4ca0 = $this->env->getExtension("native_profiler");
        $__internal_024777bd26ea3d4f8a5a9694103b33953e7c1a5b65442608942a3e7ea42c4ca0->enter($__internal_024777bd26ea3d4f8a5a9694103b33953e7c1a5b65442608942a3e7ea42c4ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_024777bd26ea3d4f8a5a9694103b33953e7c1a5b65442608942a3e7ea42c4ca0->leave($__internal_024777bd26ea3d4f8a5a9694103b33953e7c1a5b65442608942a3e7ea42c4ca0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
