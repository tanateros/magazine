<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_fe6529bad90310ebc510615c46c548294c0328f02e202b51508e733335b03d39 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30090082f410e79dbc0cdb4f2cd98b9eb50fda47bce6d0b0f5596f3801f65439 = $this->env->getExtension("native_profiler");
        $__internal_30090082f410e79dbc0cdb4f2cd98b9eb50fda47bce6d0b0f5596f3801f65439->enter($__internal_30090082f410e79dbc0cdb4f2cd98b9eb50fda47bce6d0b0f5596f3801f65439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30090082f410e79dbc0cdb4f2cd98b9eb50fda47bce6d0b0f5596f3801f65439->leave($__internal_30090082f410e79dbc0cdb4f2cd98b9eb50fda47bce6d0b0f5596f3801f65439_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_99ad84c6edbe2bd9755f0a81ddb15cbf721a9fc8296142e4743579945e0fb2b0 = $this->env->getExtension("native_profiler");
        $__internal_99ad84c6edbe2bd9755f0a81ddb15cbf721a9fc8296142e4743579945e0fb2b0->enter($__internal_99ad84c6edbe2bd9755f0a81ddb15cbf721a9fc8296142e4743579945e0fb2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_99ad84c6edbe2bd9755f0a81ddb15cbf721a9fc8296142e4743579945e0fb2b0->leave($__internal_99ad84c6edbe2bd9755f0a81ddb15cbf721a9fc8296142e4743579945e0fb2b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */
