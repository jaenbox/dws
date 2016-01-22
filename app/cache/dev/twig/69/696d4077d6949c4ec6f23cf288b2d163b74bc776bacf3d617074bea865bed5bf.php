<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5c4f6d357f2b4b3853a43b33201c312463cb9724f1d121a06a50c5a0114ada23 extends Twig_Template
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
        $__internal_092e167a8d92b3a6b2ad8f6c89fdae47dbd534794124aeab7e3804127b46af77 = $this->env->getExtension("native_profiler");
        $__internal_092e167a8d92b3a6b2ad8f6c89fdae47dbd534794124aeab7e3804127b46af77->enter($__internal_092e167a8d92b3a6b2ad8f6c89fdae47dbd534794124aeab7e3804127b46af77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_092e167a8d92b3a6b2ad8f6c89fdae47dbd534794124aeab7e3804127b46af77->leave($__internal_092e167a8d92b3a6b2ad8f6c89fdae47dbd534794124aeab7e3804127b46af77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
