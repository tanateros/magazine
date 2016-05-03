<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_d262b61014c812fad2d750321cbbb0f72db1d1d5b57daf7e51a747e9b0d126c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6adb2ec7441a111224601bc871d245b57e161f2d64c2e6cbf86d4a748fee244 = $this->env->getExtension("native_profiler");
        $__internal_e6adb2ec7441a111224601bc871d245b57e161f2d64c2e6cbf86d4a748fee244->enter($__internal_e6adb2ec7441a111224601bc871d245b57e161f2d64c2e6cbf86d4a748fee244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6adb2ec7441a111224601bc871d245b57e161f2d64c2e6cbf86d4a748fee244->leave($__internal_e6adb2ec7441a111224601bc871d245b57e161f2d64c2e6cbf86d4a748fee244_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8991f4c119e6faa8802fc3f91ec1dca92464bfdb3773aab277212d59071e06cb = $this->env->getExtension("native_profiler");
        $__internal_8991f4c119e6faa8802fc3f91ec1dca92464bfdb3773aab277212d59071e06cb->enter($__internal_8991f4c119e6faa8802fc3f91ec1dca92464bfdb3773aab277212d59071e06cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_8991f4c119e6faa8802fc3f91ec1dca92464bfdb3773aab277212d59071e06cb->leave($__internal_8991f4c119e6faa8802fc3f91ec1dca92464bfdb3773aab277212d59071e06cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
