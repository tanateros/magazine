<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_e50506136d534a90f27d46ec25e1bcfa7d6af83d7f8b1a4cc4dc5aa232838277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
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
        $__internal_3997793e86f7cb65c2c0a1185a6cd77797acb30272ea6bf3c5106729f96065a9 = $this->env->getExtension("native_profiler");
        $__internal_3997793e86f7cb65c2c0a1185a6cd77797acb30272ea6bf3c5106729f96065a9->enter($__internal_3997793e86f7cb65c2c0a1185a6cd77797acb30272ea6bf3c5106729f96065a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3997793e86f7cb65c2c0a1185a6cd77797acb30272ea6bf3c5106729f96065a9->leave($__internal_3997793e86f7cb65c2c0a1185a6cd77797acb30272ea6bf3c5106729f96065a9_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_41a92963cc4a6070b7387dd1bae0cb9c7a67a9391f501378baaf996b93fe931e = $this->env->getExtension("native_profiler");
        $__internal_41a92963cc4a6070b7387dd1bae0cb9c7a67a9391f501378baaf996b93fe931e->enter($__internal_41a92963cc4a6070b7387dd1bae0cb9c7a67a9391f501378baaf996b93fe931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

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
        
        $__internal_41a92963cc4a6070b7387dd1bae0cb9c7a67a9391f501378baaf996b93fe931e->leave($__internal_41a92963cc4a6070b7387dd1bae0cb9c7a67a9391f501378baaf996b93fe931e_prof);

    }

    // line 22
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_bea40f7d311cfb1aafc0b97a7f155a225ce716a19770e966ec01247b622f2b3f = $this->env->getExtension("native_profiler");
        $__internal_bea40f7d311cfb1aafc0b97a7f155a225ce716a19770e966ec01247b622f2b3f->enter($__internal_bea40f7d311cfb1aafc0b97a7f155a225ce716a19770e966ec01247b622f2b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_bea40f7d311cfb1aafc0b97a7f155a225ce716a19770e966ec01247b622f2b3f->leave($__internal_bea40f7d311cfb1aafc0b97a7f155a225ce716a19770e966ec01247b622f2b3f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
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
