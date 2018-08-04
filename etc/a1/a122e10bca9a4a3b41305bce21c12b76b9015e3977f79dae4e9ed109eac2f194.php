<?php

/* login.twig */
class __TwigTemplate_d37e56b009590c6374be130f45bb65fbf11955c7fd9580d11e749fd94cd15f57 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/nohero.twig", "login.twig", 1);
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
            <h1>تسجيل الدخول</h1>
            <form method=\"post\" action=\"mvc/controllers/userController.php\">
                <div class=\"form-group\">
                    username :<input type=\"text\" name=\"username\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    password :<input type=\"password\" name=\"password\" class=\"form-control\">
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"login\">
                <input type=\"hidden\" name=\"route\" value=\"login\">
            </form>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
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
        return new Twig_Source("", "login.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\login.twig");
    }
}
