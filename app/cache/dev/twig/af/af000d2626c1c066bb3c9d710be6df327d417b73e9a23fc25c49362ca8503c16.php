<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_257a84feef5743bf446775d5ef719f7eb13ebdc2a98a5c93c9d439eb5fcde8fe extends Twig_Template
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
        $__internal_b49c13fa3ffd15e580d2c214deb9bcfe988bc82c892de1387a67f162595e6e52 = $this->env->getExtension("native_profiler");
        $__internal_b49c13fa3ffd15e580d2c214deb9bcfe988bc82c892de1387a67f162595e6e52->enter($__internal_b49c13fa3ffd15e580d2c214deb9bcfe988bc82c892de1387a67f162595e6e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b49c13fa3ffd15e580d2c214deb9bcfe988bc82c892de1387a67f162595e6e52->leave($__internal_b49c13fa3ffd15e580d2c214deb9bcfe988bc82c892de1387a67f162595e6e52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
