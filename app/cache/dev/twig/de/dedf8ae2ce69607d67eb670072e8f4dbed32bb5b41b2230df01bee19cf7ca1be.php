<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fcc1828534957d04b0402cbf88e9ee6219ba5a58d9b7efcb1a0a17b9995a1917 extends Twig_Template
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
        $__internal_a71e2dc98dea5cc2b645456d05ce89ccd3edd931377d52e936399ff212dc7909 = $this->env->getExtension("native_profiler");
        $__internal_a71e2dc98dea5cc2b645456d05ce89ccd3edd931377d52e936399ff212dc7909->enter($__internal_a71e2dc98dea5cc2b645456d05ce89ccd3edd931377d52e936399ff212dc7909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a71e2dc98dea5cc2b645456d05ce89ccd3edd931377d52e936399ff212dc7909->leave($__internal_a71e2dc98dea5cc2b645456d05ce89ccd3edd931377d52e936399ff212dc7909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
