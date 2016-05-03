<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d5bfc48fd5df22ff34b8c340461d35b347698f1f8602f6b338beec239421c293 extends Twig_Template
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
        $__internal_d28543731d83cdda7728bc8204cd17ae31f8090ddb8e233ce5b2f5ee5219e7d5 = $this->env->getExtension("native_profiler");
        $__internal_d28543731d83cdda7728bc8204cd17ae31f8090ddb8e233ce5b2f5ee5219e7d5->enter($__internal_d28543731d83cdda7728bc8204cd17ae31f8090ddb8e233ce5b2f5ee5219e7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d28543731d83cdda7728bc8204cd17ae31f8090ddb8e233ce5b2f5ee5219e7d5->leave($__internal_d28543731d83cdda7728bc8204cd17ae31f8090ddb8e233ce5b2f5ee5219e7d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
