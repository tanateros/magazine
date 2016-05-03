<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1156b848871eba65126a36093a4719484c2b56c9d3ddd85153554dd101de8e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 36);
        // line 36
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ba063567da88f510ea85f91e269ae1f2f033af05e1d7290dc588adff0662a36 = $this->env->getExtension("native_profiler");
        $__internal_0ba063567da88f510ea85f91e269ae1f2f033af05e1d7290dc588adff0662a36->enter($__internal_0ba063567da88f510ea85f91e269ae1f2f033af05e1d7290dc588adff0662a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ba063567da88f510ea85f91e269ae1f2f033af05e1d7290dc588adff0662a36->leave($__internal_0ba063567da88f510ea85f91e269ae1f2f033af05e1d7290dc588adff0662a36_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_69749487b96abe48639e63094f72a7708c4cbb3812041d1d2bb923cdc0545551 = $this->env->getExtension("native_profiler");
        $__internal_69749487b96abe48639e63094f72a7708c4cbb3812041d1d2bb923cdc0545551->enter($__internal_69749487b96abe48639e63094f72a7708c4cbb3812041d1d2bb923cdc0545551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_69749487b96abe48639e63094f72a7708c4cbb3812041d1d2bb923cdc0545551->leave($__internal_69749487b96abe48639e63094f72a7708c4cbb3812041d1d2bb923cdc0545551_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_6a60efd97c1d131b33945eb726fbd464fcde1ac11b5b7246083535195e14a8ee = $this->env->getExtension("native_profiler");
        $__internal_6a60efd97c1d131b33945eb726fbd464fcde1ac11b5b7246083535195e14a8ee->enter($__internal_6a60efd97c1d131b33945eb726fbd464fcde1ac11b5b7246083535195e14a8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6a60efd97c1d131b33945eb726fbd464fcde1ac11b5b7246083535195e14a8ee->leave($__internal_6a60efd97c1d131b33945eb726fbd464fcde1ac11b5b7246083535195e14a8ee_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d693ecbf7f324e7bdbfe40cbd95332a84e390b76bb7bf8c8e647d8dff1066366 = $this->env->getExtension("native_profiler");
        $__internal_d693ecbf7f324e7bdbfe40cbd95332a84e390b76bb7bf8c8e647d8dff1066366->enter($__internal_d693ecbf7f324e7bdbfe40cbd95332a84e390b76bb7bf8c8e647d8dff1066366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_d693ecbf7f324e7bdbfe40cbd95332a84e390b76bb7bf8c8e647d8dff1066366->leave($__internal_d693ecbf7f324e7bdbfe40cbd95332a84e390b76bb7bf8c8e647d8dff1066366_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_36df8c82712652e7034f8cd866495c25e733005e10546d0de2bf7238baa03875 = $this->env->getExtension("native_profiler");
        $__internal_36df8c82712652e7034f8cd866495c25e733005e10546d0de2bf7238baa03875->enter($__internal_36df8c82712652e7034f8cd866495c25e733005e10546d0de2bf7238baa03875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_36df8c82712652e7034f8cd866495c25e733005e10546d0de2bf7238baa03875->leave($__internal_36df8c82712652e7034f8cd866495c25e733005e10546d0de2bf7238baa03875_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_c92374efb9f2a478e6fa2b753c0f66e52376d13e3c2b2fcc688569c914fb229d = $this->env->getExtension("native_profiler");
        $__internal_c92374efb9f2a478e6fa2b753c0f66e52376d13e3c2b2fcc688569c914fb229d->enter($__internal_c92374efb9f2a478e6fa2b753c0f66e52376d13e3c2b2fcc688569c914fb229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_c92374efb9f2a478e6fa2b753c0f66e52376d13e3c2b2fcc688569c914fb229d->leave($__internal_c92374efb9f2a478e6fa2b753c0f66e52376d13e3c2b2fcc688569c914fb229d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 39,  132 => 34,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 37,  40 => 12,  12 => 36,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock%}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:show_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:acl_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
