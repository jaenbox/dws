<?php

/* product/listActionProduct.html.twig */
class __TwigTemplate_30b1c4b3bed843318f9671cae3b0cf95145e35b438927865b9cf711f6883c908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/listActionProduct.html.twig", 1);
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
        $__internal_c2da6e39c7cc4cd2147643428ba4e959313bafa94cd6436cb9ef94909e1f2eed = $this->env->getExtension("native_profiler");
        $__internal_c2da6e39c7cc4cd2147643428ba4e959313bafa94cd6436cb9ef94909e1f2eed->enter($__internal_c2da6e39c7cc4cd2147643428ba4e959313bafa94cd6436cb9ef94909e1f2eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/listActionProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2da6e39c7cc4cd2147643428ba4e959313bafa94cd6436cb9ef94909e1f2eed->leave($__internal_c2da6e39c7cc4cd2147643428ba4e959313bafa94cd6436cb9ef94909e1f2eed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f59b0a074a9bf681e5d4d9901a5efba59b7b0ae4ff6c388db261783cdb46eea0 = $this->env->getExtension("native_profiler");
        $__internal_f59b0a074a9bf681e5d4d9901a5efba59b7b0ae4ff6c388db261783cdb46eea0->enter($__internal_f59b0a074a9bf681e5d4d9901a5efba59b7b0ae4ff6c388db261783cdb46eea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 1. Productos";
        
        $__internal_f59b0a074a9bf681e5d4d9901a5efba59b7b0ae4ff6c388db261783cdb46eea0->leave($__internal_f59b0a074a9bf681e5d4d9901a5efba59b7b0ae4ff6c388db261783cdb46eea0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db52edb9290b91fdf43f70202da86c70f9d7bb83d289693669028a64b6e92364 = $this->env->getExtension("native_profiler");
        $__internal_db52edb9290b91fdf43f70202da86c70f9d7bb83d289693669028a64b6e92364->enter($__internal_db52edb9290b91fdf43f70202da86c70f9d7bb83d289693669028a64b6e92364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t";
        // line 8
        echo "\t<hr><hr>
\t<table class=\"table table-striped\">\t
\t\t";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
            // line 11
            echo "\t\t\t<tbody>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Id</td>
\t\t\t\t\t\t<td>Name</td>
\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t<td>Description</td>
\t\t\t\t\t\t<td>Category</td>
\t\t\t\t\t\t<td>Edit</td>
\t\t\t\t\t\t<td>Delete</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<h1>Listado de productos</h1>
\t\t\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 25
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "price", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "description", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "category", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editProduct", array("id" => $this->getAttribute(                // line 34
$context["producto"], "id", array()))), "html", null, true);
                // line 36
                echo "\"><i class=\"fa fa-pencil-square-o\"></i></a></td>
\t\t\t\t\t\t\t<td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteProduct", array("id" => $this->getAttribute(                // line 40
$context["producto"], "id", array()))), "html", null, true);
                // line 42
                echo "\"><i class=\"fa fa-trash fa-lg\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 46
            echo "\t\t\t\t\t<tbody>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Id</td>
\t\t\t\t\t\t\t<td>Name</td>
\t\t\t\t\t\t\t<td>Price</td>
\t\t\t\t\t\t\t<td>Description</td>
\t\t\t\t\t\t\t<td>Category</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<h1>Listado de productos</h1>
\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 58
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "price", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "description", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "category", array()), "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t";
        }
        echo " 
\t\t</tbody>
\t</table> 
\t<a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getUrl("newProductAction");
        echo "\">atrás</a> 
";
        
        $__internal_db52edb9290b91fdf43f70202da86c70f9d7bb83d289693669028a64b6e92364->leave($__internal_db52edb9290b91fdf43f70202da86c70f9d7bb83d289693669028a64b6e92364_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_240e9e6bb3ef69bc7d7851693096d2a24942ce68605daa0c2abef7a62fb684e7 = $this->env->getExtension("native_profiler");
        $__internal_240e9e6bb3ef69bc7d7851693096d2a24942ce68605daa0c2abef7a62fb684e7->enter($__internal_240e9e6bb3ef69bc7d7851693096d2a24942ce68605daa0c2abef7a62fb684e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_240e9e6bb3ef69bc7d7851693096d2a24942ce68605daa0c2abef7a62fb684e7->leave($__internal_240e9e6bb3ef69bc7d7851693096d2a24942ce68605daa0c2abef7a62fb684e7_prof);

    }

    public function getTemplateName()
    {
        return "product/listActionProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 71,  177 => 69,  170 => 66,  161 => 63,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  142 => 58,  138 => 57,  125 => 46,  122 => 45,  114 => 42,  112 => 40,  111 => 37,  108 => 36,  106 => 34,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  82 => 25,  78 => 24,  63 => 11,  61 => 10,  57 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 1. Productos{% endblock %}*/
/* */
/* {% block body %}*/
/* 	*/
/* 	{# Listamos los productos en una lista. #}*/
/* 	<hr><hr>*/
/* 	<table class="table table-striped">	*/
/* 		{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 			<tbody>*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<td>Id</td>*/
/* 						<td>Name</td>*/
/* 						<td>Price</td>*/
/* 						<td>Description</td>*/
/* 						<td>Category</td>*/
/* 						<td>Edit</td>*/
/* 						<td>Delete</td>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<h1>Listado de productos</h1>*/
/* 					{% for producto in products %}*/
/* 						<tr>*/
/* 							<td>{{ producto.id }}</td>*/
/* 							<td>{{ producto.name }}</td>*/
/* 							<td>{{ producto.price }}</td>*/
/* 							<td>{{ producto.description }}</td>*/
/* 							<td>{{ producto.category.name }}</td>*/
/* 							<td><a href="{{*/
/* 								path(*/
/* 									'editProduct',*/
/* 									{ 'id': producto.id }*/
/* 								) */
/* 								}}"><i class="fa fa-pencil-square-o"></i></a></td>*/
/* 							<td><a href="{{*/
/* 								path(*/
/* 									'deleteProduct',*/
/* 									{ 'id': producto.id }*/
/* 								) */
/* 								}}"><i class="fa fa-trash fa-lg"></i></a></td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 				{% elseif is_granted('ROLE_USER') %}*/
/* 					<tbody>*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td>Id</td>*/
/* 							<td>Name</td>*/
/* 							<td>Price</td>*/
/* 							<td>Description</td>*/
/* 							<td>Category</td>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<h1>Listado de productos</h1>*/
/* 					{% for producto in products %}*/
/* 						<tr>*/
/* 							<td>{{ producto.id }}</td>*/
/* 							<td>{{ producto.name }}</td>*/
/* 							<td>{{ producto.price }}</td>*/
/* 							<td>{{ producto.description }}</td>*/
/* 							<td>{{ producto.category.name }}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 				{% endif %} */
/* 		</tbody>*/
/* 	</table> */
/* 	<a href="{{ url('newProductAction')}}">atrás</a> */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
