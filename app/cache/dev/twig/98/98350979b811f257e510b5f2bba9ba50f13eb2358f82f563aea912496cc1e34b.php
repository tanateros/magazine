<?php

/* @SonataAdmin/Button/list_button.html.twig */
class __TwigTemplate_f69b7da5e70da3d41570082d9882d71679716829fe48cabf4438cf1010581035 extends Twig_Template
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
        $__internal_e02903a710e4b1535026df550a782ff84f10cb0e58ea66d9d13c9cd354f8fb4f = $this->env->getExtension("native_profiler");
        $__internal_e02903a710e4b1535026df550a782ff84f10cb0e58ea66d9d13c9cd354f8fb4f->enter($__internal_e02903a710e4b1535026df550a782ff84f10cb0e58ea66d9d13c9cd354f8fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_e02903a710e4b1535026df550a782ff84f10cb0e58ea66d9d13c9cd354f8fb4f->leave($__internal_e02903a710e4b1535026df550a782ff84f10cb0e58ea66d9d13c9cd354f8fb4f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/list_button.html.twig";
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
/* {% if admin.hasroute('list') and admin.isGranted('LIST')%}*/
/*     <a class="sonata-action-element" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-list"></i>*/
/*         {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
