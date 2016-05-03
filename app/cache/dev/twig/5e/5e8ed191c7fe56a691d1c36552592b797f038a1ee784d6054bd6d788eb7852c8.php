<?php

/* create.html.twig */
class __TwigTemplate_90f8baa64988c63644cee7a5aaaf63cbc3cb084ba6270a3356b499cc6cd53fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "create.html.twig", 1);
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
        $__internal_30849aacbbb70703725955d1469c83fc9cf0690ef19e7746bc325c31feff4cab = $this->env->getExtension("native_profiler");
        $__internal_30849aacbbb70703725955d1469c83fc9cf0690ef19e7746bc325c31feff4cab->enter($__internal_30849aacbbb70703725955d1469c83fc9cf0690ef19e7746bc325c31feff4cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30849aacbbb70703725955d1469c83fc9cf0690ef19e7746bc325c31feff4cab->leave($__internal_30849aacbbb70703725955d1469c83fc9cf0690ef19e7746bc325c31feff4cab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c923fa0c104a6087b148faa199431a8667a218b45ccf7038820671da1872c4e = $this->env->getExtension("native_profiler");
        $__internal_0c923fa0c104a6087b148faa199431a8667a218b45ccf7038820671da1872c4e->enter($__internal_0c923fa0c104a6087b148faa199431a8667a218b45ccf7038820671da1872c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            asdasds
        </div>
    </div>
";
        
        $__internal_0c923fa0c104a6087b148faa199431a8667a218b45ccf7038820671da1872c4e->leave($__internal_0c923fa0c104a6087b148faa199431a8667a218b45ccf7038820671da1872c4e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b9dcc49dc11493ccfe86aeebec2b86fe7520dab4d604547dbfd9b50923e3b88 = $this->env->getExtension("native_profiler");
        $__internal_1b9dcc49dc11493ccfe86aeebec2b86fe7520dab4d604547dbfd9b50923e3b88->enter($__internal_1b9dcc49dc11493ccfe86aeebec2b86fe7520dab4d604547dbfd9b50923e3b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
";
        
        $__internal_1b9dcc49dc11493ccfe86aeebec2b86fe7520dab4d604547dbfd9b50923e3b88->leave($__internal_1b9dcc49dc11493ccfe86aeebec2b86fe7520dab4d604547dbfd9b50923e3b88_prof);

    }

    public function getTemplateName()
    {
        return "create.html.twig";
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
