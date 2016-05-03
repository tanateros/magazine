<?php

/* @SonataAdmin/ajax_layout.html.twig */
class __TwigTemplate_222b53c4a3cd04e71ffdafd13bf00e2997b280ee990c1e2da1abe2fc1de7f11e extends Twig_Template
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
        $__internal_5a19dfd991e871dbb7a9fdb04837d7e20600f852ed63621be2276b16e637f5f7 = $this->env->getExtension("native_profiler");
        $__internal_5a19dfd991e871dbb7a9fdb04837d7e20600f852ed63621be2276b16e637f5f7->enter($__internal_5a19dfd991e871dbb7a9fdb04837d7e20600f852ed63621be2276b16e637f5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a19dfd991e871dbb7a9fdb04837d7e20600f852ed63621be2276b16e637f5f7->leave($__internal_5a19dfd991e871dbb7a9fdb04837d7e20600f852ed63621be2276b16e637f5f7_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_9bcb2aebeed8b18882beae4d44be07807af4163dff0d671867f418767a78c1fc = $this->env->getExtension("native_profiler");
        $__internal_9bcb2aebeed8b18882beae4d44be07807af4163dff0d671867f418767a78c1fc->enter($__internal_9bcb2aebeed8b18882beae4d44be07807af4163dff0d671867f418767a78c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9bcb2aebeed8b18882beae4d44be07807af4163dff0d671867f418767a78c1fc->leave($__internal_9bcb2aebeed8b18882beae4d44be07807af4163dff0d671867f418767a78c1fc_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_7d8ff06c530f00eb396b827a3a0978059f23725796aff62e49495490aa265c55 = $this->env->getExtension("native_profiler");
        $__internal_7d8ff06c530f00eb396b827a3a0978059f23725796aff62e49495490aa265c55->enter($__internal_7d8ff06c530f00eb396b827a3a0978059f23725796aff62e49495490aa265c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_7d8ff06c530f00eb396b827a3a0978059f23725796aff62e49495490aa265c55->leave($__internal_7d8ff06c530f00eb396b827a3a0978059f23725796aff62e49495490aa265c55_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_adf0c16c1940a114089c4f333d2291f8c9dcccb88394c56e71a2eedcfcc2d6d6 = $this->env->getExtension("native_profiler");
        $__internal_adf0c16c1940a114089c4f333d2291f8c9dcccb88394c56e71a2eedcfcc2d6d6->enter($__internal_adf0c16c1940a114089c4f333d2291f8c9dcccb88394c56e71a2eedcfcc2d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_adf0c16c1940a114089c4f333d2291f8c9dcccb88394c56e71a2eedcfcc2d6d6->leave($__internal_adf0c16c1940a114089c4f333d2291f8c9dcccb88394c56e71a2eedcfcc2d6d6_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_c370670f3c254544bcee010e729c9dfeaeee929ab470bf9b3c758d4123328256 = $this->env->getExtension("native_profiler");
        $__internal_c370670f3c254544bcee010e729c9dfeaeee929ab470bf9b3c758d4123328256->enter($__internal_c370670f3c254544bcee010e729c9dfeaeee929ab470bf9b3c758d4123328256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_c370670f3c254544bcee010e729c9dfeaeee929ab470bf9b3c758d4123328256->leave($__internal_c370670f3c254544bcee010e729c9dfeaeee929ab470bf9b3c758d4123328256_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_e4352607e55a7390edae41a91b50f97edcaac17fb6320d2a66a03a009db9e123 = $this->env->getExtension("native_profiler");
        $__internal_e4352607e55a7390edae41a91b50f97edcaac17fb6320d2a66a03a009db9e123->enter($__internal_e4352607e55a7390edae41a91b50f97edcaac17fb6320d2a66a03a009db9e123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_e4352607e55a7390edae41a91b50f97edcaac17fb6320d2a66a03a009db9e123->leave($__internal_e4352607e55a7390edae41a91b50f97edcaac17fb6320d2a66a03a009db9e123_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/ajax_layout.html.twig";
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
