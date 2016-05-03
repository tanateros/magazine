<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_a9aac0844221e8931858eeb62147ffa9e12daf8d4bdd4305706d9ccc374d42a9 extends Twig_Template
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
        $__internal_d4c67c97dcf1a4666db4d6f24fa5964cc14cfe5592a530322dcceef1aa3c5ade = $this->env->getExtension("native_profiler");
        $__internal_d4c67c97dcf1a4666db4d6f24fa5964cc14cfe5592a530322dcceef1aa3c5ade->enter($__internal_d4c67c97dcf1a4666db4d6f24fa5964cc14cfe5592a530322dcceef1aa3c5ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d4c67c97dcf1a4666db4d6f24fa5964cc14cfe5592a530322dcceef1aa3c5ade->leave($__internal_d4c67c97dcf1a4666db4d6f24fa5964cc14cfe5592a530322dcceef1aa3c5ade_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_77682044af1d1564f8ab6aaeef6896f8313144346c79c4d62ce4976a4b27fad6 = $this->env->getExtension("native_profiler");
        $__internal_77682044af1d1564f8ab6aaeef6896f8313144346c79c4d62ce4976a4b27fad6->enter($__internal_77682044af1d1564f8ab6aaeef6896f8313144346c79c4d62ce4976a4b27fad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_77682044af1d1564f8ab6aaeef6896f8313144346c79c4d62ce4976a4b27fad6->leave($__internal_77682044af1d1564f8ab6aaeef6896f8313144346c79c4d62ce4976a4b27fad6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
