<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_42e96d58b9f3215be6aeec9aa99a211035b3ca84db40bd8630c725a54e28ef76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6054d348a1f625a57a5c69bb45b604fe1d64ef86ef53b5a5f878590a7cbf84 = $this->env->getExtension("native_profiler");
        $__internal_2b6054d348a1f625a57a5c69bb45b604fe1d64ef86ef53b5a5f878590a7cbf84->enter($__internal_2b6054d348a1f625a57a5c69bb45b604fe1d64ef86ef53b5a5f878590a7cbf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6054d348a1f625a57a5c69bb45b604fe1d64ef86ef53b5a5f878590a7cbf84->leave($__internal_2b6054d348a1f625a57a5c69bb45b604fe1d64ef86ef53b5a5f878590a7cbf84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75ed54dcf77a2a2e8d3922245d749a1f261a32b948ec59461b40e8fd77ae6ee3 = $this->env->getExtension("native_profiler");
        $__internal_75ed54dcf77a2a2e8d3922245d749a1f261a32b948ec59461b40e8fd77ae6ee3->enter($__internal_75ed54dcf77a2a2e8d3922245d749a1f261a32b948ec59461b40e8fd77ae6ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_75ed54dcf77a2a2e8d3922245d749a1f261a32b948ec59461b40e8fd77ae6ee3->leave($__internal_75ed54dcf77a2a2e8d3922245d749a1f261a32b948ec59461b40e8fd77ae6ee3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc854dcd58ba85c101e343e324cb792add167060e5c45db9ee7ff471f2780765 = $this->env->getExtension("native_profiler");
        $__internal_cc854dcd58ba85c101e343e324cb792add167060e5c45db9ee7ff471f2780765->enter($__internal_cc854dcd58ba85c101e343e324cb792add167060e5c45db9ee7ff471f2780765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cc854dcd58ba85c101e343e324cb792add167060e5c45db9ee7ff471f2780765->leave($__internal_cc854dcd58ba85c101e343e324cb792add167060e5c45db9ee7ff471f2780765_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
