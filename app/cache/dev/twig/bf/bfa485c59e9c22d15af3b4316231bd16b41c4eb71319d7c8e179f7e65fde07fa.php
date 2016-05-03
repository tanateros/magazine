<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_d3fda92ac8ba95ffd5ed869f7e0ef85f23817da55d0a4fdfb58c769b5dfdc53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f4100349acb8b2cc56661c672b7d6ffc44d42189b2b22af08a7047271486d9 = $this->env->getExtension("native_profiler");
        $__internal_c2f4100349acb8b2cc56661c672b7d6ffc44d42189b2b22af08a7047271486d9->enter($__internal_c2f4100349acb8b2cc56661c672b7d6ffc44d42189b2b22af08a7047271486d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f4100349acb8b2cc56661c672b7d6ffc44d42189b2b22af08a7047271486d9->leave($__internal_c2f4100349acb8b2cc56661c672b7d6ffc44d42189b2b22af08a7047271486d9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
