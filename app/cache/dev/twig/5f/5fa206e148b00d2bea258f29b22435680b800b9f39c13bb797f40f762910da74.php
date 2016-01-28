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
        $__internal_182d054cc9d179f7ce87501f277b67733ba52dde4622857b1077ef22963b56ed = $this->env->getExtension("native_profiler");
        $__internal_182d054cc9d179f7ce87501f277b67733ba52dde4622857b1077ef22963b56ed->enter($__internal_182d054cc9d179f7ce87501f277b67733ba52dde4622857b1077ef22963b56ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/listActionProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182d054cc9d179f7ce87501f277b67733ba52dde4622857b1077ef22963b56ed->leave($__internal_182d054cc9d179f7ce87501f277b67733ba52dde4622857b1077ef22963b56ed_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4de047359b7d8e8f861fc5dddff8d1dc3f17ca1227ab73907b2e80bbc02e40f1 = $this->env->getExtension("native_profiler");
        $__internal_4de047359b7d8e8f861fc5dddff8d1dc3f17ca1227ab73907b2e80bbc02e40f1->enter($__internal_4de047359b7d8e8f861fc5dddff8d1dc3f17ca1227ab73907b2e80bbc02e40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.list.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_4de047359b7d8e8f861fc5dddff8d1dc3f17ca1227ab73907b2e80bbc02e40f1->leave($__internal_4de047359b7d8e8f861fc5dddff8d1dc3f17ca1227ab73907b2e80bbc02e40f1_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0778c41bf616da7857441bb0f29e8fdfb0678bedc489834c5fce49f2e5607917 = $this->env->getExtension("native_profiler");
        $__internal_0778c41bf616da7857441bb0f29e8fdfb0678bedc489834c5fce49f2e5607917->enter($__internal_0778c41bf616da7857441bb0f29e8fdfb0678bedc489834c5fce49f2e5607917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t
\t";
        // line 9
        echo "\t<div id=\"content\">
\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.list.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t\t<table class=\"table table-striped\">\t
\t\t\t\t<tbody>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.id", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.name", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.price", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.description", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.category", array(), "AppBundle"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
            // line 21
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.edit", array(), "AppBundle"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.delete", array(), "AppBundle"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 27
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["producto"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 33
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 34
                echo "\t\t\t\t\t\t\t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editProduct", array("id" => $this->getAttribute(                // line 37
$context["producto"], "id", array()))), "html", null, true);
                // line 39
                echo "\"><i class=\"fa fa-pencil-square-o\"></i></a></td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteProduct", array("id" => $this->getAttribute(                // line 43
$context["producto"], "id", array()))), "html", null, true);
                // line 45
                echo "\"><i class=\"fa fa-trash fa-lg\"></i></a></td>
\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t
\t\t\t</tbody>
\t\t</table> 
\t\t";
        // line 53
        echo "\t</div> 
";
        
        $__internal_0778c41bf616da7857441bb0f29e8fdfb0678bedc489834c5fce49f2e5607917->leave($__internal_0778c41bf616da7857441bb0f29e8fdfb0678bedc489834c5fce49f2e5607917_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09495d286837e0dbafe00715012b3069d22fb59b5dfb14b06d4a84ede260a991 = $this->env->getExtension("native_profiler");
        $__internal_09495d286837e0dbafe00715012b3069d22fb59b5dfb14b06d4a84ede260a991->enter($__internal_09495d286837e0dbafe00715012b3069d22fb59b5dfb14b06d4a84ede260a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09495d286837e0dbafe00715012b3069d22fb59b5dfb14b06d4a84ede260a991->leave($__internal_09495d286837e0dbafe00715012b3069d22fb59b5dfb14b06d4a84ede260a991_prof);

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
        return array (  167 => 55,  159 => 53,  154 => 49,  147 => 47,  143 => 45,  141 => 43,  140 => 40,  137 => 39,  135 => 37,  133 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  108 => 27,  104 => 26,  100 => 24,  95 => 22,  90 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  60 => 10,  57 => 9,  54 => 7,  48 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'product.list.title' | trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	*/
/* 	{# Listamos los productos en una lista. #}*/
/* 	<div id="content">*/
/* 		<h2>{{ 'product.list.header' | trans }}</h2>*/
/* 		<table class="table table-striped">	*/
/* 				<tbody>*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td>{{ 'product.id' | trans }}</td>*/
/* 							<td>{{ 'product.name'|trans }}</td>*/
/* 							<td>{{ 'product.price'|trans }}</td>*/
/* 							<td>{{ 'product.description'|trans }}</td>*/
/* 							<td>{{ 'product.category'|trans }}</td>*/
/* 							{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 							<td>{{ 'global.edit'|trans }}</td>*/
/* 							<td>{{ 'global.delete'|trans }}</td>*/
/* 							{% endif %}*/
/* 						</tr>*/
/* 					</thead>*/
/* 						{% for producto in products %}*/
/* 							<tr>*/
/* 								<td>{{ producto.id }}</td>*/
/* 								<td>{{ producto.name }}</td>*/
/* 								<td>{{ producto.price }}</td>*/
/* 								<td>{{ producto.description }}</td>*/
/* 								<td>{{ producto.category.name }}</td>*/
/* 								{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 								<td><a href="{{*/
/* 									path(*/
/* 										'editProduct',*/
/* 										{ 'id': producto.id }*/
/* 									) */
/* 									}}"><i class="fa fa-pencil-square-o"></i></a></td>*/
/* 								<td><a href="{{*/
/* 									path(*/
/* 										'deleteProduct',*/
/* 										{ 'id': producto.id }*/
/* 									) */
/* 									}}"><i class="fa fa-trash fa-lg"></i></a></td>*/
/* 								{% endif %}*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 					*/
/* 			</tbody>*/
/* 		</table> */
/* 		{# <a href="{{ url('newProductAction')}}">atrás</a> #}*/
/* 	</div> */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
