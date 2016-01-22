<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0c8da50c0f0eb1e5e85eb87eaa65b2ee7be7c3fc69b2e9a3f8f38d75c56d33a3 extends Twig_Template
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
        $__internal_5adbb72494f0feaa405a61c33dc1f43e03cd806926960d5ef0475b0efe0b62ac = $this->env->getExtension("native_profiler");
        $__internal_5adbb72494f0feaa405a61c33dc1f43e03cd806926960d5ef0475b0efe0b62ac->enter($__internal_5adbb72494f0feaa405a61c33dc1f43e03cd806926960d5ef0475b0efe0b62ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5adbb72494f0feaa405a61c33dc1f43e03cd806926960d5ef0475b0efe0b62ac->leave($__internal_5adbb72494f0feaa405a61c33dc1f43e03cd806926960d5ef0475b0efe0b62ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
