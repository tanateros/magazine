<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_c78efdf8c39880bb6b5fd75b06e237518e89f91594ef0d7a83084420c3fe3683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5845dcb85640cdf1cd28cb71f03225a95578f85cde30e111c946bbca98a7d7a4 = $this->env->getExtension("native_profiler");
        $__internal_5845dcb85640cdf1cd28cb71f03225a95578f85cde30e111c946bbca98a7d7a4->enter($__internal_5845dcb85640cdf1cd28cb71f03225a95578f85cde30e111c946bbca98a7d7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_5845dcb85640cdf1cd28cb71f03225a95578f85cde30e111c946bbca98a7d7a4->leave($__internal_5845dcb85640cdf1cd28cb71f03225a95578f85cde30e111c946bbca98a7d7a4_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_20dca5d28b2a37a7de93903f63ab331d99f8a907f632c257b03543a9e37d750e = $this->env->getExtension("native_profiler");
        $__internal_20dca5d28b2a37a7de93903f63ab331d99f8a907f632c257b03543a9e37d750e->enter($__internal_20dca5d28b2a37a7de93903f63ab331d99f8a907f632c257b03543a9e37d750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_20dca5d28b2a37a7de93903f63ab331d99f8a907f632c257b03543a9e37d750e->leave($__internal_20dca5d28b2a37a7de93903f63ab331d99f8a907f632c257b03543a9e37d750e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
