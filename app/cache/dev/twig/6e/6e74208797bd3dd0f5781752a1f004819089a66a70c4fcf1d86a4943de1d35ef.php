<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_86b1e99ffea8a8b78e11c0333f7bd95f428c713da58732f0f58e2c57d4253d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a4541680dab6d92cf35479f7b635d9de646c37106f11eb0489c714e72c670e35 = $this->env->getExtension("native_profiler");
        $__internal_a4541680dab6d92cf35479f7b635d9de646c37106f11eb0489c714e72c670e35->enter($__internal_a4541680dab6d92cf35479f7b635d9de646c37106f11eb0489c714e72c670e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4541680dab6d92cf35479f7b635d9de646c37106f11eb0489c714e72c670e35->leave($__internal_a4541680dab6d92cf35479f7b635d9de646c37106f11eb0489c714e72c670e35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45552adb53e4f6654900e19156ae08b43db57de6784f872ff11b084467192180 = $this->env->getExtension("native_profiler");
        $__internal_45552adb53e4f6654900e19156ae08b43db57de6784f872ff11b084467192180->enter($__internal_45552adb53e4f6654900e19156ae08b43db57de6784f872ff11b084467192180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45552adb53e4f6654900e19156ae08b43db57de6784f872ff11b084467192180->leave($__internal_45552adb53e4f6654900e19156ae08b43db57de6784f872ff11b084467192180_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_735c4f977df8d51c8d8069d5e12278051e5cee51ba22d0597109891f12e9ffb5 = $this->env->getExtension("native_profiler");
        $__internal_735c4f977df8d51c8d8069d5e12278051e5cee51ba22d0597109891f12e9ffb5->enter($__internal_735c4f977df8d51c8d8069d5e12278051e5cee51ba22d0597109891f12e9ffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_735c4f977df8d51c8d8069d5e12278051e5cee51ba22d0597109891f12e9ffb5->leave($__internal_735c4f977df8d51c8d8069d5e12278051e5cee51ba22d0597109891f12e9ffb5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8ac91359921fc7206c972decbdb118e952deff6f3441869a08add22b076f6ea = $this->env->getExtension("native_profiler");
        $__internal_d8ac91359921fc7206c972decbdb118e952deff6f3441869a08add22b076f6ea->enter($__internal_d8ac91359921fc7206c972decbdb118e952deff6f3441869a08add22b076f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8ac91359921fc7206c972decbdb118e952deff6f3441869a08add22b076f6ea->leave($__internal_d8ac91359921fc7206c972decbdb118e952deff6f3441869a08add22b076f6ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
