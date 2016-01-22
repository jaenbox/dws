<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8bb7787908e444b583be56a69fdfd59cc1b91326bcb210824137d8c5a844f8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_acdc5d1316d978c111a34880f437f5a39c25ada619dbb6fd74a74dcc4ec9be41 = $this->env->getExtension("native_profiler");
        $__internal_acdc5d1316d978c111a34880f437f5a39c25ada619dbb6fd74a74dcc4ec9be41->enter($__internal_acdc5d1316d978c111a34880f437f5a39c25ada619dbb6fd74a74dcc4ec9be41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acdc5d1316d978c111a34880f437f5a39c25ada619dbb6fd74a74dcc4ec9be41->leave($__internal_acdc5d1316d978c111a34880f437f5a39c25ada619dbb6fd74a74dcc4ec9be41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6243861a92f1e766104d1600ac03fe34ea32a418c36af086f91f66580e58f1b1 = $this->env->getExtension("native_profiler");
        $__internal_6243861a92f1e766104d1600ac03fe34ea32a418c36af086f91f66580e58f1b1->enter($__internal_6243861a92f1e766104d1600ac03fe34ea32a418c36af086f91f66580e58f1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6243861a92f1e766104d1600ac03fe34ea32a418c36af086f91f66580e58f1b1->leave($__internal_6243861a92f1e766104d1600ac03fe34ea32a418c36af086f91f66580e58f1b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
