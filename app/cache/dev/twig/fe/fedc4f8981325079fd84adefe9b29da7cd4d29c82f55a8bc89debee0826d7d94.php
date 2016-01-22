<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_bb28092eea82f23d23aab3d459e1ff5adec654a15b6096a577c3923f5251f519 extends Twig_Template
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
        $__internal_d30b77cff6c6938c32613f664671032498db43baf832153030dbef6387fb5940 = $this->env->getExtension("native_profiler");
        $__internal_d30b77cff6c6938c32613f664671032498db43baf832153030dbef6387fb5940->enter($__internal_d30b77cff6c6938c32613f664671032498db43baf832153030dbef6387fb5940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d30b77cff6c6938c32613f664671032498db43baf832153030dbef6387fb5940->leave($__internal_d30b77cff6c6938c32613f664671032498db43baf832153030dbef6387fb5940_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
