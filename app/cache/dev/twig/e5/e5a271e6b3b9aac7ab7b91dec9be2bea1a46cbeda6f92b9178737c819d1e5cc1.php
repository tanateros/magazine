<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_983c08a4b770113e6cd627e40b6db2199e9511ff244239e67499e32029b683aa extends Twig_Template
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
        $__internal_2aeb5a117041eb95ae38ed528973e92c1a11ebef1279a4e5c7a96b4ae0516023 = $this->env->getExtension("native_profiler");
        $__internal_2aeb5a117041eb95ae38ed528973e92c1a11ebef1279a4e5c7a96b4ae0516023->enter($__internal_2aeb5a117041eb95ae38ed528973e92c1a11ebef1279a4e5c7a96b4ae0516023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2aeb5a117041eb95ae38ed528973e92c1a11ebef1279a4e5c7a96b4ae0516023->leave($__internal_2aeb5a117041eb95ae38ed528973e92c1a11ebef1279a4e5c7a96b4ae0516023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
