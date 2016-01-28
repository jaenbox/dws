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
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a8819b1208e4a357be8356d649c90a6c79851f0948098e83c5280848c558be4 = $this->env->getExtension("native_profiler");
        $__internal_3a8819b1208e4a357be8356d649c90a6c79851f0948098e83c5280848c558be4->enter($__internal_3a8819b1208e4a357be8356d649c90a6c79851f0948098e83c5280848c558be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        // line 45
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div id=\"wrapper\">
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
        // line 62
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.home", array(), "AppBundle"), "html", null, true);
        echo "</a></li>                        
                        ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 64
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.pro", array(), "AppBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                            \t";
            // line 68
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 69
                echo "\t                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newProductAction");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.new", array(), "AppBundle"), "html", null, true);
                echo "</a></li>                          
\t                                <li><a href=\"";
                // line 70
                echo $this->env->getExtension('routing')->getPath("createStatic");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.static", array(), "AppBundle"), "html", null, true);
                echo "</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 72
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.list", array(), "AppBundle"), "html", null, true);
                echo "</a></li>
                                ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 74
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("listActionProduct");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.product.list", array(), "AppBundle"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 75
            echo "                                                               
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span> ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.cat", array(), "AppBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 83
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 84
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newCategoryAction");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.new", array(), "AppBundle"), "html", null, true);
                echo "</a></li>                          
                                ";
            }
            // line 86
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("listActionCategory");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.category.list", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                <li><a href=\"";
            // line 88
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
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.person.per", array(), "AppBundle"), "html", null, true);
            echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 96
            if ($this->env->getExtension('security')->isGranted("ROLE_APP_ADMIN")) {
                // line 97
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("newPersonAction");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.person.new", array(), "AppBundle"), "html", null, true);
                echo "</a></li>                                                          
                                ";
            }
            // line 99
            echo "                                <li role=\"separator\" class=\"divider\"></li>                                
                                <li><a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("listPersonAction");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.person.list", array(), "AppBundle"), "html", null, true);
            echo "</a></li>                                
                            </ul>
                        </li>
                        ";
        }
        // line 103
        echo "                        
                    </ul>
                    
                    <!-- toogle Acceder-->
                    <ul class=\"nav navbar-nav navbar-right\">
                            <!-- Dependiendo si estamos registrados o no, nos aparecerá nuestro usuario con opciones o el boton acceder.-->
                            ";
        // line 109
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 110
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"glyphicon glyphicon glyphicon-user\"></span> ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 114
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.edit", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                        <li><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.change", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                        <li role=\"separator\" class=\"divider\"></li>
                                        <li><a class=\"glyphicon glyphicon-log-out\" href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.logout", array(), "AppBundle"), "html", null, true);
            echo "</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 121
            echo "                            <li>
                                <a data-toggle=\"modal\" data-target=\"#loginModal\">
                                <span class=\"glyphicon glyphicon-log-in\"></span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.log", array(), "AppBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 125
        echo "                            </li>
                        <li>
                    \t   ";
        // line 127
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 128
            echo "            \t\t\t\t\t<!-- No mostramos el boton de acceder.-->
                    \t\t";
        } else {
            // line 130
            echo "                    \t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.register", array(), "AppBundle"), "html", null, true);
            echo "</a>
                    \t\t";
        }
        // line 132
        echo "                   \t\t<li>
                        <!-- Botón Idioma-->
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-flag\"></span> ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "es"))), "html", null, true);
        echo "\">es</a></li>                          
                        \t\t<li><a href=\"";
        // line 140
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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.log", array(), "AppBundle"), "html", null, true);
        echo " </h4>                        
                    </div>
                    <div class=\"modal-body\">
                        <form class=\"form-inline\" action=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >                    
\t\t\t\t\t\t
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                        
                            <div class=\"form-group\">
                                <label for=\"username\" class=\"sr-only\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.access", array(), "AppBundle"), "html", null, true);
        echo "</label>
    \t\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" required=\"required\" 
    \t\t\t\t\t\t\t\tplaceholder=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.placeholder.user", array(), "AppBundle"), "html", null, true);
        echo "\" class=\"form-control input-sm\"/>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\" class=\"sr-only\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.password", array(), "AppBundle"), "html", null, true);
        echo "</label>
    \t\t\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"
    \t\t\t\t\t\t\t\t\t placeholder=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("global.placeholder.password", array(), "AppBundle"), "html", null, true);
        echo "\" class=\"form-control input-sm\" />
                            </div>
                            <div class=\"checkbox\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    \t\t\t\t\t\t\t<label for=\"remember_me\">";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.login.remember", array(), "AppBundle"), "html", null, true);
        echo "</label>
                            </div>
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"";
        // line 178
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
        // line 187
        $this->displayBlock('body', $context, $blocks);
        // line 214
        echo "        
    </body>
