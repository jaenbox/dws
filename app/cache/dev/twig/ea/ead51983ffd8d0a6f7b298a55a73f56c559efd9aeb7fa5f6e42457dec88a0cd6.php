<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_03aaa97acd40b9d096fdbd490efd3471c6d1e83dc6a75cfa589bd9417518938d extends Twig_Template
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
        $__internal_f0469c5adde225d9de9509b826f559a85e7b0f62ce1e85e968194acfcd2c43ea = $this->env->getExtension("native_profiler");
        $__internal_f0469c5adde225d9de9509b826f559a85e7b0f62ce1e85e968194acfcd2c43ea->enter($__internal_f0469c5adde225d9de9509b826f559a85e7b0f62ce1e85e968194acfcd2c43ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f0469c5adde225d9de9509b826f559a85e7b0f62ce1e85e968194acfcd2c43ea->leave($__internal_f0469c5adde225d9de9509b826f559a85e7b0f62ce1e85e968194acfcd2c43ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
