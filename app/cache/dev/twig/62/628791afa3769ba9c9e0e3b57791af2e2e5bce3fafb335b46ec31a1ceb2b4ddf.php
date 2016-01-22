<?php

/* product/deleteProduct.html.twig */
class __TwigTemplate_b5865e2c12256e451dcdbc446797c4a2f582752f6de240e46e20665562169ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/deleteProduct.html.twig", 1);
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
        $__internal_327d0cce9bb5f8cd2f9de67ceb2474385c79336cada91fcfa452536f6b65a017 = $this->env->getExtension("native_profiler");
        $__internal_327d0cce9bb5f8cd2f9de67ceb2474385c79336cada91fcfa452536f6b65a017->enter($__internal_327d0cce9bb5f8cd2f9de67ceb2474385c79336cada91fcfa452536f6b65a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/deleteProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327d0cce9bb5f8cd2f9de67ceb2474385c79336cada91fcfa452536f6b65a017->leave($__internal_327d0cce9bb5f8cd2f9de67ceb2474385c79336cada91fcfa452536f6b65a017_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_941a969f0e518bee5d3347d033af0dcdb22828844cd5d166405e431e3764b2c9 = $this->env->getExtension("native_profiler");
        $__internal_941a969f0e518bee5d3347d033af0dcdb22828844cd5d166405e431e3764b2c9->enter($__internal_941a969f0e518bee5d3347d033af0dcdb22828844cd5d166405e431e3764b2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.delete.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_941a969f0e518bee5d3347d033af0dcdb22828844cd5d166405e431e3764b2c9->leave($__internal_941a969f0e518bee5d3347d033af0dcdb22828844cd5d166405e431e3764b2c9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_779b9dce463cff7581ab5f242f8f4937e208470ab9aafab9c9e392439bc9cacd = $this->env->getExtension("native_profiler");
        $__internal_779b9dce463cff7581ab5f242f8f4937e208470ab9aafab9c9e392439bc9cacd->enter($__internal_779b9dce463cff7581ab5f242f8f4937e208470ab9aafab9c9e392439bc9cacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        // line 9
        echo "\t
\t";
        // line 11
        echo "\t<hr><hr><hr>
\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.delete.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.delete.resolution", array(), "AppBundle"), "html", null, true);
        echo " ";
        // line 15
        echo "\t<div>
\t\t";
        // line 17
        echo "\t</div>
\t
";
        
        $__internal_779b9dce463cff7581ab5f242f8f4937e208470ab9aafab9c9e392439bc9cacd->leave($__internal_779b9dce463cff7581ab5f242f8f4937e208470ab9aafab9c9e392439bc9cacd_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12d0656ff0fb92b5ceb09f277509be6cc0a8cfa7c38193ef0da9302bd9e37237 = $this->env->getExtension("native_profiler");
        $__internal_12d0656ff0fb92b5ceb09f277509be6cc0a8cfa7c38193ef0da9302bd9e37237->enter($__internal_12d0656ff0fb92b5ceb09f277509be6cc0a8cfa7c38193ef0da9302bd9e37237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12d0656ff0fb92b5ceb09f277509be6cc0a8cfa7c38193ef0da9302bd9e37237->leave($__internal_12d0656ff0fb92b5ceb09f277509be6cc0a8cfa7c38193ef0da9302bd9e37237_prof);

    }

    public function getTemplateName()
    {
        return "product/deleteProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  74 => 17,  71 => 15,  68 => 14,  63 => 12,  60 => 11,  57 => 9,  55 => 7,  49 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'product.delete.title'|trans }} {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump */
/* 	{{ dump(product) }} #}*/
/* 	*/
/* 	{# Mostramos el mensaje success #}*/
/* 	<hr><hr><hr>*/
/* 	<h2>{{ 'product.delete.header'|trans }}</h2>*/
/* 	*/
/* 	{{ 'product.delete.resolution'|trans }} {# El producto <strong>{{ product.name}}</strong> a sido eliminada. #}*/
/* 	<div>*/
/* 		{# <a href="{{ url('listActionProduct')}}">atrás</a> #}*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
