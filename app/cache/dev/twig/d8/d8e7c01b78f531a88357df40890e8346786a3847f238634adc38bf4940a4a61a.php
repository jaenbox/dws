<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_edc59c0290a5037a63e65c0bd0a8254dad621d4fde3a85b9af2298f6194eef32 extends Twig_Template
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
        $__internal_963ebbb5060266ec3369db74398eb077cc1451ce09936c5fb835f0aa90c87fa8 = $this->env->getExtension("native_profiler");
        $__internal_963ebbb5060266ec3369db74398eb077cc1451ce09936c5fb835f0aa90c87fa8->enter($__internal_963ebbb5060266ec3369db74398eb077cc1451ce09936c5fb835f0aa90c87fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_963ebbb5060266ec3369db74398eb077cc1451ce09936c5fb835f0aa90c87fa8->leave($__internal_963ebbb5060266ec3369db74398eb077cc1451ce09936c5fb835f0aa90c87fa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
