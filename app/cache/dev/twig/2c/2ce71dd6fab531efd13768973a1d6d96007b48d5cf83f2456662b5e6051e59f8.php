<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_080d509fd09e5d673b5021b217f014d698b255a871e2958a5227d6f9c768257d extends Twig_Template
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
        $__internal_0495f61324cbcf1fdce964edc62f4414a1b4cb4478658e37cae154f57a1cb084 = $this->env->getExtension("native_profiler");
        $__internal_0495f61324cbcf1fdce964edc62f4414a1b4cb4478658e37cae154f57a1cb084->enter($__internal_0495f61324cbcf1fdce964edc62f4414a1b4cb4478658e37cae154f57a1cb084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0495f61324cbcf1fdce964edc62f4414a1b4cb4478658e37cae154f57a1cb084->leave($__internal_0495f61324cbcf1fdce964edc62f4414a1b4cb4478658e37cae154f57a1cb084_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
