<?php

/* default/index.html.twig */
class __TwigTemplate_5cab16ae51397e909f8e218a8f1cabf5a98ba5ae144921408829af01ec0d5152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af76205142fc3d742e54fb2b8fdf76d74687f724a1e0b73a0a0f8cf5a15f62a8 = $this->env->getExtension("native_profiler");
        $__internal_af76205142fc3d742e54fb2b8fdf76d74687f724a1e0b73a0a0f8cf5a15f62a8->enter($__internal_af76205142fc3d742e54fb2b8fdf76d74687f724a1e0b73a0a0f8cf5a15f62a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af76205142fc3d742e54fb2b8fdf76d74687f724a1e0b73a0a0f8cf5a15f62a8->leave($__internal_af76205142fc3d742e54fb2b8fdf76d74687f724a1e0b73a0a0f8cf5a15f62a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f505c72a9b3c3a2213cc7c97156279376196118009112a6da5e693a84a37467 = $this->env->getExtension("native_profiler");
        $__internal_6f505c72a9b3c3a2213cc7c97156279376196118009112a6da5e693a84a37467->enter($__internal_6f505c72a9b3c3a2213cc7c97156279376196118009112a6da5e693a84a37467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   

    \t<div id=\"content\" class=\"container\">
\t\t\t<div class=\"page-header\">
\t\t\t\t<hr>
                <hr>\t\t\t\t
\t\t\t\t<h1> Symfony</h1>
\t\t\t</div>
\t\t\t<p class=\"lead\"> En esta página podéis ver un ejemplo funcional de las actividades a realizar en el módulo de Desarrollo Web en entorno servidor </p>
\t\t\t<h3>Usuario</h3>
\t\t\t<p> Para hacer uso completo de la aplicación, será necesario registrarse en la web. Los usuario registrados obtendrán el role ROLE_APP_USER.
\t\t\t<p class=\"text-info\"> Para acceder como administrador loggearse como: <em>admin/admin</em> </p>
\t\t\t<p> Para hacer uso completo de la aplicación, será necesario registrarse en la web. Los usuario registrados obtendrán el role ROLE_USER.
\t\t\t<p class=\"text-info\"> Para acceder como usuario loggearse como: <em>jaen/jaen</em> </p>
\t\t</div>

";
        
        $__internal_6f505c72a9b3c3a2213cc7c97156279376196118009112a6da5e693a84a37467->leave($__internal_6f505c72a9b3c3a2213cc7c97156279376196118009112a6da5e693a84a37467_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}   */
/* */
/*     	<div id="content" class="container">*/
/* 			<div class="page-header">*/
/* 				<hr>*/
/*                 <hr>				*/
/* 				<h1> Symfony</h1>*/
/* 			</div>*/
/* 			<p class="lead"> En esta página podéis ver un ejemplo funcional de las actividades a realizar en el módulo de Desarrollo Web en entorno servidor </p>*/
/* 			<h3>Usuario</h3>*/
/* 			<p> Para hacer uso completo de la aplicación, será necesario registrarse en la web. Los usuario registrados obtendrán el role ROLE_APP_USER.*/
/* 			<p class="text-info"> Para acceder como administrador loggearse como: <em>admin/admin</em> </p>*/
/* 			<p> Para hacer uso completo de la aplicación, será necesario registrarse en la web. Los usuario registrados obtendrán el role ROLE_USER.*/
/* 			<p class="text-info"> Para acceder como usuario loggearse como: <em>jaen/jaen</em> </p>*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
