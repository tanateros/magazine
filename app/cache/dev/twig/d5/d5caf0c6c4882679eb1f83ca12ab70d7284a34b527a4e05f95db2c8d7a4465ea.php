<?php

/* ::create.html.twig */
class __TwigTemplate_eef82002c42b0867a10b08d59b8ca9078a82f000eae6c27620e1916a3b8d07ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c08b3bd07bf1e6fe589fe7e6f861a50fe5e9f5986a2a45009040139e5c32467 = $this->env->getExtension("native_profiler");
        $__internal_8c08b3bd07bf1e6fe589fe7e6f861a50fe5e9f5986a2a45009040139e5c32467->enter($__internal_8c08b3bd07bf1e6fe589fe7e6f861a50fe5e9f5986a2a45009040139e5c32467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c08b3bd07bf1e6fe589fe7e6f861a50fe5e9f5986a2a45009040139e5c32467->leave($__internal_8c08b3bd07bf1e6fe589fe7e6f861a50fe5e9f5986a2a45009040139e5c32467_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1a5f3035f1851477621f6bacbbe60d257988cb3e61affb9492aadc9bc126f4 = $this->env->getExtension("native_profiler");
        $__internal_7f1a5f3035f1851477621f6bacbbe60d257988cb3e61affb9492aadc9bc126f4->enter($__internal_7f1a5f3035f1851477621f6bacbbe60d257988cb3e61affb9492aadc9bc126f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            asdasds
        </div>
    </div>
";
        
        $__internal_7f1a5f3035f1851477621f6bacbbe60d257988cb3e61affb9492aadc9bc126f4->leave($__internal_7f1a5f3035f1851477621f6bacbbe60d257988cb3e61affb9492aadc9bc126f4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cfcf97e28ec5f7b3fd01d8a7e24f47434b7a4d9d3b040d33a5efdb9eeefdb9c = $this->env->getExtension("native_profiler");
        $__internal_5cfcf97e28ec5f7b3fd01d8a7e24f47434b7a4d9d3b040d33a5efdb9eeefdb9c->enter($__internal_5cfcf97e28ec5f7b3fd01d8a7e24f47434b7a4d9d3b040d33a5efdb9eeefdb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
";
        
        $__internal_5cfcf97e28ec5f7b3fd01d8a7e24f47434b7a4d9d3b040d33a5efdb9eeefdb9c->leave($__internal_5cfcf97e28ec5f7b3fd01d8a7e24f47434b7a4d9d3b040d33a5efdb9eeefdb9c_prof);

    }

    public function getTemplateName()
    {
        return "::create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             asdasds*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="/css/bootstrap.min.css" />*/
/* {% endblock %}*/
/* */
