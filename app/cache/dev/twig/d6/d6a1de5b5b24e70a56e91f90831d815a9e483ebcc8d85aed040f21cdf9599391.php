<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_31750814307c1d554498bc45c1da5d795ada23c54c31f6c9e2d2c4b90729df2f extends Twig_Template
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
        $__internal_6ea65435c309c001af0950eb4bdf8963be1b2a0a94811cdd2828c401b3a2a6a8 = $this->env->getExtension("native_profiler");
        $__internal_6ea65435c309c001af0950eb4bdf8963be1b2a0a94811cdd2828c401b3a2a6a8->enter($__internal_6ea65435c309c001af0950eb4bdf8963be1b2a0a94811cdd2828c401b3a2a6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6ea65435c309c001af0950eb4bdf8963be1b2a0a94811cdd2828c401b3a2a6a8->leave($__internal_6ea65435c309c001af0950eb4bdf8963be1b2a0a94811cdd2828c401b3a2a6a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
