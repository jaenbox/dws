<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a9465d1fb995893e7c0458b6d1688409c933557c9097cd99888a412408c04f28 extends Twig_Template
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
        $__internal_f2a3189bd4be49cf73baeb395ea043967c0af0e5936476029ecee8b75d5a6d2e = $this->env->getExtension("native_profiler");
        $__internal_f2a3189bd4be49cf73baeb395ea043967c0af0e5936476029ecee8b75d5a6d2e->enter($__internal_f2a3189bd4be49cf73baeb395ea043967c0af0e5936476029ecee8b75d5a6d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f2a3189bd4be49cf73baeb395ea043967c0af0e5936476029ecee8b75d5a6d2e->leave($__internal_f2a3189bd4be49cf73baeb395ea043967c0af0e5936476029ecee8b75d5a6d2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
