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
        $__internal_aa366c9730c78979db460f3f535683365b351ef49fe4759fee3d22bc9d8a68ec = $this->env->getExtension("native_profiler");
        $__internal_aa366c9730c78979db460f3f535683365b351ef49fe4759fee3d22bc9d8a68ec->enter($__internal_aa366c9730c78979db460f3f535683365b351ef49fe4759fee3d22bc9d8a68ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/newCategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa366c9730c78979db460f3f535683365b351ef49fe4759fee3d22bc9d8a68ec->leave($__internal_aa366c9730c78979db460f3f535683365b351ef49fe4759fee3d22bc9d8a68ec_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c7efd6bd0185b0679f143c5f8bf03472752cd4a50f7ddef530ae323cc6446ed = $this->env->getExtension("native_profiler");
        $__internal_3c7efd6bd0185b0679f143c5f8bf03472752cd4a50f7ddef530ae323cc6446ed->enter($__internal_3c7efd6bd0185b0679f143c5f8bf03472752cd4a50f7ddef530ae323cc6446ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.new.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_3c7efd6bd0185b0679f143c5f8bf03472752cd4a50f7ddef530ae323cc6446ed->leave($__internal_3c7efd6bd0185b0679f143c5f8bf03472752cd4a50f7ddef530ae323cc6446ed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6de25c2db25420ae6b32f60fdcb9bec7955ca1347b4f812e5268865be3ae0e5e = $this->env->getExtension("native_profiler");
        $__internal_6de25c2db25420ae6b32f60fdcb9bec7955ca1347b4f812e5268865be3ae0e5e->enter($__internal_6de25c2db25420ae6b32f60fdcb9bec7955ca1347b4f812e5268865be3ae0e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<hr><hr>
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.new.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t<div class=\"row\">
\t\t\t<div class=\"col-sm-5\">
\t\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("name" => "form", "method" => "post", "action" => "#", "class" => "form-horizontal")));
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'label', array("label_attr" => array("class" => "col-sm-2")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn-default btn")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndAdd", array()), 'label', array("label_attr" => array("class" => "col-sm-2")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn-default btn")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t</div>
";
        
        $__internal_6de25c2db25420ae6b32f60fdcb9bec7955ca1347b4f812e5268865be3ae0e5e->leave($__internal_6de25c2db25420ae6b32f60fdcb9bec7955ca1347b4f812e5268865be3ae0e5e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f3008bc983dca7ac7828a535b70e73e064f9d0d48e83a7700f94fe90a2fa46b = $this->env->getExtension("native_profiler");
        $__internal_1f3008bc983dca7ac7828a535b70e73e064f9d0d48e83a7700f94fe90a2fa46b->enter($__internal_1f3008bc983dca7ac7828a535b70e73e064f9d0d48e83a7700f94fe90a2fa46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1f3008bc983dca7ac7828a535b70e73e064f9d0d48e83a7700f94fe90a2fa46b->leave($__internal_1f3008bc983dca7ac7828a535b70e73e064f9d0d48e83a7700f94fe90a2fa46b_prof);

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
        return array (  120 => 40,  109 => 36,  103 => 33,  98 => 31,  90 => 26,  85 => 24,  78 => 20,  73 => 18,  68 => 16,  63 => 14,  57 => 11,  54 => 10,  48 => 9,  36 => 6,  11 => 3,);
    }
}
/* {# app/Resources/views/product/newCategory.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'category.new.title'|trans }}{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'category.new.header'|trans }}</h2>*/
/* 	<div class="row">*/
/* 			<div class="col-sm-5">*/
/* 				{{ form_start(form, {'attr': {'name':'form', 'method':'post', 'action':'#', 'class':'form-horizontal'} }) }}				*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.name, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.name, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.name) }}*/
/* 					</div> */
/* 					<div class="form-group">*/
/* 						<div class="col-sm-2"></div>*/
/* 						{{ form_label(form.save, null, {'label_attr': {'class':'col-sm-2'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.save, {'attr': {'class':'btn-default btn'} }) }}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<div class="col-sm-2"></div>*/
/* 						{{ form_label(form.saveAndAdd, null, {'label_attr': {'class':'col-sm-2'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.saveAndAdd, {'attr': {'class':'btn-default btn'} }) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				{{ form_end(form) }}*/
/* 			</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
