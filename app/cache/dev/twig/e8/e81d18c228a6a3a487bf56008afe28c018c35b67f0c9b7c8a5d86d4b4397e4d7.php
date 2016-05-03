<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bd1630a022cdbc41a839ce8e6b5f863a0b8610de692f2a29107dfdddc8aa930d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03a3e90d7f7068e710f6510c2788c5a620547afa0b69eda4d6c7477ce9c9b5b9 = $this->env->getExtension("native_profiler");
        $__internal_03a3e90d7f7068e710f6510c2788c5a620547afa0b69eda4d6c7477ce9c9b5b9->enter($__internal_03a3e90d7f7068e710f6510c2788c5a620547afa0b69eda4d6c7477ce9c9b5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a3e90d7f7068e710f6510c2788c5a620547afa0b69eda4d6c7477ce9c9b5b9->leave($__internal_03a3e90d7f7068e710f6510c2788c5a620547afa0b69eda4d6c7477ce9c9b5b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7420200a339867bcafb6be4c56bf48786d8e25db8ce6a7d90221a9c03467931 = $this->env->getExtension("native_profiler");
        $__internal_b7420200a339867bcafb6be4c56bf48786d8e25db8ce6a7d90221a9c03467931->enter($__internal_b7420200a339867bcafb6be4c56bf48786d8e25db8ce6a7d90221a9c03467931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b7420200a339867bcafb6be4c56bf48786d8e25db8ce6a7d90221a9c03467931->leave($__internal_b7420200a339867bcafb6be4c56bf48786d8e25db8ce6a7d90221a9c03467931_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede5c241de71e907788d0698f05faea698d32ef29cd3e690d9d948049044b9c0 = $this->env->getExtension("native_profiler");
        $__internal_ede5c241de71e907788d0698f05faea698d32ef29cd3e690d9d948049044b9c0->enter($__internal_ede5c241de71e907788d0698f05faea698d32ef29cd3e690d9d948049044b9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ede5c241de71e907788d0698f05faea698d32ef29cd3e690d9d948049044b9c0->leave($__internal_ede5c241de71e907788d0698f05faea698d32ef29cd3e690d9d948049044b9c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
