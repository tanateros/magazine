<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ef609ec69add67aff950f6a8941ef50cb626d52abfcad920c9d5ee9137a49af8 extends Twig_Template
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
        $__internal_e8d92a2ce908e4cde07f82a626a5b47018e5fac59561cc959f820dab2070a49a = $this->env->getExtension("native_profiler");
        $__internal_e8d92a2ce908e4cde07f82a626a5b47018e5fac59561cc959f820dab2070a49a->enter($__internal_e8d92a2ce908e4cde07f82a626a5b47018e5fac59561cc959f820dab2070a49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e8d92a2ce908e4cde07f82a626a5b47018e5fac59561cc959f820dab2070a49a->leave($__internal_e8d92a2ce908e4cde07f82a626a5b47018e5fac59561cc959f820dab2070a49a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
