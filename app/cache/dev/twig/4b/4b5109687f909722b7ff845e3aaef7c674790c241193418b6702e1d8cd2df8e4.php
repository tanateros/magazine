<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_2ecc5d81dc0f76d7a7c891086611e79d46b3718ae54f02f6bafb012d2102eb23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23b2fb27836233af94338ad1cc51b463373b39cf3405bc202b2b7a5908382fca = $this->env->getExtension("native_profiler");
        $__internal_23b2fb27836233af94338ad1cc51b463373b39cf3405bc202b2b7a5908382fca->enter($__internal_23b2fb27836233af94338ad1cc51b463373b39cf3405bc202b2b7a5908382fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b2fb27836233af94338ad1cc51b463373b39cf3405bc202b2b7a5908382fca->leave($__internal_23b2fb27836233af94338ad1cc51b463373b39cf3405bc202b2b7a5908382fca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
