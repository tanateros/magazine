<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_16c695c6678b4384f7a43cd27e1c474b27051f22ef48a388c66f672c01bfb4ab extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be876c986b29aff48007c2162272d5a2ba5908fa2560247692d868d2922b70be = $this->env->getExtension("native_profiler");
        $__internal_be876c986b29aff48007c2162272d5a2ba5908fa2560247692d868d2922b70be->enter($__internal_be876c986b29aff48007c2162272d5a2ba5908fa2560247692d868d2922b70be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be876c986b29aff48007c2162272d5a2ba5908fa2560247692d868d2922b70be->leave($__internal_be876c986b29aff48007c2162272d5a2ba5908fa2560247692d868d2922b70be_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_25344da309d78aee80ca76328e1f0de6db11b07c0a3a23ac5fe8740fef03e178 = $this->env->getExtension("native_profiler");
        $__internal_25344da309d78aee80ca76328e1f0de6db11b07c0a3a23ac5fe8740fef03e178->enter($__internal_25344da309d78aee80ca76328e1f0de6db11b07c0a3a23ac5fe8740fef03e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_25344da309d78aee80ca76328e1f0de6db11b07c0a3a23ac5fe8740fef03e178->leave($__internal_25344da309d78aee80ca76328e1f0de6db11b07c0a3a23ac5fe8740fef03e178_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
