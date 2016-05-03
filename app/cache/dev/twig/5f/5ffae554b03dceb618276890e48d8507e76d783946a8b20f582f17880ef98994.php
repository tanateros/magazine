<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_46cdd2bd11118124581cfc1bca5f4a9fdfc9c7971f6d140951290a5102aca124 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78ef1ec3a1ba53f5e0872d1a1390aef1c69d588211e259696b0c5d1340e6e64a = $this->env->getExtension("native_profiler");
        $__internal_78ef1ec3a1ba53f5e0872d1a1390aef1c69d588211e259696b0c5d1340e6e64a->enter($__internal_78ef1ec3a1ba53f5e0872d1a1390aef1c69d588211e259696b0c5d1340e6e64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ef1ec3a1ba53f5e0872d1a1390aef1c69d588211e259696b0c5d1340e6e64a->leave($__internal_78ef1ec3a1ba53f5e0872d1a1390aef1c69d588211e259696b0c5d1340e6e64a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c52e3cdfdfa60d0067674876e981e067775d953cc58b700e6bdc912847289602 = $this->env->getExtension("native_profiler");
        $__internal_c52e3cdfdfa60d0067674876e981e067775d953cc58b700e6bdc912847289602->enter($__internal_c52e3cdfdfa60d0067674876e981e067775d953cc58b700e6bdc912847289602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "@SonataAdmin/CRUD/action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_c52e3cdfdfa60d0067674876e981e067775d953cc58b700e6bdc912847289602->leave($__internal_c52e3cdfdfa60d0067674876e981e067775d953cc58b700e6bdc912847289602_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_946cb5c9d4a7d1260f55cdf50021370507c5c531825a8c61803ffcbd6f7fc543 = $this->env->getExtension("native_profiler");
        $__internal_946cb5c9d4a7d1260f55cdf50021370507c5c531825a8c61803ffcbd6f7fc543->enter($__internal_946cb5c9d4a7d1260f55cdf50021370507c5c531825a8c61803ffcbd6f7fc543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_946cb5c9d4a7d1260f55cdf50021370507c5c531825a8c61803ffcbd6f7fc543->leave($__internal_946cb5c9d4a7d1260f55cdf50021370507c5c531825a8c61803ffcbd6f7fc543_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_8708be5870a267f4b118a795488668d7f37b45639ca3dfca45da77ebe05c8b63 = $this->env->getExtension("native_profiler");
        $__internal_8708be5870a267f4b118a795488668d7f37b45639ca3dfca45da77ebe05c8b63->enter($__internal_8708be5870a267f4b118a795488668d7f37b45639ca3dfca45da77ebe05c8b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_8708be5870a267f4b118a795488668d7f37b45639ca3dfca45da77ebe05c8b63->leave($__internal_8708be5870a267f4b118a795488668d7f37b45639ca3dfca45da77ebe05c8b63_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
