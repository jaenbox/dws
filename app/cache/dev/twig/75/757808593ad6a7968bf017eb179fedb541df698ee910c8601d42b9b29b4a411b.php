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
        $__internal_68db031cc307f6105ecea54876c45c64993d409f93eef3899c73a3d0e1de6425 = $this->env->getExtension("native_profiler");
        $__internal_68db031cc307f6105ecea54876c45c64993d409f93eef3899c73a3d0e1de6425->enter($__internal_68db031cc307f6105ecea54876c45c64993d409f93eef3899c73a3d0e1de6425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/listPersonAction.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68db031cc307f6105ecea54876c45c64993d409f93eef3899c73a3d0e1de6425->leave($__internal_68db031cc307f6105ecea54876c45c64993d409f93eef3899c73a3d0e1de6425_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91664970d1a3bfbba62892d07128ac3c90ce53263f08bca2e960269c8bfaa61f = $this->env->getExtension("native_profiler");
        $__internal_91664970d1a3bfbba62892d07128ac3c90ce53263f08bca2e960269c8bfaa61f->enter($__internal_91664970d1a3bfbba62892d07128ac3c90ce53263f08bca2e960269c8bfaa61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 1. Show Products";
        
        $__internal_91664970d1a3bfbba62892d07128ac3c90ce53263f08bca2e960269c8bfaa61f->leave($__internal_91664970d1a3bfbba62892d07128ac3c90ce53263f08bca2e960269c8bfaa61f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d4236cedea13879708fa2e6be045fd98212d4a611c47d694261d8df0fdddfa = $this->env->getExtension("native_profiler");
        $__internal_30d4236cedea13879708fa2e6be045fd98212d4a611c47d694261d8df0fdddfa->enter($__internal_30d4236cedea13879708fa2e6be045fd98212d4a611c47d694261d8df0fdddfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        // line 9
        echo "\t<hr><hr>
\t";
        // line 11
        echo "\t<table class=\"table table-striped\">
\t\t<tbody>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>Id</td>
\t\t\t\t\t<td>Name</td>
\t\t\t\t\t<td>Email</td>
\t\t\t\t\t<td>Eliminar</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<h1>Listado de personas</h1>\t
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 23
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("showPersonAction", array("id" => $this->getAttribute(            // line 27
$context["persona"], "id", array()))), "html", null, true);
            // line 29
            echo "\">
\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletePersonAction", array("id" => $this->getAttribute(            // line 36
$context["persona"], "id", array()))), "html", null, true);
            // line 38
            echo "\"><i class=\"fa fa-trash fa-lg\"></i></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo " 
\t\t</tbody>
\t</table> 
\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("newPersonAction");
        echo "\">atrás</a>
";
        
        $__internal_30d4236cedea13879708fa2e6be045fd98212d4a611c47d694261d8df0fdddfa->leave($__internal_30d4236cedea13879708fa2e6be045fd98212d4a611c47d694261d8df0fdddfa_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9fd0d42895fc2002b660e8fd3d57fdc19d89bd415acf9ac93e12bc72197ce67 = $this->env->getExtension("native_profiler");
        $__internal_e9fd0d42895fc2002b660e8fd3d57fdc19d89bd415acf9ac93e12bc72197ce67->enter($__internal_e9fd0d42895fc2002b660e8fd3d57fdc19d89bd415acf9ac93e12bc72197ce67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9fd0d42895fc2002b660e8fd3d57fdc19d89bd415acf9ac93e12bc72197ce67->leave($__internal_e9fd0d42895fc2002b660e8fd3d57fdc19d89bd415acf9ac93e12bc72197ce67_prof);

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
        return array (  122 => 45,  113 => 43,  108 => 40,  100 => 38,  98 => 36,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  82 => 29,  80 => 27,  79 => 24,  76 => 23,  72 => 22,  59 => 11,  56 => 9,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 1. Show Products{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump */
/* 	{{ dump(person) }} #}*/
/* 	<hr><hr>*/
/* 	{# Listamos el producto en una lista. #}*/
/* 	<table class="table table-striped">*/
/* 		<tbody>*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<td>Id</td>*/
/* 					<td>Name</td>*/
/* 					<td>Email</td>*/
/* 					<td>Eliminar</td>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<h1>Listado de personas</h1>	*/
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
/* 						<td><a href="{{*/
/* 							path(*/
/* 								'deletePersonAction',*/
/* 								{ 'id': persona.id }*/
/* 							) */
/* 							}}"><i class="fa fa-trash fa-lg"></i></a></td>*/
/* 					</tr>*/
/* 				{% endfor %} */
/* 		</tbody>*/
/* 	</table> */
/* 	<a href="{{ url('newPersonAction')}}">atrás</a>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
