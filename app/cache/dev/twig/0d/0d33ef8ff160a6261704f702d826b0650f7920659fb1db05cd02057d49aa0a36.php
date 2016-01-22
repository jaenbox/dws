<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_93e74bc4917782fa54a5f3dbaeb916adff4a370e85fff0a47d169b8aa6222aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2eb7834083e060e5c1ebabe7281e4bf4157794ab39d444cdcdf028c135c75cc0 = $this->env->getExtension("native_profiler");
        $__internal_2eb7834083e060e5c1ebabe7281e4bf4157794ab39d444cdcdf028c135c75cc0->enter($__internal_2eb7834083e060e5c1ebabe7281e4bf4157794ab39d444cdcdf028c135c75cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb7834083e060e5c1ebabe7281e4bf4157794ab39d444cdcdf028c135c75cc0->leave($__internal_2eb7834083e060e5c1ebabe7281e4bf4157794ab39d444cdcdf028c135c75cc0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50cdcae027f34dcd158d44307b882ede51385f542d3bca9fd881e273b716009b = $this->env->getExtension("native_profiler");
        $__internal_50cdcae027f34dcd158d44307b882ede51385f542d3bca9fd881e273b716009b->enter($__internal_50cdcae027f34dcd158d44307b882ede51385f542d3bca9fd881e273b716009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_50cdcae027f34dcd158d44307b882ede51385f542d3bca9fd881e273b716009b->leave($__internal_50cdcae027f34dcd158d44307b882ede51385f542d3bca9fd881e273b716009b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
