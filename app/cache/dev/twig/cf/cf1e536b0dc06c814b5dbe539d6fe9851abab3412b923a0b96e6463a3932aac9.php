<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e3603b8b365018a7d3c45132919e787932f518d15148acfae1331ee7ea918c14 extends Twig_Template
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
        $__internal_88c20fce5168e39c754922c0c0c19eca873d603e499e8c0212f36d7d3c100d04 = $this->env->getExtension("native_profiler");
        $__internal_88c20fce5168e39c754922c0c0c19eca873d603e499e8c0212f36d7d3c100d04->enter($__internal_88c20fce5168e39c754922c0c0c19eca873d603e499e8c0212f36d7d3c100d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_88c20fce5168e39c754922c0c0c19eca873d603e499e8c0212f36d7d3c100d04->leave($__internal_88c20fce5168e39c754922c0c0c19eca873d603e499e8c0212f36d7d3c100d04_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7fe85f7428d802da01272195aeae6627190ef418671509f0dae11e7b27e9c682 = $this->env->getExtension("native_profiler");
        $__internal_7fe85f7428d802da01272195aeae6627190ef418671509f0dae11e7b27e9c682->enter($__internal_7fe85f7428d802da01272195aeae6627190ef418671509f0dae11e7b27e9c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7fe85f7428d802da01272195aeae6627190ef418671509f0dae11e7b27e9c682->leave($__internal_7fe85f7428d802da01272195aeae6627190ef418671509f0dae11e7b27e9c682_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e4f3a50951c86ab58c71dfca2bf675d13cba56d34af4cbe498fb1c17ab47d6d8 = $this->env->getExtension("native_profiler");
        $__internal_e4f3a50951c86ab58c71dfca2bf675d13cba56d34af4cbe498fb1c17ab47d6d8->enter($__internal_e4f3a50951c86ab58c71dfca2bf675d13cba56d34af4cbe498fb1c17ab47d6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e4f3a50951c86ab58c71dfca2bf675d13cba56d34af4cbe498fb1c17ab47d6d8->leave($__internal_e4f3a50951c86ab58c71dfca2bf675d13cba56d34af4cbe498fb1c17ab47d6d8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f9e49e8ce64890bcc6d850575bd38b7a698dd84e6e7cacb11250a3e21d1224a4 = $this->env->getExtension("native_profiler");
        $__internal_f9e49e8ce64890bcc6d850575bd38b7a698dd84e6e7cacb11250a3e21d1224a4->enter($__internal_f9e49e8ce64890bcc6d850575bd38b7a698dd84e6e7cacb11250a3e21d1224a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f9e49e8ce64890bcc6d850575bd38b7a698dd84e6e7cacb11250a3e21d1224a4->leave($__internal_f9e49e8ce64890bcc6d850575bd38b7a698dd84e6e7cacb11250a3e21d1224a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
