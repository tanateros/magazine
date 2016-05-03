<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_7095bb98de371c889639dace7a8cdeec8f4fb40ec97150c647017dffa12ebe4c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7887a93e68f4b52e6779de8355b467cd8fdae0f7dc65313d22c19973dde624ae = $this->env->getExtension("native_profiler");
        $__internal_7887a93e68f4b52e6779de8355b467cd8fdae0f7dc65313d22c19973dde624ae->enter($__internal_7887a93e68f4b52e6779de8355b467cd8fdae0f7dc65313d22c19973dde624ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7887a93e68f4b52e6779de8355b467cd8fdae0f7dc65313d22c19973dde624ae->leave($__internal_7887a93e68f4b52e6779de8355b467cd8fdae0f7dc65313d22c19973dde624ae_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3a6f61a7ca6d97cbd6d1db3b2fb912ffefd6b523b06059dd236e96200add5540 = $this->env->getExtension("native_profiler");
        $__internal_3a6f61a7ca6d97cbd6d1db3b2fb912ffefd6b523b06059dd236e96200add5540->enter($__internal_3a6f61a7ca6d97cbd6d1db3b2fb912ffefd6b523b06059dd236e96200add5540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_3a6f61a7ca6d97cbd6d1db3b2fb912ffefd6b523b06059dd236e96200add5540->leave($__internal_3a6f61a7ca6d97cbd6d1db3b2fb912ffefd6b523b06059dd236e96200add5540_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-default" href="#">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
