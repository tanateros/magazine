<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_41e521695d3f21a7a98bf73ae976edcb855c68fc07173c0ac6b5660fe83766f3 extends Twig_Template
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
        $__internal_d3c83cfc46663444a06e355e0461e5112a24f08a8fb4a672800309e14ace1054 = $this->env->getExtension("native_profiler");
        $__internal_d3c83cfc46663444a06e355e0461e5112a24f08a8fb4a672800309e14ace1054->enter($__internal_d3c83cfc46663444a06e355e0461e5112a24f08a8fb4a672800309e14ace1054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d3c83cfc46663444a06e355e0461e5112a24f08a8fb4a672800309e14ace1054->leave($__internal_d3c83cfc46663444a06e355e0461e5112a24f08a8fb4a672800309e14ace1054_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
