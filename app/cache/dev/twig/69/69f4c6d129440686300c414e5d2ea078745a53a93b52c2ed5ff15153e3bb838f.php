<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a4948151173e05404bd06ef334b623d8a988606dbdeebcecabeac81f48c0f8a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_8e24fb5c98ffd8577fab1856ea4f4be290c061e4340febbfbbdfc6fbc1715094 = $this->env->getExtension("native_profiler");
        $__internal_8e24fb5c98ffd8577fab1856ea4f4be290c061e4340febbfbbdfc6fbc1715094->enter($__internal_8e24fb5c98ffd8577fab1856ea4f4be290c061e4340febbfbbdfc6fbc1715094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e24fb5c98ffd8577fab1856ea4f4be290c061e4340febbfbbdfc6fbc1715094->leave($__internal_8e24fb5c98ffd8577fab1856ea4f4be290c061e4340febbfbbdfc6fbc1715094_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e59e2b0bbfb258a53ea37b740cd17aed9dcbe543b783dda2944040ee784a98f = $this->env->getExtension("native_profiler");
        $__internal_5e59e2b0bbfb258a53ea37b740cd17aed9dcbe543b783dda2944040ee784a98f->enter($__internal_5e59e2b0bbfb258a53ea37b740cd17aed9dcbe543b783dda2944040ee784a98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5e59e2b0bbfb258a53ea37b740cd17aed9dcbe543b783dda2944040ee784a98f->leave($__internal_5e59e2b0bbfb258a53ea37b740cd17aed9dcbe543b783dda2944040ee784a98f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
