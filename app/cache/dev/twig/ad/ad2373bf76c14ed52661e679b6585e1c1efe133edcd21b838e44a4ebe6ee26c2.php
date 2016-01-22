<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1959ef912f4f929ac85cc84bf9aa1133869395710814fb6b67b0e71826146350 extends Twig_Template
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
        $__internal_185276b9db5b282019a3f245b4e3c628931a1fd07e8cf197a2c212405460c58c = $this->env->getExtension("native_profiler");
        $__internal_185276b9db5b282019a3f245b4e3c628931a1fd07e8cf197a2c212405460c58c->enter($__internal_185276b9db5b282019a3f245b4e3c628931a1fd07e8cf197a2c212405460c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_185276b9db5b282019a3f245b4e3c628931a1fd07e8cf197a2c212405460c58c->leave($__internal_185276b9db5b282019a3f245b4e3c628931a1fd07e8cf197a2c212405460c58c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
