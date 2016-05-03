<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_9da74455f12d6d4702bf5b7b0026e6df230e6fb82a50e63c830f41af7c266e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5dcb3263511a54c096eaedea0e990afe9ab15c6bab2357199c663c9098589b9 = $this->env->getExtension("native_profiler");
        $__internal_f5dcb3263511a54c096eaedea0e990afe9ab15c6bab2357199c663c9098589b9->enter($__internal_f5dcb3263511a54c096eaedea0e990afe9ab15c6bab2357199c663c9098589b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5dcb3263511a54c096eaedea0e990afe9ab15c6bab2357199c663c9098589b9->leave($__internal_f5dcb3263511a54c096eaedea0e990afe9ab15c6bab2357199c663c9098589b9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
