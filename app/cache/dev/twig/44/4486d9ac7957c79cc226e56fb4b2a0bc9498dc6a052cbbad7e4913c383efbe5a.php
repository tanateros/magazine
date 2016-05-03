<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_2b182a05bffcf1e0971c6e05e9bccd4f0377f241df5727047f3f2a17c34db18b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d72693afff8236880d877acacb979b44fb670b2aa7732c73bb7fdff21779f83c = $this->env->getExtension("native_profiler");
        $__internal_d72693afff8236880d877acacb979b44fb670b2aa7732c73bb7fdff21779f83c->enter($__internal_d72693afff8236880d877acacb979b44fb670b2aa7732c73bb7fdff21779f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72693afff8236880d877acacb979b44fb670b2aa7732c73bb7fdff21779f83c->leave($__internal_d72693afff8236880d877acacb979b44fb670b2aa7732c73bb7fdff21779f83c_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_6554a9dbeb6a5d44e898aebb89f3a29a20aa100b0bdc17d9a6ab83bbdae1531b = $this->env->getExtension("native_profiler");
        $__internal_6554a9dbeb6a5d44e898aebb89f3a29a20aa100b0bdc17d9a6ab83bbdae1531b->enter($__internal_6554a9dbeb6a5d44e898aebb89f3a29a20aa100b0bdc17d9a6ab83bbdae1531b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_6554a9dbeb6a5d44e898aebb89f3a29a20aa100b0bdc17d9a6ab83bbdae1531b->leave($__internal_6554a9dbeb6a5d44e898aebb89f3a29a20aa100b0bdc17d9a6ab83bbdae1531b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
