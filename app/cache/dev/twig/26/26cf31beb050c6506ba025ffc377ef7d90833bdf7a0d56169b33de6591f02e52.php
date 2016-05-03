<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_94481f5f8db27db0a4b50c568c0f6d635d0baece75a37f9c8c1b959262e0dfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af76b4946d7eac073f78ec5767cf5edb2bb0847f23184bcd1d4b365b0cbe4e62 = $this->env->getExtension("native_profiler");
        $__internal_af76b4946d7eac073f78ec5767cf5edb2bb0847f23184bcd1d4b365b0cbe4e62->enter($__internal_af76b4946d7eac073f78ec5767cf5edb2bb0847f23184bcd1d4b365b0cbe4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_af76b4946d7eac073f78ec5767cf5edb2bb0847f23184bcd1d4b365b0cbe4e62->leave($__internal_af76b4946d7eac073f78ec5767cf5edb2bb0847f23184bcd1d4b365b0cbe4e62_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_5477ee2987744234deeecc07144b30162ea743f370072b523138c9eeda6c77b8 = $this->env->getExtension("native_profiler");
        $__internal_5477ee2987744234deeecc07144b30162ea743f370072b523138c9eeda6c77b8->enter($__internal_5477ee2987744234deeecc07144b30162ea743f370072b523138c9eeda6c77b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter col-md-2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
        
        $__internal_5477ee2987744234deeecc07144b30162ea743f370072b523138c9eeda6c77b8->leave($__internal_5477ee2987744234deeecc07144b30162ea743f370072b523138c9eeda6c77b8_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_127f609fb701c3b3673cc142ee4f189d86d8c5a2f82a3b10b9454b29bef202c6 = $this->env->getExtension("native_profiler");
        $__internal_127f609fb701c3b3673cc142ee4f189d86d8c5a2f82a3b10b9454b29bef202c6->enter($__internal_127f609fb701c3b3673cc142ee4f189d86d8c5a2f82a3b10b9454b29bef202c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_127f609fb701c3b3673cc142ee4f189d86d8c5a2f82a3b10b9454b29bef202c6->leave($__internal_127f609fb701c3b3673cc142ee4f189d86d8c5a2f82a3b10b9454b29bef202c6_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_7054a84445aa1a6fa704a737003dee20f55f049e79fdb8343dd6e2233a8844b0 = $this->env->getExtension("native_profiler");
        $__internal_7054a84445aa1a6fa704a737003dee20f55f049e79fdb8343dd6e2233a8844b0->enter($__internal_7054a84445aa1a6fa704a737003dee20f55f049e79fdb8343dd6e2233a8844b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_7054a84445aa1a6fa704a737003dee20f55f049e79fdb8343dd6e2233a8844b0->leave($__internal_7054a84445aa1a6fa704a737003dee20f55f049e79fdb8343dd6e2233a8844b0_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_6f320efce67f7e69361b7c02f1ab89e616bdbff7e3f7c8a77c1e83caa9ea7a39 = $this->env->getExtension("native_profiler");
        $__internal_6f320efce67f7e69361b7c02f1ab89e616bdbff7e3f7c8a77c1e83caa9ea7a39->enter($__internal_6f320efce67f7e69361b7c02f1ab89e616bdbff7e3f7c8a77c1e83caa9ea7a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_6f320efce67f7e69361b7c02f1ab89e616bdbff7e3f7c8a77c1e83caa9ea7a39->leave($__internal_6f320efce67f7e69361b7c02f1ab89e616bdbff7e3f7c8a77c1e83caa9ea7a39_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_8a740a2789531952e0c377c62a00f154a148b19643178ca9eb17ec98c981308f = $this->env->getExtension("native_profiler");
        $__internal_8a740a2789531952e0c377c62a00f154a148b19643178ca9eb17ec98c981308f->enter($__internal_8a740a2789531952e0c377c62a00f154a148b19643178ca9eb17ec98c981308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_8a740a2789531952e0c377c62a00f154a148b19643178ca9eb17ec98c981308f->leave($__internal_8a740a2789531952e0c377c62a00f154a148b19643178ca9eb17ec98c981308f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  128 => 18,  117 => 17,  106 => 16,  98 => 33,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  78 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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
/* {% block content %}*/
/*     {% set _list_table   = block('list_table')|trim %}*/
/*     {% set _list_filters = block('list_filters')|trim %}*/
/* */
/*     {% block preview %}{% endblock %}*/
/*     {% block form %}{% endblock %}*/
/*     {% block list %}{% endblock %}*/
/*     {% block show %}{% endblock %}*/
/* */
/*     {% if _list_table|length > 0 or _list_filters|length > 0 %}*/
/*         <div class="row">*/
/*             <div class="sonata-ba-list {% if _list_filters %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                 {{ _list_table|raw }}*/
/*             </div>*/
/*             {% if _list_filters %}*/
/*                 <div class="sonata-ba-filter col-md-2">*/
/*                     {{ _list_filters|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
