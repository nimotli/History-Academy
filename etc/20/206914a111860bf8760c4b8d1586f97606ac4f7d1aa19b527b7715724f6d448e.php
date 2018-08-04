<?php

/* layouts/base.twig */
class __TwigTemplate_6fb6b70f02e897adabba3e256581a05409ef963e51b6fe9c8323225cffeadc28 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'hero' => array($this, 'block_hero'),
            'content' => array($this, 'block_content'),
            'footerinc' => array($this, 'block_footerinc'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href=\"assets/css/agency.min.css\" rel=\"stylesheet\">

    <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
</head>
<body id=\"page-top\">

    ";
        // line 25
        echo twig_include($this->env, $context, "includes/navbar.twig");
        echo "

    ";
        // line 27
        $this->displayBlock('hero', $context, $blocks);
        // line 38
        echo "
    <div id=\"container bg-light\">
        
        
        ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>

    <div id=\"footer\">

        ";
        // line 49
        echo twig_include($this->env, $context, "includes/contact.twig");
        echo "

        ";
        // line 51
        echo twig_include($this->env, $context, "includes/footer.twig");
        echo "

    </div>

    ";
        // line 55
        $this->displayBlock('footerinc', $context, $blocks);
        // line 66
        echo "</body>
</html>";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_hero($context, array $blocks = array())
    {
        // line 28
        echo "        <header class=\"masthead\">
            <div class=\"container\">
                <div class=\"intro-text\">
                    <div class=\"intro-lead-in\">Welcome To Our website!</div>
                    <div class=\"intro-heading text-uppercase\">It's Nice To Meet You</div>
                    <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
                </div>
            </div>
        </header>
    ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        // line 43
        echo "        ";
        echo twig_include($this->env, $context, "includes/alerts.twig");
        echo "
        ";
    }

    // line 55
    public function block_footerinc($context, array $blocks = array())
    {
        // line 56
        echo "        <script src=\"vendor/jquery/jquery.min.js\"></script>
        <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

        <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

        <script src=\"assets/js/jqBootstrapValidation.js\"></script>
        <script src=\"assets/js/contact_me.js\"></script>

        <script src=\"assets/js/agency.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layouts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  137 => 55,  130 => 43,  127 => 42,  114 => 28,  111 => 27,  106 => 21,  101 => 9,  98 => 8,  93 => 66,  91 => 55,  84 => 51,  79 => 49,  73 => 45,  71 => 42,  65 => 38,  63 => 27,  58 => 25,  51 => 21,  39 => 11,  37 => 8,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/base.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\layouts\\base.twig");
    }
}
