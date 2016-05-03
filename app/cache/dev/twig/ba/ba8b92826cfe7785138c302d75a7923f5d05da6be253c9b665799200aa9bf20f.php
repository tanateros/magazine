<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_31d86cd330a8af29b1254184da22b3e0753cd166764b46636349bc9ac952513d extends Twig_Template
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
        $__internal_8c4b4a624ca5f0d586c09e45f0316d8f7ceb937a8439bf28059a502434edfcfa = $this->env->getExtension("native_profiler");
        $__internal_8c4b4a624ca5f0d586c09e45f0316d8f7ceb937a8439bf28059a502434edfcfa->enter($__internal_8c4b4a624ca5f0d586c09e45f0316d8f7ceb937a8439bf28059a502434edfcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8c4b4a624ca5f0d586c09e45f0316d8f7ceb937a8439bf28059a502434edfcfa->leave($__internal_8c4b4a624ca5f0d586c09e45f0316d8f7ceb937a8439bf28059a502434edfcfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
