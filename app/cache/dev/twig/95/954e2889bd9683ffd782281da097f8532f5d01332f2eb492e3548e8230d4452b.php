<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ee4c3ecd38654e2111abb4457732560ecee646b122ec4c97cb74d55eda902afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_cbf6257b20526c783f532e655998f907bed91e404b85786986073f8c45222b9a = $this->env->getExtension("native_profiler");
        $__internal_cbf6257b20526c783f532e655998f907bed91e404b85786986073f8c45222b9a->enter($__internal_cbf6257b20526c783f532e655998f907bed91e404b85786986073f8c45222b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf6257b20526c783f532e655998f907bed91e404b85786986073f8c45222b9a->leave($__internal_cbf6257b20526c783f532e655998f907bed91e404b85786986073f8c45222b9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4cf89fddb4578294f6a34c76e40352073bf78fb6e8adb23de98e6ae163eb792 = $this->env->getExtension("native_profiler");
        $__internal_d4cf89fddb4578294f6a34c76e40352073bf78fb6e8adb23de98e6ae163eb792->enter($__internal_d4cf89fddb4578294f6a34c76e40352073bf78fb6e8adb23de98e6ae163eb792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d4cf89fddb4578294f6a34c76e40352073bf78fb6e8adb23de98e6ae163eb792->leave($__internal_d4cf89fddb4578294f6a34c76e40352073bf78fb6e8adb23de98e6ae163eb792_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
