<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_133cec7dc251e184fbba7f70c956e486bf06d4dd4d7bcbd104fae717d10074fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_cbeb2c262ab88d4512026d7182654cc4d34dba7b79caaa3808a20332adfa9592 = $this->env->getExtension("native_profiler");
        $__internal_cbeb2c262ab88d4512026d7182654cc4d34dba7b79caaa3808a20332adfa9592->enter($__internal_cbeb2c262ab88d4512026d7182654cc4d34dba7b79caaa3808a20332adfa9592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbeb2c262ab88d4512026d7182654cc4d34dba7b79caaa3808a20332adfa9592->leave($__internal_cbeb2c262ab88d4512026d7182654cc4d34dba7b79caaa3808a20332adfa9592_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e954e29a175251abe76a577c2b77f475c3e78b886bc0d420bcc87616da6cb621 = $this->env->getExtension("native_profiler");
        $__internal_e954e29a175251abe76a577c2b77f475c3e78b886bc0d420bcc87616da6cb621->enter($__internal_e954e29a175251abe76a577c2b77f475c3e78b886bc0d420bcc87616da6cb621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e954e29a175251abe76a577c2b77f475c3e78b886bc0d420bcc87616da6cb621->leave($__internal_e954e29a175251abe76a577c2b77f475c3e78b886bc0d420bcc87616da6cb621_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
