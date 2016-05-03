<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_743c7c1a770a92330d564cc1b039bc78550c51b05607ac782d620c0f5d8be966 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed077e0a00dfe919cff7a5f52621649514c2d2e230a2f6b690327fac41d40a93 = $this->env->getExtension("native_profiler");
        $__internal_ed077e0a00dfe919cff7a5f52621649514c2d2e230a2f6b690327fac41d40a93->enter($__internal_ed077e0a00dfe919cff7a5f52621649514c2d2e230a2f6b690327fac41d40a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed077e0a00dfe919cff7a5f52621649514c2d2e230a2f6b690327fac41d40a93->leave($__internal_ed077e0a00dfe919cff7a5f52621649514c2d2e230a2f6b690327fac41d40a93_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f41852e155e2efc28cea5760b811fb1b815859ae6e3e59c1a7646c09115f4195 = $this->env->getExtension("native_profiler");
        $__internal_f41852e155e2efc28cea5760b811fb1b815859ae6e3e59c1a7646c09115f4195->enter($__internal_f41852e155e2efc28cea5760b811fb1b815859ae6e3e59c1a7646c09115f4195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_f41852e155e2efc28cea5760b811fb1b815859ae6e3e59c1a7646c09115f4195->leave($__internal_f41852e155e2efc28cea5760b811fb1b815859ae6e3e59c1a7646c09115f4195_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
