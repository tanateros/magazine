<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_8abc798d0427bab341bb23a1611ea5e0c6d9368f9671b5ed3438715732d3b7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_410ba0d464c9e472a28ce243831c0d0e1c88bbbecc987b205de79ec6be9934d1 = $this->env->getExtension("native_profiler");
        $__internal_410ba0d464c9e472a28ce243831c0d0e1c88bbbecc987b205de79ec6be9934d1->enter($__internal_410ba0d464c9e472a28ce243831c0d0e1c88bbbecc987b205de79ec6be9934d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410ba0d464c9e472a28ce243831c0d0e1c88bbbecc987b205de79ec6be9934d1->leave($__internal_410ba0d464c9e472a28ce243831c0d0e1c88bbbecc987b205de79ec6be9934d1_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_214111d8d2411c74035b778da0d7f671e714736d7d611a042f2f9ab9a84f8818 = $this->env->getExtension("native_profiler");
        $__internal_214111d8d2411c74035b778da0d7f671e714736d7d611a042f2f9ab9a84f8818->enter($__internal_214111d8d2411c74035b778da0d7f671e714736d7d611a042f2f9ab9a84f8818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-title\">
        <th colspan=\"3\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
        </th>
    </tr>
";
        
        $__internal_214111d8d2411c74035b778da0d7f671e714736d7d611a042f2f9ab9a84f8818->leave($__internal_214111d8d2411c74035b778da0d7f671e714736d7d611a042f2f9ab9a84f8818_prof);

    }

    // line 22
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_bb482b48eb4b7fa633d044f8582342013c2225c9853595877038b9e44c001b97 = $this->env->getExtension("native_profiler");
        $__internal_bb482b48eb4b7fa633d044f8582342013c2225c9853595877038b9e44c001b97->enter($__internal_bb482b48eb4b7fa633d044f8582342013c2225c9853595877038b9e44c001b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 23
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 24
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 27
        echo "    </tr>
";
        
        $__internal_bb482b48eb4b7fa633d044f8582342013c2225c9853595877038b9e44c001b97->leave($__internal_bb482b48eb4b7fa633d044f8582342013c2225c9853595877038b9e44c001b97_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  65 => 24,  62 => 23,  56 => 22,  45 => 17,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     <tr class="sonata-ba-view-title">*/
/*         <th colspan="3">*/
/*             {{ admin.trans(name) }}*/
/*         </th>*/
/*     </tr>*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
