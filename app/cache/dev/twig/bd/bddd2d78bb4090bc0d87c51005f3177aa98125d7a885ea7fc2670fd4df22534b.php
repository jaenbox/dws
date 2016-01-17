<?php

/* /index.html.twig */
class __TwigTemplate_247ddc9172d0068356347e495f14c21143537e01978c01815887fb5187a6de2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36eca046002dcbc5152a61c61004c30ce59389bd84ab91efc05f3b86cae4af18 = $this->env->getExtension("native_profiler");
        $__internal_36eca046002dcbc5152a61c61004c30ce59389bd84ab91efc05f3b86cae4af18->enter($__internal_36eca046002dcbc5152a61c61004c30ce59389bd84ab91efc05f3b86cae4af18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36eca046002dcbc5152a61c61004c30ce59389bd84ab91efc05f3b86cae4af18->leave($__internal_36eca046002dcbc5152a61c61004c30ce59389bd84ab91efc05f3b86cae4af18_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d73650c409a20991e99385f2dedb8105c8472c6a5c52a96805fd92289f912d7 = $this->env->getExtension("native_profiler");
        $__internal_4d73650c409a20991e99385f2dedb8105c8472c6a5c52a96805fd92289f912d7->enter($__internal_4d73650c409a20991e99385f2dedb8105c8472c6a5c52a96805fd92289f912d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

";
        
        $__internal_4d73650c409a20991e99385f2dedb8105c8472c6a5c52a96805fd92289f912d7->leave($__internal_4d73650c409a20991e99385f2dedb8105c8472c6a5c52a96805fd92289f912d7_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  11 => 1,);
    }
}
/* {% extends 'AppBundle::layout.html.twig' %}*/
/* {% trans_default_domain 'AppBundle' %}*/
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
/* 		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* {% endblock %}*/
