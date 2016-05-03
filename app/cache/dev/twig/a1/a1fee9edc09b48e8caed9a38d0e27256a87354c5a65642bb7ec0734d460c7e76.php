<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6864d5b458c73a1cd7e1ad82c13712cbc364f17486d1d401621401e319d725fa extends Twig_Template
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
        $__internal_06b03fdeb1ed01f9ceb5a2589f5e8623f0c80395995d65584266f0bcc43cca24 = $this->env->getExtension("native_profiler");
        $__internal_06b03fdeb1ed01f9ceb5a2589f5e8623f0c80395995d65584266f0bcc43cca24->enter($__internal_06b03fdeb1ed01f9ceb5a2589f5e8623f0c80395995d65584266f0bcc43cca24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_06b03fdeb1ed01f9ceb5a2589f5e8623f0c80395995d65584266f0bcc43cca24->leave($__internal_06b03fdeb1ed01f9ceb5a2589f5e8623f0c80395995d65584266f0bcc43cca24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
