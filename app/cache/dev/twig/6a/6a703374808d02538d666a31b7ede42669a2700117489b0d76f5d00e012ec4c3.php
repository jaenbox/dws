<?php

/* product/newProduct.html.twig */
class __TwigTemplate_df895221a1a11eed84ec51e28acb1ce1c831bc5e77facd4a477120ededa89061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "product/newProduct.html.twig", 3);
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
        $__internal_3517b8e1fe1df29012e1ab3ae373400c136e656ff3bf230f1a778005d089ad1d = $this->env->getExtension("native_profiler");
        $__internal_3517b8e1fe1df29012e1ab3ae373400c136e656ff3bf230f1a778005d089ad1d->enter($__internal_3517b8e1fe1df29012e1ab3ae373400c136e656ff3bf230f1a778005d089ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/newProduct.html.twig"));

        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3517b8e1fe1df29012e1ab3ae373400c136e656ff3bf230f1a778005d089ad1d->leave($__internal_3517b8e1fe1df29012e1ab3ae373400c136e656ff3bf230f1a778005d089ad1d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c28bab54d44eaa7e706ded9c98d92fb544b2953aac8930f43388b85d60ec53a = $this->env->getExtension("native_profiler");
        $__internal_5c28bab54d44eaa7e706ded9c98d92fb544b2953aac8930f43388b85d60ec53a->enter($__internal_5c28bab54d44eaa7e706ded9c98d92fb544b2953aac8930f43388b85d60ec53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.new.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_5c28bab54d44eaa7e706ded9c98d92fb544b2953aac8930f43388b85d60ec53a->leave($__internal_5c28bab54d44eaa7e706ded9c98d92fb544b2953aac8930f43388b85d60ec53a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_23793866332045b7b26c44ad0786badae70f2e0d9fc6c21a057d8377f70bd94e = $this->env->getExtension("native_profiler");
        $__internal_23793866332045b7b26c44ad0786badae70f2e0d9fc6c21a057d8377f70bd94e->enter($__internal_23793866332045b7b26c44ad0786badae70f2e0d9fc6c21a057d8377f70bd94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t<div id=\"content\">
\t\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.new.header", array(), "AppBundle"), "html", null, true);
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
        
        $__internal_23793866332045b7b26c44ad0786badae70f2e0d9fc6c21a057d8377f70bd94e->leave($__internal_23793866332045b7b26c44ad0786badae70f2e0d9fc6c21a057d8377f70bd94e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6fe318309fd09b55727e3851a4e3ab04257472832125e96c9c137667fccb67f0 = $this->env->getExtension("native_profiler");
        $__internal_6fe318309fd09b55727e3851a4e3ab04257472832125e96c9c137667fccb67f0->enter($__internal_6fe318309fd09b55727e3851a4e3ab04257472832125e96c9c137667fccb67f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6fe318309fd09b55727e3851a4e3ab04257472832125e96c9c137667fccb67f0->leave($__internal_6fe318309fd09b55727e3851a4e3ab04257472832125e96c9c137667fccb67f0_prof);

    }

    public function getTemplateName()
    {
        return "product/newProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  75 => 17,  71 => 16,  67 => 15,  61 => 12,  57 => 10,  51 => 9,  39 => 7,  32 => 3,  30 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/product/newProduct.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block title %}{{ 'product.new.title'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div id="content">*/
/* 		<h2>{{ 'product.new.header' | trans }}</h2>*/
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
/* */
