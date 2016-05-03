<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_542aa04482f543f91206e4e38037a6829aa360c4d43a3ddfa9a4916bca5b9bfe extends Twig_Template
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
        $__internal_44b79cab7c760bc629f8998ae1abbcba502a76686b008c1a9d5079f931c5020e = $this->env->getExtension("native_profiler");
        $__internal_44b79cab7c760bc629f8998ae1abbcba502a76686b008c1a9d5079f931c5020e->enter($__internal_44b79cab7c760bc629f8998ae1abbcba502a76686b008c1a9d5079f931c5020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_44b79cab7c760bc629f8998ae1abbcba502a76686b008c1a9d5079f931c5020e->leave($__internal_44b79cab7c760bc629f8998ae1abbcba502a76686b008c1a9d5079f931c5020e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
