<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5774741bc63552565c6561f31e2fc8bb1259b8eb999fdcfe51f7c103567b89b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb6647a3f75402383e6419372114d198c5b73930c6eb418f779ba94cffc62b1c = $this->env->getExtension("native_profiler");
        $__internal_cb6647a3f75402383e6419372114d198c5b73930c6eb418f779ba94cffc62b1c->enter($__internal_cb6647a3f75402383e6419372114d198c5b73930c6eb418f779ba94cffc62b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cb6647a3f75402383e6419372114d198c5b73930c6eb418f779ba94cffc62b1c->leave($__internal_cb6647a3f75402383e6419372114d198c5b73930c6eb418f779ba94cffc62b1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
