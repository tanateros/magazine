<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_862ab8e12df27671366b61d91f2b5f85d7c937b61ad6a040b61edd3b0a2a9bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 36);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9804f8a282b99a1d254b11a8e3292fccb38baceebab250d986fe5daad12db01 = $this->env->getExtension("native_profiler");
        $__internal_d9804f8a282b99a1d254b11a8e3292fccb38baceebab250d986fe5daad12db01->enter($__internal_d9804f8a282b99a1d254b11a8e3292fccb38baceebab250d986fe5daad12db01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        // line 37
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 37);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9804f8a282b99a1d254b11a8e3292fccb38baceebab250d986fe5daad12db01->leave($__internal_d9804f8a282b99a1d254b11a8e3292fccb38baceebab250d986fe5daad12db01_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac248401ccd51985fdb3fa8f717bc1f6e9f80505a5aa609909e3d62aeacfa6a = $this->env->getExtension("native_profiler");
        $__internal_6ac248401ccd51985fdb3fa8f717bc1f6e9f80505a5aa609909e3d62aeacfa6a->enter($__internal_6ac248401ccd51985fdb3fa8f717bc1f6e9f80505a5aa609909e3d62aeacfa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_6ac248401ccd51985fdb3fa8f717bc1f6e9f80505a5aa609909e3d62aeacfa6a->leave($__internal_6ac248401ccd51985fdb3fa8f717bc1f6e9f80505a5aa609909e3d62aeacfa6a_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d900d91d3c211f1326a5e9ce15877725d7b3af6f3a8f6e9dd420fa031ca14335 = $this->env->getExtension("native_profiler");
        $__internal_d900d91d3c211f1326a5e9ce15877725d7b3af6f3a8f6e9dd420fa031ca14335->enter($__internal_d900d91d3c211f1326a5e9ce15877725d7b3af6f3a8f6e9dd420fa031ca14335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d900d91d3c211f1326a5e9ce15877725d7b3af6f3a8f6e9dd420fa031ca14335->leave($__internal_d900d91d3c211f1326a5e9ce15877725d7b3af6f3a8f6e9dd420fa031ca14335_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ecbcfc30f8f84c2da99ebce30a6ad515541f6384d4c677d3cbc1f6c746289824 = $this->env->getExtension("native_profiler");
        $__internal_ecbcfc30f8f84c2da99ebce30a6ad515541f6384d4c677d3cbc1f6c746289824->enter($__internal_ecbcfc30f8f84c2da99ebce30a6ad515541f6384d4c677d3cbc1f6c746289824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 27)->display($context);
        echo "</li>
    <li>";
        // line 28
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 28)->display($context);
        echo "</li>
    <li>";
        // line 29
        $this->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 29)->display($context);
        echo "</li>
    <li>";
        // line 30
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 30)->display($context);
        echo "</li>
    <li>";
        // line 31
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 31)->display($context);
        echo "</li>
";
        
        $__internal_ecbcfc30f8f84c2da99ebce30a6ad515541f6384d4c677d3cbc1f6c746289824->leave($__internal_ecbcfc30f8f84c2da99ebce30a6ad515541f6384d4c677d3cbc1f6c746289824_prof);

    }

    // line 34
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_358be11d35794d92a3eb75708e0d17a0148739f397028b2f89f7cfb1b4670ee5 = $this->env->getExtension("native_profiler");
        $__internal_358be11d35794d92a3eb75708e0d17a0148739f397028b2f89f7cfb1b4670ee5->enter($__internal_358be11d35794d92a3eb75708e0d17a0148739f397028b2f89f7cfb1b4670ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_358be11d35794d92a3eb75708e0d17a0148739f397028b2f89f7cfb1b4670ee5->leave($__internal_358be11d35794d92a3eb75708e0d17a0148739f397028b2f89f7cfb1b4670ee5_prof);

    }

    // line 39
    public function block_form($context, array $blocks = array())
    {
        $__internal_e9b53dc7167b11b60b230ba3685ba106a2e7094554166b8433112c58a9f66097 = $this->env->getExtension("native_profiler");
        $__internal_e9b53dc7167b11b60b230ba3685ba106a2e7094554166b8433112c58a9f66097->enter($__internal_e9b53dc7167b11b60b230ba3685ba106a2e7094554166b8433112c58a9f66097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 40
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_e9b53dc7167b11b60b230ba3685ba106a2e7094554166b8433112c58a9f66097->leave($__internal_e9b53dc7167b11b60b230ba3685ba106a2e7094554166b8433112c58a9f66097_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
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
