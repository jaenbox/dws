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
        $__internal_9b33495fa3a2b7cc6e580357e209880ba01c7ce1c035be6f1c748823e3ab15fe = $this->env->getExtension("native_profiler");
        $__internal_9b33495fa3a2b7cc6e580357e209880ba01c7ce1c035be6f1c748823e3ab15fe->enter($__internal_9b33495fa3a2b7cc6e580357e209880ba01c7ce1c035be6f1c748823e3ab15fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b33495fa3a2b7cc6e580357e209880ba01c7ce1c035be6f1c748823e3ab15fe->leave($__internal_9b33495fa3a2b7cc6e580357e209880ba01c7ce1c035be6f1c748823e3ab15fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e1c4ac7b5b9b25bf4475095c9579a86f9eaf84a3f01f39abe23bb8e0fd1cf44 = $this->env->getExtension("native_profiler");
        $__internal_5e1c4ac7b5b9b25bf4475095c9579a86f9eaf84a3f01f39abe23bb8e0fd1cf44->enter($__internal_5e1c4ac7b5b9b25bf4475095c9579a86f9eaf84a3f01f39abe23bb8e0fd1cf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5e1c4ac7b5b9b25bf4475095c9579a86f9eaf84a3f01f39abe23bb8e0fd1cf44->leave($__internal_5e1c4ac7b5b9b25bf4475095c9579a86f9eaf84a3f01f39abe23bb8e0fd1cf44_prof);

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
