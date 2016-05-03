<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_dc378b21e21a4de0fa11735d1267b4b28a489a6904ab23233baa5fac9893204e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_680ced953f13d61124b0b6d709d2c816a592178e6411b38c7a1c0ce51a8e46cc = $this->env->getExtension("native_profiler");
        $__internal_680ced953f13d61124b0b6d709d2c816a592178e6411b38c7a1c0ce51a8e46cc->enter($__internal_680ced953f13d61124b0b6d709d2c816a592178e6411b38c7a1c0ce51a8e46cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680ced953f13d61124b0b6d709d2c816a592178e6411b38c7a1c0ce51a8e46cc->leave($__internal_680ced953f13d61124b0b6d709d2c816a592178e6411b38c7a1c0ce51a8e46cc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
