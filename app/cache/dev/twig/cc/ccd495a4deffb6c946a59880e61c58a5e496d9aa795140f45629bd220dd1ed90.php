<?php

/* person/showPerson.html.twig */
class __TwigTemplate_f16662a65ab25107dcfdfb23d76f09c5febc87f025388fc89d61626aaff209aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "person/showPerson.html.twig", 1);
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
        $__internal_eab84eb46be0e9cd8dac0880d6aeaa54bce6cafb105bc867075ec73984ab71b6 = $this->env->getExtension("native_profiler");
        $__internal_eab84eb46be0e9cd8dac0880d6aeaa54bce6cafb105bc867075ec73984ab71b6->enter($__internal_eab84eb46be0e9cd8dac0880d6aeaa54bce6cafb105bc867075ec73984ab71b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/showPerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab84eb46be0e9cd8dac0880d6aeaa54bce6cafb105bc867075ec73984ab71b6->leave($__internal_eab84eb46be0e9cd8dac0880d6aeaa54bce6cafb105bc867075ec73984ab71b6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_810c2465d23b16db98dac9dfcc150e7ab74b9370fca9efa0e066c9dbbfbfeba9 = $this->env->getExtension("native_profiler");
        $__internal_810c2465d23b16db98dac9dfcc150e7ab74b9370fca9efa0e066c9dbbfbfeba9->enter($__internal_810c2465d23b16db98dac9dfcc150e7ab74b9370fca9efa0e066c9dbbfbfeba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.show.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_810c2465d23b16db98dac9dfcc150e7ab74b9370fca9efa0e066c9dbbfbfeba9->leave($__internal_810c2465d23b16db98dac9dfcc150e7ab74b9370fca9efa0e066c9dbbfbfeba9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bebc562c1ba54955a1a590002af18a6ec8a8114ba7ba0bed4fcc3e37b829d5f = $this->env->getExtension("native_profiler");
        $__internal_0bebc562c1ba54955a1a590002af18a6ec8a8114ba7ba0bed4fcc3e37b829d5f->enter($__internal_0bebc562c1ba54955a1a590002af18a6ec8a8114ba7ba0bed4fcc3e37b829d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 10
        echo "\t
\t";
        // line 12
        echo "\t<hr><hr>
\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.show.title", array(), "AppBundle"), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo "</h2>
\t<table class=\"table\">
\t\t<tbody>
\t\t\t\t<tr><th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.id", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.name", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.age", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "age", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.birthDate", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "birthDate", array()), "d/m/Y"), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.height", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "height", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th><i class=\"fa fa-envelope fa-2x\"></th><td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "email", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th><i class=\"fa fa-phone-square fa-2x\"></th><td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phone", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.gender", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "gender", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.descends", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "descends", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th><i class=\"fa fa-car fa-2x\"></th><td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "vehicle", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.language", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "preferredLanguage", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.englishLevel", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        if (($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 0)) {
            // line 28
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tnone</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 29
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 1)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t\t \tA1</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 31
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 2)) {
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tA2</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 33
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 3)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tB1</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 35
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 4)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tB2</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 37
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 5)) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tC1</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 39
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "englishLevel", array()) == 6)) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\tC2</td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<tr><th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.personalWebSite", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "personalWebSite", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th><i class=\"fa fa-credit-card fa-2x\"></th><td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "cardNumber", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t<tr><th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.iban", array(), "AppBundle"), "html", null, true);
        echo "</th><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "iban", array()), "html", null, true);
        echo "</td></tr>
\t\t\t\t";
        // line 46
        echo "\t\t</tbody>
\t</table> 
\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getUrl("listPersonAction");
        echo "\">atrás</a>
