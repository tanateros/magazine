<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_ccbf171680a375f72f73b8e8600696f5e95e0b5b7f5a5eb5ce75b673b260c063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd8332ff056b2a7d0bba245e8bfe3efae75a0d1877e44e7817dba9aab18c6d77 = $this->env->getExtension("native_profiler");
        $__internal_cd8332ff056b2a7d0bba245e8bfe3efae75a0d1877e44e7817dba9aab18c6d77->enter($__internal_cd8332ff056b2a7d0bba245e8bfe3efae75a0d1877e44e7817dba9aab18c6d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8332ff056b2a7d0bba245e8bfe3efae75a0d1877e44e7817dba9aab18c6d77->leave($__internal_cd8332ff056b2a7d0bba245e8bfe3efae75a0d1877e44e7817dba9aab18c6d77_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
