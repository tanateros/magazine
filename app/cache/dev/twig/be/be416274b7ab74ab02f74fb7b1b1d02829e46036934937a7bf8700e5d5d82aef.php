<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_a1cb15909c006b2b313603e5f3ac8259fdcf86b2b964ff857685f93c708382af extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_552b7d5301f8885dded9acf63c0dcfe4cf20eea1c152a1d1e5012bb41b305e0c = $this->env->getExtension("native_profiler");
        $__internal_552b7d5301f8885dded9acf63c0dcfe4cf20eea1c152a1d1e5012bb41b305e0c->enter($__internal_552b7d5301f8885dded9acf63c0dcfe4cf20eea1c152a1d1e5012bb41b305e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552b7d5301f8885dded9acf63c0dcfe4cf20eea1c152a1d1e5012bb41b305e0c->leave($__internal_552b7d5301f8885dded9acf63c0dcfe4cf20eea1c152a1d1e5012bb41b305e0c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_235a6f8df0d85a94f3d191ae2bec9b409e07a41f548e16476fe3fd2fdd11c798 = $this->env->getExtension("native_profiler");
        $__internal_235a6f8df0d85a94f3d191ae2bec9b409e07a41f548e16476fe3fd2fdd11c798->enter($__internal_235a6f8df0d85a94f3d191ae2bec9b409e07a41f548e16476fe3fd2fdd11c798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_235a6f8df0d85a94f3d191ae2bec9b409e07a41f548e16476fe3fd2fdd11c798->leave($__internal_235a6f8df0d85a94f3d191ae2bec9b409e07a41f548e16476fe3fd2fdd11c798_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
