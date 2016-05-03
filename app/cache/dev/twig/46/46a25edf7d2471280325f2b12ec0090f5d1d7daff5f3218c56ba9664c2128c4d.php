<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_631d1d477e5077346b1f6a0b90b4630efa5446fa24e8f6a9e89890f8258affaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_e270ed238c5274e836e8dac03ac2321dfbf4f6c07468c113717908fc45805014 = $this->env->getExtension("native_profiler");
        $__internal_e270ed238c5274e836e8dac03ac2321dfbf4f6c07468c113717908fc45805014->enter($__internal_e270ed238c5274e836e8dac03ac2321dfbf4f6c07468c113717908fc45805014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e270ed238c5274e836e8dac03ac2321dfbf4f6c07468c113717908fc45805014->leave($__internal_e270ed238c5274e836e8dac03ac2321dfbf4f6c07468c113717908fc45805014_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de1d698ae5f39f5bc86a21ce577ce50a45abcb1d3ef25db58f9f89e21585cbbd = $this->env->getExtension("native_profiler");
        $__internal_de1d698ae5f39f5bc86a21ce577ce50a45abcb1d3ef25db58f9f89e21585cbbd->enter($__internal_de1d698ae5f39f5bc86a21ce577ce50a45abcb1d3ef25db58f9f89e21585cbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de1d698ae5f39f5bc86a21ce577ce50a45abcb1d3ef25db58f9f89e21585cbbd->leave($__internal_de1d698ae5f39f5bc86a21ce577ce50a45abcb1d3ef25db58f9f89e21585cbbd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62af72addfae86367c86fb4f81ec2cd594ea72cf6a47db0234ee8cceb6153940 = $this->env->getExtension("native_profiler");
        $__internal_62af72addfae86367c86fb4f81ec2cd594ea72cf6a47db0234ee8cceb6153940->enter($__internal_62af72addfae86367c86fb4f81ec2cd594ea72cf6a47db0234ee8cceb6153940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62af72addfae86367c86fb4f81ec2cd594ea72cf6a47db0234ee8cceb6153940->leave($__internal_62af72addfae86367c86fb4f81ec2cd594ea72cf6a47db0234ee8cceb6153940_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
