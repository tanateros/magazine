<?php

/* create.html.twig */
class __TwigTemplate_feed469138cb3aae05550c85e0084d39ed369e00409dbf448d1ba25f8c200daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99aeb1666f15df598ea14dbe9486a5582a0bb607c91a2f9076437a9b2d7ed0d2 = $this->env->getExtension("native_profiler");
        $__internal_99aeb1666f15df598ea14dbe9486a5582a0bb607c91a2f9076437a9b2d7ed0d2->enter($__internal_99aeb1666f15df598ea14dbe9486a5582a0bb607c91a2f9076437a9b2d7ed0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99aeb1666f15df598ea14dbe9486a5582a0bb607c91a2f9076437a9b2d7ed0d2->leave($__internal_99aeb1666f15df598ea14dbe9486a5582a0bb607c91a2f9076437a9b2d7ed0d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4a4051e2c5dedc65ebe54a8728357cd27158460d9cbc1abeda8b75c002b764d = $this->env->getExtension("native_profiler");
        $__internal_f4a4051e2c5dedc65ebe54a8728357cd27158460d9cbc1abeda8b75c002b764d->enter($__internal_f4a4051e2c5dedc65ebe54a8728357cd27158460d9cbc1abeda8b75c002b764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    create
";
        
        $__internal_f4a4051e2c5dedc65ebe54a8728357cd27158460d9cbc1abeda8b75c002b764d->leave($__internal_f4a4051e2c5dedc65ebe54a8728357cd27158460d9cbc1abeda8b75c002b764d_prof);

    }

    public function getTemplateName()
    {
        return "create.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     create*/
/* {% endblock %}*/
/* */
