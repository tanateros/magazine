<?php

/* @SonataAdmin/Button/edit_button.html.twig */
class __TwigTemplate_88403398fab246c833d3939fe59f378179e1b1b95283774fa5bec59002bcbe9c extends Twig_Template
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
        $__internal_b6bf51212483f724378d721bad9e1a6d7e9f00330f1439f61aedec1f2a7f73a3 = $this->env->getExtension("native_profiler");
        $__internal_b6bf51212483f724378d721bad9e1a6d7e9f00330f1439f61aedec1f2a7f73a3->enter($__internal_b6bf51212483f724378d721bad9e1a6d7e9f00330f1439f61aedec1f2a7f73a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_b6bf51212483f724378d721bad9e1a6d7e9f00330f1439f61aedec1f2a7f73a3->leave($__internal_b6bf51212483f724378d721bad9e1a6d7e9f00330f1439f61aedec1f2a7f73a3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.hasRoute('edit') and admin.id(object) and admin.isGranted('EDIT', object)%}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-edit"></i>*/
/*         {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
