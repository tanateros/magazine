<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_05ff281b4d0942a844f8cfa27f36a974b804323c19ac6e5bca9db101c3db1c2d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69447767f9957f75bfdbe09aae447ae10f08fc9f1f4013e2c618e9ec184eac70 = $this->env->getExtension("native_profiler");
        $__internal_69447767f9957f75bfdbe09aae447ae10f08fc9f1f4013e2c618e9ec184eac70->enter($__internal_69447767f9957f75bfdbe09aae447ae10f08fc9f1f4013e2c618e9ec184eac70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69447767f9957f75bfdbe09aae447ae10f08fc9f1f4013e2c618e9ec184eac70->leave($__internal_69447767f9957f75bfdbe09aae447ae10f08fc9f1f4013e2c618e9ec184eac70_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bbe1b1ff62115fd52078699391b45546c4da836f07aa0eccb3b6369eb9590968 = $this->env->getExtension("native_profiler");
        $__internal_bbe1b1ff62115fd52078699391b45546c4da836f07aa0eccb3b6369eb9590968->enter($__internal_bbe1b1ff62115fd52078699391b45546c4da836f07aa0eccb3b6369eb9590968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_bbe1b1ff62115fd52078699391b45546c4da836f07aa0eccb3b6369eb9590968->leave($__internal_bbe1b1ff62115fd52078699391b45546c4da836f07aa0eccb3b6369eb9590968_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
