<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_50ec2c949b6dbcd0a5f61f3d89d83484036377fe13a0fc7b45e36727858fdc9c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248311820c6dc3856287d2b1892f5fca2343edbbd44a54d58828b029f80cca0c = $this->env->getExtension("native_profiler");
        $__internal_248311820c6dc3856287d2b1892f5fca2343edbbd44a54d58828b029f80cca0c->enter($__internal_248311820c6dc3856287d2b1892f5fca2343edbbd44a54d58828b029f80cca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248311820c6dc3856287d2b1892f5fca2343edbbd44a54d58828b029f80cca0c->leave($__internal_248311820c6dc3856287d2b1892f5fca2343edbbd44a54d58828b029f80cca0c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b9fc1ec2be068fe9d7a2d4dbd0c84ed119985108e5456bbed575f6a7cb13aea1 = $this->env->getExtension("native_profiler");
        $__internal_b9fc1ec2be068fe9d7a2d4dbd0c84ed119985108e5456bbed575f6a7cb13aea1->enter($__internal_b9fc1ec2be068fe9d7a2d4dbd0c84ed119985108e5456bbed575f6a7cb13aea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b9fc1ec2be068fe9d7a2d4dbd0c84ed119985108e5456bbed575f6a7cb13aea1->leave($__internal_b9fc1ec2be068fe9d7a2d4dbd0c84ed119985108e5456bbed575f6a7cb13aea1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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
