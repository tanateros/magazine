<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_917e2993b40ad16774d3f6458227b2a5824e53d4b415d1495c3bbdbf1208a0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1a102d0cc039413bbe736b57317cc5de287464e968edbaf1314777ae153cd79 = $this->env->getExtension("native_profiler");
        $__internal_b1a102d0cc039413bbe736b57317cc5de287464e968edbaf1314777ae153cd79->enter($__internal_b1a102d0cc039413bbe736b57317cc5de287464e968edbaf1314777ae153cd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a102d0cc039413bbe736b57317cc5de287464e968edbaf1314777ae153cd79->leave($__internal_b1a102d0cc039413bbe736b57317cc5de287464e968edbaf1314777ae153cd79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
