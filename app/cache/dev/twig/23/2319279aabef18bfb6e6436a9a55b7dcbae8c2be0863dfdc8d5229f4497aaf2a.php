<?php

/* :category:listByCategoryAction.html.twig */
class __TwigTemplate_4122f4b0659b3f3b28046078a3e3de8221c893a1e60d3ad7af58ef1f30e4fbd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:listByCategoryAction.html.twig", 1);
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
        $__internal_7bba4e7ad882f33341c8accb2c28594e69bccd5e918330bc385302d42e9ca8c7 = $this->env->getExtension("native_profiler");
        $__internal_7bba4e7ad882f33341c8accb2c28594e69bccd5e918330bc385302d42e9ca8c7->enter($__internal_7bba4e7ad882f33341c8accb2c28594e69bccd5e918330bc385302d42e9ca8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:listByCategoryAction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bba4e7ad882f33341c8accb2c28594e69bccd5e918330bc385302d42e9ca8c7->leave($__internal_7bba4e7ad882f33341c8accb2c28594e69bccd5e918330bc385302d42e9ca8c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_405762d63a8d7293f284463078bb7b29dff6e34f5ec082f1a65d0a2c59adf73c = $this->env->getExtension("native_profiler");
        $__internal_405762d63a8d7293f284463078bb7b29dff6e34f5ec082f1a65d0a2c59adf73c->enter($__internal_405762d63a8d7293f284463078bb7b29dff6e34f5ec082f1a65d0a2c59adf73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 2. listByCategory ";
        
        $__internal_405762d63a8d7293f284463078bb7b29dff6e34f5ec082f1a65d0a2c59adf73c->leave($__internal_405762d63a8d7293f284463078bb7b29dff6e34f5ec082f1a65d0a2c59adf73c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d793cad62b476f968750adcefa18038c7189770b6cde9923fc01607d2ed0fcac = $this->env->getExtension("native_profiler");
        $__internal_d793cad62b476f968750adcefa18038c7189770b6cde9923fc01607d2ed0fcac->enter($__internal_d793cad62b476f968750adcefa18038c7189770b6cde9923fc01607d2ed0fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<hr><hr>
\t";
        // line 9
        echo "\t<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "<h4>

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "products", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "\t
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t</table>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d793cad62b476f968750adcefa18038c7189770b6cde9923fc01607d2ed0fcac->leave($__internal_d793cad62b476f968750adcefa18038c7189770b6cde9923fc01607d2ed0fcac_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2981ec9165c4a6bb97a6e1599d56af7c858c8652dca251140eede43e59d3978e = $this->env->getExtension("native_profiler");
        $__internal_2981ec9165c4a6bb97a6e1599d56af7c858c8652dca251140eede43e59d3978e->enter($__internal_2981ec9165c4a6bb97a6e1599d56af7c858c8652dca251140eede43e59d3978e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2981ec9165c4a6bb97a6e1599d56af7c858c8652dca251140eede43e59d3978e->leave($__internal_2981ec9165c4a6bb97a6e1599d56af7c858c8652dca251140eede43e59d3978e_prof);

    }

    public function getTemplateName()
    {
        return ":category:listByCategoryAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  73 => 15,  68 => 12,  64 => 11,  58 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 2. listByCategory {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<hr><hr>*/
/* 	{# Listamos los productos en una lista. #}*/
/* 	<h4>{{ category.name}}<h4>*/
/* */
/* 	{% for product in category.products %}*/
/* 	*/
/* 		<table>*/
/* 			<tr>*/
/* 				<td>{{ product.id }}</td><td>{{ product.name }}</td><td>{{ product.description }}</td><td>{{ product.price }}</td>*/
/* 			</tr>*/
/* 		</table>*/
/* 	{% endfor %}*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
