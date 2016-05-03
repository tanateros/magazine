<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_174fc9e37c91e7c8f1e0086c57b9faeaf97cc4a4934016372018f6b3d739d37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34dac73fbc6c9e0b1f0889308912fa089f2848f3bc3bc7d7555f93b6733c45b2 = $this->env->getExtension("native_profiler");
        $__internal_34dac73fbc6c9e0b1f0889308912fa089f2848f3bc3bc7d7555f93b6733c45b2->enter($__internal_34dac73fbc6c9e0b1f0889308912fa089f2848f3bc3bc7d7555f93b6733c45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34dac73fbc6c9e0b1f0889308912fa089f2848f3bc3bc7d7555f93b6733c45b2->leave($__internal_34dac73fbc6c9e0b1f0889308912fa089f2848f3bc3bc7d7555f93b6733c45b2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
