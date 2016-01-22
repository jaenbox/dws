<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e059a91eb3e855807a04e544007776a0f22834b943c8a7b9f101f5599b29e0ea extends Twig_Template
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
        $__internal_3bedeec8c97d4b00e1eae30219615a8fc93647155d1fe26664f3388dd9eaa877 = $this->env->getExtension("native_profiler");
        $__internal_3bedeec8c97d4b00e1eae30219615a8fc93647155d1fe26664f3388dd9eaa877->enter($__internal_3bedeec8c97d4b00e1eae30219615a8fc93647155d1fe26664f3388dd9eaa877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3bedeec8c97d4b00e1eae30219615a8fc93647155d1fe26664f3388dd9eaa877->leave($__internal_3bedeec8c97d4b00e1eae30219615a8fc93647155d1fe26664f3388dd9eaa877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
