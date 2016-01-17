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
        $__internal_fd1547f301e8895156c5433e413b53e50a48f2bc42bcefab0ae229f1662ac4ac = $this->env->getExtension("native_profiler");
        $__internal_fd1547f301e8895156c5433e413b53e50a48f2bc42bcefab0ae229f1662ac4ac->enter($__internal_fd1547f301e8895156c5433e413b53e50a48f2bc42bcefab0ae229f1662ac4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd1547f301e8895156c5433e413b53e50a48f2bc42bcefab0ae229f1662ac4ac->leave($__internal_fd1547f301e8895156c5433e413b53e50a48f2bc42bcefab0ae229f1662ac4ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71c3faedbcb122b0d17e4d788254be5b48b6e4dc4e89d02b29644341e24f0278 = $this->env->getExtension("native_profiler");
        $__internal_71c3faedbcb122b0d17e4d788254be5b48b6e4dc4e89d02b29644341e24f0278->enter($__internal_71c3faedbcb122b0d17e4d788254be5b48b6e4dc4e89d02b29644341e24f0278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71c3faedbcb122b0d17e4d788254be5b48b6e4dc4e89d02b29644341e24f0278->leave($__internal_71c3faedbcb122b0d17e4d788254be5b48b6e4dc4e89d02b29644341e24f0278_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaa901cc53ddd34a3caefa5b8e86e3b8e63b0334f4e64d32d8eead279e1b5ed5 = $this->env->getExtension("native_profiler");
        $__internal_aaa901cc53ddd34a3caefa5b8e86e3b8e63b0334f4e64d32d8eead279e1b5ed5->enter($__internal_aaa901cc53ddd34a3caefa5b8e86e3b8e63b0334f4e64d32d8eead279e1b5ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aaa901cc53ddd34a3caefa5b8e86e3b8e63b0334f4e64d32d8eead279e1b5ed5->leave($__internal_aaa901cc53ddd34a3caefa5b8e86e3b8e63b0334f4e64d32d8eead279e1b5ed5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef89215a6cd1ec278b0be33af6ba060b11791c0b27378cf345fcfc5836670e7c = $this->env->getExtension("native_profiler");
        $__internal_ef89215a6cd1ec278b0be33af6ba060b11791c0b27378cf345fcfc5836670e7c->enter($__internal_ef89215a6cd1ec278b0be33af6ba060b11791c0b27378cf345fcfc5836670e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ef89215a6cd1ec278b0be33af6ba060b11791c0b27378cf345fcfc5836670e7c->leave($__internal_ef89215a6cd1ec278b0be33af6ba060b11791c0b27378cf345fcfc5836670e7c_prof);

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
