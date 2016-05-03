<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4549a751c8aa9bdf4888cb3d466c56b0c7aeba5a52f6c9a5b3bec86b2be8c5ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_861e7f28594a1626eb490bab8ef1a4866faa2d241a5b5e29bd7f95f71f002406 = $this->env->getExtension("native_profiler");
        $__internal_861e7f28594a1626eb490bab8ef1a4866faa2d241a5b5e29bd7f95f71f002406->enter($__internal_861e7f28594a1626eb490bab8ef1a4866faa2d241a5b5e29bd7f95f71f002406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861e7f28594a1626eb490bab8ef1a4866faa2d241a5b5e29bd7f95f71f002406->leave($__internal_861e7f28594a1626eb490bab8ef1a4866faa2d241a5b5e29bd7f95f71f002406_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a78d4c9379476230517fcc2601f909cdeaa264fa1cecbd3b3714e7e2f5e3ba8 = $this->env->getExtension("native_profiler");
        $__internal_5a78d4c9379476230517fcc2601f909cdeaa264fa1cecbd3b3714e7e2f5e3ba8->enter($__internal_5a78d4c9379476230517fcc2601f909cdeaa264fa1cecbd3b3714e7e2f5e3ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a78d4c9379476230517fcc2601f909cdeaa264fa1cecbd3b3714e7e2f5e3ba8->leave($__internal_5a78d4c9379476230517fcc2601f909cdeaa264fa1cecbd3b3714e7e2f5e3ba8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3394908a011e9855b5bd83ca99b81eee3689786f0b2282ac90c9d9e760d6f70 = $this->env->getExtension("native_profiler");
        $__internal_e3394908a011e9855b5bd83ca99b81eee3689786f0b2282ac90c9d9e760d6f70->enter($__internal_e3394908a011e9855b5bd83ca99b81eee3689786f0b2282ac90c9d9e760d6f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3394908a011e9855b5bd83ca99b81eee3689786f0b2282ac90c9d9e760d6f70->leave($__internal_e3394908a011e9855b5bd83ca99b81eee3689786f0b2282ac90c9d9e760d6f70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cb5b2c8e9884b8f619ce3f20dc53e9576962030e87aa1ee19657e57a8cd94cf = $this->env->getExtension("native_profiler");
        $__internal_7cb5b2c8e9884b8f619ce3f20dc53e9576962030e87aa1ee19657e57a8cd94cf->enter($__internal_7cb5b2c8e9884b8f619ce3f20dc53e9576962030e87aa1ee19657e57a8cd94cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7cb5b2c8e9884b8f619ce3f20dc53e9576962030e87aa1ee19657e57a8cd94cf->leave($__internal_7cb5b2c8e9884b8f619ce3f20dc53e9576962030e87aa1ee19657e57a8cd94cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
