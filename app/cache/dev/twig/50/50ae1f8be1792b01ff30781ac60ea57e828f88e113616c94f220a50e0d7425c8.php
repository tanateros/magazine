<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_26932cc9e39cf6e2d2158678978ed4c86b5a380d703c8e01c513a5d993171671 extends Twig_Template
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
        $__internal_6ed4c48f3d56afe040e0c43c25f01d691701e22a41d5246ba96b4d6df3004308 = $this->env->getExtension("native_profiler");
        $__internal_6ed4c48f3d56afe040e0c43c25f01d691701e22a41d5246ba96b4d6df3004308->enter($__internal_6ed4c48f3d56afe040e0c43c25f01d691701e22a41d5246ba96b4d6df3004308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_6ed4c48f3d56afe040e0c43c25f01d691701e22a41d5246ba96b4d6df3004308->leave($__internal_6ed4c48f3d56afe040e0c43c25f01d691701e22a41d5246ba96b4d6df3004308_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_da223be93069efd49cdd23a703ff4f315a49e6ec6a7e8a21fea779870837bc5a = $this->env->getExtension("native_profiler");
        $__internal_da223be93069efd49cdd23a703ff4f315a49e6ec6a7e8a21fea779870837bc5a->enter($__internal_da223be93069efd49cdd23a703ff4f315a49e6ec6a7e8a21fea779870837bc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_da223be93069efd49cdd23a703ff4f315a49e6ec6a7e8a21fea779870837bc5a->leave($__internal_da223be93069efd49cdd23a703ff4f315a49e6ec6a7e8a21fea779870837bc5a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
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
