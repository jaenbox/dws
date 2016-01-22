<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2f2b54b05396ddc1e03d212618f278b95110384597676b814ec2a285cd16a185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5a579a0817722b0ded7148fe5d08be6d52552ac4bdf4bb5bcb96c40e604d3fc3 = $this->env->getExtension("native_profiler");
        $__internal_5a579a0817722b0ded7148fe5d08be6d52552ac4bdf4bb5bcb96c40e604d3fc3->enter($__internal_5a579a0817722b0ded7148fe5d08be6d52552ac4bdf4bb5bcb96c40e604d3fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a579a0817722b0ded7148fe5d08be6d52552ac4bdf4bb5bcb96c40e604d3fc3->leave($__internal_5a579a0817722b0ded7148fe5d08be6d52552ac4bdf4bb5bcb96c40e604d3fc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad74fbdfb01c9fe088c6ac46f99d06835d17b89f3feca1faa0a0e66c5c7278ae = $this->env->getExtension("native_profiler");
        $__internal_ad74fbdfb01c9fe088c6ac46f99d06835d17b89f3feca1faa0a0e66c5c7278ae->enter($__internal_ad74fbdfb01c9fe088c6ac46f99d06835d17b89f3feca1faa0a0e66c5c7278ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ad74fbdfb01c9fe088c6ac46f99d06835d17b89f3feca1faa0a0e66c5c7278ae->leave($__internal_ad74fbdfb01c9fe088c6ac46f99d06835d17b89f3feca1faa0a0e66c5c7278ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
