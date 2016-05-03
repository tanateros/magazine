<?php

/* ::base.html.twig */
class __TwigTemplate_fc5bb7ecb7db63067719ea534c89a7d99d351ba74aa5ae1af49c094c32788539 extends Twig_Template
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
        $__internal_408bc0ffccfa5c4606864f6a16a0da756c4372a81613e4400fa2646fed11f118 = $this->env->getExtension("native_profiler");
        $__internal_408bc0ffccfa5c4606864f6a16a0da756c4372a81613e4400fa2646fed11f118->enter($__internal_408bc0ffccfa5c4606864f6a16a0da756c4372a81613e4400fa2646fed11f118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_408bc0ffccfa5c4606864f6a16a0da756c4372a81613e4400fa2646fed11f118->leave($__internal_408bc0ffccfa5c4606864f6a16a0da756c4372a81613e4400fa2646fed11f118_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b947ef3e90c3aadcef7e703a46011669ece202e6447592f6b27a6a75722c62 = $this->env->getExtension("native_profiler");
        $__internal_77b947ef3e90c3aadcef7e703a46011669ece202e6447592f6b27a6a75722c62->enter($__internal_77b947ef3e90c3aadcef7e703a46011669ece202e6447592f6b27a6a75722c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77b947ef3e90c3aadcef7e703a46011669ece202e6447592f6b27a6a75722c62->leave($__internal_77b947ef3e90c3aadcef7e703a46011669ece202e6447592f6b27a6a75722c62_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af781d7c733ec55b943e01893f8e4d5b7ef11b2efd68f84dbcaf520c648f5aa4 = $this->env->getExtension("native_profiler");
        $__internal_af781d7c733ec55b943e01893f8e4d5b7ef11b2efd68f84dbcaf520c648f5aa4->enter($__internal_af781d7c733ec55b943e01893f8e4d5b7ef11b2efd68f84dbcaf520c648f5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        ";
        
        $__internal_af781d7c733ec55b943e01893f8e4d5b7ef11b2efd68f84dbcaf520c648f5aa4->leave($__internal_af781d7c733ec55b943e01893f8e4d5b7ef11b2efd68f84dbcaf520c648f5aa4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fca6e72e95825cf0d8d4fff8d5d315ca30801ffa09430738092aae5647eed2c5 = $this->env->getExtension("native_profiler");
        $__internal_fca6e72e95825cf0d8d4fff8d5d315ca30801ffa09430738092aae5647eed2c5->enter($__internal_fca6e72e95825cf0d8d4fff8d5d315ca30801ffa09430738092aae5647eed2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fca6e72e95825cf0d8d4fff8d5d315ca30801ffa09430738092aae5647eed2c5->leave($__internal_fca6e72e95825cf0d8d4fff8d5d315ca30801ffa09430738092aae5647eed2c5_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdb293980870d76dadea990fb823639a9f1843296f0bc3c6d8401eb25a40837f = $this->env->getExtension("native_profiler");
        $__internal_fdb293980870d76dadea990fb823639a9f1843296f0bc3c6d8401eb25a40837f->enter($__internal_fdb293980870d76dadea990fb823639a9f1843296f0bc3c6d8401eb25a40837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_fdb293980870d76dadea990fb823639a9f1843296f0bc3c6d8401eb25a40837f->leave($__internal_fdb293980870d76dadea990fb823639a9f1843296f0bc3c6d8401eb25a40837f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
