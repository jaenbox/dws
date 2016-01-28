<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_1b974c08a5ae9288afbb5ce67c1792a4519221899efde0222d0783ce307ae6ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f3609d4dd61eb85a8fa9c68161fdbdbf385aef5a37fcf723df4ca81e20aba56 = $this->env->getExtension("native_profiler");
        $__internal_9f3609d4dd61eb85a8fa9c68161fdbdbf385aef5a37fcf723df4ca81e20aba56->enter($__internal_9f3609d4dd61eb85a8fa9c68161fdbdbf385aef5a37fcf723df4ca81e20aba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_9f3609d4dd61eb85a8fa9c68161fdbdbf385aef5a37fcf723df4ca81e20aba56->leave($__internal_9f3609d4dd61eb85a8fa9c68161fdbdbf385aef5a37fcf723df4ca81e20aba56_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_979bcb62905f04e80f10520917c47c023c153870d5c0673c1a69a59e3423fed9 = $this->env->getExtension("native_profiler");
        $__internal_979bcb62905f04e80f10520917c47c023c153870d5c0673c1a69a59e3423fed9->enter($__internal_979bcb62905f04e80f10520917c47c023c153870d5c0673c1a69a59e3423fed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_979bcb62905f04e80f10520917c47c023c153870d5c0673c1a69a59e3423fed9->leave($__internal_979bcb62905f04e80f10520917c47c023c153870d5c0673c1a69a59e3423fed9_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ab52f97eb5cddc234f8813b09bc973690852f5aac55cee6f7d5b76016ff94318 = $this->env->getExtension("native_profiler");
        $__internal_ab52f97eb5cddc234f8813b09bc973690852f5aac55cee6f7d5b76016ff94318->enter($__internal_ab52f97eb5cddc234f8813b09bc973690852f5aac55cee6f7d5b76016ff94318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ab52f97eb5cddc234f8813b09bc973690852f5aac55cee6f7d5b76016ff94318->leave($__internal_ab52f97eb5cddc234f8813b09bc973690852f5aac55cee6f7d5b76016ff94318_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ddf8a66c329d54f5d9494f87f3cb11520dd566f7c97eec569fcdbbeb42866b83 = $this->env->getExtension("native_profiler");
        $__internal_ddf8a66c329d54f5d9494f87f3cb11520dd566f7c97eec569fcdbbeb42866b83->enter($__internal_ddf8a66c329d54f5d9494f87f3cb11520dd566f7c97eec569fcdbbeb42866b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_ddf8a66c329d54f5d9494f87f3cb11520dd566f7c97eec569fcdbbeb42866b83->leave($__internal_ddf8a66c329d54f5d9494f87f3cb11520dd566f7c97eec569fcdbbeb42866b83_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_daccdde6cff5657ae1322eeffb3120340dc9b06e5de04c6d2c8b45183636f1ab = $this->env->getExtension("native_profiler");
        $__internal_daccdde6cff5657ae1322eeffb3120340dc9b06e5de04c6d2c8b45183636f1ab->enter($__internal_daccdde6cff5657ae1322eeffb3120340dc9b06e5de04c6d2c8b45183636f1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_daccdde6cff5657ae1322eeffb3120340dc9b06e5de04c6d2c8b45183636f1ab->leave($__internal_daccdde6cff5657ae1322eeffb3120340dc9b06e5de04c6d2c8b45183636f1ab_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_de1d459c3b283501fda05de01717fd442233ee322ca353d8e3ed8266929701ea = $this->env->getExtension("native_profiler");
        $__internal_de1d459c3b283501fda05de01717fd442233ee322ca353d8e3ed8266929701ea->enter($__internal_de1d459c3b283501fda05de01717fd442233ee322ca353d8e3ed8266929701ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_de1d459c3b283501fda05de01717fd442233ee322ca353d8e3ed8266929701ea->leave($__internal_de1d459c3b283501fda05de01717fd442233ee322ca353d8e3ed8266929701ea_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d3faaab0bf3b8a75a7b81a6260f5a7dc8ee5b71182da57657fa50e1163ad1b25 = $this->env->getExtension("native_profiler");
        $__internal_d3faaab0bf3b8a75a7b81a6260f5a7dc8ee5b71182da57657fa50e1163ad1b25->enter($__internal_d3faaab0bf3b8a75a7b81a6260f5a7dc8ee5b71182da57657fa50e1163ad1b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d3faaab0bf3b8a75a7b81a6260f5a7dc8ee5b71182da57657fa50e1163ad1b25->leave($__internal_d3faaab0bf3b8a75a7b81a6260f5a7dc8ee5b71182da57657fa50e1163ad1b25_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_1f27f0c83025685b22e55116299fc2ef53f7c66799623f353832a598bc0d08d4 = $this->env->getExtension("native_profiler");
        $__internal_1f27f0c83025685b22e55116299fc2ef53f7c66799623f353832a598bc0d08d4->enter($__internal_1f27f0c83025685b22e55116299fc2ef53f7c66799623f353832a598bc0d08d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1f27f0c83025685b22e55116299fc2ef53f7c66799623f353832a598bc0d08d4->leave($__internal_1f27f0c83025685b22e55116299fc2ef53f7c66799623f353832a598bc0d08d4_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9e9cd63d313ab5517a775e353f04fbe2119b4462870170813854bd043b178c2c = $this->env->getExtension("native_profiler");
        $__internal_9e9cd63d313ab5517a775e353f04fbe2119b4462870170813854bd043b178c2c->enter($__internal_9e9cd63d313ab5517a775e353f04fbe2119b4462870170813854bd043b178c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9e9cd63d313ab5517a775e353f04fbe2119b4462870170813854bd043b178c2c->leave($__internal_9e9cd63d313ab5517a775e353f04fbe2119b4462870170813854bd043b178c2c_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_37dce81bc031f72e79d59864c7971d8cd012145da8f7cf5ce03c5b1eab411a8b = $this->env->getExtension("native_profiler");
        $__internal_37dce81bc031f72e79d59864c7971d8cd012145da8f7cf5ce03c5b1eab411a8b->enter($__internal_37dce81bc031f72e79d59864c7971d8cd012145da8f7cf5ce03c5b1eab411a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_37dce81bc031f72e79d59864c7971d8cd012145da8f7cf5ce03c5b1eab411a8b->leave($__internal_37dce81bc031f72e79d59864c7971d8cd012145da8f7cf5ce03c5b1eab411a8b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 69,  284 => 68,  272 => 62,  268 => 61,  264 => 60,  261 => 59,  259 => 58,  253 => 57,  241 => 51,  237 => 50,  233 => 49,  229 => 48,  222 => 47,  220 => 46,  214 => 45,  207 => 42,  201 => 41,  194 => 38,  188 => 37,  181 => 34,  178 => 33,  176 => 32,  174 => 31,  170 => 30,  168 => 29,  162 => 28,  156 => 27,  149 => 22,  143 => 21,  134 => 16,  131 => 15,  125 => 13,  122 => 12,  120 => 11,  114 => 10,  107 => 5,  105 => 4,  99 => 3,  92 => 68,  89 => 67,  87 => 57,  84 => 56,  82 => 45,  79 => 44,  77 => 41,  74 => 40,  72 => 37,  69 => 36,  67 => 27,  64 => 26,  61 => 24,  59 => 21,  56 => 20,  54 => 10,  51 => 9,  48 => 7,  46 => 3,  43 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
