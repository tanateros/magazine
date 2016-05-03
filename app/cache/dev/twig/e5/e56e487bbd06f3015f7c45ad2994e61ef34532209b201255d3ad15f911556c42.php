<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_beaff28fcb87b0c126574e04a7e5d02cdd74c1ae25e06ed5458e4e898829a472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_92e884aba4a9f5b3ccfe30e3c7dc5b69f818466374017c66217414adbf7fd603 = $this->env->getExtension("native_profiler");
        $__internal_92e884aba4a9f5b3ccfe30e3c7dc5b69f818466374017c66217414adbf7fd603->enter($__internal_92e884aba4a9f5b3ccfe30e3c7dc5b69f818466374017c66217414adbf7fd603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92e884aba4a9f5b3ccfe30e3c7dc5b69f818466374017c66217414adbf7fd603->leave($__internal_92e884aba4a9f5b3ccfe30e3c7dc5b69f818466374017c66217414adbf7fd603_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8aca8ef3c11392be91f26559cf54f5524b38048d64339d7edd69cdc351324329 = $this->env->getExtension("native_profiler");
        $__internal_8aca8ef3c11392be91f26559cf54f5524b38048d64339d7edd69cdc351324329->enter($__internal_8aca8ef3c11392be91f26559cf54f5524b38048d64339d7edd69cdc351324329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_8aca8ef3c11392be91f26559cf54f5524b38048d64339d7edd69cdc351324329->leave($__internal_8aca8ef3c11392be91f26559cf54f5524b38048d64339d7edd69cdc351324329_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
