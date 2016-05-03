<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_477a201c1d4031c1cc4d8be2c2cb705cb2cd430468a792fbfd788403ee66396a extends Twig_Template
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
        $__internal_3c743921c6d641487ff1e19522c19f94ec8ad170cdaf1ff596feda32d852de02 = $this->env->getExtension("native_profiler");
        $__internal_3c743921c6d641487ff1e19522c19f94ec8ad170cdaf1ff596feda32d852de02->enter($__internal_3c743921c6d641487ff1e19522c19f94ec8ad170cdaf1ff596feda32d852de02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3c743921c6d641487ff1e19522c19f94ec8ad170cdaf1ff596feda32d852de02->leave($__internal_3c743921c6d641487ff1e19522c19f94ec8ad170cdaf1ff596feda32d852de02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
