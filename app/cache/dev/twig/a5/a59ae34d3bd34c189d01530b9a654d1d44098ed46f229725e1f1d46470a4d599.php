<?php

/* category/newCategory.html.twig */
class __TwigTemplate_ba13b262ed81d836ee0cb837b8210f261ef484efd74fc1f36f0a4bdb6fd97db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "category/newCategory.html.twig", 3);
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
        $__internal_335a5c0f6052f2290a1ea888842d691aabc57b641c2cad5c7b0889d5d8371ef8 = $this->env->getExtension("native_profiler");
        $__internal_335a5c0f6052f2290a1ea888842d691aabc57b641c2cad5c7b0889d5d8371ef8->enter($__internal_335a5c0f6052f2290a1ea888842d691aabc57b641c2cad5c7b0889d5d8371ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/newCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335a5c0f6052f2290a1ea888842d691aabc57b641c2cad5c7b0889d5d8371ef8->leave($__internal_335a5c0f6052f2290a1ea888842d691aabc57b641c2cad5c7b0889d5d8371ef8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_809516e81e75487fe3ef0ac4a91a39c97771c9bd21d491b7e8172dd849280642 = $this->env->getExtension("native_profiler");
        $__internal_809516e81e75487fe3ef0ac4a91a39c97771c9bd21d491b7e8172dd849280642->enter($__internal_809516e81e75487fe3ef0ac4a91a39c97771c9bd21d491b7e8172dd849280642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 61. Form new category";
        
        $__internal_809516e81e75487fe3ef0ac4a91a39c97771c9bd21d491b7e8172dd849280642->leave($__internal_809516e81e75487fe3ef0ac4a91a39c97771c9bd21d491b7e8172dd849280642_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ad9f1b25af9593d38f1eadf28b10b11c1a3188c0eccb850a127b7da72056e64 = $this->env->getExtension("native_profiler");
        $__internal_7ad9f1b25af9593d38f1eadf28b10b11c1a3188c0eccb850a127b7da72056e64->enter($__internal_7ad9f1b25af9593d38f1eadf28b10b11c1a3188c0eccb850a127b7da72056e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<hr><hr>
\t<h2>Category</h2>
\t<form method=\"post\" action=\"#\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</form>
";
        
        $__internal_7ad9f1b25af9593d38f1eadf28b10b11c1a3188c0eccb850a127b7da72056e64->leave($__internal_7ad9f1b25af9593d38f1eadf28b10b11c1a3188c0eccb850a127b7da72056e64_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_014c29023f8db958c53ef618f45a7fee835c510893f4319e2200b2d1537f179d = $this->env->getExtension("native_profiler");
        $__internal_014c29023f8db958c53ef618f45a7fee835c510893f4319e2200b2d1537f179d->enter($__internal_014c29023f8db958c53ef618f45a7fee835c510893f4319e2200b2d1537f179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_014c29023f8db958c53ef618f45a7fee835c510893f4319e2200b2d1537f179d->leave($__internal_014c29023f8db958c53ef618f45a7fee835c510893f4319e2200b2d1537f179d_prof);

    }

    public function getTemplateName()
    {
        return "category/newCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  66 => 13,  62 => 12,  58 => 11,  54 => 9,  48 => 8,  36 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/product/newCategory.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 61. Form new category{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	<hr><hr>*/
/* 	<h2>Category</h2>*/
/* 	<form method="post" action="#" {{ form_enctype(form) }}>*/
/* 		{{ form_errors(form) }}*/
/* 		{{ form_widget(form) }}*/
/* 	</form>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
