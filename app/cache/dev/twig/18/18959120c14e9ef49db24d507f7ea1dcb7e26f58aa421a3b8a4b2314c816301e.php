<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7c35a1fa3ff3e910c401f6e4380d70f91c571c2b4ae6a2c5fc1eef2b0013fbae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_115c146c0f0b1a9d0402a265c5637dc28da78fd16369e34433897b267ae083c5 = $this->env->getExtension("native_profiler");
        $__internal_115c146c0f0b1a9d0402a265c5637dc28da78fd16369e34433897b267ae083c5->enter($__internal_115c146c0f0b1a9d0402a265c5637dc28da78fd16369e34433897b267ae083c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115c146c0f0b1a9d0402a265c5637dc28da78fd16369e34433897b267ae083c5->leave($__internal_115c146c0f0b1a9d0402a265c5637dc28da78fd16369e34433897b267ae083c5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f0ab287150ad713f9f44dda5818a0c6b1d10e0d42f11e575074f0ede2172f60 = $this->env->getExtension("native_profiler");
        $__internal_2f0ab287150ad713f9f44dda5818a0c6b1d10e0d42f11e575074f0ede2172f60->enter($__internal_2f0ab287150ad713f9f44dda5818a0c6b1d10e0d42f11e575074f0ede2172f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2f0ab287150ad713f9f44dda5818a0c6b1d10e0d42f11e575074f0ede2172f60->leave($__internal_2f0ab287150ad713f9f44dda5818a0c6b1d10e0d42f11e575074f0ede2172f60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
