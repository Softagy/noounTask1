<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_d6dee238b9591b78359291719c248c707b8cb1422f7e7a99254f92f878ddf65a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Please Login First
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">

    <div class=\"row clearfix\">
        <div class=\"col-md-4 column\">
        </div>
        <div class=\"col-md-4 column\">
            ";
        // line 12
        if (array_key_exists("msg", $context)) {
            // line 13
            echo "            <div class=\"alert-danger fade in\">
        ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "
            </div>
    ";
        }
        // line 17
        echo "            
            <div class=\"row clearfix\">
                <div class=\"col-md-12 column\">
                    
                    <form role=\"form\" method=\"POST\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("login_page");
        echo "\">
                        <div class=\"form-group\">
                            <label for=\"username\">User Name</label><input type=\"text\" name =\"username\" class=\"form-control\" id=\"username\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label><input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" />
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    
                    
                   
                    
                </div>
            </div>
        </div>
        <div class=\"col-md-4 column\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  59 => 17,  53 => 14,  50 => 13,  48 => 12,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
