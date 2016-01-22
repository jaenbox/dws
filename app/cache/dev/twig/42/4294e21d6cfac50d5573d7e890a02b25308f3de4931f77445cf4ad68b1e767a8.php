<?php

/* category/deleteCategory.html.twig */
class __TwigTemplate_f3c63bfd16fc47f0e699a99b278a7eb90943f97ed64d9fef194fe1629f6c2179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/deleteCategory.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43dc2bcda935e7074a44cb4d3eafde334f4f91a6bbd9c40f11e7261478a14680 = $this->env->getExtension("native_profiler");
        $__internal_43dc2bcda935e7074a44cb4d3eafde334f4f91a6bbd9c40f11e7261478a14680->enter($__internal_43dc2bcda935e7074a44cb4d3eafde334f4f91a6bbd9c40f11e7261478a14680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/deleteCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43dc2bcda935e7074a44cb4d3eafde334f4f91a6bbd9c40f11e7261478a14680->leave($__internal_43dc2bcda935e7074a44cb4d3eafde334f4f91a6bbd9c40f11e7261478a14680_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed4057410b6238cab17bbef09536be1b0fe6a736026f574885e01472bbdff530 = $this->env->getExtension("native_profiler");
        $__internal_ed4057410b6238cab17bbef09536be1b0fe6a736026f574885e01472bbdff530->enter($__internal_ed4057410b6238cab17bbef09536be1b0fe6a736026f574885e01472bbdff530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.delete.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_ed4057410b6238cab17bbef09536be1b0fe6a736026f574885e01472bbdff530->leave($__internal_ed4057410b6238cab17bbef09536be1b0fe6a736026f574885e01472bbdff530_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f67f0848c343d0e1f18009b684a8ca728176bebb9caf2c57e547f568130e5f03 = $this->env->getExtension("native_profiler");
        $__internal_f67f0848c343d0e1f18009b684a8ca728176bebb9caf2c57e547f568130e5f03->enter($__internal_f67f0848c343d0e1f18009b684a8ca728176bebb9caf2c57e547f568130e5f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 10
        echo "\t
\t";
        // line 12
        echo "\t<hr><hr>
\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.delete.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.delete.resolution", array(), "AppBundle"), "html", null, true);
        echo "
\t<div>
\t\t";
        // line 17
        echo "\t</div>
\t
";
        
        $__internal_f67f0848c343d0e1f18009b684a8ca728176bebb9caf2c57e547f568130e5f03->leave($__internal_f67f0848c343d0e1f18009b684a8ca728176bebb9caf2c57e547f568130e5f03_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be418b193db84777e457d9dd9b239d4c467f0cb7295b2db9a990e4a299a3d7bd = $this->env->getExtension("native_profiler");
        $__internal_be418b193db84777e457d9dd9b239d4c467f0cb7295b2db9a990e4a299a3d7bd->enter($__internal_be418b193db84777e457d9dd9b239d4c467f0cb7295b2db9a990e4a299a3d7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be418b193db84777e457d9dd9b239d4c467f0cb7295b2db9a990e4a299a3d7bd->leave($__internal_be418b193db84777e457d9dd9b239d4c467f0cb7295b2db9a990e4a299a3d7bd_prof);

    }

    public function getTemplateName()
    {
        return "category/deleteCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  72 => 17,  67 => 14,  63 => 13,  60 => 12,  57 => 10,  55 => 8,  49 => 7,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'category.delete.title'|trans }} {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump */
/* 	{{ dump(category) }} #}*/
/* 	*/
/* 	{# Mostramos el mensaje success #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'category.delete.header'|trans }}</h2>*/
/* 	{{ 'category.delete.resolution'|trans }}*/
/* 	<div>*/
/* 		{# <a href="{{ url('listActionCategory')}}">atrás</a> #}*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
