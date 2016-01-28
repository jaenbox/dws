<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c5b7eae774c368f2af9901acf7a899608000b8451d2f9f9d132b9bf32d62d513 extends Twig_Template
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
        $__internal_0bd6f5f50c027399b83717d510c05c63d47065359e6b5970623789c763f1ec10 = $this->env->getExtension("native_profiler");
        $__internal_0bd6f5f50c027399b83717d510c05c63d47065359e6b5970623789c763f1ec10->enter($__internal_0bd6f5f50c027399b83717d510c05c63d47065359e6b5970623789c763f1ec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        echo "
<div id=\"content\">
 \t<div class=\"row\">
\t\t<div class=\"col-sm-5\">
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
\t\t\t    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t    <div>
\t\t\t        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t    </div>
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>";
        
        $__internal_0bd6f5f50c027399b83717d510c05c63d47065359e6b5970623789c763f1ec10->leave($__internal_0bd6f5f50c027399b83717d510c05c63d47065359e6b5970623789c763f1ec10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
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
/* 			{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/* 			    {{ form_widget(form) }}*/
/* 			    <div>*/
/* 			        <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/* 			    </div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
