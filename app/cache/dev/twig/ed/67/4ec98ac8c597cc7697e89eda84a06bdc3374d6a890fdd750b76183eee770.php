<?php

/* ::base.html.twig */
class __TwigTemplate_ed674ec98ac8c597cc7697e89eda84a06bdc3374d6a890fdd750b76183eee770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Softagy Blog</a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        <li><a href=\"blog\">Blog</a></li>
                        <li><a href=\"admin\">Admin ( just a sample CRUD )</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li class=\"divider\"></li>
                                <li class=\"dropdown-header\">Nav header</li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    ";
        // line 57
        if ((!array_key_exists("name", $context))) {
            // line 58
            echo "                    <form class=\"navbar-form navbar-right\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("login_page");
            echo "\">
                        <div class=\"form-group\">
                            <input type=\"text\" name =\"username\" placeholder=\"User Name\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"form-control\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
                    </form>
                     ";
        } else {
            // line 68
            echo "                    <div class=\"navbar-form navbar-right\" style=\"color: white\" >Welcome ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout_action");
            echo "\"> Logout </a></div>
                    ";
        }
        // line 70
        echo "                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class=\"jumbotron\">

 ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "            
            <!-- /container -->        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
            <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.10.1.min.js\"><\\/script>')</script>

            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 77,  148 => 9,  140 => 84,  135 => 82,  129 => 78,  127 => 77,  118 => 70,  110 => 68,  96 => 58,  94 => 57,  57 => 23,  52 => 21,  48 => 20,  38 => 13,  31 => 9,  21 => 1,);
    }
}
