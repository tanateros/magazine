<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b8278a394fdbdd3d4141b9281bdb79b133b74615216ba014aa6d98f5fe8c35bb extends Twig_Template
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
        $__internal_e27c185b65ce370a033af6698d551655f4cd61092b22ff701e1ad48a6078d9f5 = $this->env->getExtension("native_profiler");
        $__internal_e27c185b65ce370a033af6698d551655f4cd61092b22ff701e1ad48a6078d9f5->enter($__internal_e27c185b65ce370a033af6698d551655f4cd61092b22ff701e1ad48a6078d9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e27c185b65ce370a033af6698d551655f4cd61092b22ff701e1ad48a6078d9f5->leave($__internal_e27c185b65ce370a033af6698d551655f4cd61092b22ff701e1ad48a6078d9f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
