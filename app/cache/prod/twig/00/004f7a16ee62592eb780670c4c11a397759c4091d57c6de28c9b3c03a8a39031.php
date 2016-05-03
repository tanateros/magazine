<?php

/* base.html.twig */
class __TwigTemplate_1d10c6599c3bc9d1057c680c823e1018034ec9a4385417ee6c2e916fa5be1671 extends Twig_Template
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
        $__internal_3f5a0974c5f1d75841938069748a3875bb125f1945646cfd5e62961884fcf015 = $this->env->getExtension("native_profiler");
        $__internal_3f5a0974c5f1d75841938069748a3875bb125f1945646cfd5e62961884fcf015->enter($__internal_3f5a0974c5f1d75841938069748a3875bb125f1945646cfd5e62961884fcf015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "            </div>
        </div>

        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_3f5a0974c5f1d75841938069748a3875bb125f1945646cfd5e62961884fcf015->leave($__internal_3f5a0974c5f1d75841938069748a3875bb125f1945646cfd5e62961884fcf015_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ae8d64a3af94115db8677dc677bf86664c6f948278c334ba3b5e769f1b9d5d9 = $this->env->getExtension("native_profiler");
        $__internal_9ae8d64a3af94115db8677dc677bf86664c6f948278c334ba3b5e769f1b9d5d9->enter($__internal_9ae8d64a3af94115db8677dc677bf86664c6f948278c334ba3b5e769f1b9d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ae8d64a3af94115db8677dc677bf86664c6f948278c334ba3b5e769f1b9d5d9->leave($__internal_9ae8d64a3af94115db8677dc677bf86664c6f948278c334ba3b5e769f1b9d5d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41f76e235e0b14b11e56b8ca216db55b8779a5e508a3509363693103ec275901 = $this->env->getExtension("native_profiler");
        $__internal_41f76e235e0b14b11e56b8ca216db55b8779a5e508a3509363693103ec275901->enter($__internal_41f76e235e0b14b11e56b8ca216db55b8779a5e508a3509363693103ec275901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
        ";
        
        $__internal_41f76e235e0b14b11e56b8ca216db55b8779a5e508a3509363693103ec275901->leave($__internal_41f76e235e0b14b11e56b8ca216db55b8779a5e508a3509363693103ec275901_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_4925931959703fb5ddd683de383926583c56246b242d36da5f881983d1b3e254 = $this->env->getExtension("native_profiler");
        $__internal_4925931959703fb5ddd683de383926583c56246b242d36da5f881983d1b3e254->enter($__internal_4925931959703fb5ddd683de383926583c56246b242d36da5f881983d1b3e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4925931959703fb5ddd683de383926583c56246b242d36da5f881983d1b3e254->leave($__internal_4925931959703fb5ddd683de383926583c56246b242d36da5f881983d1b3e254_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76ea2e17ae8d3bf472b6e440097cde08aa6a8acc400426f9cfa3f76335113715 = $this->env->getExtension("native_profiler");
        $__internal_76ea2e17ae8d3bf472b6e440097cde08aa6a8acc400426f9cfa3f76335113715->enter($__internal_76ea2e17ae8d3bf472b6e440097cde08aa6a8acc400426f9cfa3f76335113715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_76ea2e17ae8d3bf472b6e440097cde08aa6a8acc400426f9cfa3f76335113715->leave($__internal_76ea2e17ae8d3bf472b6e440097cde08aa6a8acc400426f9cfa3f76335113715_prof);

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
        return array (  108 => 19,  102 => 18,  91 => 14,  83 => 7,  77 => 6,  65 => 5,  56 => 21,  54 => 18,  49 => 15,  47 => 14,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
