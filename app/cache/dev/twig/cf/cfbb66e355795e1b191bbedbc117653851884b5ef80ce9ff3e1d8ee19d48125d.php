<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_e19e1f548b39c5c6fff95491799a31002ce701e9d0c80d5ebf28f06a638bb410 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d36e96b612a2ea6118e7ed33ee3fb485ae047319a2083103c71037a3badf9ae5 = $this->env->getExtension("native_profiler");
        $__internal_d36e96b612a2ea6118e7ed33ee3fb485ae047319a2083103c71037a3badf9ae5->enter($__internal_d36e96b612a2ea6118e7ed33ee3fb485ae047319a2083103c71037a3badf9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d36e96b612a2ea6118e7ed33ee3fb485ae047319a2083103c71037a3badf9ae5->leave($__internal_d36e96b612a2ea6118e7ed33ee3fb485ae047319a2083103c71037a3badf9ae5_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_eb56d512534c803f824f89e8cf9f2ccd0a23938b8a810b9039e95bdc861b0643 = $this->env->getExtension("native_profiler");
        $__internal_eb56d512534c803f824f89e8cf9f2ccd0a23938b8a810b9039e95bdc861b0643->enter($__internal_eb56d512534c803f824f89e8cf9f2ccd0a23938b8a810b9039e95bdc861b0643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_eb56d512534c803f824f89e8cf9f2ccd0a23938b8a810b9039e95bdc861b0643->leave($__internal_eb56d512534c803f824f89e8cf9f2ccd0a23938b8a810b9039e95bdc861b0643_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_dc6f5746f524e554197dd282935f410f57725a06cb1768ee355c0bb2f6db4d46 = $this->env->getExtension("native_profiler");
        $__internal_dc6f5746f524e554197dd282935f410f57725a06cb1768ee355c0bb2f6db4d46->enter($__internal_dc6f5746f524e554197dd282935f410f57725a06cb1768ee355c0bb2f6db4d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_dc6f5746f524e554197dd282935f410f57725a06cb1768ee355c0bb2f6db4d46->leave($__internal_dc6f5746f524e554197dd282935f410f57725a06cb1768ee355c0bb2f6db4d46_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4b423c9e0f40ff7c8e448ea6cec81056e940e2083c7f8c65064d37557ec73667 = $this->env->getExtension("native_profiler");
        $__internal_4b423c9e0f40ff7c8e448ea6cec81056e940e2083c7f8c65064d37557ec73667->enter($__internal_4b423c9e0f40ff7c8e448ea6cec81056e940e2083c7f8c65064d37557ec73667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_4b423c9e0f40ff7c8e448ea6cec81056e940e2083c7f8c65064d37557ec73667->leave($__internal_4b423c9e0f40ff7c8e448ea6cec81056e940e2083c7f8c65064d37557ec73667_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3434f04559cf3d73853d05f5d185c0ddf997b3d60c763a6784935db0ce0afed4 = $this->env->getExtension("native_profiler");
        $__internal_3434f04559cf3d73853d05f5d185c0ddf997b3d60c763a6784935db0ce0afed4->enter($__internal_3434f04559cf3d73853d05f5d185c0ddf997b3d60c763a6784935db0ce0afed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_3434f04559cf3d73853d05f5d185c0ddf997b3d60c763a6784935db0ce0afed4->leave($__internal_3434f04559cf3d73853d05f5d185c0ddf997b3d60c763a6784935db0ce0afed4_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_510c9305868daf6e6abdddee1172cb7598ceac895b1452945f524e8229641737 = $this->env->getExtension("native_profiler");
        $__internal_510c9305868daf6e6abdddee1172cb7598ceac895b1452945f524e8229641737->enter($__internal_510c9305868daf6e6abdddee1172cb7598ceac895b1452945f524e8229641737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_510c9305868daf6e6abdddee1172cb7598ceac895b1452945f524e8229641737->leave($__internal_510c9305868daf6e6abdddee1172cb7598ceac895b1452945f524e8229641737_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_30f44ec65fe1d8bdf682f141cfe1d62a0d9b931074ee1aa94ef7d43e5cead264 = $this->env->getExtension("native_profiler");
        $__internal_30f44ec65fe1d8bdf682f141cfe1d62a0d9b931074ee1aa94ef7d43e5cead264->enter($__internal_30f44ec65fe1d8bdf682f141cfe1d62a0d9b931074ee1aa94ef7d43e5cead264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_30f44ec65fe1d8bdf682f141cfe1d62a0d9b931074ee1aa94ef7d43e5cead264->leave($__internal_30f44ec65fe1d8bdf682f141cfe1d62a0d9b931074ee1aa94ef7d43e5cead264_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5e1f47c95e9ff5e0c355ba2d4b8f28b90305a9cf5fe6085453de3a3d240f04cd = $this->env->getExtension("native_profiler");
        $__internal_5e1f47c95e9ff5e0c355ba2d4b8f28b90305a9cf5fe6085453de3a3d240f04cd->enter($__internal_5e1f47c95e9ff5e0c355ba2d4b8f28b90305a9cf5fe6085453de3a3d240f04cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_5e1f47c95e9ff5e0c355ba2d4b8f28b90305a9cf5fe6085453de3a3d240f04cd->leave($__internal_5e1f47c95e9ff5e0c355ba2d4b8f28b90305a9cf5fe6085453de3a3d240f04cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
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
