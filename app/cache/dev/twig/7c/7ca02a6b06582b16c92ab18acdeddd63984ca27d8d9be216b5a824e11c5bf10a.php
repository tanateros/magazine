<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_f077947509e46522841af887c833643df5325d8cb7d815ec07541dd1d468f6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7563adc64e70010a7ab19bf26722b19022690bb6dddbcc4cf492adb8a825d603 = $this->env->getExtension("native_profiler");
        $__internal_7563adc64e70010a7ab19bf26722b19022690bb6dddbcc4cf492adb8a825d603->enter($__internal_7563adc64e70010a7ab19bf26722b19022690bb6dddbcc4cf492adb8a825d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7563adc64e70010a7ab19bf26722b19022690bb6dddbcc4cf492adb8a825d603->leave($__internal_7563adc64e70010a7ab19bf26722b19022690bb6dddbcc4cf492adb8a825d603_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ef9734a25423a214403b70393d25c095a738da8f4a1892c29a74f17aeeabb801 = $this->env->getExtension("native_profiler");
        $__internal_ef9734a25423a214403b70393d25c095a738da8f4a1892c29a74f17aeeabb801->enter($__internal_ef9734a25423a214403b70393d25c095a738da8f4a1892c29a74f17aeeabb801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_ef9734a25423a214403b70393d25c095a738da8f4a1892c29a74f17aeeabb801->leave($__internal_ef9734a25423a214403b70393d25c095a738da8f4a1892c29a74f17aeeabb801_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
