<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e182db15704b7c72988d1f95e92fb7d58003625db3b2712f9a65bccb560eff0f extends Twig_Template
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
        $__internal_902e7546c6f803d7b9de14ab98398d7ceb913a4b68fdc449a3a3ad349ba2c54c = $this->env->getExtension("native_profiler");
        $__internal_902e7546c6f803d7b9de14ab98398d7ceb913a4b68fdc449a3a3ad349ba2c54c->enter($__internal_902e7546c6f803d7b9de14ab98398d7ceb913a4b68fdc449a3a3ad349ba2c54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_902e7546c6f803d7b9de14ab98398d7ceb913a4b68fdc449a3a3ad349ba2c54c->leave($__internal_902e7546c6f803d7b9de14ab98398d7ceb913a4b68fdc449a3a3ad349ba2c54c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
