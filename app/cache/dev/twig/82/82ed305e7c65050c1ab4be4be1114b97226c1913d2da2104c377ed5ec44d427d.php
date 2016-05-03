<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_66f94549400fe037a1dfc1b2b2b50129fe654221449371b60cdac2a03aa27617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43c173b723a95ffd191da4cbbe3ca492f78badb0362a7373edef37893b8d1072 = $this->env->getExtension("native_profiler");
        $__internal_43c173b723a95ffd191da4cbbe3ca492f78badb0362a7373edef37893b8d1072->enter($__internal_43c173b723a95ffd191da4cbbe3ca492f78badb0362a7373edef37893b8d1072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c173b723a95ffd191da4cbbe3ca492f78badb0362a7373edef37893b8d1072->leave($__internal_43c173b723a95ffd191da4cbbe3ca492f78badb0362a7373edef37893b8d1072_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_5ada26bf85bd8e1bf405cc79dc55eb6eac2f60bc246397544c581bedd7bb22ef = $this->env->getExtension("native_profiler");
        $__internal_5ada26bf85bd8e1bf405cc79dc55eb6eac2f60bc246397544c581bedd7bb22ef->enter($__internal_5ada26bf85bd8e1bf405cc79dc55eb6eac2f60bc246397544c581bedd7bb22ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_5ada26bf85bd8e1bf405cc79dc55eb6eac2f60bc246397544c581bedd7bb22ef->leave($__internal_5ada26bf85bd8e1bf405cc79dc55eb6eac2f60bc246397544c581bedd7bb22ef_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_77a659ec6cbc27b319fe08e93d49ad9c064f0691b9b5ad421f7681db362ffd61 = $this->env->getExtension("native_profiler");
        $__internal_77a659ec6cbc27b319fe08e93d49ad9c064f0691b9b5ad421f7681db362ffd61->enter($__internal_77a659ec6cbc27b319fe08e93d49ad9c064f0691b9b5ad421f7681db362ffd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_77a659ec6cbc27b319fe08e93d49ad9c064f0691b9b5ad421f7681db362ffd61->leave($__internal_77a659ec6cbc27b319fe08e93d49ad9c064f0691b9b5ad421f7681db362ffd61_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_661ce97b82d5830a55b076b6c8a3170258a4ad7be56418085ed4b245fc13e36f = $this->env->getExtension("native_profiler");
        $__internal_661ce97b82d5830a55b076b6c8a3170258a4ad7be56418085ed4b245fc13e36f->enter($__internal_661ce97b82d5830a55b076b6c8a3170258a4ad7be56418085ed4b245fc13e36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_661ce97b82d5830a55b076b6c8a3170258a4ad7be56418085ed4b245fc13e36f->leave($__internal_661ce97b82d5830a55b076b6c8a3170258a4ad7be56418085ed4b245fc13e36f_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_e7030a9e85ef06dfba93c62535712b85ed1b65097aefefc1eba27f6d33d4ff02 = $this->env->getExtension("native_profiler");
        $__internal_e7030a9e85ef06dfba93c62535712b85ed1b65097aefefc1eba27f6d33d4ff02->enter($__internal_e7030a9e85ef06dfba93c62535712b85ed1b65097aefefc1eba27f6d33d4ff02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_e7030a9e85ef06dfba93c62535712b85ed1b65097aefefc1eba27f6d33d4ff02->leave($__internal_e7030a9e85ef06dfba93c62535712b85ed1b65097aefefc1eba27f6d33d4ff02_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_499ec32def61aed3a53b9f251923a709518a022123158ed125901de443c9d884 = $this->env->getExtension("native_profiler");
        $__internal_499ec32def61aed3a53b9f251923a709518a022123158ed125901de443c9d884->enter($__internal_499ec32def61aed3a53b9f251923a709518a022123158ed125901de443c9d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_499ec32def61aed3a53b9f251923a709518a022123158ed125901de443c9d884->leave($__internal_499ec32def61aed3a53b9f251923a709518a022123158ed125901de443c9d884_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f9f7923b85bff3d124f504f3e177ea9ec34c3c31ee8347c909582f83862e0909 = $this->env->getExtension("native_profiler");
        $__internal_f9f7923b85bff3d124f504f3e177ea9ec34c3c31ee8347c909582f83862e0909->enter($__internal_f9f7923b85bff3d124f504f3e177ea9ec34c3c31ee8347c909582f83862e0909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f9f7923b85bff3d124f504f3e177ea9ec34c3c31ee8347c909582f83862e0909->leave($__internal_f9f7923b85bff3d124f504f3e177ea9ec34c3c31ee8347c909582f83862e0909_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_602ebb3eca77590e3117063e1354494ceacf33d1b53e707e85307dd8244ea510 = $this->env->getExtension("native_profiler");
        $__internal_602ebb3eca77590e3117063e1354494ceacf33d1b53e707e85307dd8244ea510->enter($__internal_602ebb3eca77590e3117063e1354494ceacf33d1b53e707e85307dd8244ea510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_602ebb3eca77590e3117063e1354494ceacf33d1b53e707e85307dd8244ea510->leave($__internal_602ebb3eca77590e3117063e1354494ceacf33d1b53e707e85307dd8244ea510_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
