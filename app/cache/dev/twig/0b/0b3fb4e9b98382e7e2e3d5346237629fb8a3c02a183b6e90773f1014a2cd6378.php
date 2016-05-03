<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_93ed4f4a900bfbf57c6ed5b1f2ba311c6b5c14f0e57662220c05dd38aae183d5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e8838659424df8df399b2e4ea4c57b0cb6b32862b7c30011e4f391e49129a4 = $this->env->getExtension("native_profiler");
        $__internal_35e8838659424df8df399b2e4ea4c57b0cb6b32862b7c30011e4f391e49129a4->enter($__internal_35e8838659424df8df399b2e4ea4c57b0cb6b32862b7c30011e4f391e49129a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e8838659424df8df399b2e4ea4c57b0cb6b32862b7c30011e4f391e49129a4->leave($__internal_35e8838659424df8df399b2e4ea4c57b0cb6b32862b7c30011e4f391e49129a4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_80a3644e821c54ceb423a2ebdd6393284d801b7619ce758197bef21bfdbce3b6 = $this->env->getExtension("native_profiler");
        $__internal_80a3644e821c54ceb423a2ebdd6393284d801b7619ce758197bef21bfdbce3b6->enter($__internal_80a3644e821c54ceb423a2ebdd6393284d801b7619ce758197bef21bfdbce3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_80a3644e821c54ceb423a2ebdd6393284d801b7619ce758197bef21bfdbce3b6->leave($__internal_80a3644e821c54ceb423a2ebdd6393284d801b7619ce758197bef21bfdbce3b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
