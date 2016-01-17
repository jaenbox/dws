<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_cf39b6badfb2e3f00fb69fb7397cb004c1eda8c7ac2f7f76aab1553abaaa3af6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c29724d05d3bb22269f6f1b90e84e897f32da8cd59515e358821ebd0bf37c926 = $this->env->getExtension("native_profiler");
        $__internal_c29724d05d3bb22269f6f1b90e84e897f32da8cd59515e358821ebd0bf37c926->enter($__internal_c29724d05d3bb22269f6f1b90e84e897f32da8cd59515e358821ebd0bf37c926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
    
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    \t
        <div id=\"wrapper\">
    \t<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Home</a></li>                        
                        ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 63
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Productos <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                            \t";
            // line 67
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 68
                echo "\t                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newProductAction");
                echo "\">Nuevo</a></li>                          
\t                                <li><a href=\"";
                // line 69
                echo $this->env->getExtension('routing')->getPath("createStatic");
                echo "\">Nuevo estática</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 71
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">Listado</a></li>
                                ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 73
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">Listado</a></li>
                                ";
            }
            // line 74
            echo "                                                               
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> Categorías <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 82
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 83
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newCategoryAction");
                echo "\"> Nueva</a></li>                          
                                ";
            }
            // line 85
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("listActionCategory");
            echo "\">Listado</a></li>
                                <li><a href=\"";
            // line 87
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
            // line 95
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 96
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newPersonAction");
                echo "\">Nueva</a></li>                                                          
                                ";
            }
            // line 98
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("listPersonAction");
            echo "\">Listado</a></li>                                
                            </ul>
                        </li>
                        ";
        }
        // line 102
        echo "                        
                    </ul>
                    
                    <!-- toogle Acceder-->
                    <ul class=\"nav navbar-nav navbar-right\">
                            <!-- Dependiendo si estamos registrados o no, nos aparecerá nuestro usuario con opciones o el boton acceder.-->
                            ";
        // line 108
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 109
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"glyphicon glyphicon glyphicon-user\"></span> ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 113
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Editar</a></li>
                                        <li><a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Cambio contraseña</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Salir</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 120
            echo "                            <li>
                                <a data-toggle=\"modal\" data-target=\"#loginModal\">
                                <span class=\"glyphicon glyphicon-log-in\"></span> Acceder</a>
                            ";
        }
        // line 124
        echo "                            </li>
                        <li>
                    \t   <a href=\"";
        // line 126
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
        // line 154
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >                    
\t\t\t\t\t\t
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 156
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
        ";
        // line 179
        $this->displayBlock('javascripts', $context, $blocks);
        // line 183
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "        
    </body>
