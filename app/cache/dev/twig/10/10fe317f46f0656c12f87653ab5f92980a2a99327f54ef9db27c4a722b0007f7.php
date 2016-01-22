<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e1282179994187e38224964ab7e11b9c78ad310a209ed3a35e18e99c0808909b extends Twig_Template
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
        $__internal_16bfcae479cdab5ba490713448d87228c53a9ff7bc8c196d902d75cc017568d7 = $this->env->getExtension("native_profiler");
        $__internal_16bfcae479cdab5ba490713448d87228c53a9ff7bc8c196d902d75cc017568d7->enter($__internal_16bfcae479cdab5ba490713448d87228c53a9ff7bc8c196d902d75cc017568d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_16bfcae479cdab5ba490713448d87228c53a9ff7bc8c196d902d75cc017568d7->leave($__internal_16bfcae479cdab5ba490713448d87228c53a9ff7bc8c196d902d75cc017568d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
