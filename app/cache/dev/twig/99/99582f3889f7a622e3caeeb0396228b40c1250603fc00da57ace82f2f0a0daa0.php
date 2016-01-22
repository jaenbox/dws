<?php

/* category/listActionCategory.html.twig */
class __TwigTemplate_1058d593b189f191cb44284305979e8ba0f5158d4ea7c21bbbcdd5b33dc6c8a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/listActionCategory.html.twig", 1);
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
        $__internal_1aa4546d331bbda13d2b64ecf230289f32aef21283d3f8c2c720bbfb9ffc5048 = $this->env->getExtension("native_profiler");
        $__internal_1aa4546d331bbda13d2b64ecf230289f32aef21283d3f8c2c720bbfb9ffc5048->enter($__internal_1aa4546d331bbda13d2b64ecf230289f32aef21283d3f8c2c720bbfb9ffc5048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/listActionCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa4546d331bbda13d2b64ecf230289f32aef21283d3f8c2c720bbfb9ffc5048->leave($__internal_1aa4546d331bbda13d2b64ecf230289f32aef21283d3f8c2c720bbfb9ffc5048_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_707f6a10768ecb6685ec8d1ffa2f7bbad0af562de537a6e4a08ca341613c8416 = $this->env->getExtension("native_profiler");
        $__internal_707f6a10768ecb6685ec8d1ffa2f7bbad0af562de537a6e4a08ca341613c8416->enter($__internal_707f6a10768ecb6685ec8d1ffa2f7bbad0af562de537a6e4a08ca341613c8416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.list.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_707f6a10768ecb6685ec8d1ffa2f7bbad0af562de537a6e4a08ca341613c8416->leave($__internal_707f6a10768ecb6685ec8d1ffa2f7bbad0af562de537a6e4a08ca341613c8416_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6220497a91879d9fe39923d68917179cc936359f2085ce61feee96a693e6eec1 = $this->env->getExtension("native_profiler");
        $__internal_6220497a91879d9fe39923d68917179cc936359f2085ce61feee96a693e6eec1->enter($__internal_6220497a91879d9fe39923d68917179cc936359f2085ce61feee96a693e6eec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        // line 9
        echo "\t
\t";
        // line 11
        echo "\t<hr><hr>
\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.list.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t<table class=\"table table-striped\">
\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.id", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.name", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t";
        // line 19
        if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
            // line 20
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.edit", array(), "AppBundle"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.delete", array(), "AppBundle"), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 29
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 30
                echo "\t\t\t\t\t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editCategory", array("id" => $this->getAttribute(                // line 33
$context["category"], "id", array()))), "html", null, true);
                // line 35
                echo "\"><i class=\"fa fa-pencil-square-o\"></i></a></td>
\t\t\t\t\t\t<td><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteAction", array("id" => $this->getAttribute(                // line 39
$context["category"], "id", array()))), "html", null, true);
                // line 41
                echo "\"><i class=\"fa fa-trash fa-lg\"></i></a></td>
\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
\t\t</tbody>
\t</table> 
\t";
        
        $__internal_6220497a91879d9fe39923d68917179cc936359f2085ce61feee96a693e6eec1->leave($__internal_6220497a91879d9fe39923d68917179cc936359f2085ce61feee96a693e6eec1_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac28916f6bb822a74fe2d862de68291f158730c98656ca2d02e5482c79dbd0e3 = $this->env->getExtension("native_profiler");
        $__internal_ac28916f6bb822a74fe2d862de68291f158730c98656ca2d02e5482c79dbd0e3->enter($__internal_ac28916f6bb822a74fe2d862de68291f158730c98656ca2d02e5482c79dbd0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac28916f6bb822a74fe2d862de68291f158730c98656ca2d02e5482c79dbd0e3->leave($__internal_ac28916f6bb822a74fe2d862de68291f158730c98656ca2d02e5482c79dbd0e3_prof);

    }

    public function getTemplateName()
    {
        return "category/listActionCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  132 => 44,  125 => 43,  121 => 41,  119 => 39,  118 => 36,  115 => 35,  113 => 33,  111 => 30,  109 => 29,  105 => 28,  101 => 27,  98 => 26,  94 => 25,  90 => 23,  85 => 21,  80 => 20,  78 => 19,  74 => 18,  70 => 17,  62 => 12,  59 => 11,  56 => 9,  54 => 7,  48 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'category.list.title'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump*/
/* 	{{ dump(categories) }} #}*/
/* 	*/
/* 	{# Listamos el producto en una lista. #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'category.list.header'|trans }}</h2>*/
/* 	<table class="table table-striped">*/
/* 		<tbody>*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>{{ 'category.id'|trans }}</td>*/
/* 					<td>{{ 'category.name'|trans }}</td>*/
/* 					{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 						<td>{{ 'global.edit'|trans }}</td>*/
/* 						<td>{{ 'global.delete'|trans }}</td>*/
/* 					{% endif %}*/
/* 				</tr>*/
/* 			</thead>*/
/* 				{% for category in categories%}*/
/* 					<tr>*/
/* 						<td>{{ category.id }}</td>*/
/* 						<td>{{ category.name }}</td>*/
/* 						{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 						<td><a href="{{*/
/* 							path(*/
/* 								'editCategory',*/
/* 								{ 'id': category.id }*/
/* 							) */
/* 							}}"><i class="fa fa-pencil-square-o"></i></a></td>*/
/* 						<td><a href="{{*/
/* 							path(*/
/* 								'deleteAction',*/
/* 								{ 'id': category.id }*/
/* 							) */
/* 							}}"><i class="fa fa-trash fa-lg"></i></a></td>*/
/* 						{% endif %}*/
/* 					</tr>*/
/* 				{% endfor %} */
/* 		</tbody>*/
/* 	</table> */
/* 	{# <a href="{{ url('newCategoryAction')}}">atrás</a> #}*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
