<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a6f07aacd654bf486aafb7c23e022e8597f3b7f4f0507928cf579a8a74030eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b491b6e4d6db5a1663b2ce03889a3902daa2c0da7cce28a7d1c777855571fa5b = $this->env->getExtension("native_profiler");
        $__internal_b491b6e4d6db5a1663b2ce03889a3902daa2c0da7cce28a7d1c777855571fa5b->enter($__internal_b491b6e4d6db5a1663b2ce03889a3902daa2c0da7cce28a7d1c777855571fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b491b6e4d6db5a1663b2ce03889a3902daa2c0da7cce28a7d1c777855571fa5b->leave($__internal_b491b6e4d6db5a1663b2ce03889a3902daa2c0da7cce28a7d1c777855571fa5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51b9a06f72bd7165b51e681659d1486cddc03b89c6614b56cbf151b822569615 = $this->env->getExtension("native_profiler");
        $__internal_51b9a06f72bd7165b51e681659d1486cddc03b89c6614b56cbf151b822569615->enter($__internal_51b9a06f72bd7165b51e681659d1486cddc03b89c6614b56cbf151b822569615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_51b9a06f72bd7165b51e681659d1486cddc03b89c6614b56cbf151b822569615->leave($__internal_51b9a06f72bd7165b51e681659d1486cddc03b89c6614b56cbf151b822569615_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
