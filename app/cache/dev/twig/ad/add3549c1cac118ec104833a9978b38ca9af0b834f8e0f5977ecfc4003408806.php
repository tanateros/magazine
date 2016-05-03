<?php

/* base.html.twig */
class __TwigTemplate_130bc37758353e23cd9986d2cd4e317ed93fe9f2939ed66ab0dd073464f62ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bb30e7592093f5a53141e8fb8d4720c35b1e47611231deced3658642d44f9e4 = $this->env->getExtension("native_profiler");
        $__internal_6bb30e7592093f5a53141e8fb8d4720c35b1e47611231deced3658642d44f9e4->enter($__internal_6bb30e7592093f5a53141e8fb8d4720c35b1e47611231deced3658642d44f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_6bb30e7592093f5a53141e8fb8d4720c35b1e47611231deced3658642d44f9e4->leave($__internal_6bb30e7592093f5a53141e8fb8d4720c35b1e47611231deced3658642d44f9e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c349c49138fcdbd59e59a10341d02dd6c107729f45adc2050a4eb7cd077654dc = $this->env->getExtension("native_profiler");
        $__internal_c349c49138fcdbd59e59a10341d02dd6c107729f45adc2050a4eb7cd077654dc->enter($__internal_c349c49138fcdbd59e59a10341d02dd6c107729f45adc2050a4eb7cd077654dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c349c49138fcdbd59e59a10341d02dd6c107729f45adc2050a4eb7cd077654dc->leave($__internal_c349c49138fcdbd59e59a10341d02dd6c107729f45adc2050a4eb7cd077654dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33ae0a7c7cd15258ce04d672a26b95d24522c817ce735582ee479342f5d9fbe0 = $this->env->getExtension("native_profiler");
        $__internal_33ae0a7c7cd15258ce04d672a26b95d24522c817ce735582ee479342f5d9fbe0->enter($__internal_33ae0a7c7cd15258ce04d672a26b95d24522c817ce735582ee479342f5d9fbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        ";
        
        $__internal_33ae0a7c7cd15258ce04d672a26b95d24522c817ce735582ee479342f5d9fbe0->leave($__internal_33ae0a7c7cd15258ce04d672a26b95d24522c817ce735582ee479342f5d9fbe0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7b2b9b225d8ac8c7fb6b798802c4e70d139da60cacc1007f78a58cbd0cd2db = $this->env->getExtension("native_profiler");
        $__internal_fc7b2b9b225d8ac8c7fb6b798802c4e70d139da60cacc1007f78a58cbd0cd2db->enter($__internal_fc7b2b9b225d8ac8c7fb6b798802c4e70d139da60cacc1007f78a58cbd0cd2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc7b2b9b225d8ac8c7fb6b798802c4e70d139da60cacc1007f78a58cbd0cd2db->leave($__internal_fc7b2b9b225d8ac8c7fb6b798802c4e70d139da60cacc1007f78a58cbd0cd2db_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95c7b41f35b58889e5d903c087028d3631d48d65c4728a2be6577e2991bd41da = $this->env->getExtension("native_profiler");
        $__internal_95c7b41f35b58889e5d903c087028d3631d48d65c4728a2be6577e2991bd41da->enter($__internal_95c7b41f35b58889e5d903c087028d3631d48d65c4728a2be6577e2991bd41da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_95c7b41f35b58889e5d903c087028d3631d48d65c4728a2be6577e2991bd41da->leave($__internal_95c7b41f35b58889e5d903c087028d3631d48d65c4728a2be6577e2991bd41da_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 14,  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 16,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="/css/bootstrap.min.css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
