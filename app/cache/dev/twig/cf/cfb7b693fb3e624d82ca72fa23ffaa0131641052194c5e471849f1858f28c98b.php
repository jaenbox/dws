<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b6a575b92500511004e898da4477871fd9be93fe8090ebbf51583c6deff98808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8a6ebd396c09ecd4a6cb34d4e7d8172d9175804267ded5978387b2f484f1daee = $this->env->getExtension("native_profiler");
        $__internal_8a6ebd396c09ecd4a6cb34d4e7d8172d9175804267ded5978387b2f484f1daee->enter($__internal_8a6ebd396c09ecd4a6cb34d4e7d8172d9175804267ded5978387b2f484f1daee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a6ebd396c09ecd4a6cb34d4e7d8172d9175804267ded5978387b2f484f1daee->leave($__internal_8a6ebd396c09ecd4a6cb34d4e7d8172d9175804267ded5978387b2f484f1daee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6da7854285adac8158a382ebfb7555ff6edf0f54de84bcfe58b36814182a3246 = $this->env->getExtension("native_profiler");
        $__internal_6da7854285adac8158a382ebfb7555ff6edf0f54de84bcfe58b36814182a3246->enter($__internal_6da7854285adac8158a382ebfb7555ff6edf0f54de84bcfe58b36814182a3246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6da7854285adac8158a382ebfb7555ff6edf0f54de84bcfe58b36814182a3246->leave($__internal_6da7854285adac8158a382ebfb7555ff6edf0f54de84bcfe58b36814182a3246_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