</html>";
        
        $__internal_c29724d05d3bb22269f6f1b90e84e897f32da8cd59515e358821ebd0bf37c926->leave($__internal_c29724d05d3bb22269f6f1b90e84e897f32da8cd59515e358821ebd0bf37c926_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac23debc5c7f11b8629509a1f62ff655cd3de70a3830b73cb805591b01730e3 = $this->env->getExtension("native_profiler");
        $__internal_6ac23debc5c7f11b8629509a1f62ff655cd3de70a3830b73cb805591b01730e3->enter($__internal_6ac23debc5c7f11b8629509a1f62ff655cd3de70a3830b73cb805591b01730e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Jaén";
        
        $__internal_6ac23debc5c7f11b8629509a1f62ff655cd3de70a3830b73cb805591b01730e3->leave($__internal_6ac23debc5c7f11b8629509a1f62ff655cd3de70a3830b73cb805591b01730e3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6502a41cb441ed042eb398c7721cdc15dd4772328f23fd0e74c18f37046328e = $this->env->getExtension("native_profiler");
        $__internal_d6502a41cb441ed042eb398c7721cdc15dd4772328f23fd0e74c18f37046328e->enter($__internal_d6502a41cb441ed042eb398c7721cdc15dd4772328f23fd0e74c18f37046328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\"/>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        
        <style type=\"text/css\">
                html,body {
                   margin:0;
                   padding:0;
                   height:100%;
                   margin-left: 15%;
                }

                #wrapper {
                   min-height:10%;
                   position:relative;
                }


                #content {      
                    margin-top: 70px;
                    padding-bottom: 200px;
                }
            </style>
    ";
        
        $__internal_d6502a41cb441ed042eb398c7721cdc15dd4772328f23fd0e74c18f37046328e->leave($__internal_d6502a41cb441ed042eb398c7721cdc15dd4772328f23fd0e74c18f37046328e_prof);

    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d7bd6322666adf60d3b2aca415b4f71783694a8d42c6a4157b34fcdba6053f4 = $this->env->getExtension("native_profiler");
        $__internal_6d7bd6322666adf60d3b2aca415b4f71783694a8d42c6a4157b34fcdba6053f4->enter($__internal_6d7bd6322666adf60d3b2aca415b4f71783694a8d42c6a4157b34fcdba6053f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 180
        echo "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_6d7bd6322666adf60d3b2aca415b4f71783694a8d42c6a4157b34fcdba6053f4->leave($__internal_6d7bd6322666adf60d3b2aca415b4f71783694a8d42c6a4157b34fcdba6053f4_prof);

    }

    // line 183
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c4edaecab0379f29da6dbf666562f55068cb80a7bf5dfb528da4887d41f9ff1 = $this->env->getExtension("native_profiler");
        $__internal_1c4edaecab0379f29da6dbf666562f55068cb80a7bf5dfb528da4887d41f9ff1->enter($__internal_1c4edaecab0379f29da6dbf666562f55068cb80a7bf5dfb528da4887d41f9ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 184
        echo "            <div>
                ";
        // line 185
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 186
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 187
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 191
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 193
        echo "            </div>

            ";
        // line 195
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 196
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 197
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 198
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 199
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "            ";
        }
        // line 204
        echo "
            <div>
                ";
        // line 206
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 208
        echo "            </div>
        ";
        
        $__internal_1c4edaecab0379f29da6dbf666562f55068cb80a7bf5dfb528da4887d41f9ff1->leave($__internal_1c4edaecab0379f29da6dbf666562f55068cb80a7bf5dfb528da4887d41f9ff1_prof);

    }

    // line 206
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d4d3c6d455dfb81be4cdfcdb3385f9de38aa04310725efe4cac022db3f8da39 = $this->env->getExtension("native_profiler");
        $__internal_3d4d3c6d455dfb81be4cdfcdb3385f9de38aa04310725efe4cac022db3f8da39->enter($__internal_3d4d3c6d455dfb81be4cdfcdb3385f9de38aa04310725efe4cac022db3f8da39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 207
        echo "                ";
        
        $__internal_3d4d3c6d455dfb81be4cdfcdb3385f9de38aa04310725efe4cac022db3f8da39->leave($__internal_3d4d3c6d455dfb81be4cdfcdb3385f9de38aa04310725efe4cac022db3f8da39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 207,  433 => 206,  425 => 208,  423 => 206,  419 => 204,  416 => 203,  410 => 202,  401 => 199,  396 => 198,  391 => 197,  386 => 196,  384 => 195,  380 => 193,  372 => 191,  366 => 188,  362 => 187,  357 => 186,  355 => 185,  352 => 184,  346 => 183,  337 => 180,  331 => 179,  293 => 11,  287 => 10,  275 => 7,  266 => 210,  263 => 183,  261 => 179,  235 => 156,  230 => 154,  199 => 126,  195 => 124,  189 => 120,  182 => 116,  177 => 114,  173 => 113,  168 => 111,  164 => 109,  162 => 108,  154 => 102,  147 => 99,  144 => 98,  138 => 96,  136 => 95,  125 => 87,  121 => 86,  118 => 85,  112 => 83,  110 => 82,  100 => 74,  94 => 73,  89 => 71,  84 => 69,  79 => 68,  77 => 67,  71 => 63,  69 => 62,  65 => 61,  43 => 43,  41 => 10,  37 => 8,  35 => 7,  27 => 1,);
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
/*     */
/*     {% block stylesheets %}*/
/*         <!-- Bootstrap -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/*         */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         */
/*         <style type="text/css">*/
/*                 html,body {*/
/*                    margin:0;*/
/*                    padding:0;*/
/*                    height:100%;*/
/*                    margin-left: 15%;*/
/*                 }*/
/* */
/*                 #wrapper {*/
/*                    min-height:10%;*/
/*                    position:relative;*/
/*                 }*/
/* */
/* */
/*                 #content {      */
/*                     margin-top: 70px;*/
/*                     padding-bottom: 200px;*/
/*                 }*/
/*             </style>*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/*     	*/
/*         <div id="wrapper">*/
/*     	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     </button>*/
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
/*         {% block javascripts %}*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*         {% block body %}*/
/*             <div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                     <a href="{{ path('fos_user_security_logout') }}">*/
/*                         {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                     </a>*/
/*                 {% else %}*/
/*                     <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/*             <div>*/
/*                 {% block fos_user_content %}*/
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         {% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
