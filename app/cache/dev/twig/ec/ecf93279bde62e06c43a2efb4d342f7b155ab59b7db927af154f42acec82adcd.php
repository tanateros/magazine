<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_532141d7faaaca5083119635fdbe1aa665b62393e9998ee1d1dd0f7117e4966f extends Twig_Template
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
        $__internal_c4c80553116546fbc5f86653f693433e3d9891d20abd9d26b0979854b2c388fd = $this->env->getExtension("native_profiler");
        $__internal_c4c80553116546fbc5f86653f693433e3d9891d20abd9d26b0979854b2c388fd->enter($__internal_c4c80553116546fbc5f86653f693433e3d9891d20abd9d26b0979854b2c388fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c4c80553116546fbc5f86653f693433e3d9891d20abd9d26b0979854b2c388fd->leave($__internal_c4c80553116546fbc5f86653f693433e3d9891d20abd9d26b0979854b2c388fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
