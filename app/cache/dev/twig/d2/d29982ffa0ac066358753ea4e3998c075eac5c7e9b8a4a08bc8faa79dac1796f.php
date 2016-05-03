<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_8623291c6b1c0cdebcbfdbb463427a94acb9927d34cedd1c2394b65b41a3cb73 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f6257965c7ee80c7077c8f291d2cd61dd9e09cb1b4abd0c4dc3ac76562da56 = $this->env->getExtension("native_profiler");
        $__internal_d8f6257965c7ee80c7077c8f291d2cd61dd9e09cb1b4abd0c4dc3ac76562da56->enter($__internal_d8f6257965c7ee80c7077c8f291d2cd61dd9e09cb1b4abd0c4dc3ac76562da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f6257965c7ee80c7077c8f291d2cd61dd9e09cb1b4abd0c4dc3ac76562da56->leave($__internal_d8f6257965c7ee80c7077c8f291d2cd61dd9e09cb1b4abd0c4dc3ac76562da56_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_737ba647d6a88e6d714a4041f7e64ca159512cb25058ad821a3971eac25cbb16 = $this->env->getExtension("native_profiler");
        $__internal_737ba647d6a88e6d714a4041f7e64ca159512cb25058ad821a3971eac25cbb16->enter($__internal_737ba647d6a88e6d714a4041f7e64ca159512cb25058ad821a3971eac25cbb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_737ba647d6a88e6d714a4041f7e64ca159512cb25058ad821a3971eac25cbb16->leave($__internal_737ba647d6a88e6d714a4041f7e64ca159512cb25058ad821a3971eac25cbb16_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
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
