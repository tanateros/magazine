<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_55217662078cb2fc5a6d6e2484ba2a716d6f27e8182bb00d4ca293b40e29e41e extends Twig_Template
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
        $__internal_02d0a03918ab4ee4403fc3a9184bc2ce2b9fe40f7bbd7718ab3b887b1fa66293 = $this->env->getExtension("native_profiler");
        $__internal_02d0a03918ab4ee4403fc3a9184bc2ce2b9fe40f7bbd7718ab3b887b1fa66293->enter($__internal_02d0a03918ab4ee4403fc3a9184bc2ce2b9fe40f7bbd7718ab3b887b1fa66293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_02d0a03918ab4ee4403fc3a9184bc2ce2b9fe40f7bbd7718ab3b887b1fa66293->leave($__internal_02d0a03918ab4ee4403fc3a9184bc2ce2b9fe40f7bbd7718ab3b887b1fa66293_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
