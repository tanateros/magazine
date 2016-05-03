<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_78f9f8c14945775ede98dda45b255289feea9372f5dfbe9cfe47f5e0c96263ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0c1c80bfd2aaee214b4a27c4ecdfb72cce66499cde4583cf595fb5abc8ba8a39 = $this->env->getExtension("native_profiler");
        $__internal_0c1c80bfd2aaee214b4a27c4ecdfb72cce66499cde4583cf595fb5abc8ba8a39->enter($__internal_0c1c80bfd2aaee214b4a27c4ecdfb72cce66499cde4583cf595fb5abc8ba8a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1c80bfd2aaee214b4a27c4ecdfb72cce66499cde4583cf595fb5abc8ba8a39->leave($__internal_0c1c80bfd2aaee214b4a27c4ecdfb72cce66499cde4583cf595fb5abc8ba8a39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bb0e035096ad1fe4a63e339dc34662266f08fa933c8122229816f92ad1cd31e = $this->env->getExtension("native_profiler");
        $__internal_9bb0e035096ad1fe4a63e339dc34662266f08fa933c8122229816f92ad1cd31e->enter($__internal_9bb0e035096ad1fe4a63e339dc34662266f08fa933c8122229816f92ad1cd31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bb0e035096ad1fe4a63e339dc34662266f08fa933c8122229816f92ad1cd31e->leave($__internal_9bb0e035096ad1fe4a63e339dc34662266f08fa933c8122229816f92ad1cd31e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b41beb4c2a4dfa413c746780b5d606fd745316742c271c923bb0c9c389966f2f = $this->env->getExtension("native_profiler");
        $__internal_b41beb4c2a4dfa413c746780b5d606fd745316742c271c923bb0c9c389966f2f->enter($__internal_b41beb4c2a4dfa413c746780b5d606fd745316742c271c923bb0c9c389966f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b41beb4c2a4dfa413c746780b5d606fd745316742c271c923bb0c9c389966f2f->leave($__internal_b41beb4c2a4dfa413c746780b5d606fd745316742c271c923bb0c9c389966f2f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90f879157477443f94f7714da69f79232896793698fd147cc3043af5c3094dc5 = $this->env->getExtension("native_profiler");
        $__internal_90f879157477443f94f7714da69f79232896793698fd147cc3043af5c3094dc5->enter($__internal_90f879157477443f94f7714da69f79232896793698fd147cc3043af5c3094dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_90f879157477443f94f7714da69f79232896793698fd147cc3043af5c3094dc5->leave($__internal_90f879157477443f94f7714da69f79232896793698fd147cc3043af5c3094dc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
