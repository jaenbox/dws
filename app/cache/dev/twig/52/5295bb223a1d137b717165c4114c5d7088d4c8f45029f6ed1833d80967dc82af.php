<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_527e9138f2f78a1894c565e16042762f95b055b37c7bf7182698fc56dca6b2f6 extends Twig_Template
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
        $__internal_d671065dcfdc72a706ef9bb467a13082e2a21171405807c7342818e5e292ab8a = $this->env->getExtension("native_profiler");
        $__internal_d671065dcfdc72a706ef9bb467a13082e2a21171405807c7342818e5e292ab8a->enter($__internal_d671065dcfdc72a706ef9bb467a13082e2a21171405807c7342818e5e292ab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d671065dcfdc72a706ef9bb467a13082e2a21171405807c7342818e5e292ab8a->leave($__internal_d671065dcfdc72a706ef9bb467a13082e2a21171405807c7342818e5e292ab8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
