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
        $__internal_d1c88bc1e357bcff25d1af746f55bcc1b3b77b280607c475ebe10e024cba029f = $this->env->getExtension("native_profiler");
        $__internal_d1c88bc1e357bcff25d1af746f55bcc1b3b77b280607c475ebe10e024cba029f->enter($__internal_d1c88bc1e357bcff25d1af746f55bcc1b3b77b280607c475ebe10e024cba029f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/listAllByCategoryAction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c88bc1e357bcff25d1af746f55bcc1b3b77b280607c475ebe10e024cba029f->leave($__internal_d1c88bc1e357bcff25d1af746f55bcc1b3b77b280607c475ebe10e024cba029f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a90b62b0d26f9ad6a90c103030960752aedfc8fac518a965195836d93b3821 = $this->env->getExtension("native_profiler");
        $__internal_f3a90b62b0d26f9ad6a90c103030960752aedfc8fac518a965195836d93b3821->enter($__internal_f3a90b62b0d26f9ad6a90c103030960752aedfc8fac518a965195836d93b3821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.listAllByCategory.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_f3a90b62b0d26f9ad6a90c103030960752aedfc8fac518a965195836d93b3821->leave($__internal_f3a90b62b0d26f9ad6a90c103030960752aedfc8fac518a965195836d93b3821_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce6887b080dc7be440a6d28582e5033ad5f27cf1460332d11316091278f7dfc6 = $this->env->getExtension("native_profiler");
        $__internal_ce6887b080dc7be440a6d28582e5033ad5f27cf1460332d11316091278f7dfc6->enter($__internal_ce6887b080dc7be440a6d28582e5033ad5f27cf1460332d11316091278f7dfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"content\">
\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.listAllByCategory.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t\t<br>
\t\t<table  class=\"table table-striped\">
\t\t\t<tbody>
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t
\t\t\t</tbody>
\t\t</table>\t
\t</div>
";
        
        $__internal_ce6887b080dc7be440a6d28582e5033ad5f27cf1460332d11316091278f7dfc6->leave($__internal_ce6887b080dc7be440a6d28582e5033ad5f27cf1460332d11316091278f7dfc6_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee9d772593287bce3906901c2782b7225cbb2ba1042696926e3a3cf8abac0431 = $this->env->getExtension("native_profiler");
        $__internal_ee9d772593287bce3906901c2782b7225cbb2ba1042696926e3a3cf8abac0431->enter($__internal_ee9d772593287bce3906901c2782b7225cbb2ba1042696926e3a3cf8abac0431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee9d772593287bce3906901c2782b7225cbb2ba1042696926e3a3cf8abac0431->leave($__internal_ee9d772593287bce3906901c2782b7225cbb2ba1042696926e3a3cf8abac0431_prof);

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
        return array (  112 => 31,  101 => 26,  95 => 25,  86 => 22,  83 => 21,  79 => 20,  73 => 17,  69 => 15,  65 => 14,  58 => 10,  55 => 9,  49 => 6,  36 => 4,  11 => 1,);
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
/* 	<div id="content">*/
/* 		<h2>{{ 'category.listAllByCategory.header'|trans }}</h2>*/
/* 		<br>*/
/* 		<table  class="table table-striped">*/
/* 			<tbody>*/
/* 				{% for category in categories %}*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>{{ category.name }}</td>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					{% for product in category.products %}*/
/* 						<tr>*/
/* 							<td>{{ product.name }}</td>*/
/* 						</tr>*/
/* 					{% endfor %}*/
/* 				{% endfor %}*/
/* 				*/
/* 			</tbody>*/
/* 		</table>	*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
