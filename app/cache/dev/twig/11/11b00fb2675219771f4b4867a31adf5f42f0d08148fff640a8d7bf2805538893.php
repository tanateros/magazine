<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_d8877dfb0e8e618324a62976e0188c6d1fef090c81a8718dd6087cab9251ca2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9bb86fe2fc16c3ad73e654c5e1b0eec074ee96f6814efcc6d5d7275366a11b0 = $this->env->getExtension("native_profiler");
        $__internal_e9bb86fe2fc16c3ad73e654c5e1b0eec074ee96f6814efcc6d5d7275366a11b0->enter($__internal_e9bb86fe2fc16c3ad73e654c5e1b0eec074ee96f6814efcc6d5d7275366a11b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bb86fe2fc16c3ad73e654c5e1b0eec074ee96f6814efcc6d5d7275366a11b0->leave($__internal_e9bb86fe2fc16c3ad73e654c5e1b0eec074ee96f6814efcc6d5d7275366a11b0_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_91524dde7bc785771b3d2cbf249d3dd1290791843070a451c595e6d8b27c8425 = $this->env->getExtension("native_profiler");
        $__internal_91524dde7bc785771b3d2cbf249d3dd1290791843070a451c595e6d8b27c8425->enter($__internal_91524dde7bc785771b3d2cbf249d3dd1290791843070a451c595e6d8b27c8425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_91524dde7bc785771b3d2cbf249d3dd1290791843070a451c595e6d8b27c8425->leave($__internal_91524dde7bc785771b3d2cbf249d3dd1290791843070a451c595e6d8b27c8425_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ebd9fbdbf554ecc6d0cccf4fdad953c6631853d026b74eff9bc19e1775c80774 = $this->env->getExtension("native_profiler");
        $__internal_ebd9fbdbf554ecc6d0cccf4fdad953c6631853d026b74eff9bc19e1775c80774->enter($__internal_ebd9fbdbf554ecc6d0cccf4fdad953c6631853d026b74eff9bc19e1775c80774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_ebd9fbdbf554ecc6d0cccf4fdad953c6631853d026b74eff9bc19e1775c80774->leave($__internal_ebd9fbdbf554ecc6d0cccf4fdad953c6631853d026b74eff9bc19e1775c80774_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b4bc34fad10bf722421409109b360180a305c1b06626cc8693552b72e3ada04 = $this->env->getExtension("native_profiler");
        $__internal_9b4bc34fad10bf722421409109b360180a305c1b06626cc8693552b72e3ada04->enter($__internal_9b4bc34fad10bf722421409109b360180a305c1b06626cc8693552b72e3ada04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_9b4bc34fad10bf722421409109b360180a305c1b06626cc8693552b72e3ada04->leave($__internal_9b4bc34fad10bf722421409109b360180a305c1b06626cc8693552b72e3ada04_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  75 => 25,  64 => 21,  61 => 20,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
