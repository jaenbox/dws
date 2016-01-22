<?php

/* product/staticProduct.html.twig */
class __TwigTemplate_ecc068e9824fa057b2303c9a1728eaf75b1863e004c1a6477e5c2802d9104f00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/staticProduct.html.twig", 1);
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
        $__internal_19438362f273ebdc43ba2a91470125b43332796cd3e503a366308c42dea300e2 = $this->env->getExtension("native_profiler");
        $__internal_19438362f273ebdc43ba2a91470125b43332796cd3e503a366308c42dea300e2->enter($__internal_19438362f273ebdc43ba2a91470125b43332796cd3e503a366308c42dea300e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/staticProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19438362f273ebdc43ba2a91470125b43332796cd3e503a366308c42dea300e2->leave($__internal_19438362f273ebdc43ba2a91470125b43332796cd3e503a366308c42dea300e2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_74c9107b3cac5e29fc1895435c73851b71ebe6fc84a708216170c45710837c6e = $this->env->getExtension("native_profiler");
        $__internal_74c9107b3cac5e29fc1895435c73851b71ebe6fc84a708216170c45710837c6e->enter($__internal_74c9107b3cac5e29fc1895435c73851b71ebe6fc84a708216170c45710837c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.static.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_74c9107b3cac5e29fc1895435c73851b71ebe6fc84a708216170c45710837c6e->leave($__internal_74c9107b3cac5e29fc1895435c73851b71ebe6fc84a708216170c45710837c6e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bec1bbf583821824df638ede53972ef01aef37248c7da162f37339c40dad901 = $this->env->getExtension("native_profiler");
        $__internal_2bec1bbf583821824df638ede53972ef01aef37248c7da162f37339c40dad901->enter($__internal_2bec1bbf583821824df638ede53972ef01aef37248c7da162f37339c40dad901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t

\t<hr><hr>
\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.static.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t<h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.static.resolution", array(), "AppBundle"), "html", null, true);
        echo "</h3>
\t<table  class=\"table table-striped\">
\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.id", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.name", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.price", array(), "AppBundle"), "html", null, true);
        echo "(€)</td>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.description", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.category", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t</tbody>
\t</table> 
";
        
        $__internal_2bec1bbf583821824df638ede53972ef01aef37248c7da162f37339c40dad901->leave($__internal_2bec1bbf583821824df638ede53972ef01aef37248c7da162f37339c40dad901_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd039e33aeded60c1c43dc3d74659e65f245b0675a34a9f910e3e40f798aec59 = $this->env->getExtension("native_profiler");
        $__internal_dd039e33aeded60c1c43dc3d74659e65f245b0675a34a9f910e3e40f798aec59->enter($__internal_dd039e33aeded60c1c43dc3d74659e65f245b0675a34a9f910e3e40f798aec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dd039e33aeded60c1c43dc3d74659e65f245b0675a34a9f910e3e40f798aec59->leave($__internal_dd039e33aeded60c1c43dc3d74659e65f245b0675a34a9f910e3e40f798aec59_prof);

    }

    public function getTemplateName()
    {
        return "product/staticProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  62 => 9,  58 => 8,  48 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'product.static.title'|trans }}{% endblock %}*/
/* {% block body %}	*/
/* */
/* 	<hr><hr>*/
/* 	<h2>{{ 'product.static.header'|trans }}</h2>*/
/* 	<h3>{{ 'product.static.resolution'|trans }}</h3>*/
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
