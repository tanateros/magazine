<?php

/* default/index.html.twig */
class __TwigTemplate_b24ad6001540a29fca6a2a47eea83014f1c58652bfd5ada814bb2a31825e3184 extends Twig_Template
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
        $__internal_0ae0da6ceafbe9f87feb9ec8a12b04caf50604d32747871da3ef099376cae56c = $this->env->getExtension("native_profiler");
        $__internal_0ae0da6ceafbe9f87feb9ec8a12b04caf50604d32747871da3ef099376cae56c->enter($__internal_0ae0da6ceafbe9f87feb9ec8a12b04caf50604d32747871da3ef099376cae56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ae0da6ceafbe9f87feb9ec8a12b04caf50604d32747871da3ef099376cae56c->leave($__internal_0ae0da6ceafbe9f87feb9ec8a12b04caf50604d32747871da3ef099376cae56c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d14823267b5b7fb3dffff4c740236b46d30578df1c35b53214840de8461361f = $this->env->getExtension("native_profiler");
        $__internal_2d14823267b5b7fb3dffff4c740236b46d30578df1c35b53214840de8461361f->enter($__internal_2d14823267b5b7fb3dffff4c740236b46d30578df1c35b53214840de8461361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            asdasds
        </div>
    </div>
";
        
        $__internal_2d14823267b5b7fb3dffff4c740236b46d30578df1c35b53214840de8461361f->leave($__internal_2d14823267b5b7fb3dffff4c740236b46d30578df1c35b53214840de8461361f_prof);

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
