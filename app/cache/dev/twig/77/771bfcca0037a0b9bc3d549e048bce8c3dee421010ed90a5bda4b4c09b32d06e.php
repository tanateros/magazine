<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_253d1d016ed87acaca06a8446cf586184f0db0279460472e503c873424069df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3229ce2301218ee0957353f446403a8fa74ab6ac0f60b8e061894ab121de1640 = $this->env->getExtension("native_profiler");
        $__internal_3229ce2301218ee0957353f446403a8fa74ab6ac0f60b8e061894ab121de1640->enter($__internal_3229ce2301218ee0957353f446403a8fa74ab6ac0f60b8e061894ab121de1640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3229ce2301218ee0957353f446403a8fa74ab6ac0f60b8e061894ab121de1640->leave($__internal_3229ce2301218ee0957353f446403a8fa74ab6ac0f60b8e061894ab121de1640_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
