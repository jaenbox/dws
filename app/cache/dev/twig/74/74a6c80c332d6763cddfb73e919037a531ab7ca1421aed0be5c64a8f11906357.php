<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fc91b8a6deb0478748aa2a4ca4a75a66cab6d0871290d4d6935d8f7b27fe19ce extends Twig_Template
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
        $__internal_37328561dd5558706c4f2d7517e9485f5a44c04f8ce68a7b6ad61076b684cd23 = $this->env->getExtension("native_profiler");
        $__internal_37328561dd5558706c4f2d7517e9485f5a44c04f8ce68a7b6ad61076b684cd23->enter($__internal_37328561dd5558706c4f2d7517e9485f5a44c04f8ce68a7b6ad61076b684cd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_37328561dd5558706c4f2d7517e9485f5a44c04f8ce68a7b6ad61076b684cd23->leave($__internal_37328561dd5558706c4f2d7517e9485f5a44c04f8ce68a7b6ad61076b684cd23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
