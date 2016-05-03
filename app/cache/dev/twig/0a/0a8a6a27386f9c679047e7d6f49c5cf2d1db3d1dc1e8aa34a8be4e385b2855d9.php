<?php

/* @SonataDoctrineORMAdmin/Block/block_audit.html.twig */
class __TwigTemplate_a2324d32d139c82d0150a6a625252f1cf74966c8a14813965aba79d78cbe5b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "@SonataDoctrineORMAdmin/Block/block_audit.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f53e6d900830b205119143ac00b18d1ad9d7973e93a84d82b9492b1afeb36246 = $this->env->getExtension("native_profiler");
        $__internal_f53e6d900830b205119143ac00b18d1ad9d7973e93a84d82b9492b1afeb36246->enter($__internal_f53e6d900830b205119143ac00b18d1ad9d7973e93a84d82b9492b1afeb36246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Block/block_audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f53e6d900830b205119143ac00b18d1ad9d7973e93a84d82b9492b1afeb36246->leave($__internal_f53e6d900830b205119143ac00b18d1ad9d7973e93a84d82b9492b1afeb36246_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_999eda25d3bce6eacc291c7a3c91916edd0ee5363e34af255b5ac1445749427e = $this->env->getExtension("native_profiler");
        $__internal_999eda25d3bce6eacc291c7a3c91916edd0ee5363e34af255b5ac1445749427e->enter($__internal_999eda25d3bce6eacc291c7a3c91916edd0ee5363e34af255b5ac1445749427e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"sonata-news-block-recent-post panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"sonata-news-block-recent-post panel-title\"><i
                        class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
        </div>
        <h3></h3>


        <div class=\"panel-group\" id=\"accordion\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "username", array()), "html", null, true);
            echo "
                                - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "timestamp", array())), "html", null, true);
            echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in") : (""));
            echo "\">
                        <div class=\"panel-body\">
                            <ul>
                                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["revision"], "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                    <li>
                                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "revisionType", array()), "html", null, true);
                echo "
                                        / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "id", array()), "html", null, true);
                echo "
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </ul>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>

    </div>
";
        
        $__internal_999eda25d3bce6eacc291c7a3c91916edd0ee5363e34af255b5ac1445749427e->leave($__internal_999eda25d3bce6eacc291c7a3c91916edd0ee5363e34af255b5ac1445749427e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Block/block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  125 => 42,  114 => 39,  108 => 38,  105 => 37,  101 => 36,  93 => 33,  86 => 29,  80 => 28,  76 => 27,  71 => 24,  54 => 23,  45 => 17,  40 => 14,  34 => 13,  11 => 11,);
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
/* {% extends 'SonataBlockBundle:Block:block_base.html.twig' %}*/
/* */
/* {% block block %}*/
/*     <div class="sonata-news-block-recent-post panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="sonata-news-block-recent-post panel-title"><i*/
/*                         class="fa fa-history"></i> {{ "title_audit_log"|trans({}, 'SonataAdminBundle') }}</h3>*/
/*         </div>*/
/*         <h3></h3>*/
/* */
/* */
/*         <div class="panel-group" id="accordion">*/
/*             {% for revision in revisions %}*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h4 class="panel-title">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ loop.index }}">*/
/*                                 {{ revision.revision.rev }} - {{ revision.revision.username }}*/
/*                                 - {{ revision.revision.timestamp | date }}*/
/*                             </a>*/
/*                         </h4>*/
/*                     </div>*/
/*                     <div id="collapse{{ loop.index }}" class="panel-collapse collapse {{ loop.first ? "in" : "" }}">*/
/*                         <div class="panel-body">*/
/*                             <ul>*/
/*                                 {% for changedEntity in revision.entities %}*/
/*                                     <li>*/
/*                                         {{ changedEntity.entity }} / {{ changedEntity.revisionType }}*/
/*                                         / {{ changedEntity.className }} - {{ changedEntity.id }}*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
