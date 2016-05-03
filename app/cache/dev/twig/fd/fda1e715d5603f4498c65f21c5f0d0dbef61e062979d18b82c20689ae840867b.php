<?php

/* :default:index.html.twig */
class __TwigTemplate_bafcbb86e0e54ee8ae08b1ea6f0a3819f022edd938b7ded59cec9c78e2ac3bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_e21d90127594dc7ba50f1392dcf3e5449ec7d05a52cd6ad796a023b71e9495b0 = $this->env->getExtension("native_profiler");
        $__internal_e21d90127594dc7ba50f1392dcf3e5449ec7d05a52cd6ad796a023b71e9495b0->enter($__internal_e21d90127594dc7ba50f1392dcf3e5449ec7d05a52cd6ad796a023b71e9495b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21d90127594dc7ba50f1392dcf3e5449ec7d05a52cd6ad796a023b71e9495b0->leave($__internal_e21d90127594dc7ba50f1392dcf3e5449ec7d05a52cd6ad796a023b71e9495b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39e40e69a12d2a0de31d38599dc991129a67293cdf5c2849b2825d7ddc9867c1 = $this->env->getExtension("native_profiler");
        $__internal_39e40e69a12d2a0de31d38599dc991129a67293cdf5c2849b2825d7ddc9867c1->enter($__internal_39e40e69a12d2a0de31d38599dc991129a67293cdf5c2849b2825d7ddc9867c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            asdasds
        </div>
    </div>
";
        
        $__internal_39e40e69a12d2a0de31d38599dc991129a67293cdf5c2849b2825d7ddc9867c1->leave($__internal_39e40e69a12d2a0de31d38599dc991129a67293cdf5c2849b2825d7ddc9867c1_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
