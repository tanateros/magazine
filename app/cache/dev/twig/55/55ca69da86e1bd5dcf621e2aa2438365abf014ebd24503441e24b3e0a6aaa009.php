<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_5e5743eefe40d47a79a685194db8dd34eb372758ae4889a500c2fc672371aca0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d84b1959294ac4d5cfa446c28c50c00eaa9a02fce2722b45f30e9f07400942 = $this->env->getExtension("native_profiler");
        $__internal_f9d84b1959294ac4d5cfa446c28c50c00eaa9a02fce2722b45f30e9f07400942->enter($__internal_f9d84b1959294ac4d5cfa446c28c50c00eaa9a02fce2722b45f30e9f07400942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d84b1959294ac4d5cfa446c28c50c00eaa9a02fce2722b45f30e9f07400942->leave($__internal_f9d84b1959294ac4d5cfa446c28c50c00eaa9a02fce2722b45f30e9f07400942_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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
