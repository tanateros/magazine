<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_5cf34c4320506e20dc6663313b3924e0d65985414f7a978612bed0cf408eb9d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_413e868566e7f72e6865a97a40fff23521381eff21f9d29602a57714100615a6 = $this->env->getExtension("native_profiler");
        $__internal_413e868566e7f72e6865a97a40fff23521381eff21f9d29602a57714100615a6->enter($__internal_413e868566e7f72e6865a97a40fff23521381eff21f9d29602a57714100615a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413e868566e7f72e6865a97a40fff23521381eff21f9d29602a57714100615a6->leave($__internal_413e868566e7f72e6865a97a40fff23521381eff21f9d29602a57714100615a6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
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
