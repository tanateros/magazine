<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_09d189fca0b353cbce0a293b7d0950706482734db9d3701f156d7cee9581c7fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_564997f077ebbca79c7d065b3d3cf8b35126e39984a9ba098ecad7c4afb79a48 = $this->env->getExtension("native_profiler");
        $__internal_564997f077ebbca79c7d065b3d3cf8b35126e39984a9ba098ecad7c4afb79a48->enter($__internal_564997f077ebbca79c7d065b3d3cf8b35126e39984a9ba098ecad7c4afb79a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564997f077ebbca79c7d065b3d3cf8b35126e39984a9ba098ecad7c4afb79a48->leave($__internal_564997f077ebbca79c7d065b3d3cf8b35126e39984a9ba098ecad7c4afb79a48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90a3e5ceab53e26e6eb25606bd78f35e3e4c4830fae670e43c049a76c1d25598 = $this->env->getExtension("native_profiler");
        $__internal_90a3e5ceab53e26e6eb25606bd78f35e3e4c4830fae670e43c049a76c1d25598->enter($__internal_90a3e5ceab53e26e6eb25606bd78f35e3e4c4830fae670e43c049a76c1d25598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_90a3e5ceab53e26e6eb25606bd78f35e3e4c4830fae670e43c049a76c1d25598->leave($__internal_90a3e5ceab53e26e6eb25606bd78f35e3e4c4830fae670e43c049a76c1d25598_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a556f035da3d974556d7536160e51f94471e4ab66f343409ad66a25cb3b2dd5 = $this->env->getExtension("native_profiler");
        $__internal_5a556f035da3d974556d7536160e51f94471e4ab66f343409ad66a25cb3b2dd5->enter($__internal_5a556f035da3d974556d7536160e51f94471e4ab66f343409ad66a25cb3b2dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5a556f035da3d974556d7536160e51f94471e4ab66f343409ad66a25cb3b2dd5->leave($__internal_5a556f035da3d974556d7536160e51f94471e4ab66f343409ad66a25cb3b2dd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_356ef7751d1168e95f81073943dbbb86a1f90c0ec72eb944c50c6d98e0eb5136 = $this->env->getExtension("native_profiler");
        $__internal_356ef7751d1168e95f81073943dbbb86a1f90c0ec72eb944c50c6d98e0eb5136->enter($__internal_356ef7751d1168e95f81073943dbbb86a1f90c0ec72eb944c50c6d98e0eb5136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_356ef7751d1168e95f81073943dbbb86a1f90c0ec72eb944c50c6d98e0eb5136->leave($__internal_356ef7751d1168e95f81073943dbbb86a1f90c0ec72eb944c50c6d98e0eb5136_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
