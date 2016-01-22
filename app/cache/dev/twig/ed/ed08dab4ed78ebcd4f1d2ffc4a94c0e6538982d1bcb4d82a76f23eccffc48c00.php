<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_26d0133b0d4b7b8af7a1d5630dbe7380b398a03d14160a460fc1d41e4a43407a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e07eb48eef6f8d478abea343e38d99e8839156f6fc72b9ac9d95fca3be1f7d5f = $this->env->getExtension("native_profiler");
        $__internal_e07eb48eef6f8d478abea343e38d99e8839156f6fc72b9ac9d95fca3be1f7d5f->enter($__internal_e07eb48eef6f8d478abea343e38d99e8839156f6fc72b9ac9d95fca3be1f7d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e07eb48eef6f8d478abea343e38d99e8839156f6fc72b9ac9d95fca3be1f7d5f->leave($__internal_e07eb48eef6f8d478abea343e38d99e8839156f6fc72b9ac9d95fca3be1f7d5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
