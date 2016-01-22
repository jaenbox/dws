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
        $__internal_a035f51c3c52a0cbc93b9e34e97f65fac2e56d72d723c611fb78e136b5b39f66 = $this->env->getExtension("native_profiler");
        $__internal_a035f51c3c52a0cbc93b9e34e97f65fac2e56d72d723c611fb78e136b5b39f66->enter($__internal_a035f51c3c52a0cbc93b9e34e97f65fac2e56d72d723c611fb78e136b5b39f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "        </title>
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
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
        // line 60
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.home", array(), "AppBundle"), "html", null, true);
        echo "</a></li>                        
                        ";
        // line 61
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 62
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> ";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.pro", array(), "AppBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                            \t";
            // line 66
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 67
                echo "\t                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newProductAction");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.new", array(), "AppBundle"), "html", null, true);
                echo "</a></li>                          
\t                                <li><a href=\"";
                // line 68
                echo $this->env->getExtension('routing')->getPath("createStatic");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.static", array(), "AppBundle"), "html", null, true);
                echo "</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 70
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.list", array(), "AppBundle"), "html", null, true);
                echo "</a></li>
                                ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 72
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.list", array(), "AppBundle"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 73
            echo "                                                               
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.cat", array(), "AppBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 81
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 82
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newCategoryAction");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.new", array(), "AppBundle"), "html", null, true);
                echo "</a></li>                          
                                ";
            }
            // line 84
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("listActionCategory");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.list", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("listAllByCategory");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.listByCategory", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.person.per", array(), "AppBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 94
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 95
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newPersonAction");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.person.new", array(), "AppBundle"), "html", null, true);
                echo "</a></li>                                                          
                                ";
            }
            // line 97
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("listPersonAction");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.person.list", array(), "AppBundle"), "html", null, true);
            echo "</a></li>                                
                            </ul>
                        </li>
                        ";
        }
        // line 101
        echo "                        
                    </ul>
                    
                    <!-- toogle Acceder-->
                    <ul class=\"nav navbar-nav navbar-right\">
                            <!-- Dependiendo si estamos registrados o no, nos aparecerá nuestro usuario con opciones o el boton acceder.-->
                            ";
        // line 107
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 108
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"glyphicon glyphicon glyphicon-user\"></span> ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.edit", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.change", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.logout", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 119
            echo "                            <li>
                                <a data-toggle=\"modal\" data-target=\"#loginModal\">
                                <span class=\"glyphicon glyphicon-log-in\"></span>";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.log", array(), "AppBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 123
        echo "                            </li>
                        <li>
                        \t";
        // line 125
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 126
            echo "            \t\t\t\t\t<!-- No mostramos el boton de acceder.-->
                    \t\t";
        } else {
            // line 128
            echo "                    \t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.register", array(), "AppBundle"), "html", null, true);
            echo "</a>
                    \t\t";
        }
        // line 130
        echo "                        </li>
                        <!-- Botón Idioma-->
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-flag\"></span> ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "es"))), "html", null, true);
        echo "\">es</a></li>                          
                        \t\t<li><a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">en</a></li>
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
\t\t\t\t\t\t<h4 class=\"modal-title\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.log", array(), "AppBundle"), "html", null, true);
        echo " </h4>                        
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-inline\" action=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >                    
\t\t\t\t\t\t
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                        
                            <div class=\"form-group\">
                                <label for=\"username\" class=\"sr-only\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.access", array(), "AppBundle"), "html", null, true);
        echo "</label>
    \t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" 
    \t\t\t\t\t\t\t\tplaceholder=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.placeholder.user", array(), "AppBundle"), "html", null, true);
        echo "\" class=\"form-control input-sm\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"sr-only\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.password", array(), "AppBundle"), "html", null, true);
        echo "</label>
    \t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"
    \t\t\t\t\t\t\t\t\t placeholder=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.placeholder.password", array(), "AppBundle"), "html", null, true);
        echo "\" class=\"form-control input-sm\" />
                            </div>
                            <div class=\"checkbox\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    \t\t\t\t\t\t\t<label for=\"remember_me\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.remember", array(), "AppBundle"), "html", null, true);
        echo "</label>
                            </div>
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.button", array(), "AppBundle"), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\" />                                                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        // line 184
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "    </body>
</html>
";
        
        $__internal_a035f51c3c52a0cbc93b9e34e97f65fac2e56d72d723c611fb78e136b5b39f66->leave($__internal_a035f51c3c52a0cbc93b9e34e97f65fac2e56d72d723c611fb78e136b5b39f66_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_20797345434d48709e719f522ab71f562c9e363e0a05081f766fdd26850f3f4e = $this->env->getExtension("native_profiler");
        $__internal_20797345434d48709e719f522ab71f562c9e363e0a05081f766fdd26850f3f4e->enter($__internal_20797345434d48709e719f522ab71f562c9e363e0a05081f766fdd26850f3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Jaén";
        
        $__internal_20797345434d48709e719f522ab71f562c9e363e0a05081f766fdd26850f3f4e->leave($__internal_20797345434d48709e719f522ab71f562c9e363e0a05081f766fdd26850f3f4e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a321236904920011fa340f9482a2393d8f4d93e9fe1c33574e887710bb4ffac8 = $this->env->getExtension("native_profiler");
        $__internal_a321236904920011fa340f9482a2393d8f4d93e9fe1c33574e887710bb4ffac8->enter($__internal_a321236904920011fa340f9482a2393d8f4d93e9fe1c33574e887710bb4ffac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
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
        
        $__internal_a321236904920011fa340f9482a2393d8f4d93e9fe1c33574e887710bb4ffac8->leave($__internal_a321236904920011fa340f9482a2393d8f4d93e9fe1c33574e887710bb4ffac8_prof);

    }

    // line 184
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da62f953fdc5407fc7c5f0150d7fad4a4e32d4e8cd49d892b36e292121c6cf1 = $this->env->getExtension("native_profiler");
        $__internal_3da62f953fdc5407fc7c5f0150d7fad4a4e32d4e8cd49d892b36e292121c6cf1->enter($__internal_3da62f953fdc5407fc7c5f0150d7fad4a4e32d4e8cd49d892b36e292121c6cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 185
        echo "        \t
        ";
        
        $__internal_3da62f953fdc5407fc7c5f0150d7fad4a4e32d4e8cd49d892b36e292121c6cf1->leave($__internal_3da62f953fdc5407fc7c5f0150d7fad4a4e32d4e8cd49d892b36e292121c6cf1_prof);

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
        return array (  415 => 185,  409 => 184,  372 => 12,  366 => 11,  354 => 9,  345 => 187,  343 => 184,  332 => 176,  326 => 173,  319 => 169,  314 => 167,  308 => 164,  303 => 162,  297 => 159,  292 => 157,  286 => 154,  267 => 138,  263 => 137,  258 => 135,  251 => 130,  243 => 128,  239 => 126,  237 => 125,  233 => 123,  228 => 121,  224 => 119,  215 => 115,  208 => 113,  202 => 112,  197 => 110,  193 => 108,  191 => 107,  183 => 101,  174 => 98,  171 => 97,  163 => 95,  161 => 94,  156 => 92,  145 => 86,  139 => 85,  136 => 84,  128 => 82,  126 => 81,  121 => 79,  113 => 73,  105 => 72,  98 => 70,  91 => 68,  84 => 67,  82 => 66,  77 => 64,  73 => 62,  71 => 61,  65 => 60,  44 => 43,  42 => 11,  39 => 10,  37 => 9,  28 => 3,  25 => 2,);
    }
}
/* {% trans_default_domain 'AppBundle' %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale }}">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
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
/*                         <li class="active"><a href="{{ path('index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> {{ 'menu.home'|trans }}</a></li>                        */
/*                         {% if is_granted('IS_AUTHENTICATED_FULLY')%}*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{ 'menu.product.pro'|trans }} <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                             	{% if is_granted('ROLE_APP_ADMIN') %}*/
/* 	                                <li><a href="{{ path('newProductAction') }}">{{ 'menu.product.new'|trans }}</a></li>                          */
/* 	                                <li><a href="{{ path('createStatic') }}">{{ 'menu.product.static'|trans }}</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="{{ path('listActionProduct') }}">{{ 'menu.product.list'|trans }}</a></li>*/
/*                                 {% elseif is_granted('ROLE_USER') %}*/
/*                                     <li><a href="{{ path('listActionProduct') }}">{{ 'menu.product.list'|trans }}</a></li>*/
/*                                 {% endif%}                                                               */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                             role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{ 'menu.category.cat'|trans }} <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted('ROLE_APP_ADMIN' )%}*/
/*                                     <li><a href="{{ path('newCategoryAction')}}">{{ 'menu.category.new'|trans }}</a></li>                          */
/*                                 {% endif %}*/
/*                                 <li role="separator" class="divider"></li>                                */
/*                                 <li><a href="{{ path('listActionCategory') }}">{{ 'menu.category.list'|trans }}</a></li>*/
/*                                 <li><a href="{{ path('listAllByCategory') }}">{{ 'menu.category.listByCategory'|trans }}</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                             role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{ 'menu.person.per'|trans }} <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted('ROLE_APP_ADMIN' )%}*/
/*                                     <li><a href="{{ path('newPersonAction') }}">{{ 'menu.person.new'|trans }}</a></li>                                                          */
/*                                 {% endif %}*/
/*                                 <li role="separator" class="divider"></li>                                */
/*                                 <li><a href="{{ path('listPersonAction') }}">{{ 'menu.person.list'|trans }}</a></li>                                */
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
/*                                         <li><a href="{{ path('fos_user_profile_edit') }}">{{ 'menu.login.edit'|trans }}</a></li>*/
/*                                         <li><a href="{{ path('fos_user_change_password') }}">{{ 'menu.login.change'|trans }}</a></li>*/
/*                                         <li role="separator" class="divider"></li>*/
/*                                         <li><a class="glyphicon glyphicon-log-out" href="{{ path('fos_user_security_logout') }}">{{ 'menu.login.logout'|trans }}</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             {% else %}*/
/*                             <li>*/
/*                                 <a data-toggle="modal" data-target="#loginModal">*/
/*                                 <span class="glyphicon glyphicon-log-in"></span>{{ 'menu.login.log'|trans }}</a>*/
/*                             {% endif %}*/
/*                             </li>*/
/*                         <li>*/
/*                         	{% if is_granted('IS_AUTHENTICATED_FULLY')%}*/
/*             					<!-- No mostramos el boton de acceder.-->*/
/*                     		{% else %}*/
/*                     			<a href="{{ path('fos_user_registration_register') }}"><span class="glyphicon glyphicon-plus"></span>{{ 'menu.register'|trans }}</a>*/
/*                     		{% endif %}*/
/*                         </li>*/
/*                         <!-- Botón Idioma-->*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"*/
/*                             role="button" aria-haspopup="true" aria-expanded="false">*/
/*                             <span class="glyphicon glyphicon-flag"></span> {{ app.request.locale }} <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'es'})) }}">es</a></li>                          */
/*                         		<li><a href="{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}">en</a></li>*/
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
/* 						<h4 class="modal-title">{{ 'menu.login.log'|trans }} </h4>                        */
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <form class="form-inline" action="{{ path('fos_user_security_check') }}" method="post" >                    */
/* 						*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}" />*/
/*                         */
/*                             <div class="form-group">*/
/*                                 <label for="username" class="sr-only">{{ 'menu.login.access'|trans }}</label>*/
/*     							<input type="text" id="username" name="_username" required="required" */
/*     								placeholder="{{ 'global.placeholder.user'|trans }}" class="form-control input-sm"/>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="password" class="sr-only">{{ 'menu.login.password'|trans }}</label>*/
/*     							<input type="password" id="password" name="_password" required="required"*/
/*     									 placeholder="{{ 'global.placeholder.password'|trans }}" class="form-control input-sm" />*/
/*                             </div>*/
/*                             <div class="checkbox">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     							<label for="remember_me">{{ 'menu.login.remember'|trans }}</label>*/
/*                             </div>*/
/*                             <input type="submit" id="_submit" name="_submit"*/
/*                                    value="{{ 'menu.login.button'|trans }}" class="btn btn-info btn-sm" />                                                       */
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
