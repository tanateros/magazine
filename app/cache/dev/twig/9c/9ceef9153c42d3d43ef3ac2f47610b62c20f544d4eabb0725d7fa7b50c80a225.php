<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_390f6639185c1d962bcb9fabc4c41404495e317f875f4450a1406d2813999c86 extends Twig_Template
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
        $__internal_e0c7940e6a06afeb4aef75bd6049d5147d9432e4688c5c9bf031c07d6de5790c = $this->env->getExtension("native_profiler");
        $__internal_e0c7940e6a06afeb4aef75bd6049d5147d9432e4688c5c9bf031c07d6de5790c->enter($__internal_e0c7940e6a06afeb4aef75bd6049d5147d9432e4688c5c9bf031c07d6de5790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e0c7940e6a06afeb4aef75bd6049d5147d9432e4688c5c9bf031c07d6de5790c->leave($__internal_e0c7940e6a06afeb4aef75bd6049d5147d9432e4688c5c9bf031c07d6de5790c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
