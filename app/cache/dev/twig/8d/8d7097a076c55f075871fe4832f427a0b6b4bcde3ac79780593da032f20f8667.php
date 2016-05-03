<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_34f264548368651fa4649e4ed79896173b8c9e4522a4a87a787f8b08def413a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736f73ebbfd606f4b602127bfced80923c0a4dac82cbc62d8b954b345ece1281 = $this->env->getExtension("native_profiler");
        $__internal_736f73ebbfd606f4b602127bfced80923c0a4dac82cbc62d8b954b345ece1281->enter($__internal_736f73ebbfd606f4b602127bfced80923c0a4dac82cbc62d8b954b345ece1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_736f73ebbfd606f4b602127bfced80923c0a4dac82cbc62d8b954b345ece1281->leave($__internal_736f73ebbfd606f4b602127bfced80923c0a4dac82cbc62d8b954b345ece1281_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp | date }}*/
/* */
