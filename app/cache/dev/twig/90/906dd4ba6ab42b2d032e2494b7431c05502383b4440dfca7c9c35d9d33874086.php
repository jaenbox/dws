<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a1fd19377d67903f13d79a1ec057619f6583073a0d6ec6ea66e4d926b4217bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38852f7416ce7584e6d1f7ae44ef7f97d04cdf69379c2ec0953e0f6caeefa118 = $this->env->getExtension("native_profiler");
        $__internal_38852f7416ce7584e6d1f7ae44ef7f97d04cdf69379c2ec0953e0f6caeefa118->enter($__internal_38852f7416ce7584e6d1f7ae44ef7f97d04cdf69379c2ec0953e0f6caeefa118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38852f7416ce7584e6d1f7ae44ef7f97d04cdf69379c2ec0953e0f6caeefa118->leave($__internal_38852f7416ce7584e6d1f7ae44ef7f97d04cdf69379c2ec0953e0f6caeefa118_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc4381463e0f5dcf1a578b89b070a7c114f7f343b6304e28cb521c03b02224b5 = $this->env->getExtension("native_profiler");
        $__internal_dc4381463e0f5dcf1a578b89b070a7c114f7f343b6304e28cb521c03b02224b5->enter($__internal_dc4381463e0f5dcf1a578b89b070a7c114f7f343b6304e28cb521c03b02224b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_dc4381463e0f5dcf1a578b89b070a7c114f7f343b6304e28cb521c03b02224b5->leave($__internal_dc4381463e0f5dcf1a578b89b070a7c114f7f343b6304e28cb521c03b02224b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
