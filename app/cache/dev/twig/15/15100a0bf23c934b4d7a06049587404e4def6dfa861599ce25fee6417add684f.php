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
        $__internal_fe669ac39559303b41b49e3f387dda264adade57855c11761ff3cba481ab5dfd = $this->env->getExtension("native_profiler");
        $__internal_fe669ac39559303b41b49e3f387dda264adade57855c11761ff3cba481ab5dfd->enter($__internal_fe669ac39559303b41b49e3f387dda264adade57855c11761ff3cba481ab5dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
                    \t   ";
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
        echo "                   \t\t<li>
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
        // line 185
        $this->displayBlock('body', $context, $blocks);
        // line 212
        echo "        
    </body>
</html>";
        
        $__internal_fe669ac39559303b41b49e3f387dda264adade57855c11761ff3cba481ab5dfd->leave($__internal_fe669ac39559303b41b49e3f387dda264adade57855c11761ff3cba481ab5dfd_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f3dc3f771418cebd2f37a17e3b1705d19b0cc5ecd5a4e90e413834dc10a9a78 = $this->env->getExtension("native_profiler");
        $__internal_9f3dc3f771418cebd2f37a17e3b1705d19b0cc5ecd5a4e90e413834dc10a9a78->enter($__internal_9f3dc3f771418cebd2f37a17e3b1705d19b0cc5ecd5a4e90e413834dc10a9a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "David Jaén";
        
        $__internal_9f3dc3f771418cebd2f37a17e3b1705d19b0cc5ecd5a4e90e413834dc10a9a78->leave($__internal_9f3dc3f771418cebd2f37a17e3b1705d19b0cc5ecd5a4e90e413834dc10a9a78_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1eb7a7f67f31166968f26a614bfe2f2ec66717f00e037f45f24341b546234f3 = $this->env->getExtension("native_profiler");
        $__internal_a1eb7a7f67f31166968f26a614bfe2f2ec66717f00e037f45f24341b546234f3->enter($__internal_a1eb7a7f67f31166968f26a614bfe2f2ec66717f00e037f45f24341b546234f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a1eb7a7f67f31166968f26a614bfe2f2ec66717f00e037f45f24341b546234f3->leave($__internal_a1eb7a7f67f31166968f26a614bfe2f2ec66717f00e037f45f24341b546234f3_prof);

    }

    // line 185
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7734dc5d0cf64ff3f59899d5cef61422cbe88b4240a85d4c2e170bd63a684b = $this->env->getExtension("native_profiler");
        $__internal_fc7734dc5d0cf64ff3f59899d5cef61422cbe88b4240a85d4c2e170bd63a684b->enter($__internal_fc7734dc5d0cf64ff3f59899d5cef61422cbe88b4240a85d4c2e170bd63a684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 186
        echo "            <div>
                ";
        // line 187
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 188
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                    <a href=\"";
            // line 189
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        ";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                    </a>
                ";
        } else {
            // line 193
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 195
        echo "            </div>

            ";
        // line 197
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 198
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 199
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 200
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 201
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "            ";
        }
        // line 206
        echo "
            <div>
                ";
        // line 208
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 210
        echo "            </div>
        ";
        
        $__internal_fc7734dc5d0cf64ff3f59899d5cef61422cbe88b4240a85d4c2e170bd63a684b->leave($__internal_fc7734dc5d0cf64ff3f59899d5cef61422cbe88b4240a85d4c2e170bd63a684b_prof);

    }

    // line 208
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92ca041849db3a3c79e9c1310cc21a7b31202102fce90b2b4daab8d813d4b9f4 = $this->env->getExtension("native_profiler");
        $__internal_92ca041849db3a3c79e9c1310cc21a7b31202102fce90b2b4daab8d813d4b9f4->enter($__internal_92ca041849db3a3c79e9c1310cc21a7b31202102fce90b2b4daab8d813d4b9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 209
        echo "                ";
        
        $__internal_92ca041849db3a3c79e9c1310cc21a7b31202102fce90b2b4daab8d813d4b9f4->leave($__internal_92ca041849db3a3c79e9c1310cc21a7b31202102fce90b2b4daab8d813d4b9f4_prof);

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
        return array (  504 => 209,  498 => 208,  490 => 210,  488 => 208,  484 => 206,  481 => 205,  475 => 204,  466 => 201,  461 => 200,  456 => 199,  451 => 198,  449 => 197,  445 => 195,  437 => 193,  431 => 190,  427 => 189,  422 => 188,  420 => 187,  417 => 186,  411 => 185,  374 => 12,  368 => 11,  356 => 9,  347 => 212,  345 => 185,  333 => 176,  327 => 173,  320 => 169,  315 => 167,  309 => 164,  304 => 162,  298 => 159,  293 => 157,  287 => 154,  268 => 138,  264 => 137,  259 => 135,  252 => 130,  244 => 128,  240 => 126,  238 => 125,  234 => 123,  229 => 121,  225 => 119,  216 => 115,  209 => 113,  203 => 112,  198 => 110,  194 => 108,  192 => 107,  184 => 101,  175 => 98,  172 => 97,  164 => 95,  162 => 94,  157 => 92,  146 => 86,  140 => 85,  137 => 84,  129 => 82,  127 => 81,  122 => 79,  114 => 73,  106 => 72,  99 => 70,  92 => 68,  85 => 67,  83 => 66,  78 => 64,  74 => 62,  72 => 61,  66 => 60,  45 => 43,  43 => 11,  40 => 10,  38 => 9,  29 => 3,  26 => 2,);
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
