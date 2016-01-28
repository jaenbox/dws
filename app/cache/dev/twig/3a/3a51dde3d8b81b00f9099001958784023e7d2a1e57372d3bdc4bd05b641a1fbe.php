<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_0e1eb227929112d2b2ec58d5268094c66a22ac356c45b824070ff1f231d1a207 extends Twig_Template
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
        $__internal_2ea7bcc630f855fc1f84c8b86e37db8499abdd0aad5a64155e299e86276701df = $this->env->getExtension("native_profiler");
        $__internal_2ea7bcc630f855fc1f84c8b86e37db8499abdd0aad5a64155e299e86276701df->enter($__internal_2ea7bcc630f855fc1f84c8b86e37db8499abdd0aad5a64155e299e86276701df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        echo "
<div id=\"content\">
 \t<div class=\"row\">
\t\t<div class=\"col-sm-5\">
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register form-horizontal\"")));
        echo "
\t\t    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t    <div>
\t\t        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t    </div>
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</div>
";
        
        $__internal_2ea7bcc630f855fc1f84c8b86e37db8499abdd0aad5a64155e299e86276701df->leave($__internal_2ea7bcc630f855fc1f84c8b86e37db8499abdd0aad5a64155e299e86276701df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
/* 			{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register form-horizontal"'}}) }}*/
/* 		    {{ form_widget(form) }}*/
/* 		    <div>*/
/* 		        <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/* 		    </div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
