<?php

/* base.html.twig */
class __TwigTemplate_4223a21cddb1541c2c1194d235861d73a5258cbb5b740518188fcfae9c0b29ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f9a98002158ae069b521feda92d0acba601e7e84b9c218e342fcb8891267a63 = $this->env->getExtension("native_profiler");
        $__internal_8f9a98002158ae069b521feda92d0acba601e7e84b9c218e342fcb8891267a63->enter($__internal_8f9a98002158ae069b521feda92d0acba601e7e84b9c218e342fcb8891267a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"wrapper\">
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    </button>

                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Home</a></li>                        
                        ";
        // line 59
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 60
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Productos <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                            \t";
            // line 64
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 65
                echo "\t                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newProductAction");
                echo "\">Nuevo</a></li>                          
\t                                <li><a href=\"";
                // line 66
                echo $this->env->getExtension('routing')->getPath("createStatic");
                echo "\">Nuevo estática</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 68
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">Listado</a></li>
                                ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 70
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">Listado</a></li>
                                ";
            }
            // line 71
            echo "                                                               
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Categorías <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 79
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 80
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newCategoryAction");
                echo "\"> Nueva</a></li>                          
                                ";
            }
            // line 82
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("listActionCategory");
            echo "\">Listado</a></li>
                                <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("listAllByCategory");
            echo "\">Listado productos por categorías</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Persona <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 92
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 93
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newPersonAction");
                echo "\">Nueva</a></li>                                                          
                                ";
            }
            // line 95
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("listPersonAction");
            echo "\">Listado</a></li>                                
                            </ul>
                        </li>
                        ";
        }
        // line 99
        echo "                        
                    </ul>
                    
                    <!-- toogle Acceder-->
                    <ul class=\"nav navbar-nav navbar-right\">
                            <!-- Dependiendo si estamos registrados o no, nos aparecerá nuestro usuario con opciones o el boton acceder.-->
                            ";
        // line 105
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 106
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"glyphicon glyphicon glyphicon-user\"></span> ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Editar</a></li>
                                        <li><a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Cambio contraseña</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Salir</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 117
            echo "                            <li>
                                <a data-toggle=\"modal\" data-target=\"#loginModal\">
                                <span class=\"glyphicon glyphicon-log-in\"></span> Acceder</a>
                            ";
        }
        // line 121
        echo "                            </li>
                        <li>
                    \t   <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span> Registrarse</a>
                        </li>
                        <!-- Botón Idioma-->
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-flag\"></span> es <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"/\">es</a></li>                          
                                <li><a href=\"/en\">en</a></li>
                            </ul>
                        </li> 
                    </ul>
                    
                </div>
            </div>
        </nav>
        </div>
        <!-- Login modal-->
        <div id=\"loginModal\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">
               \t<!-- Modal content-->
               \t<div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">Acceder </h4>                        
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-inline\" action=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >                    
\t\t\t\t\t\t
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                        
                            <div class=\"form-group\">
                                <label for=\"username\" class=\"sr-only\">Nombre de usuario</label>
    \t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" 
    \t\t\t\t\t\t\t\tplaceholder=\"Nombre de usuario\" class=\"form-control input-sm\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"sr-only\">Contraseña</label>
    \t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"
    \t\t\t\t\t\t\t\t\t placeholder=\"Contraseña\" class=\"form-control input-sm\" />
                            </div>
                            <div class=\"checkbox\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    \t\t\t\t\t\t\t<label for=\"remember_me\">Recordar</label>
                            </div>
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"Entrar\" class=\"btn btn-info btn-sm\" />                                                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        // line 178
        $this->displayBlock('body', $context, $blocks);
        // line 181
        echo "    </body>
