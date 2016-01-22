<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5f8ebbc0b624052e7dcfca131f89cb6871403e179ffd6740ab94f09c18b5f519 extends Twig_Template
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
        $__internal_23b8b197d1851d4705bc0da6f6482e9ea6dfa44760f25ce1d42f3693607961b2 = $this->env->getExtension("native_profiler");
        $__internal_23b8b197d1851d4705bc0da6f6482e9ea6dfa44760f25ce1d42f3693607961b2->enter($__internal_23b8b197d1851d4705bc0da6f6482e9ea6dfa44760f25ce1d42f3693607961b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_23b8b197d1851d4705bc0da6f6482e9ea6dfa44760f25ce1d42f3693607961b2->leave($__internal_23b8b197d1851d4705bc0da6f6482e9ea6dfa44760f25ce1d42f3693607961b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
