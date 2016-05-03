<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45508f35bd5dd8db4e480c855f5c95e8c2a41be5535d72f80da030b4eae70e4d extends Twig_Template
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
        $__internal_254ad78408d1806735cc47ef8774d73184d7206c442598e936e9b376ed417d4e = $this->env->getExtension("native_profiler");
        $__internal_254ad78408d1806735cc47ef8774d73184d7206c442598e936e9b376ed417d4e->enter($__internal_254ad78408d1806735cc47ef8774d73184d7206c442598e936e9b376ed417d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254ad78408d1806735cc47ef8774d73184d7206c442598e936e9b376ed417d4e->leave($__internal_254ad78408d1806735cc47ef8774d73184d7206c442598e936e9b376ed417d4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a898c1b20f9b614eed0c0626c8e917a0824cdb83281efbfc8a7968cd343c8ea9 = $this->env->getExtension("native_profiler");
        $__internal_a898c1b20f9b614eed0c0626c8e917a0824cdb83281efbfc8a7968cd343c8ea9->enter($__internal_a898c1b20f9b614eed0c0626c8e917a0824cdb83281efbfc8a7968cd343c8ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a898c1b20f9b614eed0c0626c8e917a0824cdb83281efbfc8a7968cd343c8ea9->leave($__internal_a898c1b20f9b614eed0c0626c8e917a0824cdb83281efbfc8a7968cd343c8ea9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48eab3f3fef6f72ac98cb4026ea8b493b7d79dc503cd545a8f75904ed53b6919 = $this->env->getExtension("native_profiler");
        $__internal_48eab3f3fef6f72ac98cb4026ea8b493b7d79dc503cd545a8f75904ed53b6919->enter($__internal_48eab3f3fef6f72ac98cb4026ea8b493b7d79dc503cd545a8f75904ed53b6919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48eab3f3fef6f72ac98cb4026ea8b493b7d79dc503cd545a8f75904ed53b6919->leave($__internal_48eab3f3fef6f72ac98cb4026ea8b493b7d79dc503cd545a8f75904ed53b6919_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e75fc22e073117ec4d8f10d95b1cd6eb265cacd4a44d0e7cfa8d9e1f1f135cb = $this->env->getExtension("native_profiler");
        $__internal_0e75fc22e073117ec4d8f10d95b1cd6eb265cacd4a44d0e7cfa8d9e1f1f135cb->enter($__internal_0e75fc22e073117ec4d8f10d95b1cd6eb265cacd4a44d0e7cfa8d9e1f1f135cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e75fc22e073117ec4d8f10d95b1cd6eb265cacd4a44d0e7cfa8d9e1f1f135cb->leave($__internal_0e75fc22e073117ec4d8f10d95b1cd6eb265cacd4a44d0e7cfa8d9e1f1f135cb_prof);

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
