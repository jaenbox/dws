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
        $__internal_5e7d156eed53c7503c9d4558585f662967c11d18f262acd9fc6c26e7534831c5 = $this->env->getExtension("native_profiler");
        $__internal_5e7d156eed53c7503c9d4558585f662967c11d18f262acd9fc6c26e7534831c5->enter($__internal_5e7d156eed53c7503c9d4558585f662967c11d18f262acd9fc6c26e7534831c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/newCategory.html.twig"));

        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7d156eed53c7503c9d4558585f662967c11d18f262acd9fc6c26e7534831c5->leave($__internal_5e7d156eed53c7503c9d4558585f662967c11d18f262acd9fc6c26e7534831c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b88a4cab5a9a112e3e47d435e22af301aa0d39a3f74bb538de0ab1568c52fbfb = $this->env->getExtension("native_profiler");
        $__internal_b88a4cab5a9a112e3e47d435e22af301aa0d39a3f74bb538de0ab1568c52fbfb->enter($__internal_b88a4cab5a9a112e3e47d435e22af301aa0d39a3f74bb538de0ab1568c52fbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.new.title", array(), "AppBundle"), "html", null, true);
        
        $__internal_b88a4cab5a9a112e3e47d435e22af301aa0d39a3f74bb538de0ab1568c52fbfb->leave($__internal_b88a4cab5a9a112e3e47d435e22af301aa0d39a3f74bb538de0ab1568c52fbfb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e375bfaf19a3b596e75fc3c4c96591f34c54bb43bc542cf544c45b7d8557038 = $this->env->getExtension("native_profiler");
        $__internal_2e375bfaf19a3b596e75fc3c4c96591f34c54bb43bc542cf544c45b7d8557038->enter($__internal_2e375bfaf19a3b596e75fc3c4c96591f34c54bb43bc542cf544c45b7d8557038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
\t<div id=\"content\">
\t\t<h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.new.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t\t<div class=\"row\">
\t\t\t<div class='col-sm-5'>
\t\t\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "\t\t
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "\t\t
\t\t\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_2e375bfaf19a3b596e75fc3c4c96591f34c54bb43bc542cf544c45b7d8557038->leave($__internal_2e375bfaf19a3b596e75fc3c4c96591f34c54bb43bc542cf544c45b7d8557038_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a7349b60e816f91963b9a795c844126b4d0e2a3c1ba69c1a64110f818428d5b = $this->env->getExtension("native_profiler");
        $__internal_4a7349b60e816f91963b9a795c844126b4d0e2a3c1ba69c1a64110f818428d5b->enter($__internal_4a7349b60e816f91963b9a795c844126b4d0e2a3c1ba69c1a64110f818428d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a7349b60e816f91963b9a795c844126b4d0e2a3c1ba69c1a64110f818428d5b->leave($__internal_4a7349b60e816f91963b9a795c844126b4d0e2a3c1ba69c1a64110f818428d5b_prof);

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
        return array (  87 => 23,  75 => 18,  71 => 17,  67 => 16,  61 => 13,  57 => 11,  51 => 10,  39 => 7,  32 => 3,  30 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/product/newCategory.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block title %}{{ 'category.new.title'|trans }}{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* 	<div id="content">*/
/* 		<h2>{{ 'category.new.header' | trans }}</h2>*/
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
