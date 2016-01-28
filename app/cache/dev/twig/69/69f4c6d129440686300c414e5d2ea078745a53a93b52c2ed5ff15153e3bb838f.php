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
        $__internal_98b60a5dbffb1a7df1fb9b38ef7a99112dec7022fb810c05876d80bf7a1ce997 = $this->env->getExtension("native_profiler");
        $__internal_98b60a5dbffb1a7df1fb9b38ef7a99112dec7022fb810c05876d80bf7a1ce997->enter($__internal_98b60a5dbffb1a7df1fb9b38ef7a99112dec7022fb810c05876d80bf7a1ce997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b60a5dbffb1a7df1fb9b38ef7a99112dec7022fb810c05876d80bf7a1ce997->leave($__internal_98b60a5dbffb1a7df1fb9b38ef7a99112dec7022fb810c05876d80bf7a1ce997_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c7745afa3c61c8cae9b9b645b799ecea527c5a57362f2f9d8dd20d069a978f5 = $this->env->getExtension("native_profiler");
        $__internal_7c7745afa3c61c8cae9b9b645b799ecea527c5a57362f2f9d8dd20d069a978f5->enter($__internal_7c7745afa3c61c8cae9b9b645b799ecea527c5a57362f2f9d8dd20d069a978f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_7c7745afa3c61c8cae9b9b645b799ecea527c5a57362f2f9d8dd20d069a978f5->leave($__internal_7c7745afa3c61c8cae9b9b645b799ecea527c5a57362f2f9d8dd20d069a978f5_prof);

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
