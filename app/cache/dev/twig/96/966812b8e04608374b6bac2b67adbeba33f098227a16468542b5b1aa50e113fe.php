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
        $__internal_7e8a2385cc60b22ff2036e5b005ef8945834ac97f64752ab79d08419e50cc43b = $this->env->getExtension("native_profiler");
        $__internal_7e8a2385cc60b22ff2036e5b005ef8945834ac97f64752ab79d08419e50cc43b->enter($__internal_7e8a2385cc60b22ff2036e5b005ef8945834ac97f64752ab79d08419e50cc43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/listAllByCategoryAction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8a2385cc60b22ff2036e5b005ef8945834ac97f64752ab79d08419e50cc43b->leave($__internal_7e8a2385cc60b22ff2036e5b005ef8945834ac97f64752ab79d08419e50cc43b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9eb1e244bfd1f778f7b94147a9fda1e3a58a30fd4b5cfa9b379a265aabad0b3 = $this->env->getExtension("native_profiler");
        $__internal_f9eb1e244bfd1f778f7b94147a9fda1e3a58a30fd4b5cfa9b379a265aabad0b3->enter($__internal_f9eb1e244bfd1f778f7b94147a9fda1e3a58a30fd4b5cfa9b379a265aabad0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.listAllByCategory.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_f9eb1e244bfd1f778f7b94147a9fda1e3a58a30fd4b5cfa9b379a265aabad0b3->leave($__internal_f9eb1e244bfd1f778f7b94147a9fda1e3a58a30fd4b5cfa9b379a265aabad0b3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2cb729bd683219d48a1ed659a3de8f87b04832c67a2ec5d1dd56e552a038669 = $this->env->getExtension("native_profiler");
        $__internal_b2cb729bd683219d48a1ed659a3de8f87b04832c67a2ec5d1dd56e552a038669->enter($__internal_b2cb729bd683219d48a1ed659a3de8f87b04832c67a2ec5d1dd56e552a038669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<hr><hr>
\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.listAllByCategory.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t<br>
\t<table  class=\"table table-striped\">
\t\t<tbody>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t
\t\t</tbody>
\t</table>\t
";
        
        $__internal_b2cb729bd683219d48a1ed659a3de8f87b04832c67a2ec5d1dd56e552a038669->leave($__internal_b2cb729bd683219d48a1ed659a3de8f87b04832c67a2ec5d1dd56e552a038669_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a99115f5ab479b995de92ac4eb5d6ea741d9b70dfdb54699f30a7249c5dd3ced = $this->env->getExtension("native_profiler");
        $__internal_a99115f5ab479b995de92ac4eb5d6ea741d9b70dfdb54699f30a7249c5dd3ced->enter($__internal_a99115f5ab479b995de92ac4eb5d6ea741d9b70dfdb54699f30a7249c5dd3ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a99115f5ab479b995de92ac4eb5d6ea741d9b70dfdb54699f30a7249c5dd3ced->leave($__internal_a99115f5ab479b995de92ac4eb5d6ea741d9b70dfdb54699f30a7249c5dd3ced_prof);

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
        return array (  111 => 30,  101 => 26,  95 => 25,  86 => 22,  83 => 21,  79 => 20,  73 => 17,  69 => 15,  65 => 14,  58 => 10,  55 => 9,  49 => 6,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'category.listAllByCategory.title'|trans }} {% endblock %}*/
/* */
/* {% block body %}*/
/* {# Listamos los productos en una lista. #}*/
/* {# {{ dump(categories) }} #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'category.listAllByCategory.header'|trans }}</h2>*/
/* 	<br>*/
/* 	<table  class="table table-striped">*/
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
