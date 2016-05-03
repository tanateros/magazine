<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_83b98d5416a07b6d52761bfd6a830a7137cd5b229ee6e565cc937aaec24de800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfcbae17acd349f31779622236dbf3a77adb624b8dbbdb3d705e97722d5b2d75 = $this->env->getExtension("native_profiler");
        $__internal_dfcbae17acd349f31779622236dbf3a77adb624b8dbbdb3d705e97722d5b2d75->enter($__internal_dfcbae17acd349f31779622236dbf3a77adb624b8dbbdb3d705e97722d5b2d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dfcbae17acd349f31779622236dbf3a77adb624b8dbbdb3d705e97722d5b2d75->leave($__internal_dfcbae17acd349f31779622236dbf3a77adb624b8dbbdb3d705e97722d5b2d75_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_09e213f489a48c2a057a542360fcfbc1b3178bad371daa48e2d14a39302c6c50 = $this->env->getExtension("native_profiler");
        $__internal_09e213f489a48c2a057a542360fcfbc1b3178bad371daa48e2d14a39302c6c50->enter($__internal_09e213f489a48c2a057a542360fcfbc1b3178bad371daa48e2d14a39302c6c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_09e213f489a48c2a057a542360fcfbc1b3178bad371daa48e2d14a39302c6c50->leave($__internal_09e213f489a48c2a057a542360fcfbc1b3178bad371daa48e2d14a39302c6c50_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
