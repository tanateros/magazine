<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7060f2b87b4ab88917745814abea97c801a439eb1dd9c0a5d4095487230354af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc60675ea16bb7176502007ecf8a3eed2434459a99f1c84fda7965ff45e8bd0f = $this->env->getExtension("native_profiler");
        $__internal_bc60675ea16bb7176502007ecf8a3eed2434459a99f1c84fda7965ff45e8bd0f->enter($__internal_bc60675ea16bb7176502007ecf8a3eed2434459a99f1c84fda7965ff45e8bd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc60675ea16bb7176502007ecf8a3eed2434459a99f1c84fda7965ff45e8bd0f->leave($__internal_bc60675ea16bb7176502007ecf8a3eed2434459a99f1c84fda7965ff45e8bd0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a446b38e3eda5f07822be1963ef59728cdc1357753c75e512846f04dcd9bff4 = $this->env->getExtension("native_profiler");
        $__internal_8a446b38e3eda5f07822be1963ef59728cdc1357753c75e512846f04dcd9bff4->enter($__internal_8a446b38e3eda5f07822be1963ef59728cdc1357753c75e512846f04dcd9bff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8a446b38e3eda5f07822be1963ef59728cdc1357753c75e512846f04dcd9bff4->leave($__internal_8a446b38e3eda5f07822be1963ef59728cdc1357753c75e512846f04dcd9bff4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
