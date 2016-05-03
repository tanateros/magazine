<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7f9e52955756c7fae63e7740a2bf77c9e18b2afb008e2f8d781690402d50af8c extends Twig_Template
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
        $__internal_dc1fa599efa890da20b91c4a748f905f6d22ed6ae341cf144a59dd8c0de6521e = $this->env->getExtension("native_profiler");
        $__internal_dc1fa599efa890da20b91c4a748f905f6d22ed6ae341cf144a59dd8c0de6521e->enter($__internal_dc1fa599efa890da20b91c4a748f905f6d22ed6ae341cf144a59dd8c0de6521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dc1fa599efa890da20b91c4a748f905f6d22ed6ae341cf144a59dd8c0de6521e->leave($__internal_dc1fa599efa890da20b91c4a748f905f6d22ed6ae341cf144a59dd8c0de6521e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
