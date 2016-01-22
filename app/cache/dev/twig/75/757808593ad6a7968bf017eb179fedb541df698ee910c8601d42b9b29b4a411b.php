<?php

/* person/listPersonAction.html.twig */
class __TwigTemplate_55c29be254b132fbd2d349ab277826ba9fec439cc88b2521938ff562fe2fe4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "person/listPersonAction.html.twig", 1);
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
        $__internal_57db3a4cb09230c78daf2c705fb09466710969e9bd3a288f629bc5377d2cee4f = $this->env->getExtension("native_profiler");
        $__internal_57db3a4cb09230c78daf2c705fb09466710969e9bd3a288f629bc5377d2cee4f->enter($__internal_57db3a4cb09230c78daf2c705fb09466710969e9bd3a288f629bc5377d2cee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/listPersonAction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57db3a4cb09230c78daf2c705fb09466710969e9bd3a288f629bc5377d2cee4f->leave($__internal_57db3a4cb09230c78daf2c705fb09466710969e9bd3a288f629bc5377d2cee4f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ecbb993a0596165a1cc68eb650f90ade9d500ff37852e51445ca8f8b1a0b78e = $this->env->getExtension("native_profiler");
        $__internal_5ecbb993a0596165a1cc68eb650f90ade9d500ff37852e51445ca8f8b1a0b78e->enter($__internal_5ecbb993a0596165a1cc68eb650f90ade9d500ff37852e51445ca8f8b1a0b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.list.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_5ecbb993a0596165a1cc68eb650f90ade9d500ff37852e51445ca8f8b1a0b78e->leave($__internal_5ecbb993a0596165a1cc68eb650f90ade9d500ff37852e51445ca8f8b1a0b78e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2040d9de646fb45f5c8beb2fc75f04b3f6c1e700a849da67e8580fb38c0893af = $this->env->getExtension("native_profiler");
        $__internal_2040d9de646fb45f5c8beb2fc75f04b3f6c1e700a849da67e8580fb38c0893af->enter($__internal_2040d9de646fb45f5c8beb2fc75f04b3f6c1e700a849da67e8580fb38c0893af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 10
        echo "\t<hr><hr>
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.list.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t";
        // line 13
        echo "\t<table class=\"table table-striped\">
\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.id", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.name", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.email", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
            // line 21
            echo "\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.delete", array(), "AppBundle"), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t</tr>
\t\t\t</thead>\t
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 26
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showPersonAction", array("id" => $this->getAttribute(            // line 30
$context["persona"], "id", array()))), "html", null, true);
            // line 32
            echo "\">
\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 36
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 37
                echo "\t\t\t\t\t\t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletePersonAction", array("id" => $this->getAttribute(                // line 40
$context["persona"], "id", array()))), "html", null, true);
                // line 42
                echo "\"><i class=\"fa fa-trash fa-lg\"></i></a></td>
\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo " 
\t\t</tbody>
\t</table> 
\t";
        
        $__internal_2040d9de646fb45f5c8beb2fc75f04b3f6c1e700a849da67e8580fb38c0893af->leave($__internal_2040d9de646fb45f5c8beb2fc75f04b3f6c1e700a849da67e8580fb38c0893af_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_884f861007048f282d7693f104d9d9f993757f0112f9ad255ca571f5c515c739 = $this->env->getExtension("native_profiler");
        $__internal_884f861007048f282d7693f104d9d9f993757f0112f9ad255ca571f5c515c739->enter($__internal_884f861007048f282d7693f104d9d9f993757f0112f9ad255ca571f5c515c739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_884f861007048f282d7693f104d9d9f993757f0112f9ad255ca571f5c515c739->leave($__internal_884f861007048f282d7693f104d9d9f993757f0112f9ad255ca571f5c515c739_prof);

    }

    public function getTemplateName()
    {
        return "person/listPersonAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  135 => 45,  128 => 44,  124 => 42,  122 => 40,  120 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  103 => 32,  101 => 30,  100 => 27,  97 => 26,  93 => 25,  89 => 23,  83 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  63 => 13,  59 => 11,  56 => 10,  54 => 8,  48 => 7,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'person.list.title'|trans }}{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump */
/* 	{{ dump(person) }} #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'person.list.header'|trans }}</h2>*/
/* 	{# Listamos el producto en una lista. #}*/
/* 	<table class="table table-striped">*/
/* 		<tbody>*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>{{ 'person.id'|trans }}</td>*/
/* 					<td>{{ 'person.name'|trans }}</td>*/
/* 					<td>{{ 'person.email'|trans }}</td>*/
/* 					{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 						<td>{{ 'global.delete'|trans }}</td>*/
/* 					{% endif %}*/
/* 				</tr>*/
/* 			</thead>	*/
/* 				{% for persona in person%}*/
/* 					<tr>*/
/* 						<td><a href="{{*/
/* 							path(*/
/* 								'showPersonAction',*/
/* 								{ 'id': persona.id }*/
/* 							)*/
/* 							}}">*/
/* 							{{ persona.id }}</a></td>*/
/* 						<td>{{ persona.name }}</td>*/
/* 						<td>{{ persona.email }}</td>*/
/* 						{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 							<td><a href="{{*/
/* 								path(*/
/* 									'deletePersonAction',*/
/* 									{ 'id': persona.id }*/
/* 								) */
/* 								}}"><i class="fa fa-trash fa-lg"></i></a></td>*/
/* 						{% endif %}*/
/* 					</tr>*/
/* 				{% endfor %} */
/* 		</tbody>*/
/* 	</table> */
/* 	{# <a href="{{ url('newPersonAction')}}">atrás</a> #}*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
