<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_eda1ddb54e06000ac799df75eb854bbf29efebd92e3be104a6fbb04bd8ab4b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e3e8d5cd47fe943842c6b815079d1418ac4c554b2ae3ecaa44080998ab16411 = $this->env->getExtension("native_profiler");
        $__internal_2e3e8d5cd47fe943842c6b815079d1418ac4c554b2ae3ecaa44080998ab16411->enter($__internal_2e3e8d5cd47fe943842c6b815079d1418ac4c554b2ae3ecaa44080998ab16411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        echo "
<div id=\"content\">
 \t<div class=\"row\">
\t\t<div class=\"col-sm-5\">
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<div>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>

";
        
        $__internal_2e3e8d5cd47fe943842c6b815079d1418ac4c554b2ae3ecaa44080998ab16411->leave($__internal_2e3e8d5cd47fe943842c6b815079d1418ac4c554b2ae3ecaa44080998ab16411_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  39 => 10,  34 => 8,  30 => 7,  24 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* <div id="content">*/
/*  	<div class="row">*/
/* 		<div class="col-sm-5">*/
/* 			{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/* 			{{ form_widget(form) }}*/
/* 			<div>*/
/* 				<input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/* 			</div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
