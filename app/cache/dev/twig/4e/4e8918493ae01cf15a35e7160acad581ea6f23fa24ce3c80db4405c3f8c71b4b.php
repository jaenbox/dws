<?php

/* product/showProduct.html.twig */
class __TwigTemplate_08a1ae10ca7ba53e6901f079177c81f2fd2f399af2f2958bc15ecf66f1837069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/showProduct.html.twig", 1);
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
        $__internal_f3f0a115bab2a2086d4c9bcb4b0478a1e00d3f81e607064f9ceceba81a39300f = $this->env->getExtension("native_profiler");
        $__internal_f3f0a115bab2a2086d4c9bcb4b0478a1e00d3f81e607064f9ceceba81a39300f->enter($__internal_f3f0a115bab2a2086d4c9bcb4b0478a1e00d3f81e607064f9ceceba81a39300f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/showProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f0a115bab2a2086d4c9bcb4b0478a1e00d3f81e607064f9ceceba81a39300f->leave($__internal_f3f0a115bab2a2086d4c9bcb4b0478a1e00d3f81e607064f9ceceba81a39300f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8832899c176f5789053e58f0187c225452b468efa812f75a1a0ba2f6c709290 = $this->env->getExtension("native_profiler");
        $__internal_b8832899c176f5789053e58f0187c225452b468efa812f75a1a0ba2f6c709290->enter($__internal_b8832899c176f5789053e58f0187c225452b468efa812f75a1a0ba2f6c709290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.show.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_b8832899c176f5789053e58f0187c225452b468efa812f75a1a0ba2f6c709290->leave($__internal_b8832899c176f5789053e58f0187c225452b468efa812f75a1a0ba2f6c709290_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c792b6cff274b005d3162f1fddd74032e6da455f251f6c63f64f4669fc3845c = $this->env->getExtension("native_profiler");
        $__internal_9c792b6cff274b005d3162f1fddd74032e6da455f251f6c63f64f4669fc3845c->enter($__internal_9c792b6cff274b005d3162f1fddd74032e6da455f251f6c63f64f4669fc3845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t
\t";
        // line 7
        echo "\t<hr><hr>
\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.show.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t<table  class=\"table table-striped\">
\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.id", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.name", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.price", array(), "AppBundle"), "html", null, true);
        echo "(€)</td>
\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.description", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.category", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t</tbody>
\t</table> 
";
        
        $__internal_9c792b6cff274b005d3162f1fddd74032e6da455f251f6c63f64f4669fc3845c->leave($__internal_9c792b6cff274b005d3162f1fddd74032e6da455f251f6c63f64f4669fc3845c_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48c673febcf3b48ce33941b792944302737ca59d5a0c393ad0c0eab5fdce95c2 = $this->env->getExtension("native_profiler");
        $__internal_48c673febcf3b48ce33941b792944302737ca59d5a0c393ad0c0eab5fdce95c2->enter($__internal_48c673febcf3b48ce33941b792944302737ca59d5a0c393ad0c0eab5fdce95c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48c673febcf3b48ce33941b792944302737ca59d5a0c393ad0c0eab5fdce95c2->leave($__internal_48c673febcf3b48ce33941b792944302737ca59d5a0c393ad0c0eab5fdce95c2_prof);

    }

    public function getTemplateName()
    {
        return "product/showProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  67 => 13,  59 => 8,  56 => 7,  48 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'product.show.title'|trans }}{% endblock %}*/
/* {% block body %}	*/
/* 	{# Listamos el producto en una lista. #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'product.show.header'|trans }}</h2>*/
/* 	<table  class="table table-striped">*/
/* 		<tbody>*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>{{ 'product.id'|trans }}</td>*/
/* 					<td>{{ 'product.name'|trans }}</td>*/
/* 					<td>{{ 'product.price'|trans }}(€)</td>*/
/* 					<td>{{ 'product.description'|trans }}</td>*/
/* 					<td>{{ 'product.category'|trans }}</td>*/
/* 				</tr>*/
/* 			</thead>*/
/* 				<tr>*/
/* 					<td>{{ product.id }}</td>*/
/* 					<td>{{ product.name }}</td>*/
/* 					<td>{{ product.price }}</td>*/
/* 					<td>{{ product.description }}</td>*/
/* 					<td>{{ product.category.name }}</td>*/
/* 				</tr>*/
/* 		</tbody>*/
/* 	</table> */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
