<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_eb975670ff36f7ea3347fc178944d9ef8c11518dd2fb7d07c8ce8f959a931fed extends Twig_Template
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
        $__internal_13c0e14e0cce58f868be5a5d9ebd17a185f72db6a82bf7defd4683975f93258b = $this->env->getExtension("native_profiler");
        $__internal_13c0e14e0cce58f868be5a5d9ebd17a185f72db6a82bf7defd4683975f93258b->enter($__internal_13c0e14e0cce58f868be5a5d9ebd17a185f72db6a82bf7defd4683975f93258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_13c0e14e0cce58f868be5a5d9ebd17a185f72db6a82bf7defd4683975f93258b->leave($__internal_13c0e14e0cce58f868be5a5d9ebd17a185f72db6a82bf7defd4683975f93258b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
