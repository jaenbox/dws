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
        $__internal_88236cadbe10a7eb85513ea38c7f504b5de50403974b68517f86bd1e116dd869 = $this->env->getExtension("native_profiler");
        $__internal_88236cadbe10a7eb85513ea38c7f504b5de50403974b68517f86bd1e116dd869->enter($__internal_88236cadbe10a7eb85513ea38c7f504b5de50403974b68517f86bd1e116dd869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88236cadbe10a7eb85513ea38c7f504b5de50403974b68517f86bd1e116dd869->leave($__internal_88236cadbe10a7eb85513ea38c7f504b5de50403974b68517f86bd1e116dd869_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42d0dfda0c89bdd075d080b3d42c4cc2c20a5c66cf2939642452e7a2a5db4236 = $this->env->getExtension("native_profiler");
        $__internal_42d0dfda0c89bdd075d080b3d42c4cc2c20a5c66cf2939642452e7a2a5db4236->enter($__internal_42d0dfda0c89bdd075d080b3d42c4cc2c20a5c66cf2939642452e7a2a5db4236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_42d0dfda0c89bdd075d080b3d42c4cc2c20a5c66cf2939642452e7a2a5db4236->leave($__internal_42d0dfda0c89bdd075d080b3d42c4cc2c20a5c66cf2939642452e7a2a5db4236_prof);

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
