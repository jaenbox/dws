<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_997189e601cd25bf669f5059c6e5df05409055d325c2caa129464c0d0e9acf99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9658d59f0e267ac98347670eddd8d1ff196de08a024233773a05b661b05e4a58 = $this->env->getExtension("native_profiler");
        $__internal_9658d59f0e267ac98347670eddd8d1ff196de08a024233773a05b661b05e4a58->enter($__internal_9658d59f0e267ac98347670eddd8d1ff196de08a024233773a05b661b05e4a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9658d59f0e267ac98347670eddd8d1ff196de08a024233773a05b661b05e4a58->leave($__internal_9658d59f0e267ac98347670eddd8d1ff196de08a024233773a05b661b05e4a58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1271c3732c8de23e5f9d66445025025377f6b6a79776174a7d4a2466f5f281a5 = $this->env->getExtension("native_profiler");
        $__internal_1271c3732c8de23e5f9d66445025025377f6b6a79776174a7d4a2466f5f281a5->enter($__internal_1271c3732c8de23e5f9d66445025025377f6b6a79776174a7d4a2466f5f281a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_1271c3732c8de23e5f9d66445025025377f6b6a79776174a7d4a2466f5f281a5->leave($__internal_1271c3732c8de23e5f9d66445025025377f6b6a79776174a7d4a2466f5f281a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0831ea2d708b6db8b274d0097db8d4ab80c561431d11d1d94e7c0b21c18db1f9 = $this->env->getExtension("native_profiler");
        $__internal_0831ea2d708b6db8b274d0097db8d4ab80c561431d11d1d94e7c0b21c18db1f9->enter($__internal_0831ea2d708b6db8b274d0097db8d4ab80c561431d11d1d94e7c0b21c18db1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0831ea2d708b6db8b274d0097db8d4ab80c561431d11d1d94e7c0b21c18db1f9->leave($__internal_0831ea2d708b6db8b274d0097db8d4ab80c561431d11d1d94e7c0b21c18db1f9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5411bc0c12ef6214089f521d04b60f8605264082912f0999d53c75b9ef38b166 = $this->env->getExtension("native_profiler");
        $__internal_5411bc0c12ef6214089f521d04b60f8605264082912f0999d53c75b9ef38b166->enter($__internal_5411bc0c12ef6214089f521d04b60f8605264082912f0999d53c75b9ef38b166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_5411bc0c12ef6214089f521d04b60f8605264082912f0999d53c75b9ef38b166->leave($__internal_5411bc0c12ef6214089f521d04b60f8605264082912f0999d53c75b9ef38b166_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb7f28932d65359973989631ff61d466414ba8ef85aeee1604c943e26c96c31b = $this->env->getExtension("native_profiler");
        $__internal_cb7f28932d65359973989631ff61d466414ba8ef85aeee1604c943e26c96c31b->enter($__internal_cb7f28932d65359973989631ff61d466414ba8ef85aeee1604c943e26c96c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cb7f28932d65359973989631ff61d466414ba8ef85aeee1604c943e26c96c31b->leave($__internal_cb7f28932d65359973989631ff61d466414ba8ef85aeee1604c943e26c96c31b_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
