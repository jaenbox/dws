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
        $__internal_332204a7cf1b7c295544cfcd848d358dffca2879f88fc7d18ec2675eb71b6d38 = $this->env->getExtension("native_profiler");
        $__internal_332204a7cf1b7c295544cfcd848d358dffca2879f88fc7d18ec2675eb71b6d38->enter($__internal_332204a7cf1b7c295544cfcd848d358dffca2879f88fc7d18ec2675eb71b6d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/newPerson.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332204a7cf1b7c295544cfcd848d358dffca2879f88fc7d18ec2675eb71b6d38->leave($__internal_332204a7cf1b7c295544cfcd848d358dffca2879f88fc7d18ec2675eb71b6d38_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e9a05910c67d3682c4328c6d8efe1acfbfa71c992766ce0c5cc6403aad9cb2e = $this->env->getExtension("native_profiler");
        $__internal_1e9a05910c67d3682c4328c6d8efe1acfbfa71c992766ce0c5cc6403aad9cb2e->enter($__internal_1e9a05910c67d3682c4328c6d8efe1acfbfa71c992766ce0c5cc6403aad9cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.new.title", array(), "AppBundle"), "html", null, true);
        echo " ";
        
        $__internal_1e9a05910c67d3682c4328c6d8efe1acfbfa71c992766ce0c5cc6403aad9cb2e->leave($__internal_1e9a05910c67d3682c4328c6d8efe1acfbfa71c992766ce0c5cc6403aad9cb2e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde62078c65e9041bae6a2230ce3cb7f1c819151326cdc611a03f33329942995 = $this->env->getExtension("native_profiler");
        $__internal_cde62078c65e9041bae6a2230ce3cb7f1c819151326cdc611a03f33329942995->enter($__internal_cde62078c65e9041bae6a2230ce3cb7f1c819151326cdc611a03f33329942995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"content\">
\t<hr><hr>
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("person.new.header", array(), "AppBundle"), "html", null, true);
        echo "</h2>
\t\t<div class=\"row\">
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
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "height", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descends", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descends", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descends", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicle", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vehicle", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferredLanguage", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferredLanguage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferredLanguage", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "englishLevel", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "englishLevel", array()), 'widget', array("attr" => array("class" => "control-group")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "englishLevel", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personalWebSite", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personalWebSite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personalWebSite", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cardNumber", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cardNumber", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cardNumber", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IBAN", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label required")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IBAN", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IBAN", array()), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'label', array("label_attr" => array("class" => "col-sm-2")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn-default btn")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t\t\t\t";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndAdd", array()), 'label', array("label_attr" => array("class" => "col-sm-2")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndAdd", array()), 'widget', array("attr" => array("class" => "btn-default btn")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>
";
        
        $__internal_cde62078c65e9041bae6a2230ce3cb7f1c819151326cdc611a03f33329942995->leave($__internal_cde62078c65e9041bae6a2230ce3cb7f1c819151326cdc611a03f33329942995_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7420d7f974415221758ef7740bd0de313233e6bbce68d65deb229097ef5da33 = $this->env->getExtension("native_profiler");
        $__internal_f7420d7f974415221758ef7740bd0de313233e6bbce68d65deb229097ef5da33->enter($__internal_f7420d7f974415221758ef7740bd0de313233e6bbce68d65deb229097ef5da33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7420d7f974415221758ef7740bd0de313233e6bbce68d65deb229097ef5da33->leave($__internal_f7420d7f974415221758ef7740bd0de313233e6bbce68d65deb229097ef5da33_prof);

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
        return array (  331 => 132,  319 => 127,  313 => 124,  308 => 122,  300 => 117,  295 => 115,  288 => 111,  283 => 109,  278 => 107,  272 => 104,  267 => 102,  262 => 100,  256 => 97,  251 => 95,  246 => 93,  240 => 90,  235 => 88,  230 => 86,  224 => 83,  219 => 81,  214 => 79,  208 => 76,  203 => 74,  198 => 72,  192 => 69,  187 => 67,  182 => 65,  176 => 62,  171 => 60,  166 => 58,  160 => 55,  155 => 53,  150 => 51,  144 => 48,  139 => 46,  134 => 44,  128 => 41,  123 => 39,  118 => 37,  112 => 34,  107 => 32,  102 => 30,  96 => 27,  91 => 25,  86 => 23,  80 => 20,  75 => 18,  70 => 16,  65 => 14,  59 => 11,  55 => 9,  49 => 8,  36 => 6,  11 => 3,);
    }
}
/* {# app/Resources/views/person/newPerson.html.twig #}*/
/* */
/* {% extends "base.html.twig" %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block title %}{{ 'person.new.title'|trans }} {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div class="content">*/
/* 	<hr><hr>*/
/* 	<h2>{{ 'person.new.header'|trans }}</h2>*/
/* 		<div class="row">*/
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
/* 						{{ form_label(form.age, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.age, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.age) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.birthDate, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.birthDate, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.birthDate) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.height, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.height, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.height) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.email, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.email, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.email) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.phone, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.phone, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.phone) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.gender, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.gender, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.gender) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.descends, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.descends, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.descends) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.vehicle, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-1">*/
/* 							{{ form_widget(form.vehicle, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.vehicle) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.preferredLanguage, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.preferredLanguage, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.preferredLanguage) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.englishLevel, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.englishLevel, {'attr': {'class':'control-group'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.englishLevel) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.personalWebSite, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.personalWebSite, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.personalWebSite) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.cardNumber, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.cardNumber, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.cardNumber) }}*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{{ form_label(form.IBAN, null, {'label_attr': {'class':'col-sm-2 control-label required'} })  }}*/
/* 						<div class="col-sm-5">*/
/* 							{{ form_widget(form.IBAN, {'attr': {'class':'form-control'} }) }}*/
/* 						</div>*/
/* 						{{ form_errors(form.IBAN) }}*/
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
/* 		</div>	*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
