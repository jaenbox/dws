<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c7d76edc51d66d634819cc666b37b1cb34c3a824a76e6e57daca3a355eed7168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbc42cb9188f805eb278a069a0ea251afca7a28ff1920132f74e95f9c28ffa32 = $this->env->getExtension("native_profiler");
        $__internal_fbc42cb9188f805eb278a069a0ea251afca7a28ff1920132f74e95f9c28ffa32->enter($__internal_fbc42cb9188f805eb278a069a0ea251afca7a28ff1920132f74e95f9c28ffa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fbc42cb9188f805eb278a069a0ea251afca7a28ff1920132f74e95f9c28ffa32->leave($__internal_fbc42cb9188f805eb278a069a0ea251afca7a28ff1920132f74e95f9c28ffa32_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_baede1efb9b85a001f43d5e89478032cb718c41160a27163fbaa1710156600c7 = $this->env->getExtension("native_profiler");
        $__internal_baede1efb9b85a001f43d5e89478032cb718c41160a27163fbaa1710156600c7->enter($__internal_baede1efb9b85a001f43d5e89478032cb718c41160a27163fbaa1710156600c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_baede1efb9b85a001f43d5e89478032cb718c41160a27163fbaa1710156600c7->leave($__internal_baede1efb9b85a001f43d5e89478032cb718c41160a27163fbaa1710156600c7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
