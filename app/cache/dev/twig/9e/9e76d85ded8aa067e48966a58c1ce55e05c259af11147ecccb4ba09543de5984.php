<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2998ba6d8036f4907f6e7238b26ce8450c2014872ce947b43041203f66e9ad5b extends Twig_Template
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
        $__internal_1dd0f69119f1b0b628c70808355f63db1874545acbdf438a336e6ef64997fcab = $this->env->getExtension("native_profiler");
        $__internal_1dd0f69119f1b0b628c70808355f63db1874545acbdf438a336e6ef64997fcab->enter($__internal_1dd0f69119f1b0b628c70808355f63db1874545acbdf438a336e6ef64997fcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1dd0f69119f1b0b628c70808355f63db1874545acbdf438a336e6ef64997fcab->leave($__internal_1dd0f69119f1b0b628c70808355f63db1874545acbdf438a336e6ef64997fcab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
