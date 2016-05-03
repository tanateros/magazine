<?php

/* default/index.html.twig */
class __TwigTemplate_c913e1592d7d33230ab5580f332492953b00afa1681424a36dd2fd63e57fa188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc9f98bb7d9710e2554ace1b072d112b56a437815341ace1544598eb33aa4c0a = $this->env->getExtension("native_profiler");
        $__internal_cc9f98bb7d9710e2554ace1b072d112b56a437815341ace1544598eb33aa4c0a->enter($__internal_cc9f98bb7d9710e2554ace1b072d112b56a437815341ace1544598eb33aa4c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9f98bb7d9710e2554ace1b072d112b56a437815341ace1544598eb33aa4c0a->leave($__internal_cc9f98bb7d9710e2554ace1b072d112b56a437815341ace1544598eb33aa4c0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e69162e5ff8f27711baf7a380c5c988252ba6fce738712a5c9947fdea4691c = $this->env->getExtension("native_profiler");
        $__internal_b6e69162e5ff8f27711baf7a380c5c988252ba6fce738712a5c9947fdea4691c->enter($__internal_b6e69162e5ff8f27711baf7a380c5c988252ba6fce738712a5c9947fdea4691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            asdasds
        </div>
    </div>
";
        
        $__internal_b6e69162e5ff8f27711baf7a380c5c988252ba6fce738712a5c9947fdea4691c->leave($__internal_b6e69162e5ff8f27711baf7a380c5c988252ba6fce738712a5c9947fdea4691c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
