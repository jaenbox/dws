<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_33e71dd878b013c3085829fb9decdcfaff499d315a31fecb7848c22331e68bae extends Twig_Template
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
        $__internal_8e14dac74d5178375745d5a9568f49b12d934ab42875b7c7abe460bf75ce4dfa = $this->env->getExtension("native_profiler");
        $__internal_8e14dac74d5178375745d5a9568f49b12d934ab42875b7c7abe460bf75ce4dfa->enter($__internal_8e14dac74d5178375745d5a9568f49b12d934ab42875b7c7abe460bf75ce4dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8e14dac74d5178375745d5a9568f49b12d934ab42875b7c7abe460bf75ce4dfa->leave($__internal_8e14dac74d5178375745d5a9568f49b12d934ab42875b7c7abe460bf75ce4dfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
