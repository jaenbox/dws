<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_464bf456009a3e03b40d0082b3aa585ff035e30d5ef38466593d847401f07861 extends Twig_Template
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
        $__internal_820d38dd0cde30617c3bb6bea728687db4ffab3258768149268c611f7730fb56 = $this->env->getExtension("native_profiler");
        $__internal_820d38dd0cde30617c3bb6bea728687db4ffab3258768149268c611f7730fb56->enter($__internal_820d38dd0cde30617c3bb6bea728687db4ffab3258768149268c611f7730fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_820d38dd0cde30617c3bb6bea728687db4ffab3258768149268c611f7730fb56->leave($__internal_820d38dd0cde30617c3bb6bea728687db4ffab3258768149268c611f7730fb56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
