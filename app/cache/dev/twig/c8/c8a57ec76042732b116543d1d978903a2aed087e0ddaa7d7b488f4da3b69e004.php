<?php

/* @SonataAdmin/CRUD/list__action_edit.html.twig */
class __TwigTemplate_403e43be02ce03871fc6fde1146ae404e5e78d26cdbe0317d6b22250572c476f extends Twig_Template
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
        $__internal_5a0541e57e811b6dd215bbfedaa3c9aa45d445052036ce522049a9cb374e3ed0 = $this->env->getExtension("native_profiler");
        $__internal_5a0541e57e811b6dd215bbfedaa3c9aa45d445052036ce522049a9cb374e3ed0->enter($__internal_5a0541e57e811b6dd215bbfedaa3c9aa45d445052036ce522049a9cb374e3ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action_edit.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"glyphicon glyphicon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_5a0541e57e811b6dd215bbfedaa3c9aa45d445052036ce522049a9cb374e3ed0->leave($__internal_5a0541e57e811b6dd215bbfedaa3c9aa45d445052036ce522049a9cb374e3ed0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}*/
/*     <a href="{{ admin.generateObjectUrl('edit', object) }}" class="btn btn-sm btn-default edit_link" title="{{ 'action_edit'|trans({}, 'SonataAdminBundle') }}">*/
/*         <i class="glyphicon glyphicon-edit"></i>*/
/*         {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
/* */