";
        
        $__internal_0bebc562c1ba54955a1a590002af18a6ec8a8114ba7ba0bed4fcc3e37b829d5f->leave($__internal_0bebc562c1ba54955a1a590002af18a6ec8a8114ba7ba0bed4fcc3e37b829d5f_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1c9d6ccb21a704b53f0aef40ee24673cc4bd5ade20804028145e964f2f47bed = $this->env->getExtension("native_profiler");
        $__internal_f1c9d6ccb21a704b53f0aef40ee24673cc4bd5ade20804028145e964f2f47bed->enter($__internal_f1c9d6ccb21a704b53f0aef40ee24673cc4bd5ade20804028145e964f2f47bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f1c9d6ccb21a704b53f0aef40ee24673cc4bd5ade20804028145e964f2f47bed->leave($__internal_f1c9d6ccb21a704b53f0aef40ee24673cc4bd5ade20804028145e964f2f47bed_prof);

    }

    public function getTemplateName()
    {
        return "person/showPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 50,  191 => 48,  187 => 46,  181 => 44,  177 => 43,  170 => 42,  166 => 40,  164 => 39,  161 => 38,  159 => 37,  156 => 36,  154 => 35,  151 => 34,  149 => 33,  146 => 32,  144 => 31,  141 => 30,  139 => 29,  136 => 28,  132 => 27,  126 => 26,  122 => 25,  116 => 24,  110 => 23,  106 => 22,  102 => 21,  96 => 20,  90 => 19,  84 => 18,  78 => 17,  72 => 16,  64 => 13,  61 => 12,  58 => 10,  56 => 8,  50 => 7,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %} {{ 'person.show.title'|trans }} {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump */
/* 	{{ dump(product) }} #}*/
/* 	*/
/* 	{# Listamos el cliente en una lista. #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'person.show.title'|trans }}:{{ person.name }}</h2>*/
/* 	<table class="table">*/
/* 		<tbody>*/
/* 				<tr><th>{{ 'person.id'|trans }}</th><td>{{ person.id }}</td></tr>*/
/* 				<tr><th>{{ 'person.name'|trans }}</th><td>{{ person.name }}</td></tr>*/
/* 				<tr><th>{{ 'person.age'|trans }}</th><td>{{ person.age }}</td></tr>*/
/* 				<tr><th>{{ 'person.birthDate'|trans }}</th><td>{{ person.birthDate|date("d/m/Y") }}</td></tr>*/
/* 				<tr><th>{{ 'person.height'|trans }}</th><td>{{ person.height }}</td></tr>*/
/* 				<tr><th><i class="fa fa-envelope fa-2x"></th><td>{{ person.email }}</td></tr>*/
/* 				<tr><th><i class="fa fa-phone-square fa-2x"></th><td>{{ person.phone }}</td></tr>*/
/* 				<tr><th>{{ 'person.gender'|trans }}</th><td>{{ person.gender }}</td></tr>*/
/* 				<tr><th>{{ 'person.descends'|trans }}</th><td>{{ person.descends }}</td></tr>*/
/* 				<tr><th><i class="fa fa-car fa-2x"></th><td>{{ person.vehicle }}</td></tr>*/
/* 				<tr><th>{{ 'person.language'|trans }}</th><td>{{ person.preferredLanguage }}</td></tr>*/
/* 				<tr><th>{{ 'person.englishLevel'|trans }}</th><td>{% if person.englishLevel == 0 %}*/
/* 													none</td></tr>*/
/* 												{% elseif person.englishLevel == 1 %}*/
/* 												 	A1</td></tr>*/
/* 												{% elseif person.englishLevel == 2 %}*/
/* 													A2</td></tr>*/
/* 												{% elseif person.englishLevel == 3 %}*/
/* 													B1</td></tr>*/
/* 												{% elseif person.englishLevel == 4 %}*/
/* 													B2</td></tr>*/
/* 												{% elseif person.englishLevel == 5 %}*/
/* 													C1</td></tr>*/
/* 												{% elseif person.englishLevel == 6 %}*/
/* 													C2</td></tr>*/
/* 												{% endif %}*/
/* 				<tr><th>{{ 'person.personalWebSite'|trans }}</th><td>{{ person.personalWebSite }}</td></tr>*/
/* 				<tr><th><i class="fa fa-credit-card fa-2x"></th><td>{{ person.cardNumber }}</td></tr>*/
/* 				<tr><th>{{ 'person.iban'|trans }}</th><td>{{ person.iban }}</td></tr>*/
/* 				{# <tr><th>Imágen</th><td><img src="holder.js/200x200"/></td></tr> #}*/
/* 		</tbody>*/
/* 	</table> */
/* 	<a href="{{ url('listPersonAction')}}">atrás</a>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
