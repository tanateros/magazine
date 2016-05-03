<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_f5a625dfd2bc46ee35783758cb7c6ed3e0b40c5e8cdd6864b076660938070853 extends Twig_Template
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
        $__internal_8ad4c0daab81ee93f0ebec8cc0944dcb7f087501259c44f141e791a0071bf6d0 = $this->env->getExtension("native_profiler");
        $__internal_8ad4c0daab81ee93f0ebec8cc0944dcb7f087501259c44f141e791a0071bf6d0->enter($__internal_8ad4c0daab81ee93f0ebec8cc0944dcb7f087501259c44f141e791a0071bf6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_8ad4c0daab81ee93f0ebec8cc0944dcb7f087501259c44f141e791a0071bf6d0->leave($__internal_8ad4c0daab81ee93f0ebec8cc0944dcb7f087501259c44f141e791a0071bf6d0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp | date }}*/
/* */
