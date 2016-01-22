<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_67773b91eef592e851cb21af6f35ad30b5000944bc5cce48d6b75d1a86405b7b extends Twig_Template
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
        $__internal_e0ff5bc9ad4bd426df0ed3d5f7196736070b889a6a64dee6ef2f03a97c1cc915 = $this->env->getExtension("native_profiler");
        $__internal_e0ff5bc9ad4bd426df0ed3d5f7196736070b889a6a64dee6ef2f03a97c1cc915->enter($__internal_e0ff5bc9ad4bd426df0ed3d5f7196736070b889a6a64dee6ef2f03a97c1cc915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e0ff5bc9ad4bd426df0ed3d5f7196736070b889a6a64dee6ef2f03a97c1cc915->leave($__internal_e0ff5bc9ad4bd426df0ed3d5f7196736070b889a6a64dee6ef2f03a97c1cc915_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