</html>";
        
        $__internal_3a8819b1208e4a357be8356d649c90a6c79851f0948098e83c5280848c558be4->leave($__internal_3a8819b1208e4a357be8356d649c90a6c79851f0948098e83c5280848c558be4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e555e695049aa71a4114cf7825d75f9f18f36172b16414ca1949b52e25511d8 = $this->env->getExtension("native_profiler");
        $__internal_6e555e695049aa71a4114cf7825d75f9f18f36172b16414ca1949b52e25511d8->enter($__internal_6e555e695049aa71a4114cf7825d75f9f18f36172b16414ca1949b52e25511d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Jaén";
        
        $__internal_6e555e695049aa71a4114cf7825d75f9f18f36172b16414ca1949b52e25511d8->leave($__internal_6e555e695049aa71a4114cf7825d75f9f18f36172b16414ca1949b52e25511d8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f9bd3a20a37c4e7f39ff88c5627c050baf9f3f3bee1ffc8696f949030ba993f = $this->env->getExtension("native_profiler");
        $__internal_8f9bd3a20a37c4e7f39ff88c5627c050baf9f3f3bee1ffc8696f949030ba993f->enter($__internal_8f9bd3a20a37c4e7f39ff88c5627c050baf9f3f3bee1ffc8696f949030ba993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

                   position:relative;
                }

                #content {      
                    margin-top: 70px;
                    padding-bottom: 200px;
                }
                
                
            </style>
            
    \t";
        
        $__internal_8f9bd3a20a37c4e7f39ff88c5627c050baf9f3f3bee1ffc8696f949030ba993f->leave($__internal_8f9bd3a20a37c4e7f39ff88c5627c050baf9f3f3bee1ffc8696f949030ba993f_prof);

    }

    // line 187
    public function block_body($context, array $blocks = array())
    {
        $__internal_27cbcf07509f2e22130f1f840c5453a1a177d6486dd6679f5235b4d3961b7964 = $this->env->getExtension("native_profiler");
        $__internal_27cbcf07509f2e22130f1f840c5453a1a177d6486dd6679f5235b4d3961b7964->enter($__internal_27cbcf07509f2e22130f1f840c5453a1a177d6486dd6679f5235b4d3961b7964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 188
        echo "            <div>
                ";
        // line 189
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 190
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 191
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 195
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 197
        echo "            </div>

            ";
        // line 199
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 200
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 201
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 202
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 203
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "            ";
        }
        // line 208
        echo "
            <div>
                ";
        // line 210
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 212
        echo "            </div>
        ";
        
        $__internal_27cbcf07509f2e22130f1f840c5453a1a177d6486dd6679f5235b4d3961b7964->leave($__internal_27cbcf07509f2e22130f1f840c5453a1a177d6486dd6679f5235b4d3961b7964_prof);

    }

    // line 210
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6c52c5d5bc9773de956565bdba3d8490cc7e115aec0290d2914a21772fa2021 = $this->env->getExtension("native_profiler");
        $__internal_e6c52c5d5bc9773de956565bdba3d8490cc7e115aec0290d2914a21772fa2021->enter($__internal_e6c52c5d5bc9773de956565bdba3d8490cc7e115aec0290d2914a21772fa2021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 211
        echo "                ";
        
        $__internal_e6c52c5d5bc9773de956565bdba3d8490cc7e115aec0290d2914a21772fa2021->leave($__internal_e6c52c5d5bc9773de956565bdba3d8490cc7e115aec0290d2914a21772fa2021_prof);

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
        return array (  506 => 211,  500 => 210,  492 => 212,  490 => 210,  486 => 208,  483 => 207,  477 => 206,  468 => 203,  463 => 202,  458 => 201,  453 => 200,  451 => 199,  447 => 197,  439 => 195,  433 => 192,  429 => 191,  424 => 190,  422 => 189,  419 => 188,  413 => 187,  374 => 12,  368 => 11,  356 => 9,  347 => 214,  345 => 187,  333 => 178,  327 => 175,  320 => 171,  315 => 169,  309 => 166,  304 => 164,  298 => 161,  293 => 159,  287 => 156,  268 => 140,  264 => 139,  259 => 137,  252 => 132,  244 => 130,  240 => 128,  238 => 127,  234 => 125,  229 => 123,  225 => 121,  216 => 117,  209 => 115,  203 => 114,  198 => 112,  194 => 110,  192 => 109,  184 => 103,  175 => 100,  172 => 99,  164 => 97,  162 => 96,  157 => 94,  146 => 88,  140 => 87,  137 => 86,  129 => 84,  127 => 83,  122 => 81,  114 => 75,  106 => 74,  99 => 72,  92 => 70,  85 => 69,  83 => 68,  78 => 66,  74 => 64,  72 => 63,  66 => 62,  45 => 45,  43 => 11,  40 => 10,  38 => 9,  29 => 3,  26 => 2,);
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
/* */
/*                    position:relative;*/
/*                 }*/
/* */
/*                 #content {      */
/*                     margin-top: 70px;*/
/*                     padding-bottom: 200px;*/
/*                 }*/
/*                 */
/*                 */
/*             </style>*/
/*             */
/*     	{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <div id="wrapper">*/
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
/*                     	   {% if is_granted('IS_AUTHENTICATED_FULLY')%}*/
/*             					<!-- No mostramos el boton de acceder.-->*/
/*                     		{% else %}*/
/*                     			<a href="{{ path('fos_user_registration_register') }}"><span class="glyphicon glyphicon-plus"></span>{{ 'menu.register'|trans }}</a>*/
/*                     		{% endif %}*/
/*                    		<li>*/
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
/* */
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
