<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a0b06ec0d0c72b200e6f02d1832bd2c71fe6a251ea5e83f8bab0c41f66735beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_597b06722f0f406324d8767e430b60c23b8a41cefa52c6b17df07fa08fdac119 = $this->env->getExtension("native_profiler");
        $__internal_597b06722f0f406324d8767e430b60c23b8a41cefa52c6b17df07fa08fdac119->enter($__internal_597b06722f0f406324d8767e430b60c23b8a41cefa52c6b17df07fa08fdac119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
    </body>
</html>
";
        
        $__internal_597b06722f0f406324d8767e430b60c23b8a41cefa52c6b17df07fa08fdac119->leave($__internal_597b06722f0f406324d8767e430b60c23b8a41cefa52c6b17df07fa08fdac119_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_062eefa1d08ecaa97081764a8c986ad99659196eb1d3ad816d48cb24a30283d0 = $this->env->getExtension("native_profiler");
        $__internal_062eefa1d08ecaa97081764a8c986ad99659196eb1d3ad816d48cb24a30283d0->enter($__internal_062eefa1d08ecaa97081764a8c986ad99659196eb1d3ad816d48cb24a30283d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_062eefa1d08ecaa97081764a8c986ad99659196eb1d3ad816d48cb24a30283d0->leave($__internal_062eefa1d08ecaa97081764a8c986ad99659196eb1d3ad816d48cb24a30283d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  106 => 27,  96 => 29,  94 => 27,  90 => 25,  84 => 24,  75 => 21,  70 => 20,  65 => 19,  61 => 18,  57 => 16,  49 => 14,  43 => 11,  39 => 10,  34 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
