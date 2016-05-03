<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8a4e0fcd790e0ee3320907d636184de67234e99fc4d80a878cc738f1621fa791 extends Twig_Template
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
        $__internal_3036f748222be3830c7a3ceae1d5b3cb34ba399b4f7950a421c66fe8423b1292 = $this->env->getExtension("native_profiler");
        $__internal_3036f748222be3830c7a3ceae1d5b3cb34ba399b4f7950a421c66fe8423b1292->enter($__internal_3036f748222be3830c7a3ceae1d5b3cb34ba399b4f7950a421c66fe8423b1292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3036f748222be3830c7a3ceae1d5b3cb34ba399b4f7950a421c66fe8423b1292->leave($__internal_3036f748222be3830c7a3ceae1d5b3cb34ba399b4f7950a421c66fe8423b1292_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
