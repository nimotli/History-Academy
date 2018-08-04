<?php

/* register.twig */
class __TwigTemplate_3e9bf8795f30a713c369ccbdf616b8349609119cabadd90b951361b267b452a7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/nohero.twig", "register.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/nohero.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <section class=\"py-5\">
    ";
        // line 11
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        <div class=\"container\">
            <h1>register</h1>
            <form method=\"post\" action=\"mvc/controllers/userController.php\">
                <div class=\"form-group\">
                    username :<input name=\"username\" type=\"text\" class=\"form-control\" placeholder=\"Username\">
                </div>
                <div class=\"form-group\">
                    password :<input name=\"password\" type=\"password\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    Confirm password :<input type=\"password\" name=\"confirm-password\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    email :<input type=\"email\" name=\"email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    first name :<input type=\"text\" name=\"name\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    second name :<input type=\"text\" name=\"secondName\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    address :<input type=\"text\" name=\"address\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    phone number :<input type=\"text\" name=\"phone\" class=\"form-control\">
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"register\">
                <input type=\"hidden\" name=\"route\" value=\"register\">
            </form>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  48 => 9,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\register.twig");
    }
}
