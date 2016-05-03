<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_781579eeb6b09d81481427b5faf508c39812c86a660b097eadc0fe8a79f702bb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6c0dcea9f8e2cccf4fd1aefceee89b202ce009fadf17b5e8097399e7ec0c7a5 = $this->env->getExtension("native_profiler");
        $__internal_a6c0dcea9f8e2cccf4fd1aefceee89b202ce009fadf17b5e8097399e7ec0c7a5->enter($__internal_a6c0dcea9f8e2cccf4fd1aefceee89b202ce009fadf17b5e8097399e7ec0c7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6c0dcea9f8e2cccf4fd1aefceee89b202ce009fadf17b5e8097399e7ec0c7a5->leave($__internal_a6c0dcea9f8e2cccf4fd1aefceee89b202ce009fadf17b5e8097399e7ec0c7a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e918fd34078662fbcb60b9f5c02ca4434b3e0c0e24998c5a928fb8153b254e88 = $this->env->getExtension("native_profiler");
        $__internal_e918fd34078662fbcb60b9f5c02ca4434b3e0c0e24998c5a928fb8153b254e88->enter($__internal_e918fd34078662fbcb60b9f5c02ca4434b3e0c0e24998c5a928fb8153b254e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e918fd34078662fbcb60b9f5c02ca4434b3e0c0e24998c5a928fb8153b254e88->leave($__internal_e918fd34078662fbcb60b9f5c02ca4434b3e0c0e24998c5a928fb8153b254e88_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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
