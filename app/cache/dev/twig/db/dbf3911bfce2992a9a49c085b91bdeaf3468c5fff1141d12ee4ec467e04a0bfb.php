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
        $__internal_fb0dc2ed51b6e10c8643f111f18fdde8d0e54af470da3a35406a46535767921b = $this->env->getExtension("native_profiler");
        $__internal_fb0dc2ed51b6e10c8643f111f18fdde8d0e54af470da3a35406a46535767921b->enter($__internal_fb0dc2ed51b6e10c8643f111f18fdde8d0e54af470da3a35406a46535767921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0dc2ed51b6e10c8643f111f18fdde8d0e54af470da3a35406a46535767921b->leave($__internal_fb0dc2ed51b6e10c8643f111f18fdde8d0e54af470da3a35406a46535767921b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8096534d7b8cec7d630af998949e4990d382c7427e28c8382f52fb00e953b10e = $this->env->getExtension("native_profiler");
        $__internal_8096534d7b8cec7d630af998949e4990d382c7427e28c8382f52fb00e953b10e->enter($__internal_8096534d7b8cec7d630af998949e4990d382c7427e28c8382f52fb00e953b10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8096534d7b8cec7d630af998949e4990d382c7427e28c8382f52fb00e953b10e->leave($__internal_8096534d7b8cec7d630af998949e4990d382c7427e28c8382f52fb00e953b10e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_656aaf32dc854a86d844672a2f62db77c1cb851a87ac3a28fac37ec3017c2d2f = $this->env->getExtension("native_profiler");
        $__internal_656aaf32dc854a86d844672a2f62db77c1cb851a87ac3a28fac37ec3017c2d2f->enter($__internal_656aaf32dc854a86d844672a2f62db77c1cb851a87ac3a28fac37ec3017c2d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_656aaf32dc854a86d844672a2f62db77c1cb851a87ac3a28fac37ec3017c2d2f->leave($__internal_656aaf32dc854a86d844672a2f62db77c1cb851a87ac3a28fac37ec3017c2d2f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_554c9e4c58b649a601939db36faf5dafa4f551cacff2cf1f202e36d41e035bf2 = $this->env->getExtension("native_profiler");
        $__internal_554c9e4c58b649a601939db36faf5dafa4f551cacff2cf1f202e36d41e035bf2->enter($__internal_554c9e4c58b649a601939db36faf5dafa4f551cacff2cf1f202e36d41e035bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_554c9e4c58b649a601939db36faf5dafa4f551cacff2cf1f202e36d41e035bf2->leave($__internal_554c9e4c58b649a601939db36faf5dafa4f551cacff2cf1f202e36d41e035bf2_prof);

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
