<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f95109f805f6b2e0da8e90991296d8c3ac29818f17aa616426dbb6350828d132 extends Twig_Template
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
        $__internal_0c14d72afaad505714af77c39808432985eaf9b2734cf400b8a61b7745a350ab = $this->env->getExtension("native_profiler");
        $__internal_0c14d72afaad505714af77c39808432985eaf9b2734cf400b8a61b7745a350ab->enter($__internal_0c14d72afaad505714af77c39808432985eaf9b2734cf400b8a61b7745a350ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0c14d72afaad505714af77c39808432985eaf9b2734cf400b8a61b7745a350ab->leave($__internal_0c14d72afaad505714af77c39808432985eaf9b2734cf400b8a61b7745a350ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
