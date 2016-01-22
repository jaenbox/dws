<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b621482dadf36222142b03e406a57c93ed21523680d2b5394d1c7675cab95c4 extends Twig_Template
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
        $__internal_f4288224e52d920ae134cc29573c8f41806d6de8709a7bac3e8162dec35d64d4 = $this->env->getExtension("native_profiler");
        $__internal_f4288224e52d920ae134cc29573c8f41806d6de8709a7bac3e8162dec35d64d4->enter($__internal_f4288224e52d920ae134cc29573c8f41806d6de8709a7bac3e8162dec35d64d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f4288224e52d920ae134cc29573c8f41806d6de8709a7bac3e8162dec35d64d4->leave($__internal_f4288224e52d920ae134cc29573c8f41806d6de8709a7bac3e8162dec35d64d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
