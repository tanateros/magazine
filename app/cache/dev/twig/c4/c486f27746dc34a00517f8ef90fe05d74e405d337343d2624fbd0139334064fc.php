<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_b1b730e7c4571614effdfa11d0ac0a5f5a8e48b86556f9fc4a0727e466990a93 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47ca6b3a73f9e85c96ced4e9ff8f8c42d14ae7b557f7cbd3470682dbd32a14ee = $this->env->getExtension("native_profiler");
        $__internal_47ca6b3a73f9e85c96ced4e9ff8f8c42d14ae7b557f7cbd3470682dbd32a14ee->enter($__internal_47ca6b3a73f9e85c96ced4e9ff8f8c42d14ae7b557f7cbd3470682dbd32a14ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ca6b3a73f9e85c96ced4e9ff8f8c42d14ae7b557f7cbd3470682dbd32a14ee->leave($__internal_47ca6b3a73f9e85c96ced4e9ff8f8c42d14ae7b557f7cbd3470682dbd32a14ee_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4f0ce5a64fc01286006bf863c9c1c961fd6fd33fcd2f9fb2dadf56b72978a6d3 = $this->env->getExtension("native_profiler");
        $__internal_4f0ce5a64fc01286006bf863c9c1c961fd6fd33fcd2f9fb2dadf56b72978a6d3->enter($__internal_4f0ce5a64fc01286006bf863c9c1c961fd6fd33fcd2f9fb2dadf56b72978a6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_4f0ce5a64fc01286006bf863c9c1c961fd6fd33fcd2f9fb2dadf56b72978a6d3->leave($__internal_4f0ce5a64fc01286006bf863c9c1c961fd6fd33fcd2f9fb2dadf56b72978a6d3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
