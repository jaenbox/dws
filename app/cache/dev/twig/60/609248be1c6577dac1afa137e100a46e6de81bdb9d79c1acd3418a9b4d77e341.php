<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_850386c08a27c4997c2655edb99a6c7e4a6a637e0bdaad223de9098a6d1236f1 extends Twig_Template
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
        $__internal_c770ceb49a95d05006489f904bfaa0c570b0270efff7d482cd5ebbc8d124481f = $this->env->getExtension("native_profiler");
        $__internal_c770ceb49a95d05006489f904bfaa0c570b0270efff7d482cd5ebbc8d124481f->enter($__internal_c770ceb49a95d05006489f904bfaa0c570b0270efff7d482cd5ebbc8d124481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c770ceb49a95d05006489f904bfaa0c570b0270efff7d482cd5ebbc8d124481f->leave($__internal_c770ceb49a95d05006489f904bfaa0c570b0270efff7d482cd5ebbc8d124481f_prof);

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