</html>
";
        
        $__internal_8f9a98002158ae069b521feda92d0acba601e7e84b9c218e342fcb8891267a63->leave($__internal_8f9a98002158ae069b521feda92d0acba601e7e84b9c218e342fcb8891267a63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c3fac2dbda9a19df15b1b68bb7c389947b7012f6b9b2d3e5ca7e2100ca7df37 = $this->env->getExtension("native_profiler");
        $__internal_5c3fac2dbda9a19df15b1b68bb7c389947b7012f6b9b2d3e5ca7e2100ca7df37->enter($__internal_5c3fac2dbda9a19df15b1b68bb7c389947b7012f6b9b2d3e5ca7e2100ca7df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Jaén";
        
        $__internal_5c3fac2dbda9a19df15b1b68bb7c389947b7012f6b9b2d3e5ca7e2100ca7df37->leave($__internal_5c3fac2dbda9a19df15b1b68bb7c389947b7012f6b9b2d3e5ca7e2100ca7df37_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3c37440f68e723eeeb2948873f6ea018f8c637cb9e37b9481cc021940112bc0 = $this->env->getExtension("native_profiler");
        $__internal_a3c37440f68e723eeeb2948873f6ea018f8c637cb9e37b9481cc021940112bc0->enter($__internal_a3c37440f68e723eeeb2948873f6ea018f8c637cb9e37b9481cc021940112bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- Bootstrap -->
\t        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css\" />
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\"/>
\t        <!-- Latest compiled and minified CSS -->
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
\t        
\t        <!-- Optional theme -->
\t        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
\t        
\t        <!-- Latest compiled and minified JavaScript -->
\t        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
            <style type=\"text/css\">
                html,body {
                   margin:0;
                   padding:0;
                   height:100%;
                   margin-left: 1%;
                }

                #wrapper {
                   min-height:90%;
                   position:relative;
                }

                #content {      
                    margin-top: 70px;
                    padding-bottom: 200px;
                }
            </style>
            
    \t";
        
        $__internal_a3c37440f68e723eeeb2948873f6ea018f8c637cb9e37b9481cc021940112bc0->leave($__internal_a3c37440f68e723eeeb2948873f6ea018f8c637cb9e37b9481cc021940112bc0_prof);

    }

    // line 178
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba42664c9185f963ff21ca5b6a7162dbae826aa183b01a597c2470eadfc3e4de = $this->env->getExtension("native_profiler");
        $__internal_ba42664c9185f963ff21ca5b6a7162dbae826aa183b01a597c2470eadfc3e4de->enter($__internal_ba42664c9185f963ff21ca5b6a7162dbae826aa183b01a597c2470eadfc3e4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 179
        echo "        \t
        ";
        
        $__internal_ba42664c9185f963ff21ca5b6a7162dbae826aa183b01a597c2470eadfc3e4de->leave($__internal_ba42664c9185f963ff21ca5b6a7162dbae826aa183b01a597c2470eadfc3e4de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 179,  325 => 178,  288 => 10,  282 => 9,  270 => 7,  261 => 181,  259 => 178,  231 => 153,  226 => 151,  195 => 123,  191 => 121,  185 => 117,  178 => 113,  173 => 111,  169 => 110,  164 => 108,  160 => 106,  158 => 105,  150 => 99,  143 => 96,  140 => 95,  134 => 93,  132 => 92,  121 => 84,  117 => 83,  114 => 82,  108 => 80,  106 => 79,  96 => 71,  90 => 70,  85 => 68,  80 => 66,  75 => 65,  73 => 64,  67 => 60,  65 => 59,  61 => 58,  40 => 41,  38 => 9,  35 => 8,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>*/
/*             {% block title %}David Jaén{% endblock %}*/
/*         </title>*/
/* 		{% block stylesheets %}*/
/*         <!-- Bootstrap -->*/
/* 	        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />*/
/* 	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>*/
/* 	        <!-- Latest compiled and minified CSS -->*/
/* 	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* 	        */
/* 	        <!-- Optional theme -->*/
/* 	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* 	        */
/* 	        <!-- Latest compiled and minified JavaScript -->*/
/* 	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*             <style type="text/css">*/
/*                 html,body {*/
/*                    margin:0;*/
/*                    padding:0;*/
/*                    height:100%;*/
/*                    margin-left: 1%;*/
/*                 }*/
/* */
/*                 #wrapper {*/
/*                    min-height:90%;*/
/*                    position:relative;*/
/*                 }*/
/* */
/*                 #content {      */
/*                     margin-top: 70px;*/
/*                     padding-bottom: 200px;*/
/*                 }*/
/*             </style>*/
/*             */
/*     	{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <div class="wrapper">*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     </button>*/
/* */
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="{{ path('index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>                        */
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY')%}*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Productos <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                             	{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 	                                <li><a href="{{ path('newProductAction') }}">Nuevo</a></li>                          */
/* 	                                <li><a href="{{ path('createStatic') }}">Nuevo estática</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="{{ path('listActionProduct') }}">Listado</a></li>*/
/*                                 {% elseif is_granted('ROLE_USER') %}*/
/*                                     <li><a href="{{ path('listActionProduct') }}">Listado</a></li>*/
/*                                 {% endif%}                                                               */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                             role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Categorías <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted('ROLE_APP_ADMIN' )%}*/
/*                                     <li><a href="{{ path('newCategoryAction')}}"> Nueva</a></li>                          */
/*                                 {% endif %}*/
/*                                 <li role="separator" class="divider"></li>                                */
/*                                 <li><a href="{{ path('listActionCategory') }}">Listado</a></li>*/
/*                                 <li><a href="{{ path('listAllByCategory') }}">Listado productos por categorías</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                             role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Persona <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted('ROLE_APP_ADMIN' )%}*/
/*                                     <li><a href="{{ path('newPersonAction') }}">Nueva</a></li>                                                          */
/*                                 {% endif %}*/
/*                                 <li role="separator" class="divider"></li>                                */
/*                                 <li><a href="{{ path('listPersonAction') }}">Listado</a></li>                                */
/*                             </ul>*/
/*                         </li>*/
/*                         {% endif %}                        */
/*                     </ul>*/
/*                     */
/*                     <!-- toogle Acceder-->*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                             <!-- Dependiendo si estamos registrados o no, nos aparecerá nuestro usuario con opciones o el boton acceder.-->*/
/*                             {% if is_granted('IS_AUTHENTICATED_FULLY')%}*/
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                     <span class="glyphicon glyphicon glyphicon-user"></span> {{ app.user.username }}<span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="{{ path('fos_user_profile_edit') }}">Editar</a></li>*/
/*                                         <li><a href="{{ path('fos_user_change_password') }}">Cambio contraseña</a></li>*/
/*                                         <li role="separator" class="divider"></li>*/
/*                                         <li><a class="glyphicon glyphicon-log-out" href="{{ path('fos_user_security_logout') }}">Salir</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             {% else %}*/
/*                             <li>*/
/*                                 <a data-toggle="modal" data-target="#loginModal">*/
/*                                 <span class="glyphicon glyphicon-log-in"></span> Acceder</a>*/
/*                             {% endif %}*/
/*                             </li>*/
/*                         <li>*/
/*                     	   <a href="{{ path('fos_user_registration_register') }}"><span class="glyphicon glyphicon-plus"></span> Registrarse</a>*/
/*                         </li>*/
/*                         <!-- Botón Idioma-->*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                             role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-flag"></span> es <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="/">es</a></li>                          */
/*                                 <li><a href="/en">en</a></li>*/
/*                             </ul>*/
/*                         </li> */
/*                     </ul>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*         </div>*/
/*         <!-- Login modal-->*/
/*         <div id="loginModal" class="modal fade" role="dialog">*/
/*             <div class="modal-dialog">*/
/*                	<!-- Modal content-->*/
/*                	<div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">Acceder </h4>                        */
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <form class="form-inline" action="{{ path('fos_user_security_check') }}" method="post" >                    */
/* 						*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}" />*/
/*                         */
/*                             <div class="form-group">*/
/*                                 <label for="username" class="sr-only">Nombre de usuario</label>*/
/*     							<input type="text" id="username" name="_username" required="required" */
/*     								placeholder="Nombre de usuario" class="form-control input-sm"/>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="password" class="sr-only">Contraseña</label>*/
/*     							<input type="password" id="password" name="_password" required="required"*/
/*     									 placeholder="Contraseña" class="form-control input-sm" />*/
/*                             </div>*/
/*                             <div class="checkbox">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     							<label for="remember_me">Recordar</label>*/
/*                             </div>*/
/*                             <input type="submit" id="_submit" name="_submit"*/
/*                                    value="Entrar" class="btn btn-info btn-sm" />                                                       */
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         {% block body %}*/
/*         	*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
