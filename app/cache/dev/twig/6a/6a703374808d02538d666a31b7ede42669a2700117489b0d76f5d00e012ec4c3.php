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
        $__internal_a7760944205b21f45a9151672f7629ec93d05f66c64fd51f27e5f1374db42d58 = $this->env->getExtension("native_profiler");
        $__internal_a7760944205b21f45a9151672f7629ec93d05f66c64fd51f27e5f1374db42d58->enter($__internal_a7760944205b21f45a9151672f7629ec93d05f66c64fd51f27e5f1374db42d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/newProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7760944205b21f45a9151672f7629ec93d05f66c64fd51f27e5f1374db42d58->leave($__internal_a7760944205b21f45a9151672f7629ec93d05f66c64fd51f27e5f1374db42d58_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_601eb154e3231ba6c6ce0f9eecf764917c6edcc6229384b6906d5075c16718f4 = $this->env->getExtension("native_profiler");
        $__internal_601eb154e3231ba6c6ce0f9eecf764917c6edcc6229384b6906d5075c16718f4->enter($__internal_601eb154e3231ba6c6ce0f9eecf764917c6edcc6229384b6906d5075c16718f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.new.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_601eb154e3231ba6c6ce0f9eecf764917c6edcc6229384b6906d5075c16718f4->leave($__internal_601eb154e3231ba6c6ce0f9eecf764917c6edcc6229384b6906d5075c16718f4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6027fa7495795db1f7978fc87daaf74030a056a2be86def93b4c69a6ea13c6f = $this->env->getExtension("native_profiler");
        $__internal_f6027fa7495795db1f7978fc87daaf74030a056a2be86def93b4c69a6ea13c6f->enter($__internal_f6027fa7495795db1f7978fc87daaf74030a056a2be86def93b4c69a6ea13c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<hr><hr>
\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product.new.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-5\">
\t\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("name" => "form", "method" => "post", "action" => "#", "class" => "form-horizontal")));
        echo "\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'label', array("label_attr" => array("class" => "col-sm-2")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn-default btn")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndAdd", array()), 'label', array("label_attr" => array("class" => "col-sm-2")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn-default btn")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
";
        
        $__internal_f6027fa7495795db1f7978fc87daaf74030a056a2be86def93b4c69a6ea13c6f->leave($__internal_f6027fa7495795db1f7978fc87daaf74030a056a2be86def93b4c69a6ea13c6f_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05b58c64fb9317f87a6dcc74503601b7a98db0655aa9ca47a358e200ab0af133 = $this->env->getExtension("native_profiler");
        $__internal_05b58c64fb9317f87a6dcc74503601b7a98db0655aa9ca47a358e200ab0af133->enter($__internal_05b58c64fb9317f87a6dcc74503601b7a98db0655aa9ca47a358e200ab0af133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_05b58c64fb9317f87a6dcc74503601b7a98db0655aa9ca47a358e200ab0af133->leave($__internal_05b58c64fb9317f87a6dcc74503601b7a98db0655aa9ca47a358e200ab0af133_prof);

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
        return array (  169 => 61,  158 => 57,  152 => 54,  147 => 52,  139 => 47,  134 => 45,  127 => 41,  122 => 39,  117 => 37,  111 => 34,  105 => 31,  100 => 29,  94 => 26,  89 => 24,  84 => 22,  78 => 19,  73 => 17,  68 => 15,  63 => 13,  57 => 10,  54 => 9,  48 => 8,  36 => 6,  11 => 3,);
    }
}
/* {# app/Resources/views/product/newProduct.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'product.new.title'|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'product.new.header'|trans }}</h2>*/
/* 		<div class="row">*/
/* 			<div class="col-sm-5">*/
/* 				{{ form_start(form, {'attr': {'name':'form', 'method':'post', 'action':'#', 'class':'form-horizontal'} }) }}				*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.name, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.name, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.name) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.description, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.description, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.description) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.price, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.price, {'attr': {'class':'form-control'} }) }}*/
/* 							*/
/* 						</div>*/
/* 						{{ form_errors(form.price) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.category, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.category, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.category) }}*/
/* 					</div>*/
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
/* 		</div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
