<?php

/* category/listAllByCategoryAction.html.twig */
class __TwigTemplate_a9345e03a95bf4f18de34abc15eb6648bb779b25d937cd786d9a91e53f29ecf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/listAllByCategoryAction.html.twig", 1);
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
        $__internal_9d35cfc0a15fcd668c3b6f965a019343d5ea65008c87b8689e8b34bccd7ce685 = $this->env->getExtension("native_profiler");
        $__internal_9d35cfc0a15fcd668c3b6f965a019343d5ea65008c87b8689e8b34bccd7ce685->enter($__internal_9d35cfc0a15fcd668c3b6f965a019343d5ea65008c87b8689e8b34bccd7ce685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/listAllByCategoryAction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d35cfc0a15fcd668c3b6f965a019343d5ea65008c87b8689e8b34bccd7ce685->leave($__internal_9d35cfc0a15fcd668c3b6f965a019343d5ea65008c87b8689e8b34bccd7ce685_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8636761774915055336ad84ddb3e91e1815254cae092fdbf7136879ddf063aa = $this->env->getExtension("native_profiler");
        $__internal_f8636761774915055336ad84ddb3e91e1815254cae092fdbf7136879ddf063aa->enter($__internal_f8636761774915055336ad84ddb3e91e1815254cae092fdbf7136879ddf063aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 2. Listar Categorias";
        
        $__internal_f8636761774915055336ad84ddb3e91e1815254cae092fdbf7136879ddf063aa->leave($__internal_f8636761774915055336ad84ddb3e91e1815254cae092fdbf7136879ddf063aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce44d6c779581adf97bb00f963354d3d0ecc7f64a7175adecd6aaeec47907030 = $this->env->getExtension("native_profiler");
        $__internal_ce44d6c779581adf97bb00f963354d3d0ecc7f64a7175adecd6aaeec47907030->enter($__internal_ce44d6c779581adf97bb00f963354d3d0ecc7f64a7175adecd6aaeec47907030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<hr><hr>
\t<h2>Listado de productos</h2>
\t<br>
\t<table>
\t\t<tbody>
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t
\t\t</tbody>
\t</table>\t
";
        
        $__internal_ce44d6c779581adf97bb00f963354d3d0ecc7f64a7175adecd6aaeec47907030->leave($__internal_ce44d6c779581adf97bb00f963354d3d0ecc7f64a7175adecd6aaeec47907030_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c06928a0cb683d77031159e6e90fb8bdda6cbdb3b4103ed1e96e3914942a3a77 = $this->env->getExtension("native_profiler");
        $__internal_c06928a0cb683d77031159e6e90fb8bdda6cbdb3b4103ed1e96e3914942a3a77->enter($__internal_c06928a0cb683d77031159e6e90fb8bdda6cbdb3b4103ed1e96e3914942a3a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c06928a0cb683d77031159e6e90fb8bdda6cbdb3b4103ed1e96e3914942a3a77->leave($__internal_c06928a0cb683d77031159e6e90fb8bdda6cbdb3b4103ed1e96e3914942a3a77_prof);

    }

    public function getTemplateName()
    {
        return "category/listAllByCategoryAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  97 => 25,  91 => 24,  82 => 21,  79 => 20,  75 => 19,  69 => 16,  65 => 14,  61 => 13,  54 => 8,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 2. Listar Categorias{% endblock %}*/
/* */
/* {% block body %}*/
/* {# Listamos los productos en una lista. #}*/
/* {# {{ dump(categories) }} #}*/
/* 	<hr><hr>*/
/* 	<h2>Listado de productos</h2>*/
/* 	<br>*/
/* 	<table>*/
/* 		<tbody>*/
/* 			{% for category in categories %}*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>{{ category.name }}</td>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				{% for product in category.products %}*/
/* 					<tr>*/
/* 						<td>{{ product.name }}</td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			{% endfor %}*/
/* 			*/
/* 		</tbody>*/
/* 	</table>	*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
