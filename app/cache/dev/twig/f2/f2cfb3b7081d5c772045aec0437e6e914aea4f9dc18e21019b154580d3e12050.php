<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_95015dcd5aa3f9958d16534bcbe7046f2b24c6ce3b6fb71eb576d06c3e736f3e extends Twig_Template
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
        $__internal_d9da06ccec9740b78d78b041bd9799ae5e1b5e241380e65d678af1353efb1bc5 = $this->env->getExtension("native_profiler");
        $__internal_d9da06ccec9740b78d78b041bd9799ae5e1b5e241380e65d678af1353efb1bc5->enter($__internal_d9da06ccec9740b78d78b041bd9799ae5e1b5e241380e65d678af1353efb1bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d9da06ccec9740b78d78b041bd9799ae5e1b5e241380e65d678af1353efb1bc5->leave($__internal_d9da06ccec9740b78d78b041bd9799ae5e1b5e241380e65d678af1353efb1bc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
