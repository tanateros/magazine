<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9e13eacd60e833b0288418da041fad0ea9adae0ba42dcaf3b3f036604485059e extends Twig_Template
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
        $__internal_3bf1e3ffee8f0b7cd593929f79f771530a112f49c330542a061570b99f1b5497 = $this->env->getExtension("native_profiler");
        $__internal_3bf1e3ffee8f0b7cd593929f79f771530a112f49c330542a061570b99f1b5497->enter($__internal_3bf1e3ffee8f0b7cd593929f79f771530a112f49c330542a061570b99f1b5497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3bf1e3ffee8f0b7cd593929f79f771530a112f49c330542a061570b99f1b5497->leave($__internal_3bf1e3ffee8f0b7cd593929f79f771530a112f49c330542a061570b99f1b5497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
