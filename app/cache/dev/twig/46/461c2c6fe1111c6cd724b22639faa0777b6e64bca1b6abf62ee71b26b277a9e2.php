<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_2ee6d280ddc96a13e012d3c17ccaf672fc2ca7b4674280e59536c9d019ae8029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af605c00f49105e152626da53fc7118137d638a0a367301b202ff5cd8c649f37 = $this->env->getExtension("native_profiler");
        $__internal_af605c00f49105e152626da53fc7118137d638a0a367301b202ff5cd8c649f37->enter($__internal_af605c00f49105e152626da53fc7118137d638a0a367301b202ff5cd8c649f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_af605c00f49105e152626da53fc7118137d638a0a367301b202ff5cd8c649f37->leave($__internal_af605c00f49105e152626da53fc7118137d638a0a367301b202ff5cd8c649f37_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_67caa48525589a115e87da813dbdc84f99757c1337083d66ca34e6b4ce1ed4ad = $this->env->getExtension("native_profiler");
        $__internal_67caa48525589a115e87da813dbdc84f99757c1337083d66ca34e6b4ce1ed4ad->enter($__internal_67caa48525589a115e87da813dbdc84f99757c1337083d66ca34e6b4ce1ed4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_67caa48525589a115e87da813dbdc84f99757c1337083d66ca34e6b4ce1ed4ad->leave($__internal_67caa48525589a115e87da813dbdc84f99757c1337083d66ca34e6b4ce1ed4ad_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_9d3ae175f6986016792c6cceaa57775345f0b699cc300c2134755c1f43af3377 = $this->env->getExtension("native_profiler");
        $__internal_9d3ae175f6986016792c6cceaa57775345f0b699cc300c2134755c1f43af3377->enter($__internal_9d3ae175f6986016792c6cceaa57775345f0b699cc300c2134755c1f43af3377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9d3ae175f6986016792c6cceaa57775345f0b699cc300c2134755c1f43af3377->leave($__internal_9d3ae175f6986016792c6cceaa57775345f0b699cc300c2134755c1f43af3377_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_21aa587827feef0e63671ae4a96b89abb2ec7405870e8b28ff749a5fcbb79480 = $this->env->getExtension("native_profiler");
        $__internal_21aa587827feef0e63671ae4a96b89abb2ec7405870e8b28ff749a5fcbb79480->enter($__internal_21aa587827feef0e63671ae4a96b89abb2ec7405870e8b28ff749a5fcbb79480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_21aa587827feef0e63671ae4a96b89abb2ec7405870e8b28ff749a5fcbb79480->leave($__internal_21aa587827feef0e63671ae4a96b89abb2ec7405870e8b28ff749a5fcbb79480_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_36e9115b2133f9d831a284039051679b0dc3a8066b75dbc91e0c15b264196d3d = $this->env->getExtension("native_profiler");
        $__internal_36e9115b2133f9d831a284039051679b0dc3a8066b75dbc91e0c15b264196d3d->enter($__internal_36e9115b2133f9d831a284039051679b0dc3a8066b75dbc91e0c15b264196d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 55
            echo "            <div class=\"input-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_36e9115b2133f9d831a284039051679b0dc3a8066b75dbc91e0c15b264196d3d->leave($__internal_36e9115b2133f9d831a284039051679b0dc3a8066b75dbc91e0c15b264196d3d_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 63,  191 => 61,  185 => 59,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  164 => 52,  154 => 47,  152 => 46,  147 => 45,  144 => 44,  138 => 42,  135 => 41,  129 => 40,  114 => 34,  110 => 32,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 23,  73 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  54 => 12,  48 => 11,  41 => 52,  38 => 51,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
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
/* {% block sonata_type_date_picker_widget_html %}*/
/*     {% if datepicker_use_button %}*/
/*         <div class='input-group date' id='dp_{{ id }}'>*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'data-date-format': moment_format}) %}*/
/*     {{ block('date_widget') }}*/
/*     {% if datepicker_use_button %}*/
/*             <span class="input-group-addon"><span class="fa fa-calendar"></span></span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock sonata_type_date_picker_widget_html %}*/
/* */
/* {% block sonata_type_date_picker_widget %}*/
/*     {% spaceless %}*/
/*         {% if wrap_fields_with_addons %}*/
/*             <div class="input-group">*/
/*                 {{ block('sonata_type_date_picker_widget_html') }}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('sonata_type_date_picker_widget_html') }}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_date_picker_widget %}*/
/* */
/* {% block sonata_type_datetime_picker_widget_html %}*/
/*     {% if datepicker_use_button %}*/
/*         <div class='input-group date' id='dtp_{{ id }}'>*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'data-date-format': moment_format}) %}*/
/*     {{ block('datetime_widget') }}*/
/*     {% if datepicker_use_button %}*/
/*           <span class="input-group-addon"><span class="fa fa-calendar"></span></span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock sonata_type_datetime_picker_widget_html %}*/
/* */
/* {% block sonata_type_datetime_picker_widget %}*/
/*     {% spaceless %}*/
/*         {% if wrap_fields_with_addons %}*/
/*             <div class="input-group">*/
/*                 {{ block('sonata_type_datetime_picker_widget_html') }}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('sonata_type_datetime_picker_widget_html') }}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_datetime_picker_widget %}*/
/* */
