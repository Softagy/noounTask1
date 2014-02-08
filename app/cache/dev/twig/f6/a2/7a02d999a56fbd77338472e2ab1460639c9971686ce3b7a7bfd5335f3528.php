<?php

/* LoginLoginBundle:Default:index.html.twig */
class __TwigTemplate_f6a27a02d999a56fbd77338472e2ab1460639c9971686ce3b7a7bfd5335f3528 extends Twig_Template
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
        <div class=\"col-md-2 column\">
            <img alt=\"140x140\" src=\"http://lorempixel.com/140/140/\" class=\"img-circle\" />
        </div>
        <div class=\"col-md-10 column\">
            <h3>
                h3. Lorem ipsum dolor sit amet.
            </h3>
            <p>
                Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
