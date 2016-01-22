<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_7f3819be81be99fd99e4ce14395b452b9639ae4b76b20b9ce90da269cd091fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_0f5d9f519a0d4269a6db66d6befa02702dd61b994c5849083c1368693a754300 = $this->env->getExtension("native_profiler");
        $__internal_0f5d9f519a0d4269a6db66d6befa02702dd61b994c5849083c1368693a754300->enter($__internal_0f5d9f519a0d4269a6db66d6befa02702dd61b994c5849083c1368693a754300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f5d9f519a0d4269a6db66d6befa02702dd61b994c5849083c1368693a754300->leave($__internal_0f5d9f519a0d4269a6db66d6befa02702dd61b994c5849083c1368693a754300_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d67116af6ae08295e5cc0cc82c87dcc4590753be3baac83c6b5dd6dfa38bd12 = $this->env->getExtension("native_profiler");
        $__internal_8d67116af6ae08295e5cc0cc82c87dcc4590753be3baac83c6b5dd6dfa38bd12->enter($__internal_8d67116af6ae08295e5cc0cc82c87dcc4590753be3baac83c6b5dd6dfa38bd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8d67116af6ae08295e5cc0cc82c87dcc4590753be3baac83c6b5dd6dfa38bd12->leave($__internal_8d67116af6ae08295e5cc0cc82c87dcc4590753be3baac83c6b5dd6dfa38bd12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
