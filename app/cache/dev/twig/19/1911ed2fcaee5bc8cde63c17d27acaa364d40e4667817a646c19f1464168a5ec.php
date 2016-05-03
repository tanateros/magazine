<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_95a7e361bbe664fe008548d1896511fb5d2bab13b29cd8e201cc63e13e215734 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bee3f821cc480421c350c949c665d863e131f4e3733b21fe58bdac4c4b2ef2d2 = $this->env->getExtension("native_profiler");
        $__internal_bee3f821cc480421c350c949c665d863e131f4e3733b21fe58bdac4c4b2ef2d2->enter($__internal_bee3f821cc480421c350c949c665d863e131f4e3733b21fe58bdac4c4b2ef2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee3f821cc480421c350c949c665d863e131f4e3733b21fe58bdac4c4b2ef2d2->leave($__internal_bee3f821cc480421c350c949c665d863e131f4e3733b21fe58bdac4c4b2ef2d2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b7815b82ef78ac69701871a6ce717938282e64d42657400e95ebfa5690cfdeff = $this->env->getExtension("native_profiler");
        $__internal_b7815b82ef78ac69701871a6ce717938282e64d42657400e95ebfa5690cfdeff->enter($__internal_b7815b82ef78ac69701871a6ce717938282e64d42657400e95ebfa5690cfdeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_b7815b82ef78ac69701871a6ce717938282e64d42657400e95ebfa5690cfdeff->leave($__internal_b7815b82ef78ac69701871a6ce717938282e64d42657400e95ebfa5690cfdeff_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
