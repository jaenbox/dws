<?php

/* person/deletePerson.html.twig */
class __TwigTemplate_9cb29b1cf37d660e8aefde786d92248870fa076b5e2f287e1f8a4654113b5f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "person/deletePerson.html.twig", 1);
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
        $__internal_902f3f2284deb826746e7acc6ab94b3eb19e85a87d75595142903daaf3abf803 = $this->env->getExtension("native_profiler");
        $__internal_902f3f2284deb826746e7acc6ab94b3eb19e85a87d75595142903daaf3abf803->enter($__internal_902f3f2284deb826746e7acc6ab94b3eb19e85a87d75595142903daaf3abf803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/deletePerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902f3f2284deb826746e7acc6ab94b3eb19e85a87d75595142903daaf3abf803->leave($__internal_902f3f2284deb826746e7acc6ab94b3eb19e85a87d75595142903daaf3abf803_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91bcfef21471de998c31368c88d232a8defbaac6b76515e7e13968bbc8be7bd6 = $this->env->getExtension("native_profiler");
        $__internal_91bcfef21471de998c31368c88d232a8defbaac6b76515e7e13968bbc8be7bd6->enter($__internal_91bcfef21471de998c31368c88d232a8defbaac6b76515e7e13968bbc8be7bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.delete.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_91bcfef21471de998c31368c88d232a8defbaac6b76515e7e13968bbc8be7bd6->leave($__internal_91bcfef21471de998c31368c88d232a8defbaac6b76515e7e13968bbc8be7bd6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_42142500c29213bcc68d66c5332c83738be8bd91ab33db07eb37b178c2172da4 = $this->env->getExtension("native_profiler");
        $__internal_42142500c29213bcc68d66c5332c83738be8bd91ab33db07eb37b178c2172da4->enter($__internal_42142500c29213bcc68d66c5332c83738be8bd91ab33db07eb37b178c2172da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 10
        echo "\t<hr><hr>
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.delete.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t";
        // line 13
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.delete.resolution", array(), "AppBundle"), "html", null, true);
        echo "
\t<div>
\t\t";
        // line 16
        echo "\t</div>
\t
";
        
        $__internal_42142500c29213bcc68d66c5332c83738be8bd91ab33db07eb37b178c2172da4->leave($__internal_42142500c29213bcc68d66c5332c83738be8bd91ab33db07eb37b178c2172da4_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92ccda934128ec1e40becae30c3142d75b522abf2826990feac378ba16cec85f = $this->env->getExtension("native_profiler");
        $__internal_92ccda934128ec1e40becae30c3142d75b522abf2826990feac378ba16cec85f->enter($__internal_92ccda934128ec1e40becae30c3142d75b522abf2826990feac378ba16cec85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92ccda934128ec1e40becae30c3142d75b522abf2826990feac378ba16cec85f->leave($__internal_92ccda934128ec1e40becae30c3142d75b522abf2826990feac378ba16cec85f_prof);

    }

    public function getTemplateName()
    {
        return "person/deletePerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  69 => 16,  63 => 13,  59 => 11,  56 => 10,  54 => 8,  48 => 7,  36 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'person.delete.title'|trans }}{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	{# Mostramos los objetos con dump */
/* 	{{ dump(person) }} #}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'person.delete.header'|trans }}</h2>*/
/* 	{# Mostramos el mensaje success #}*/
/* 	{{ 'person.delete.resolution'|trans }}*/
/* 	<div>*/
/* 		{# <a href="{{ url('listPersonAction')}}">atrás</a> #}*/
/* 	</div>*/
/* 	*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
