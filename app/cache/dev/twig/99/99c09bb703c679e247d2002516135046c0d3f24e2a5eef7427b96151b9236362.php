<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_29a77ee6ac9211091c50e2a2aef708a19c08413878f641ae4b940d7c7b511b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14ae1256b8650befb121fbbffd2dd6bb7b05d6558b776767d4b061dafa1dbaab = $this->env->getExtension("native_profiler");
        $__internal_14ae1256b8650befb121fbbffd2dd6bb7b05d6558b776767d4b061dafa1dbaab->enter($__internal_14ae1256b8650befb121fbbffd2dd6bb7b05d6558b776767d4b061dafa1dbaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_14ae1256b8650befb121fbbffd2dd6bb7b05d6558b776767d4b061dafa1dbaab->leave($__internal_14ae1256b8650befb121fbbffd2dd6bb7b05d6558b776767d4b061dafa1dbaab_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c3e24dcaf0ba1726465ec844b91802f8ae0079cde4dbc2d9a5d87954cc540d7f = $this->env->getExtension("native_profiler");
        $__internal_c3e24dcaf0ba1726465ec844b91802f8ae0079cde4dbc2d9a5d87954cc540d7f->enter($__internal_c3e24dcaf0ba1726465ec844b91802f8ae0079cde4dbc2d9a5d87954cc540d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c3e24dcaf0ba1726465ec844b91802f8ae0079cde4dbc2d9a5d87954cc540d7f->leave($__internal_c3e24dcaf0ba1726465ec844b91802f8ae0079cde4dbc2d9a5d87954cc540d7f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
