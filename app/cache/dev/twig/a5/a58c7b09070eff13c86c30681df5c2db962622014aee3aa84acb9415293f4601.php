<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1162fb9d48ce95a343595ad1cd48374aa9d068a112c0e42e4dd03478e6b9906d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_1683068f5c4dcce188aa6beef3a189c376160bec83cce510458fff1ba6f398f7 = $this->env->getExtension("native_profiler");
        $__internal_1683068f5c4dcce188aa6beef3a189c376160bec83cce510458fff1ba6f398f7->enter($__internal_1683068f5c4dcce188aa6beef3a189c376160bec83cce510458fff1ba6f398f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1683068f5c4dcce188aa6beef3a189c376160bec83cce510458fff1ba6f398f7->leave($__internal_1683068f5c4dcce188aa6beef3a189c376160bec83cce510458fff1ba6f398f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad313e86e64089c7d5064415f7dfe80f95761cc99afa99391ba78565f5d77c57 = $this->env->getExtension("native_profiler");
        $__internal_ad313e86e64089c7d5064415f7dfe80f95761cc99afa99391ba78565f5d77c57->enter($__internal_ad313e86e64089c7d5064415f7dfe80f95761cc99afa99391ba78565f5d77c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad313e86e64089c7d5064415f7dfe80f95761cc99afa99391ba78565f5d77c57->leave($__internal_ad313e86e64089c7d5064415f7dfe80f95761cc99afa99391ba78565f5d77c57_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_513f7ae282f06d347af870307c6e03ec67cb6d20907db0595795b536adf12f22 = $this->env->getExtension("native_profiler");
        $__internal_513f7ae282f06d347af870307c6e03ec67cb6d20907db0595795b536adf12f22->enter($__internal_513f7ae282f06d347af870307c6e03ec67cb6d20907db0595795b536adf12f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_513f7ae282f06d347af870307c6e03ec67cb6d20907db0595795b536adf12f22->leave($__internal_513f7ae282f06d347af870307c6e03ec67cb6d20907db0595795b536adf12f22_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ddfb6ffcb9a0e5b3c2da76142247213d0449f92c38043ba384304ff25e66de6 = $this->env->getExtension("native_profiler");
        $__internal_9ddfb6ffcb9a0e5b3c2da76142247213d0449f92c38043ba384304ff25e66de6->enter($__internal_9ddfb6ffcb9a0e5b3c2da76142247213d0449f92c38043ba384304ff25e66de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ddfb6ffcb9a0e5b3c2da76142247213d0449f92c38043ba384304ff25e66de6->leave($__internal_9ddfb6ffcb9a0e5b3c2da76142247213d0449f92c38043ba384304ff25e66de6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
