<?php

/* default/index.html.twig */
class __TwigTemplate_5cab16ae51397e909f8e218a8f1cabf5a98ba5ae144921408829af01ec0d5152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb9da908d435cf41a2d572e4cfbc40eab78b68f683423286caae553fc8dd6ab = $this->env->getExtension("native_profiler");
        $__internal_dcb9da908d435cf41a2d572e4cfbc40eab78b68f683423286caae553fc8dd6ab->enter($__internal_dcb9da908d435cf41a2d572e4cfbc40eab78b68f683423286caae553fc8dd6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb9da908d435cf41a2d572e4cfbc40eab78b68f683423286caae553fc8dd6ab->leave($__internal_dcb9da908d435cf41a2d572e4cfbc40eab78b68f683423286caae553fc8dd6ab_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_16952d6a675617b4b278041d5eba4a1664cb8eeb593f0797730e129b43519886 = $this->env->getExtension("native_profiler");
        $__internal_16952d6a675617b4b278041d5eba4a1664cb8eeb593f0797730e129b43519886->enter($__internal_16952d6a675617b4b278041d5eba4a1664cb8eeb593f0797730e129b43519886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   

    \t<div id=\"content\" class=\"container\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<hr>
                <hr>\t\t\t\t
\t\t\t\t<h1> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.header", array(), "AppBundle"), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t<p class=\"lead\"> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.text1", array(), "AppBundle"), "html", null, true);
        echo " </p>
\t\t\t<h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.header2", array(), "AppBundle"), "html", null, true);
        echo " </h3>
\t\t\t<p> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.text2", array(), "AppBundle"), "html", null, true);
        echo "
\t\t\t<p class=\"text-info\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.text3", array(), "AppBundle"), "html", null, true);
        echo " </p>
\t\t\t<p> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.text4", array(), "AppBundle"), "html", null, true);
        echo "
\t\t\t<p class=\"text-info\"> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.text5", array(), "AppBundle"), "html", null, true);
        echo " </p>
\t\t</div>

";
        
        $__internal_16952d6a675617b4b278041d5eba4a1664cb8eeb593f0797730e129b43519886->leave($__internal_16952d6a675617b4b278041d5eba4a1664cb8eeb593f0797730e129b43519886_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  47 => 10,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'AppBundle' %}*/
/* */
/* {% block body %}   */
/* */
/*     	<div id="content" class="container">*/
/* 			<div class="page-header">*/
/* 				<hr>*/
/*                 <hr>				*/
/* 				<h1> {{ 'index.header'|trans }}</h1>*/
/* 			</div>*/
/* 			<p class="lead"> {{ 'index.text1'|trans }} </p>*/
/* 			<h3>{{ 'index.header2' |trans }} </h3>*/
/* 			<p> {{ 'index.text2'|trans }}*/
/* 			<p class="text-info"> {{ 'index.text3' |trans }} </p>*/
/* 			<p> {{ 'index.text4' |trans }}*/
/* 			<p class="text-info"> {{ 'index.text5' |trans }} </p>*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
