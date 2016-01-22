<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0a8f1e044eec3f364e26fd4195983833019059edee930d7353a59ef73c9eea10 extends Twig_Template
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
        $__internal_4ba77034b67b3bda903bb6544b77e0f0b12d4ef522c19adcba0339e13dff90b6 = $this->env->getExtension("native_profiler");
        $__internal_4ba77034b67b3bda903bb6544b77e0f0b12d4ef522c19adcba0339e13dff90b6->enter($__internal_4ba77034b67b3bda903bb6544b77e0f0b12d4ef522c19adcba0339e13dff90b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4ba77034b67b3bda903bb6544b77e0f0b12d4ef522c19adcba0339e13dff90b6->leave($__internal_4ba77034b67b3bda903bb6544b77e0f0b12d4ef522c19adcba0339e13dff90b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
