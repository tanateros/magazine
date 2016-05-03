<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_630c626a5d5383424ae67306b944d985c41ea824e03af62337ea564040ee513e extends Twig_Template
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
        $__internal_08294254bfff82dffc1a2882317e643f2953384ef6bb9463185875bfca00a1f9 = $this->env->getExtension("native_profiler");
        $__internal_08294254bfff82dffc1a2882317e643f2953384ef6bb9463185875bfca00a1f9->enter($__internal_08294254bfff82dffc1a2882317e643f2953384ef6bb9463185875bfca00a1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_08294254bfff82dffc1a2882317e643f2953384ef6bb9463185875bfca00a1f9->leave($__internal_08294254bfff82dffc1a2882317e643f2953384ef6bb9463185875bfca00a1f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
