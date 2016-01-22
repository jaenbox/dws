<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2056a2e91d1d059ef9d917c8d928e28d23ec94d26888d19cf81eed9d5b6cac2a extends Twig_Template
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
        $__internal_04ce7cec802b6d3361a412fabec1d3a821c69bbd102f0c39a3a469e5df13a298 = $this->env->getExtension("native_profiler");
        $__internal_04ce7cec802b6d3361a412fabec1d3a821c69bbd102f0c39a3a469e5df13a298->enter($__internal_04ce7cec802b6d3361a412fabec1d3a821c69bbd102f0c39a3a469e5df13a298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_04ce7cec802b6d3361a412fabec1d3a821c69bbd102f0c39a3a469e5df13a298->leave($__internal_04ce7cec802b6d3361a412fabec1d3a821c69bbd102f0c39a3a469e5df13a298_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
