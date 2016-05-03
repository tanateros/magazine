<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_2f9065d396208e50848b6b3c04dc172f3ebf843439ac470d1d2510631ae302d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05541ab1b691c5bb74fad0ff3f5048de1b5c29743f22787615b472493ff94310 = $this->env->getExtension("native_profiler");
        $__internal_05541ab1b691c5bb74fad0ff3f5048de1b5c29743f22787615b472493ff94310->enter($__internal_05541ab1b691c5bb74fad0ff3f5048de1b5c29743f22787615b472493ff94310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05541ab1b691c5bb74fad0ff3f5048de1b5c29743f22787615b472493ff94310->leave($__internal_05541ab1b691c5bb74fad0ff3f5048de1b5c29743f22787615b472493ff94310_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
