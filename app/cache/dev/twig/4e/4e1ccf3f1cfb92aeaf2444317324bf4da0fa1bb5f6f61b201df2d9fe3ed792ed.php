<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_36a4d7459eeead4d1316053f13d4578cbb1605e57e669ffc11c670a6e11791fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a16d438aee1b674681c4fe4c9ff0c384bda3e3ddb8b4cae21a187c84dbd2cca5 = $this->env->getExtension("native_profiler");
        $__internal_a16d438aee1b674681c4fe4c9ff0c384bda3e3ddb8b4cae21a187c84dbd2cca5->enter($__internal_a16d438aee1b674681c4fe4c9ff0c384bda3e3ddb8b4cae21a187c84dbd2cca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16d438aee1b674681c4fe4c9ff0c384bda3e3ddb8b4cae21a187c84dbd2cca5->leave($__internal_a16d438aee1b674681c4fe4c9ff0c384bda3e3ddb8b4cae21a187c84dbd2cca5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85a15bc9d276ec6fe6f6feb8916487dec2ea5b4de704a2f13a37d166ddb21a56 = $this->env->getExtension("native_profiler");
        $__internal_85a15bc9d276ec6fe6f6feb8916487dec2ea5b4de704a2f13a37d166ddb21a56->enter($__internal_85a15bc9d276ec6fe6f6feb8916487dec2ea5b4de704a2f13a37d166ddb21a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div id=\"content\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-5\">
\t\t\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t    \t<div class=\"col-sm-3\">
\t\t\t    \t\t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t    \t</div>
\t\t\t    </div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t\t\t<label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>\t\t    \t\t\t
\t\t    \t\t</div>
\t\t    \t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-sm-2\"></div>
\t\t\t    \t<div class=\"col-sm-3\">
\t\t\t    \t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t    \t</div>
\t\t\t    </div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_85a15bc9d276ec6fe6f6feb8916487dec2ea5b4de704a2f13a37d166ddb21a56->leave($__internal_85a15bc9d276ec6fe6f6feb8916487dec2ea5b4de704a2f13a37d166ddb21a56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  87 => 31,  75 => 22,  68 => 18,  63 => 16,  57 => 13,  53 => 12,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div id="content">*/
/* 	<div class="row">*/
/* 		<div class="col-sm-5">*/
/* 			<form action="{{ path("fos_user_security_check") }}" method="post" class="form-horizontal">*/
/* 			    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="username">{{ 'security.login.username'|trans }}</label>*/
/* 					<div class="col-sm-3">*/
/* 						<input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 			    	<label class="col-sm-2 control-label" for="password">{{ 'security.login.password'|trans }}</label>*/
/* 			    	<div class="col-sm-3">*/
/* 			    		<input class="form-control" type="password" id="password" name="_password" required="required" />*/
/* 			    	</div>*/
/* 			    </div>*/
/* 				<div class="form-group">*/
/* 					<div class="col-sm-offset-2 col-sm-10">*/
/* 						<div class="checkbox">*/
/* 							<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 							<label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* 						</div>		    			*/
/* 		    		</div>*/
/* 		    	</div>*/
/* 				<div class="form-group">*/
/* 					<div class="col-sm-2"></div>*/
/* 			    	<div class="col-sm-3">*/
/* 			    		<input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* 			    	</div>*/
/* 			    </div>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
