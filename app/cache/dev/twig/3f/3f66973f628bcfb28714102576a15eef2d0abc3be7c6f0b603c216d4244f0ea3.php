<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2984143e130ce887c129ece9be5abd1f50626e8c0712cb0e7a74b4e39dc9809c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_723f0e2d7d5c2c62898fec119e13a01dd5e858c230090c7729623192b779b51d = $this->env->getExtension("native_profiler");
        $__internal_723f0e2d7d5c2c62898fec119e13a01dd5e858c230090c7729623192b779b51d->enter($__internal_723f0e2d7d5c2c62898fec119e13a01dd5e858c230090c7729623192b779b51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723f0e2d7d5c2c62898fec119e13a01dd5e858c230090c7729623192b779b51d->leave($__internal_723f0e2d7d5c2c62898fec119e13a01dd5e858c230090c7729623192b779b51d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a40d0681dfe93b2ac58e08524b1a6cde12684f6f3515e4d5cc8fc074af792c1 = $this->env->getExtension("native_profiler");
        $__internal_0a40d0681dfe93b2ac58e08524b1a6cde12684f6f3515e4d5cc8fc074af792c1->enter($__internal_0a40d0681dfe93b2ac58e08524b1a6cde12684f6f3515e4d5cc8fc074af792c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a40d0681dfe93b2ac58e08524b1a6cde12684f6f3515e4d5cc8fc074af792c1->leave($__internal_0a40d0681dfe93b2ac58e08524b1a6cde12684f6f3515e4d5cc8fc074af792c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa5d0d3a0140cecf77d0887719bfe489fd50339a3bcc2a17c62ec05d43a833dc = $this->env->getExtension("native_profiler");
        $__internal_fa5d0d3a0140cecf77d0887719bfe489fd50339a3bcc2a17c62ec05d43a833dc->enter($__internal_fa5d0d3a0140cecf77d0887719bfe489fd50339a3bcc2a17c62ec05d43a833dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa5d0d3a0140cecf77d0887719bfe489fd50339a3bcc2a17c62ec05d43a833dc->leave($__internal_fa5d0d3a0140cecf77d0887719bfe489fd50339a3bcc2a17c62ec05d43a833dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_036de424c30dce6e2c662d4816e4745cf74316a9402e01b958319db0817b196f = $this->env->getExtension("native_profiler");
        $__internal_036de424c30dce6e2c662d4816e4745cf74316a9402e01b958319db0817b196f->enter($__internal_036de424c30dce6e2c662d4816e4745cf74316a9402e01b958319db0817b196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_036de424c30dce6e2c662d4816e4745cf74316a9402e01b958319db0817b196f->leave($__internal_036de424c30dce6e2c662d4816e4745cf74316a9402e01b958319db0817b196f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
