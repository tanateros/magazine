<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_c630cd83ba33c1352ae2e613c634decf3163a6dd90a0db2ff4deacd306d9804d extends Twig_Template
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
        $__internal_55319eae17b29c338cfc25aac2ef7678be4f7dd651ab4b64dae3ce72f93d8583 = $this->env->getExtension("native_profiler");
        $__internal_55319eae17b29c338cfc25aac2ef7678be4f7dd651ab4b64dae3ce72f93d8583->enter($__internal_55319eae17b29c338cfc25aac2ef7678be4f7dd651ab4b64dae3ce72f93d8583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_55319eae17b29c338cfc25aac2ef7678be4f7dd651ab4b64dae3ce72f93d8583->leave($__internal_55319eae17b29c338cfc25aac2ef7678be4f7dd651ab4b64dae3ce72f93d8583_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
