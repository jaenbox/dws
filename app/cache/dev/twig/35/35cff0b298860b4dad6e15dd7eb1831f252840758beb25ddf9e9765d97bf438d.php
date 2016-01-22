<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_378f152a551e639ba0b63270a836a80f07b5ebcc9e0ceae6bb32d02dc413d299 extends Twig_Template
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
        $__internal_55b6eec3d461b94ef672fbb6b9332e22732880b6e59a375cc120e408f09670b2 = $this->env->getExtension("native_profiler");
        $__internal_55b6eec3d461b94ef672fbb6b9332e22732880b6e59a375cc120e408f09670b2->enter($__internal_55b6eec3d461b94ef672fbb6b9332e22732880b6e59a375cc120e408f09670b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_55b6eec3d461b94ef672fbb6b9332e22732880b6e59a375cc120e408f09670b2->leave($__internal_55b6eec3d461b94ef672fbb6b9332e22732880b6e59a375cc120e408f09670b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
