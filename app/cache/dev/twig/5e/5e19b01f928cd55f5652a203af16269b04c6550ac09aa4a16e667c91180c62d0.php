<?php

/* @SonataAdmin/CRUD/list__action.html.twig */
class __TwigTemplate_b3fd205619fd1112395611964e24119a090f3196598ea503ad4500b251b84a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be2c139b126238197a2fe3c4d4548c28376ce2f7b9f76e25db836aab5837e127 = $this->env->getExtension("native_profiler");
        $__internal_be2c139b126238197a2fe3c4d4548c28376ce2f7b9f76e25db836aab5837e127->enter($__internal_be2c139b126238197a2fe3c4d4548c28376ce2f7b9f76e25db836aab5837e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2c139b126238197a2fe3c4d4548c28376ce2f7b9f76e25db836aab5837e127->leave($__internal_be2c139b126238197a2fe3c4d4548c28376ce2f7b9f76e25db836aab5837e127_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d2cf83c2fe1ea6616c299ae4bd007b01ed1bb00aef72a5c2ff215e4ef8441f5 = $this->env->getExtension("native_profiler");
        $__internal_5d2cf83c2fe1ea6616c299ae4bd007b01ed1bb00aef72a5c2ff215e4ef8441f5->enter($__internal_5d2cf83c2fe1ea6616c299ae4bd007b01ed1bb00aef72a5c2ff215e4ef8441f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "@SonataAdmin/CRUD/list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_5d2cf83c2fe1ea6616c299ae4bd007b01ed1bb00aef72a5c2ff215e4ef8441f5->leave($__internal_5d2cf83c2fe1ea6616c299ae4bd007b01ed1bb00aef72a5c2ff215e4ef8441f5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 18,  59 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <div class="btn-group">*/
/*         {% for actions in field_description.options.actions %}*/
/*             {% include actions.template %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
