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
        $__internal_cacb0eb9073d91cc04fb39e5d33733824591a332a3fafb76d43923159f152090 = $this->env->getExtension("native_profiler");
        $__internal_cacb0eb9073d91cc04fb39e5d33733824591a332a3fafb76d43923159f152090->enter($__internal_cacb0eb9073d91cc04fb39e5d33733824591a332a3fafb76d43923159f152090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/newProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacb0eb9073d91cc04fb39e5d33733824591a332a3fafb76d43923159f152090->leave($__internal_cacb0eb9073d91cc04fb39e5d33733824591a332a3fafb76d43923159f152090_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57def21883c051397c4a4572af371305bbb870a6f9d85175abcd972cbcee56ee = $this->env->getExtension("native_profiler");
        $__internal_57def21883c051397c4a4572af371305bbb870a6f9d85175abcd972cbcee56ee->enter($__internal_57def21883c051397c4a4572af371305bbb870a6f9d85175abcd972cbcee56ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 61. Form new  product";
        
        $__internal_57def21883c051397c4a4572af371305bbb870a6f9d85175abcd972cbcee56ee->leave($__internal_57def21883c051397c4a4572af371305bbb870a6f9d85175abcd972cbcee56ee_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd3babc48683d48802f9c1ed40b6a8ecddf7fd58ae48cf463f4d5d321fa5c413 = $this->env->getExtension("native_profiler");
        $__internal_dd3babc48683d48802f9c1ed40b6a8ecddf7fd58ae48cf463f4d5d321fa5c413->enter($__internal_dd3babc48683d48802f9c1ed40b6a8ecddf7fd58ae48cf463f4d5d321fa5c413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<hr><hr>
\t<h2>Product</h2>
\t<form method=\"post\" action=\"#\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</form>\t
";
        
        $__internal_dd3babc48683d48802f9c1ed40b6a8ecddf7fd58ae48cf463f4d5d321fa5c413->leave($__internal_dd3babc48683d48802f9c1ed40b6a8ecddf7fd58ae48cf463f4d5d321fa5c413_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_014d0ff296c54c2bc7b6923fff0244c57cd895aadaa16c1da6182291f1204add = $this->env->getExtension("native_profiler");
        $__internal_014d0ff296c54c2bc7b6923fff0244c57cd895aadaa16c1da6182291f1204add->enter($__internal_014d0ff296c54c2bc7b6923fff0244c57cd895aadaa16c1da6182291f1204add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_014d0ff296c54c2bc7b6923fff0244c57cd895aadaa16c1da6182291f1204add->leave($__internal_014d0ff296c54c2bc7b6923fff0244c57cd895aadaa16c1da6182291f1204add_prof);

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
        return array (  76 => 15,  66 => 12,  62 => 11,  58 => 10,  54 => 8,  48 => 7,  36 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/product/newProduct.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 61. Form new  product{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<hr><hr>*/
/* 	<h2>Product</h2>*/
/* 	<form method="post" action="#" {{ form_enctype(form) }}>*/
/* 		{{ form_errors(form) }}*/
/* 		{{ form_widget(form) }}*/
/* 	</form>	*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
