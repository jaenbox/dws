<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0581b568ad1b082e25949c9b8a78dabae8f1469c75de04fef053ec4ec56f665a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f16d4e77cd213cdfe99d1ff1b6856df2ce8ad53bc31d42b578ea2c30f4b9927e = $this->env->getExtension("native_profiler");
        $__internal_f16d4e77cd213cdfe99d1ff1b6856df2ce8ad53bc31d42b578ea2c30f4b9927e->enter($__internal_f16d4e77cd213cdfe99d1ff1b6856df2ce8ad53bc31d42b578ea2c30f4b9927e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16d4e77cd213cdfe99d1ff1b6856df2ce8ad53bc31d42b578ea2c30f4b9927e->leave($__internal_f16d4e77cd213cdfe99d1ff1b6856df2ce8ad53bc31d42b578ea2c30f4b9927e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48e9a1d402e5e5642f095fe0804ac6002eb75e58d5574ec82b74c932fc0e7936 = $this->env->getExtension("native_profiler");
        $__internal_48e9a1d402e5e5642f095fe0804ac6002eb75e58d5574ec82b74c932fc0e7936->enter($__internal_48e9a1d402e5e5642f095fe0804ac6002eb75e58d5574ec82b74c932fc0e7936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_48e9a1d402e5e5642f095fe0804ac6002eb75e58d5574ec82b74c932fc0e7936->leave($__internal_48e9a1d402e5e5642f095fe0804ac6002eb75e58d5574ec82b74c932fc0e7936_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
