<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2a3f6237b319bfe711dedb9c30bcdd741e7d84fd07c073d93a80f2b45f2ccfe7 extends Twig_Template
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
        $__internal_52852229a8f20df9ec832a6977f32aedb5a719a64030ef3564c71d1a5c6010a9 = $this->env->getExtension("native_profiler");
        $__internal_52852229a8f20df9ec832a6977f32aedb5a719a64030ef3564c71d1a5c6010a9->enter($__internal_52852229a8f20df9ec832a6977f32aedb5a719a64030ef3564c71d1a5c6010a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_52852229a8f20df9ec832a6977f32aedb5a719a64030ef3564c71d1a5c6010a9->leave($__internal_52852229a8f20df9ec832a6977f32aedb5a719a64030ef3564c71d1a5c6010a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
