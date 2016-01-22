<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_42a4c91c9a5ffd4d5cc0ca78438153353db52ec19032df59e14432f1ed06236d extends Twig_Template
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
        $__internal_b0f90336e408df9628d0fe44197ff74d155c9acc06e92b83c8dcb52001a2481c = $this->env->getExtension("native_profiler");
        $__internal_b0f90336e408df9628d0fe44197ff74d155c9acc06e92b83c8dcb52001a2481c->enter($__internal_b0f90336e408df9628d0fe44197ff74d155c9acc06e92b83c8dcb52001a2481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b0f90336e408df9628d0fe44197ff74d155c9acc06e92b83c8dcb52001a2481c->leave($__internal_b0f90336e408df9628d0fe44197ff74d155c9acc06e92b83c8dcb52001a2481c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
