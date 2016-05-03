<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cadaa22e5ba779684e6e294f0ccd64cbbbaa0772b5d0c565f701853675cb093f extends Twig_Template
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
        $__internal_ea0c108b559b983701402f6cd4eff3d4dd51c4c27063f040b31ee9064dd957bf = $this->env->getExtension("native_profiler");
        $__internal_ea0c108b559b983701402f6cd4eff3d4dd51c4c27063f040b31ee9064dd957bf->enter($__internal_ea0c108b559b983701402f6cd4eff3d4dd51c4c27063f040b31ee9064dd957bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ea0c108b559b983701402f6cd4eff3d4dd51c4c27063f040b31ee9064dd957bf->leave($__internal_ea0c108b559b983701402f6cd4eff3d4dd51c4c27063f040b31ee9064dd957bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
