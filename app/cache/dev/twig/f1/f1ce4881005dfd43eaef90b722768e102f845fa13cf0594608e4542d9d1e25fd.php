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
        $__internal_d7e6201e87ce4f99cf9f9d443e707a74b8db5d69a24deb9ce5cb46105075df4b = $this->env->getExtension("native_profiler");
        $__internal_d7e6201e87ce4f99cf9f9d443e707a74b8db5d69a24deb9ce5cb46105075df4b->enter($__internal_d7e6201e87ce4f99cf9f9d443e707a74b8db5d69a24deb9ce5cb46105075df4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e6201e87ce4f99cf9f9d443e707a74b8db5d69a24deb9ce5cb46105075df4b->leave($__internal_d7e6201e87ce4f99cf9f9d443e707a74b8db5d69a24deb9ce5cb46105075df4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a32f6a79abcfa4f1f1ccbc06e3c3a0b02a6184252118f1cb4ac44cbb6a5c2f1 = $this->env->getExtension("native_profiler");
        $__internal_5a32f6a79abcfa4f1f1ccbc06e3c3a0b02a6184252118f1cb4ac44cbb6a5c2f1->enter($__internal_5a32f6a79abcfa4f1f1ccbc06e3c3a0b02a6184252118f1cb4ac44cbb6a5c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5a32f6a79abcfa4f1f1ccbc06e3c3a0b02a6184252118f1cb4ac44cbb6a5c2f1->leave($__internal_5a32f6a79abcfa4f1f1ccbc06e3c3a0b02a6184252118f1cb4ac44cbb6a5c2f1_prof);

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
