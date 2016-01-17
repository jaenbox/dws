<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_280df52c7be0ae5292e1051913c2143142d555f5248af52c7e5152e74a4e52b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed74b848f280b73f19e0d278457bddcf10fb2f389de55da158ea9ed121d03b25 = $this->env->getExtension("native_profiler");
        $__internal_ed74b848f280b73f19e0d278457bddcf10fb2f389de55da158ea9ed121d03b25->enter($__internal_ed74b848f280b73f19e0d278457bddcf10fb2f389de55da158ea9ed121d03b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed74b848f280b73f19e0d278457bddcf10fb2f389de55da158ea9ed121d03b25->leave($__internal_ed74b848f280b73f19e0d278457bddcf10fb2f389de55da158ea9ed121d03b25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c5121521c88380f53f6c6d6d04f739b677696e52f82a206958a38bc999ad3d9 = $this->env->getExtension("native_profiler");
        $__internal_6c5121521c88380f53f6c6d6d04f739b677696e52f82a206958a38bc999ad3d9->enter($__internal_6c5121521c88380f53f6c6d6d04f739b677696e52f82a206958a38bc999ad3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c5121521c88380f53f6c6d6d04f739b677696e52f82a206958a38bc999ad3d9->leave($__internal_6c5121521c88380f53f6c6d6d04f739b677696e52f82a206958a38bc999ad3d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a621f9d4c12bafd6b79d40fb9ae9d20ac0390fee8f4ed4cff9c672bc9fecec4d = $this->env->getExtension("native_profiler");
        $__internal_a621f9d4c12bafd6b79d40fb9ae9d20ac0390fee8f4ed4cff9c672bc9fecec4d->enter($__internal_a621f9d4c12bafd6b79d40fb9ae9d20ac0390fee8f4ed4cff9c672bc9fecec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a621f9d4c12bafd6b79d40fb9ae9d20ac0390fee8f4ed4cff9c672bc9fecec4d->leave($__internal_a621f9d4c12bafd6b79d40fb9ae9d20ac0390fee8f4ed4cff9c672bc9fecec4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df4a900cc9aa1e00e1ae460423861928e03ee1dfbc99105f95bd63b0f8c2593e = $this->env->getExtension("native_profiler");
        $__internal_df4a900cc9aa1e00e1ae460423861928e03ee1dfbc99105f95bd63b0f8c2593e->enter($__internal_df4a900cc9aa1e00e1ae460423861928e03ee1dfbc99105f95bd63b0f8c2593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df4a900cc9aa1e00e1ae460423861928e03ee1dfbc99105f95bd63b0f8c2593e->leave($__internal_df4a900cc9aa1e00e1ae460423861928e03ee1dfbc99105f95bd63b0f8c2593e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
