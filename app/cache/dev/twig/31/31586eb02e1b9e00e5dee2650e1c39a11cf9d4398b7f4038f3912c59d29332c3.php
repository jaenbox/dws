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
        $__internal_05e33dd68dc249f273f2aaf53bff7e0ba7b5af26e7d20fb30e069bd0f425f37a = $this->env->getExtension("native_profiler");
        $__internal_05e33dd68dc249f273f2aaf53bff7e0ba7b5af26e7d20fb30e069bd0f425f37a->enter($__internal_05e33dd68dc249f273f2aaf53bff7e0ba7b5af26e7d20fb30e069bd0f425f37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/newPerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05e33dd68dc249f273f2aaf53bff7e0ba7b5af26e7d20fb30e069bd0f425f37a->leave($__internal_05e33dd68dc249f273f2aaf53bff7e0ba7b5af26e7d20fb30e069bd0f425f37a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfec12dfbfe1afe990af179a56f4fe4d2c938a6f9809fc27b2ce1fdca3493456 = $this->env->getExtension("native_profiler");
        $__internal_bfec12dfbfe1afe990af179a56f4fe4d2c938a6f9809fc27b2ce1fdca3493456->enter($__internal_bfec12dfbfe1afe990af179a56f4fe4d2c938a6f9809fc27b2ce1fdca3493456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Actividad 62. Form new person";
        
        $__internal_bfec12dfbfe1afe990af179a56f4fe4d2c938a6f9809fc27b2ce1fdca3493456->leave($__internal_bfec12dfbfe1afe990af179a56f4fe4d2c938a6f9809fc27b2ce1fdca3493456_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_02064b45f9f880b97ead80641baa0a188b91b27b8b3360e45a6e1d46e92d7caa = $this->env->getExtension("native_profiler");
        $__internal_02064b45f9f880b97ead80641baa0a188b91b27b8b3360e45a6e1d46e92d7caa->enter($__internal_02064b45f9f880b97ead80641baa0a188b91b27b8b3360e45a6e1d46e92d7caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<hr><hr>
\t<h2>Person</h2>
\t<div class=\"content\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-5\">
\t\t\t\t<form name=\"form\" method=\"post\" action=\"#\" class=\"form-horizontal\">
\t\t\t\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t\t</div> 
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>\t
\t</div>
";
        
        $__internal_02064b45f9f880b97ead80641baa0a188b91b27b8b3360e45a6e1d46e92d7caa->leave($__internal_02064b45f9f880b97ead80641baa0a188b91b27b8b3360e45a6e1d46e92d7caa_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2e9b00625d2361b6161b5574e799a3e9f6d9ea8bf04fb32f8c01dbb881b85f9 = $this->env->getExtension("native_profiler");
        $__internal_f2e9b00625d2361b6161b5574e799a3e9f6d9ea8bf04fb32f8c01dbb881b85f9->enter($__internal_f2e9b00625d2361b6161b5574e799a3e9f6d9ea8bf04fb32f8c01dbb881b85f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f2e9b00625d2361b6161b5574e799a3e9f6d9ea8bf04fb32f8c01dbb881b85f9->leave($__internal_f2e9b00625d2361b6161b5574e799a3e9f6d9ea8bf04fb32f8c01dbb881b85f9_prof);

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
        return array (  86 => 25,  72 => 18,  66 => 15,  62 => 14,  54 => 8,  48 => 7,  36 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/person/newPerson.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}Actividad 62. Form new person{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<hr><hr>*/
/* 	<h2>Person</h2>*/
/* 	<div class="content">*/
/* 		<div class="row">*/
/* 			<div class="col-sm-5">*/
/* 				<form name="form" method="post" action="#" class="form-horizontal">*/
/* 					{{ form_start(form) }}*/
/* 					{{ form_errors(form) }}*/
/* 				*/
/* 					<div class="form-group">*/
/* 						{{ form_widget(form) }}*/
/* 					</div> */
/* 				</form>*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
