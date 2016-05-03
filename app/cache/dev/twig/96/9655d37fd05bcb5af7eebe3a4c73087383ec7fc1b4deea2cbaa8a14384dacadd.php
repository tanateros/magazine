<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_13c71e7867674b9896b1bd38bbaf4110fbec5cadad19a4eebb091c64d307c0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f084a80c8ae7fbf82805249c082a747898304e8eae17ad36d4d33ed8613fee = $this->env->getExtension("native_profiler");
        $__internal_a7f084a80c8ae7fbf82805249c082a747898304e8eae17ad36d4d33ed8613fee->enter($__internal_a7f084a80c8ae7fbf82805249c082a747898304e8eae17ad36d4d33ed8613fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_a7f084a80c8ae7fbf82805249c082a747898304e8eae17ad36d4d33ed8613fee->leave($__internal_a7f084a80c8ae7fbf82805249c082a747898304e8eae17ad36d4d33ed8613fee_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
