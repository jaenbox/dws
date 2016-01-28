<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e0ac38bca36af58efd35ba093695e3ed1bc5c38a514eda89d2596cbbfdd1783b extends Twig_Template
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
        $__internal_334981f17cb51d366f2362e35ba4ee5937bca7507b93060994d20424fbbb124a = $this->env->getExtension("native_profiler");
        $__internal_334981f17cb51d366f2362e35ba4ee5937bca7507b93060994d20424fbbb124a->enter($__internal_334981f17cb51d366f2362e35ba4ee5937bca7507b93060994d20424fbbb124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div id=\"content\">
 \t<div class=\"row\">
\t\t<div class=\"col-sm-5\">
\t\t\t<div class=\"fos_user_user_show\">
\t\t\t    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_334981f17cb51d366f2362e35ba4ee5937bca7507b93060994d20424fbbb124a->leave($__internal_334981f17cb51d366f2362e35ba4ee5937bca7507b93060994d20424fbbb124a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  29 => 7,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div id="content">*/
/*  	<div class="row">*/
/* 		<div class="col-sm-5">*/
/* 			<div class="fos_user_user_show">*/
/* 			    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/* 			    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
