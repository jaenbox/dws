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
        $__internal_08b5a8b4f2db26b395e2b25d41c2b09c346559b7f80e728386a917317466d1a6 = $this->env->getExtension("native_profiler");
        $__internal_08b5a8b4f2db26b395e2b25d41c2b09c346559b7f80e728386a917317466d1a6->enter($__internal_08b5a8b4f2db26b395e2b25d41c2b09c346559b7f80e728386a917317466d1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/listActionCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08b5a8b4f2db26b395e2b25d41c2b09c346559b7f80e728386a917317466d1a6->leave($__internal_08b5a8b4f2db26b395e2b25d41c2b09c346559b7f80e728386a917317466d1a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4dc163d38be75385c60e426e06898a3fdf47c0410d22b101c109d19981e2941 = $this->env->getExtension("native_profiler");
        $__internal_e4dc163d38be75385c60e426e06898a3fdf47c0410d22b101c109d19981e2941->enter($__internal_e4dc163d38be75385c60e426e06898a3fdf47c0410d22b101c109d19981e2941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 61. Categorias";
        
        $__internal_e4dc163d38be75385c60e426e06898a3fdf47c0410d22b101c109d19981e2941->leave($__internal_e4dc163d38be75385c60e426e06898a3fdf47c0410d22b101c109d19981e2941_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15269405a7b3cf1ebb33b1fa12d9808051e024a15ce8f347591482a013b66711 = $this->env->getExtension("native_profiler");
        $__internal_15269405a7b3cf1ebb33b1fa12d9808051e024a15ce8f347591482a013b66711->enter($__internal_15269405a7b3cf1ebb33b1fa12d9808051e024a15ce8f347591482a013b66711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        // line 8
        echo "\t
\t";
        // line 10
        echo "\t<hr><hr>
\t<table class=\"table table-striped\">
\t";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
            // line 13
            echo "\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>Id</td>
\t\t\t\t\t<td>Name</td>
\t\t\t\t\t<td>Edit</td>
\t\t\t\t\t<td>Delete</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<h2>Listado de categorias</h2>\t
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 24
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editCategory", array("id" => $this->getAttribute(                // line 30
$context["category"], "id", array()))), "html", null, true);
                // line 32
                echo "\"><i class=\"fa fa-pencil-square-o\"></i></a></td>
\t\t\t\t\t\t<td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteAction", array("id" => $this->getAttribute(                // line 36
$context["category"], "id", array()))), "html", null, true);
                // line 38
                echo "\"><i class=\"fa fa-trash fa-lg\"></i></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " 
\t\t</tbody>
\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 43
            echo "\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>Id</td>
\t\t\t\t\t<td>Name</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<h2>Listado de categorias</h2>\t
\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 52
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo " 
\t\t</tbody>
\t";
        }
        // line 59
        echo "\t</table> 
\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getUrl("newCategoryAction");
        echo "\">atrás</a>
";
        
        $__internal_15269405a7b3cf1ebb33b1fa12d9808051e024a15ce8f347591482a013b66711->leave($__internal_15269405a7b3cf1ebb33b1fa12d9808051e024a15ce8f347591482a013b66711_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe5e799af33341d369efaceced9cad982568149ad8f848a5220dc74993973e0b = $this->env->getExtension("native_profiler");
        $__internal_fe5e799af33341d369efaceced9cad982568149ad8f848a5220dc74993973e0b->enter($__internal_fe5e799af33341d369efaceced9cad982568149ad8f848a5220dc74993973e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe5e799af33341d369efaceced9cad982568149ad8f848a5220dc74993973e0b->leave($__internal_fe5e799af33341d369efaceced9cad982568149ad8f848a5220dc74993973e0b_prof);

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
        return array (  161 => 62,  152 => 60,  149 => 59,  144 => 56,  135 => 54,  131 => 53,  128 => 52,  124 => 51,  114 => 43,  109 => 40,  101 => 38,  99 => 36,  98 => 33,  95 => 32,  93 => 30,  92 => 27,  88 => 26,  84 => 25,  81 => 24,  77 => 23,  65 => 13,  63 => 12,  59 => 10,  56 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 61. Categorias{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump*/
/* 	{{ dump(categories) }} #}*/
/* 	*/
/* 	{# Listamos el producto en una lista. #}*/
/* 	<hr><hr>*/
/* 	<table class="table table-striped">*/
/* 	{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 		<tbody>*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>Id</td>*/
/* 					<td>Name</td>*/
/* 					<td>Edit</td>*/
/* 					<td>Delete</td>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<h2>Listado de categorias</h2>	*/
/* 				{% for category in categories%}*/
/* 					<tr>*/
/* 						<td>{{ category.id }}</td>*/
/* 						<td>{{ category.name }}</td>*/
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
/* 					</tr>*/
/* 				{% endfor %} */
/* 		</tbody>*/
/* 	{% elseif is_granted('ROLE_USER') %}*/
/* 		<tbody>*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>Id</td>*/
/* 					<td>Name</td>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<h2>Listado de categorias</h2>	*/
/* 				{% for category in categories%}*/
/* 					<tr>*/
/* 						<td>{{ category.id }}</td>*/
/* 						<td>{{ category.name }}</td>*/
/* 					</tr>*/
/* 				{% endfor %} */
/* 		</tbody>*/
/* 	{% endif %}*/
/* 	</table> */
/* 	<a href="{{ url('newCategoryAction')}}">atrás</a>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
