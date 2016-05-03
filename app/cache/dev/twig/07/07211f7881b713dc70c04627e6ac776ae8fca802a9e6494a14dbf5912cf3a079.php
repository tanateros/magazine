<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_f7ef3d0ec892bf752b3a392f82e8e3b4e2780b556160da5c1fa4974d17f7cb84 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f72b955806808775905b77eb0700e10eb375f36cda1701adcba79c71b3ad3cd = $this->env->getExtension("native_profiler");
        $__internal_6f72b955806808775905b77eb0700e10eb375f36cda1701adcba79c71b3ad3cd->enter($__internal_6f72b955806808775905b77eb0700e10eb375f36cda1701adcba79c71b3ad3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f72b955806808775905b77eb0700e10eb375f36cda1701adcba79c71b3ad3cd->leave($__internal_6f72b955806808775905b77eb0700e10eb375f36cda1701adcba79c71b3ad3cd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
