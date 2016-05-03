<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9c61070087e381db7a537612e6f1aeb046c1145866b4c964e2d3d16c6153f2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_a7de56b4e7bb56f587872867bf8a2aa1370783c3d05012fa35ae174d4eeca106 = $this->env->getExtension("native_profiler");
        $__internal_a7de56b4e7bb56f587872867bf8a2aa1370783c3d05012fa35ae174d4eeca106->enter($__internal_a7de56b4e7bb56f587872867bf8a2aa1370783c3d05012fa35ae174d4eeca106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7de56b4e7bb56f587872867bf8a2aa1370783c3d05012fa35ae174d4eeca106->leave($__internal_a7de56b4e7bb56f587872867bf8a2aa1370783c3d05012fa35ae174d4eeca106_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43605153949840c03ac739f808ed8b8cc828c1b783514c841aba3e17c4e7ea7d = $this->env->getExtension("native_profiler");
        $__internal_43605153949840c03ac739f808ed8b8cc828c1b783514c841aba3e17c4e7ea7d->enter($__internal_43605153949840c03ac739f808ed8b8cc828c1b783514c841aba3e17c4e7ea7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_43605153949840c03ac739f808ed8b8cc828c1b783514c841aba3e17c4e7ea7d->leave($__internal_43605153949840c03ac739f808ed8b8cc828c1b783514c841aba3e17c4e7ea7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
