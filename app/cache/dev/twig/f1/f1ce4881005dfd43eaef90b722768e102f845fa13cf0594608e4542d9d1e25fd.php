<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_70d703d0fecaf7c4644ed137d017a61031b62085928a5a027b29f89cfb77a609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cdc7ab52566bde8f80fbdfc420880e808979f33d9a863296b0a09737f99d244a = $this->env->getExtension("native_profiler");
        $__internal_cdc7ab52566bde8f80fbdfc420880e808979f33d9a863296b0a09737f99d244a->enter($__internal_cdc7ab52566bde8f80fbdfc420880e808979f33d9a863296b0a09737f99d244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc7ab52566bde8f80fbdfc420880e808979f33d9a863296b0a09737f99d244a->leave($__internal_cdc7ab52566bde8f80fbdfc420880e808979f33d9a863296b0a09737f99d244a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e7c147714dabcc451095edb90077899ef3176f0f993fb2f4ef270fe1e42712d = $this->env->getExtension("native_profiler");
        $__internal_3e7c147714dabcc451095edb90077899ef3176f0f993fb2f4ef270fe1e42712d->enter($__internal_3e7c147714dabcc451095edb90077899ef3176f0f993fb2f4ef270fe1e42712d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3e7c147714dabcc451095edb90077899ef3176f0f993fb2f4ef270fe1e42712d->leave($__internal_3e7c147714dabcc451095edb90077899ef3176f0f993fb2f4ef270fe1e42712d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
