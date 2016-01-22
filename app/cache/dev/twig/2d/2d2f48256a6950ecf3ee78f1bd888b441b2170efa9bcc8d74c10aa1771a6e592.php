<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_eb3ff93532bc9e586dc5575a2627fb6716410741cac0d9c4d8cde614c6422309 extends Twig_Template
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
        $__internal_681053e25bb017e5355309b9669c198f9d4acaee3de67c4f1be8ea66d17660ad = $this->env->getExtension("native_profiler");
        $__internal_681053e25bb017e5355309b9669c198f9d4acaee3de67c4f1be8ea66d17660ad->enter($__internal_681053e25bb017e5355309b9669c198f9d4acaee3de67c4f1be8ea66d17660ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_681053e25bb017e5355309b9669c198f9d4acaee3de67c4f1be8ea66d17660ad->leave($__internal_681053e25bb017e5355309b9669c198f9d4acaee3de67c4f1be8ea66d17660ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
