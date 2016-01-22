<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_ab61c24f8e05700443f4b3e9a99364682ceb2524ef5517603b16ee4686bc4309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_910a3e3f97a4e71ff7a7160c78a5f13307c8060b17883b3cf179931b0cd03e06 = $this->env->getExtension("native_profiler");
        $__internal_910a3e3f97a4e71ff7a7160c78a5f13307c8060b17883b3cf179931b0cd03e06->enter($__internal_910a3e3f97a4e71ff7a7160c78a5f13307c8060b17883b3cf179931b0cd03e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_910a3e3f97a4e71ff7a7160c78a5f13307c8060b17883b3cf179931b0cd03e06->leave($__internal_910a3e3f97a4e71ff7a7160c78a5f13307c8060b17883b3cf179931b0cd03e06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd956f32d840119ba04bb428d801dd248b889e610e8e45af9707d031a75d66a1 = $this->env->getExtension("native_profiler");
        $__internal_dd956f32d840119ba04bb428d801dd248b889e610e8e45af9707d031a75d66a1->enter($__internal_dd956f32d840119ba04bb428d801dd248b889e610e8e45af9707d031a75d66a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dd956f32d840119ba04bb428d801dd248b889e610e8e45af9707d031a75d66a1->leave($__internal_dd956f32d840119ba04bb428d801dd248b889e610e8e45af9707d031a75d66a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
