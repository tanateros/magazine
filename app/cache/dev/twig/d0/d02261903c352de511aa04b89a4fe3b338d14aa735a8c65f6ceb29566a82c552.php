<?php

/* @SonataAdmin/Core/tab_menu_template.html.twig */
class __TwigTemplate_9950757a5004121de33d427c7a7fdc0aeb54429469b22293335d9d5f3629ef3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2da1f7ba31f85b9da49d696a25dc338c1695f265e8fe4832b71528f0aa535291 = $this->env->getExtension("native_profiler");
        $__internal_2da1f7ba31f85b9da49d696a25dc338c1695f265e8fe4832b71528f0aa535291->enter($__internal_2da1f7ba31f85b9da49d696a25dc338c1695f265e8fe4832b71528f0aa535291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da1f7ba31f85b9da49d696a25dc338c1695f265e8fe4832b71528f0aa535291->leave($__internal_2da1f7ba31f85b9da49d696a25dc338c1695f265e8fe4832b71528f0aa535291_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_efd6f8f95893fe1f87106ef3ca0ff2951db467271bf359884969239b9f8e8551 = $this->env->getExtension("native_profiler");
        $__internal_efd6f8f95893fe1f87106ef3ca0ff2951db467271bf359884969239b9f8e8551->enter($__internal_efd6f8f95893fe1f87106ef3ca0ff2951db467271bf359884969239b9f8e8551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_efd6f8f95893fe1f87106ef3ca0ff2951db467271bf359884969239b9f8e8551->leave($__internal_efd6f8f95893fe1f87106ef3ca0ff2951db467271bf359884969239b9f8e8551_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_4d2e984b372962d31e9e81fe310e94b2e76ca6be708f8e67c3c97313b9a6decc = $this->env->getExtension("native_profiler");
        $__internal_4d2e984b372962d31e9e81fe310e94b2e76ca6be708f8e67c3c97313b9a6decc->enter($__internal_4d2e984b372962d31e9e81fe310e94b2e76ca6be708f8e67c3c97313b9a6decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_4d2e984b372962d31e9e81fe310e94b2e76ca6be708f8e67c3c97313b9a6decc->leave($__internal_4d2e984b372962d31e9e81fe310e94b2e76ca6be708f8e67c3c97313b9a6decc_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_e0ef3cab6e77efd22a54bb2abe7682551cf060338007d23064da6be455ab03f3 = $this->env->getExtension("native_profiler");
        $__internal_e0ef3cab6e77efd22a54bb2abe7682551cf060338007d23064da6be455ab03f3->enter($__internal_e0ef3cab6e77efd22a54bb2abe7682551cf060338007d23064da6be455ab03f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 87
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 88
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 90
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_e0ef3cab6e77efd22a54bb2abe7682551cf060338007d23064da6be455ab03f3->leave($__internal_e0ef3cab6e77efd22a54bb2abe7682551cf060338007d23064da6be455ab03f3_prof);

    }

    // line 94
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_c0c816dd59462091b65d930e89417077bd7e4f633e2cc9b1bcbbf15c7b318ad6 = $this->env->getExtension("native_profiler");
        $__internal_c0c816dd59462091b65d930e89417077bd7e4f633e2cc9b1bcbbf15c7b318ad6->enter($__internal_c0c816dd59462091b65d930e89417077bd7e4f633e2cc9b1bcbbf15c7b318ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 95
        echo "    <span ";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 96
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 97
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 99
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_c0c816dd59462091b65d930e89417077bd7e4f633e2cc9b1bcbbf15c7b318ad6->leave($__internal_c0c816dd59462091b65d930e89417077bd7e4f633e2cc9b1bcbbf15c7b318ad6_prof);

    }

    // line 103
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_c2b4a602063dbeba8a443a5a543874f2c55b3a444cabec9f31e14b5e86b4b583 = $this->env->getExtension("native_profiler");
        $__internal_c2b4a602063dbeba8a443a5a543874f2c55b3a444cabec9f31e14b5e86b4b583->enter($__internal_c2b4a602063dbeba8a443a5a543874f2c55b3a444cabec9f31e14b5e86b4b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 104
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 105
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 106
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 107
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 108
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 109
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 110
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 111
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 113
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_c2b4a602063dbeba8a443a5a543874f2c55b3a444cabec9f31e14b5e86b4b583->leave($__internal_c2b4a602063dbeba8a443a5a543874f2c55b3a444cabec9f31e14b5e86b4b583_prof);

    }

    // line 118
    public function block_label($context, array $blocks = array())
    {
        $__internal_dd51a0f2a1e0640e20b9c01e8a2474875f1dc752df4ea7ca02ee8c7353a31daa = $this->env->getExtension("native_profiler");
        $__internal_dd51a0f2a1e0640e20b9c01e8a2474875f1dc752df4ea7ca02ee8c7353a31daa->enter($__internal_dd51a0f2a1e0640e20b9c01e8a2474875f1dc752df4ea7ca02ee8c7353a31daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_dd51a0f2a1e0640e20b9c01e8a2474875f1dc752df4ea7ca02ee8c7353a31daa->leave($__internal_dd51a0f2a1e0640e20b9c01e8a2474875f1dc752df4ea7ca02ee8c7353a31daa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 118,  286 => 113,  280 => 111,  278 => 110,  273 => 109,  271 => 108,  269 => 107,  267 => 106,  265 => 105,  263 => 104,  257 => 103,  246 => 99,  240 => 97,  238 => 96,  233 => 95,  227 => 94,  216 => 90,  210 => 88,  208 => 87,  201 => 86,  195 => 85,  186 => 81,  182 => 79,  180 => 78,  174 => 77,  164 => 72,  162 => 71,  157 => 68,  153 => 65,  149 => 63,  147 => 62,  144 => 61,  142 => 60,  138 => 59,  135 => 57,  133 => 56,  130 => 54,  128 => 53,  125 => 51,  122 => 49,  120 => 48,  118 => 47,  115 => 45,  113 => 44,  111 => 43,  108 => 41,  105 => 39,  103 => 38,  100 => 36,  98 => 35,  94 => 31,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  73 => 21,  71 => 19,  68 => 17,  64 => 15,  62 => 14,  60 => 12,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block item %}*/
/* {% import "knp_menu.html.twig" as macros %}*/
/* {% if item.displayed %}*/
/*     {%- set attributes = item.attributes %}*/
/*     {%- set is_dropdown = attributes.dropdown|default(false) %}*/
/*     {%- set divider_prepend = attributes.divider_prepend|default(false) %}*/
/*     {%- set divider_append = attributes.divider_append|default(false) %}*/
/* */
/* {# unset bootstrap specific attributes #}*/
/*     {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}*/
/* */
/*     {%- if divider_prepend %}*/
/*         {{ block('dividerElement') }}*/
/*     {%- endif %}*/
/* */
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/* */
/*     {%- if matcher is defined %} {# KnpMenu 2.0#}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*             {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.depth) %}*/
/*             {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*     {%- else %} {# KnpMenu 1.X #}*/
/*         {%- if item.current %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif item.currentAncestor %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*     {%- endif %}*/
/* */
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/* */
/* {# building the class of the children #}*/
/*     {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*     {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/* */
/* {# adding classes for dropdown #}*/
/*     {%- if is_dropdown %}*/
/*         {%- set classes = classes|merge(['dropdown']) %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*     {%- endif %}*/
/* */
/* {# putting classes together #}*/
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/*     {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/* */
/* {# displaying the item #}*/
/*     <li{{ macros.attributes(attributes) }}>*/
/*         {%- if is_dropdown %}*/
/*             {{ block('dropdownElement') }}*/
/*         {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}*/
/*             {{ block('linkElement') }}*/
/*         {%- else %}*/
/*             {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {{ block('list') }}*/
/*     </li>*/
/* */
/*     {%- if divider_append %}*/
/*         {{ block('dividerElement') }}*/
/*     {%- endif %}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block dividerElement %}*/
/* {% if item.level == 1 %}*/
/*     <li class="divider-vertical"></li>*/
/* {% else %}*/
/*     <li class="divider"></li>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     <a href="{{ item.uri }}"{{ macros.attributes(item.linkAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     <span {{ macros.attributes(item.labelAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block dropdownElement %}*/
/*     {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}*/
/*     {%- set classes = classes|merge(['dropdown-toggle']) %}*/
/*     {%- set attributes = item.linkAttributes %}*/
/*     {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}*/
/*     <a href="#"{{ macros.attributes(attributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*         <b class="caret"></b>*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block label %}{{ item.label|trans }}{% endblock %}*/
