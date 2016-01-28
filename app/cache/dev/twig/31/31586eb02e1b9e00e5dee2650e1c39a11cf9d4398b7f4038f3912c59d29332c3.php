<?php

/* person/newPerson.html.twig */
class __TwigTemplate_7ed6855075663cc1eae65004136d49ac6fee3c64f26fd19433d01049d158efc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "person/newPerson.html.twig", 3);
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
        $__internal_774780f758a5cdeea82cbe30d82129faf358ac8afd5660b4eb50d32e9967477e = $this->env->getExtension("native_profiler");
        $__internal_774780f758a5cdeea82cbe30d82129faf358ac8afd5660b4eb50d32e9967477e->enter($__internal_774780f758a5cdeea82cbe30d82129faf358ac8afd5660b4eb50d32e9967477e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/newPerson.html.twig"));

        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_774780f758a5cdeea82cbe30d82129faf358ac8afd5660b4eb50d32e9967477e->leave($__internal_774780f758a5cdeea82cbe30d82129faf358ac8afd5660b4eb50d32e9967477e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0a42e49064c05313fde1a78f76f4556f7f0380912cb3d6734fb4a60cc0a8a33 = $this->env->getExtension("native_profiler");
        $__internal_b0a42e49064c05313fde1a78f76f4556f7f0380912cb3d6734fb4a60cc0a8a33->enter($__internal_b0a42e49064c05313fde1a78f76f4556f7f0380912cb3d6734fb4a60cc0a8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.new.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_b0a42e49064c05313fde1a78f76f4556f7f0380912cb3d6734fb4a60cc0a8a33->leave($__internal_b0a42e49064c05313fde1a78f76f4556f7f0380912cb3d6734fb4a60cc0a8a33_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6f03863fbf1eec7214463b8beaf1fca4c17ae03a01dc45181963bb19696fa83 = $this->env->getExtension("native_profiler");
        $__internal_a6f03863fbf1eec7214463b8beaf1fca4c17ae03a01dc45181963bb19696fa83->enter($__internal_a6f03863fbf1eec7214463b8beaf1fca4c17ae03a01dc45181963bb19696fa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t
\t<div id=\"content\">
\t\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.new.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t\t<div class=\"row\">
\t\t\t<div class='col-sm-5'>
\t\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "\t\t
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "\t\t
\t\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_a6f03863fbf1eec7214463b8beaf1fca4c17ae03a01dc45181963bb19696fa83->leave($__internal_a6f03863fbf1eec7214463b8beaf1fca4c17ae03a01dc45181963bb19696fa83_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8b73abbdc0a92485becae08148ca5210cdd48ae6d47b4ff791642317337f7f8 = $this->env->getExtension("native_profiler");
        $__internal_b8b73abbdc0a92485becae08148ca5210cdd48ae6d47b4ff791642317337f7f8->enter($__internal_b8b73abbdc0a92485becae08148ca5210cdd48ae6d47b4ff791642317337f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8b73abbdc0a92485becae08148ca5210cdd48ae6d47b4ff791642317337f7f8->leave($__internal_b8b73abbdc0a92485becae08148ca5210cdd48ae6d47b4ff791642317337f7f8_prof);

    }

    public function getTemplateName()
    {
        return "person/newPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  76 => 17,  72 => 16,  68 => 15,  62 => 12,  58 => 10,  52 => 9,  39 => 7,  32 => 3,  30 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/person/newPerson.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block title %}{{ 'person.new.title'|trans }} {% endblock %}*/
/* */
/* {% block body %}*/
/* 	*/
/* 	<div id="content">*/
/* 		<h2>{{ 'person.new.header' | trans }}</h2>*/
/* 		<div class="row">*/
/* 			<div class='col-sm-5'>*/
/* 				{{ form_start(form) }}		*/
/* 				{{ form_widget(form) }}		*/
/* 				{{ form_end(form) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
