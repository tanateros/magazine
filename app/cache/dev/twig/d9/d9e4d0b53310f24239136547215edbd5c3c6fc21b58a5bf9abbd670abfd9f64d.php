<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_2b5c7d9dd466e35bbc8a0ddd36a3dd1958f77a10ea0733246c955d3bb92fa37f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_877eefea43708b7157775a350ee0967fa6b8a4ccc0dbde28976f5f371c1eaed3 = $this->env->getExtension("native_profiler");
        $__internal_877eefea43708b7157775a350ee0967fa6b8a4ccc0dbde28976f5f371c1eaed3->enter($__internal_877eefea43708b7157775a350ee0967fa6b8a4ccc0dbde28976f5f371c1eaed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877eefea43708b7157775a350ee0967fa6b8a4ccc0dbde28976f5f371c1eaed3->leave($__internal_877eefea43708b7157775a350ee0967fa6b8a4ccc0dbde28976f5f371c1eaed3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b9376af2e9034c2608ab9d25ab9d9c4a9262fb29225bffa50f3173ebbe63fb75 = $this->env->getExtension("native_profiler");
        $__internal_b9376af2e9034c2608ab9d25ab9d9c4a9262fb29225bffa50f3173ebbe63fb75->enter($__internal_b9376af2e9034c2608ab9d25ab9d9c4a9262fb29225bffa50f3173ebbe63fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_b9376af2e9034c2608ab9d25ab9d9c4a9262fb29225bffa50f3173ebbe63fb75->leave($__internal_b9376af2e9034c2608ab9d25ab9d9c4a9262fb29225bffa50f3173ebbe63fb75_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 33,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <h3>Sonata Block Template</h3>*/
/*     If you want to use the <code>sonata.block.template</code> block type, you need to create a template :*/
/* */
/*     <pre>*/
/*         {%- verbatim -%}*/
/* {# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}*/
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     &lt;h3&gt;The block title&lt;/h3&gt;*/
/*     &lt;p&gt;*/
/*         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus*/
/*         vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,*/
/*         mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet*/
/*         massa volutpat auctor.*/
/*     &lt;/p&gt;*/
/* {% endblock %}*/
/*         {%- endverbatim -%}*/
/*     </pre>*/
/* */
/*     And then call it from a template with the <code>sonata_block_render</code> helper:*/
/* */
/*     <pre>*/
/* {%- verbatim -%}*/
/* {{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {*/
/*     'template': 'MyBundle:Block:my_block_feature_1.html.twig',*/
/* }) }}*/
/* {%- endverbatim -%}*/
/*     </pre>*/
/* {% endblock %}*/
/* */
