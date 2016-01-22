<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_926b22f4d455054e270641472172cf0ab0f1a989f01729f6298291d99f9028a4 extends Twig_Template
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
        $__internal_2409882d82a31d89864644356a685c9c0137424f6b9300d7cbc49921279f1b9e = $this->env->getExtension("native_profiler");
        $__internal_2409882d82a31d89864644356a685c9c0137424f6b9300d7cbc49921279f1b9e->enter($__internal_2409882d82a31d89864644356a685c9c0137424f6b9300d7cbc49921279f1b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2409882d82a31d89864644356a685c9c0137424f6b9300d7cbc49921279f1b9e->leave($__internal_2409882d82a31d89864644356a685c9c0137424f6b9300d7cbc49921279f1b9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
