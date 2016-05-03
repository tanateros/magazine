<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0e98a5101eae7c4c0e63741c8b0d5c0acabe726b85cb072ea267364fcc7e1a4f extends Twig_Template
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
        $__internal_2b15fda0e63d9444c8336a2c1aca3d22e314f47a624a18f8ffef97626db4e8d0 = $this->env->getExtension("native_profiler");
        $__internal_2b15fda0e63d9444c8336a2c1aca3d22e314f47a624a18f8ffef97626db4e8d0->enter($__internal_2b15fda0e63d9444c8336a2c1aca3d22e314f47a624a18f8ffef97626db4e8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2b15fda0e63d9444c8336a2c1aca3d22e314f47a624a18f8ffef97626db4e8d0->leave($__internal_2b15fda0e63d9444c8336a2c1aca3d22e314f47a624a18f8ffef97626db4e8d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
