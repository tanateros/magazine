<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_efbf50698a2af5453d1a56cfce2b17c40907140157d528cfab2a2f0112cbe503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e9933d052d7b7a95950754e17ed0f715169b85472bd7ccfd6d29e5cca51ee5 = $this->env->getExtension("native_profiler");
        $__internal_35e9933d052d7b7a95950754e17ed0f715169b85472bd7ccfd6d29e5cca51ee5->enter($__internal_35e9933d052d7b7a95950754e17ed0f715169b85472bd7ccfd6d29e5cca51ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e9933d052d7b7a95950754e17ed0f715169b85472bd7ccfd6d29e5cca51ee5->leave($__internal_35e9933d052d7b7a95950754e17ed0f715169b85472bd7ccfd6d29e5cca51ee5_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_0cbd8f88214cdb9feae862d9951fbf23e12086f9806a6550030fdbfae7fb25b6 = $this->env->getExtension("native_profiler");
        $__internal_0cbd8f88214cdb9feae862d9951fbf23e12086f9806a6550030fdbfae7fb25b6->enter($__internal_0cbd8f88214cdb9feae862d9951fbf23e12086f9806a6550030fdbfae7fb25b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_0cbd8f88214cdb9feae862d9951fbf23e12086f9806a6550030fdbfae7fb25b6->leave($__internal_0cbd8f88214cdb9feae862d9951fbf23e12086f9806a6550030fdbfae7fb25b6_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_9ca7d9e52e37547a07b225666014deb0e3a774ae14d45331a8e2b84ca91877e9 = $this->env->getExtension("native_profiler");
        $__internal_9ca7d9e52e37547a07b225666014deb0e3a774ae14d45331a8e2b84ca91877e9->enter($__internal_9ca7d9e52e37547a07b225666014deb0e3a774ae14d45331a8e2b84ca91877e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_9ca7d9e52e37547a07b225666014deb0e3a774ae14d45331a8e2b84ca91877e9->leave($__internal_9ca7d9e52e37547a07b225666014deb0e3a774ae14d45331a8e2b84ca91877e9_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_6243cd4044e583026f25005eb2675db1dc4d717d8b36118f48603e86489af0b6 = $this->env->getExtension("native_profiler");
        $__internal_6243cd4044e583026f25005eb2675db1dc4d717d8b36118f48603e86489af0b6->enter($__internal_6243cd4044e583026f25005eb2675db1dc4d717d8b36118f48603e86489af0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_6243cd4044e583026f25005eb2675db1dc4d717d8b36118f48603e86489af0b6->leave($__internal_6243cd4044e583026f25005eb2675db1dc4d717d8b36118f48603e86489af0b6_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_09f461f264346cb4119b8d0a098893ee0568fb7e7ee6f0c8352e8b6112438c83 = $this->env->getExtension("native_profiler");
        $__internal_09f461f264346cb4119b8d0a098893ee0568fb7e7ee6f0c8352e8b6112438c83->enter($__internal_09f461f264346cb4119b8d0a098893ee0568fb7e7ee6f0c8352e8b6112438c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_09f461f264346cb4119b8d0a098893ee0568fb7e7ee6f0c8352e8b6112438c83->leave($__internal_09f461f264346cb4119b8d0a098893ee0568fb7e7ee6f0c8352e8b6112438c83_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_c5685a5fb120054604c94d58ea81560dc018795646f554ba2c15262cbd45c578 = $this->env->getExtension("native_profiler");
        $__internal_c5685a5fb120054604c94d58ea81560dc018795646f554ba2c15262cbd45c578->enter($__internal_c5685a5fb120054604c94d58ea81560dc018795646f554ba2c15262cbd45c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c5685a5fb120054604c94d58ea81560dc018795646f554ba2c15262cbd45c578->leave($__internal_c5685a5fb120054604c94d58ea81560dc018795646f554ba2c15262cbd45c578_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_a0178f14807578374de66e1ec6e8f3f3fb86740c5524630921d4fa67e632b43d = $this->env->getExtension("native_profiler");
        $__internal_a0178f14807578374de66e1ec6e8f3f3fb86740c5524630921d4fa67e632b43d->enter($__internal_a0178f14807578374de66e1ec6e8f3f3fb86740c5524630921d4fa67e632b43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 65
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array()))), array());
            // line 67
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 68
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 72
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 75
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 76
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 85
        echo "
                ";
        // line 86
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 87
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 96
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 99
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 100
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 109
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 114
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("required" => false));
        echo "
        </span>

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 131
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 131)->display($context);
        
        $__internal_a0178f14807578374de66e1ec6e8f3f3fb86740c5524630921d4fa67e632b43d->leave($__internal_a0178f14807578374de66e1ec6e8f3f3fb86740c5524630921d4fa67e632b43d_prof);

    }

    // line 134
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_99ad7088f4fdcefc304e2242fba08fefb4b843d57d058bf58751f5f72a75023c = $this->env->getExtension("native_profiler");
        $__internal_99ad7088f4fdcefc304e2242fba08fefb4b843d57d058bf58751f5f72a75023c->enter($__internal_99ad7088f4fdcefc304e2242fba08fefb4b843d57d058bf58751f5f72a75023c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 135
        echo "    ";
        // line 136
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 137
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 138
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 139
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 140
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 141
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 142
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 143
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 145
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_99ad7088f4fdcefc304e2242fba08fefb4b843d57d058bf58751f5f72a75023c->leave($__internal_99ad7088f4fdcefc304e2242fba08fefb4b843d57d058bf58751f5f72a75023c_prof);

    }

    // line 149
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_26830251a3e49c404fbd0f3562db8255a9f78cd59247b2010c505b0edf857bda = $this->env->getExtension("native_profiler");
        $__internal_26830251a3e49c404fbd0f3562db8255a9f78cd59247b2010c505b0edf857bda->enter($__internal_26830251a3e49c404fbd0f3562db8255a9f78cd59247b2010c505b0edf857bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 150
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 151
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 152
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 153
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 155
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_26830251a3e49c404fbd0f3562db8255a9f78cd59247b2010c505b0edf857bda->leave($__internal_26830251a3e49c404fbd0f3562db8255a9f78cd59247b2010c505b0edf857bda_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 155,  385 => 153,  383 => 152,  378 => 151,  375 => 150,  369 => 149,  358 => 145,  352 => 143,  350 => 142,  345 => 141,  343 => 140,  338 => 139,  336 => 138,  331 => 137,  328 => 136,  326 => 135,  320 => 134,  313 => 131,  296 => 117,  289 => 114,  283 => 109,  277 => 106,  271 => 103,  266 => 101,  263 => 100,  261 => 99,  256 => 96,  250 => 93,  244 => 90,  239 => 88,  234 => 87,  232 => 86,  229 => 85,  223 => 82,  217 => 79,  212 => 77,  207 => 76,  205 => 75,  200 => 72,  194 => 69,  191 => 68,  188 => 67,  186 => 65,  185 => 64,  184 => 63,  183 => 62,  181 => 61,  179 => 60,  175 => 59,  171 => 58,  166 => 57,  160 => 56,  149 => 52,  147 => 51,  141 => 49,  139 => 48,  134 => 47,  132 => 46,  127 => 45,  125 => 44,  120 => 43,  118 => 42,  113 => 41,  111 => 40,  108 => 39,  105 => 37,  103 => 33,  97 => 32,  89 => 29,  83 => 28,  75 => 25,  69 => 24,  61 => 21,  55 => 20,  47 => 17,  41 => 16,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}*/
/* */
/* */
/* {# Custom Sonata Admin Extension #}*/
/* {% block sonata_admin_orm_one_to_one_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_many_to_many_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_many_to_one_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_one_to_many_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_widget %}*/
/*     {#*/
/*         This is not the best way to do if*/
/*         TODO : improve this part*/
/*     #}*/
/* */
/*     {#model {{ sonata_admin.field_description.mappingtype }}#}*/
/* */
/*     {% if sonata_admin.field_description is empty %}*/
/*         {{ block('choice_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_one_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_many_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% else %}*/
/*         {#INVALID MODE : {{ id }}#}*/
/*         {{ block('choice_widget') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_list_widget %}*/
/*     <div id="field_container_{{ id }}" class="field-container">*/
/*         <span id="field_actions_{{ id }}" class="field-actions">*/
/*             <span id="field_widget_{{ id }}" class="field-short-description">*/
/*                 {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}*/
/*                     {% render url('sonata_admin_short_object_information', {*/
/*                         'code':     sonata_admin.field_description.associationadmin.code,*/
/*                         'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),*/
/*                         'uniqid':   sonata_admin.field_description.associationadmin.uniqid,*/
/*                         'linkParameters': sonata_admin.field_description.options.link_parameters*/
/*                     }) %}*/
/*                 {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}*/
/*                     <span class="inner-field-short-description">*/
/*                         {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}*/
/*                     </span>*/
/*                 {% endif %}*/
/*             </span>*/
/* */
/*             <span class="btn-group">*/
/*                 {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}*/
/*                     <a  href="{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}"*/
/*                         onclick="return start_field_dialog_form_list_{{ id }}(this);"*/
/*                         class="btn btn-info btn-sm btn-outline sonata-ba-action"*/
/*                         title="{{ btn_list|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-list"></i>*/
/*                         {{ btn_list|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/* */
/*                 {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}*/
/*                     <a  href="{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}"*/
/*                         onclick="return start_field_dialog_form_add_{{ id }}(this);"*/
/*                         class="btn btn-success btn-sm btn-outline sonata-ba-action"*/
/*                         title="{{ btn_add|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-plus-circle"></i>*/
/*                         {{ btn_add|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </span>*/
/* */
/*             <span class="btn-group">*/
/*                 {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}*/
/*                     <a  href=""*/
/*                         onclick="return remove_selected_element_{{ id }}(this);"*/
/*                         class="btn btn-danger btn-sm btn-outline sonata-ba-action"*/
/*                         title="{{ btn_delete|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-minus-circle"></i>*/
/*                         {{ btn_delete|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </span>*/
/*         </span>*/
/* */
/*         <span style="display: none" >*/
/*             {# Hidden text input cannot be required, because browser will throw error "An invalid form control with name='' is not focusable"  #}*/
/*             {{ form_widget(form, {'required':false}) }}*/
/*         </span>*/
/* */
/*         <div class="modal fade" id="field_dialog_{{ id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title"></h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_admin_widget %}*/
/*     {#admin {{ sonata_admin.field_description.mappingtype }}#}*/
/*     {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_one_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_many_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% else %}*/
/*         INVALID MODE : {{ id }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_collection_widget %}*/
/*     {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% else %}*/
/*         INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
