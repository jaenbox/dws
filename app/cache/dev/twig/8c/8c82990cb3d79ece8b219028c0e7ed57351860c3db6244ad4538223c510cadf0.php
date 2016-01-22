<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f8fe94313b3acf729eda44012c7da116efb17e0c42fa86b837eff42f2c8c2f2d extends Twig_Template
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
        $__internal_a86cff1fa654af40e8bb9170df2fe70d9f697170e06a4d9d79e265b75014adec = $this->env->getExtension("native_profiler");
        $__internal_a86cff1fa654af40e8bb9170df2fe70d9f697170e06a4d9d79e265b75014adec->enter($__internal_a86cff1fa654af40e8bb9170df2fe70d9f697170e06a4d9d79e265b75014adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a86cff1fa654af40e8bb9170df2fe70d9f697170e06a4d9d79e265b75014adec->leave($__internal_a86cff1fa654af40e8bb9170df2fe70d9f697170e06a4d9d79e265b75014adec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
