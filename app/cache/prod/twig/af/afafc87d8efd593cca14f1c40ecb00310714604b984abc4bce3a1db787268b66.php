<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_ec14a9ae0202541be4dcb8be3d6ca29af2e1d93281419aa551a7485a4ca783fa extends Twig_Template
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
        // line 11
        echo "
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", array()), "elements", array())), "html", null, true);
        echo "\">
        <div class=\"text-center\">
            <ul class=\"pagination\">
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "previouspage", array()))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "previouspage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "page", array()))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => $context["page"]), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => $context["page"]), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "nextpage", array()))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "nextpage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "lastpage", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "lastpage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "nextpage", array())))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", array()), "pager", array()), "lastpage", array())), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  103 => 38,  101 => 37,  98 => 36,  90 => 34,  88 => 33,  85 => 32,  79 => 31,  71 => 29,  63 => 27,  60 => 26,  55 => 25,  52 => 23,  44 => 21,  42 => 20,  39 => 19,  31 => 17,  29 => 16,  23 => 13,  19 => 11,);
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
/* <tr>*/
/*     <td colspan="{{ admin.list.elements|length }}">*/
/*         <div class="text-center">*/
/*             <ul class="pagination">*/
/*                 {% if admin.datagrid.pager.page > 2  %}*/
/*                     <li><a href="{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, 1)) }}" title="{{ 'link_first_pager'|trans({}, 'SonataAdminBundle') }}">&laquo;</a></li>*/
/*                 {% endif %}*/
/* */
/*                 {% if admin.datagrid.pager.page != admin.datagrid.pager.previouspage %}*/
/*                     <li><a href="{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.previouspage)) }}" title="{{ 'link_previous_pager'|trans({}, 'SonataAdminBundle') }}">&lsaquo;</a></li>*/
/*                 {% endif %}*/
/* */
/*                 {# Set the number of pages to display in the pager #}*/
/*                 {% for page in admin.datagrid.pager.getLinks(admin_pool.getOption('pager_links')) %}*/
/*                     {% if page == admin.datagrid.pager.page %}*/
/*                         <li class="active"><a href="{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, page)) }}">{{ page }}</a></li>*/
/*                     {% else %}*/
/*                         <li><a href="{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, page)) }}">{{ page }}</a></li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*                 {% if admin.datagrid.pager.page != admin.datagrid.pager.nextpage %}*/
/*                     <li><a href="{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.nextpage)) }}" title="{{ 'link_next_pager'|trans({}, 'SonataAdminBundle') }}">&rsaquo;</a></li>*/
/*                 {% endif %}*/
/* */
/*                 {% if admin.datagrid.pager.page != admin.datagrid.pager.lastpage and admin.datagrid.pager.lastpage != admin.datagrid.pager.nextpage %}*/
/*                     <li><a href="{{ admin.generateUrl('list', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.lastpage)) }}" title="{{ 'link_last_pager'|trans({}, 'SonataAdminBundle') }}">&raquo;</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*     </td>*/
/* </tr>*/
/* */
