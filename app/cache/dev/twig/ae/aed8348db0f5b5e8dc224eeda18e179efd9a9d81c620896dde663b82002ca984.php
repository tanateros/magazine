<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9c00e7e15a02bba2bef7f171996e9e767c8459235f10b029b9c38be4e1de7ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_761918f4606dcb16cd11a9744c40cf2e3f7469e8b64fc8114dbdf9fca4ad6e45 = $this->env->getExtension("native_profiler");
        $__internal_761918f4606dcb16cd11a9744c40cf2e3f7469e8b64fc8114dbdf9fca4ad6e45->enter($__internal_761918f4606dcb16cd11a9744c40cf2e3f7469e8b64fc8114dbdf9fca4ad6e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_761918f4606dcb16cd11a9744c40cf2e3f7469e8b64fc8114dbdf9fca4ad6e45->leave($__internal_761918f4606dcb16cd11a9744c40cf2e3f7469e8b64fc8114dbdf9fca4ad6e45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b0eee7ead64e247ea142ca1ac8854e50e580a36cc210923a6c975bad42a7c92 = $this->env->getExtension("native_profiler");
        $__internal_5b0eee7ead64e247ea142ca1ac8854e50e580a36cc210923a6c975bad42a7c92->enter($__internal_5b0eee7ead64e247ea142ca1ac8854e50e580a36cc210923a6c975bad42a7c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5b0eee7ead64e247ea142ca1ac8854e50e580a36cc210923a6c975bad42a7c92->leave($__internal_5b0eee7ead64e247ea142ca1ac8854e50e580a36cc210923a6c975bad42a7c92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
