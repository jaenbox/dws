<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_360acd8fd3d4d4978bac93dd8bd83c9e60a55932a4de9012fbb05d12b351c4d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf341e682d289c4d469b1092dca212d292c1e31d91a787ce462ff59923adde9b = $this->env->getExtension("native_profiler");
        $__internal_bf341e682d289c4d469b1092dca212d292c1e31d91a787ce462ff59923adde9b->enter($__internal_bf341e682d289c4d469b1092dca212d292c1e31d91a787ce462ff59923adde9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bf341e682d289c4d469b1092dca212d292c1e31d91a787ce462ff59923adde9b->leave($__internal_bf341e682d289c4d469b1092dca212d292c1e31d91a787ce462ff59923adde9b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_265c16c31266e8d06eba5ff02f3aa514ce40a276d89e3322cc014ad7a02dabb8 = $this->env->getExtension("native_profiler");
        $__internal_265c16c31266e8d06eba5ff02f3aa514ce40a276d89e3322cc014ad7a02dabb8->enter($__internal_265c16c31266e8d06eba5ff02f3aa514ce40a276d89e3322cc014ad7a02dabb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_265c16c31266e8d06eba5ff02f3aa514ce40a276d89e3322cc014ad7a02dabb8->leave($__internal_265c16c31266e8d06eba5ff02f3aa514ce40a276d89e3322cc014ad7a02dabb8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_41eba4ec85303d04d61b2049dc9e759a07d12697885a0e05e3f2d308d07d7e3f = $this->env->getExtension("native_profiler");
        $__internal_41eba4ec85303d04d61b2049dc9e759a07d12697885a0e05e3f2d308d07d7e3f->enter($__internal_41eba4ec85303d04d61b2049dc9e759a07d12697885a0e05e3f2d308d07d7e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_41eba4ec85303d04d61b2049dc9e759a07d12697885a0e05e3f2d308d07d7e3f->leave($__internal_41eba4ec85303d04d61b2049dc9e759a07d12697885a0e05e3f2d308d07d7e3f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_507fee4ed4db3ee641612f624387237201edcb5bbafd827ef71024428633c6a5 = $this->env->getExtension("native_profiler");
        $__internal_507fee4ed4db3ee641612f624387237201edcb5bbafd827ef71024428633c6a5->enter($__internal_507fee4ed4db3ee641612f624387237201edcb5bbafd827ef71024428633c6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_507fee4ed4db3ee641612f624387237201edcb5bbafd827ef71024428633c6a5->leave($__internal_507fee4ed4db3ee641612f624387237201edcb5bbafd827ef71024428633c6a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
