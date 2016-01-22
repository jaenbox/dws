<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_458d5e18ceabab182447e2f63fa2499a9d552c72a1b7433e8bc572748ceb1ebe extends Twig_Template
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
        $__internal_ae3ea7dec7742e1c9c3a6f618fc1aa9cf95a4ce389b3736c1457eaa890a533fd = $this->env->getExtension("native_profiler");
        $__internal_ae3ea7dec7742e1c9c3a6f618fc1aa9cf95a4ce389b3736c1457eaa890a533fd->enter($__internal_ae3ea7dec7742e1c9c3a6f618fc1aa9cf95a4ce389b3736c1457eaa890a533fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ae3ea7dec7742e1c9c3a6f618fc1aa9cf95a4ce389b3736c1457eaa890a533fd->leave($__internal_ae3ea7dec7742e1c9c3a6f618fc1aa9cf95a4ce389b3736c1457eaa890a533fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
