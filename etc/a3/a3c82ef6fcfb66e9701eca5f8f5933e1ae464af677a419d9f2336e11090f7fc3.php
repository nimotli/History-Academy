<?php

/* layouts/admin.twig */
class __TwigTemplate_2011f228547139245a2b2efaf6faa0831cda7043ee3603f574590415ff7ef6b4 extends Twig_Template
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

    
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    ";
        // line 17
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    <link href=\"assets/css/admin.css\" rel=\"stylesheet\">

    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
</head>
<body id=\"page-top\">
    <div id=\"wrapper\" class=\"toggled\">
    ";
        // line 26
        echo twig_include($this->env, $context, "includes/sidebar.twig");
        echo "
    <div id=\"container bg-light\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "    </div>

    <div id=\"footer\">
        
        ";
        // line 35
        echo twig_include($this->env, $context, "includes/adminfooter.twig");
        echo "

    </div>
</div>
    ";
        // line 39
        $this->displayBlock('footerinc', $context, $blocks);
        // line 46
        echo "</body>
</html>";
    }

    // line 17
    public function block_head($context, array $blocks = array())
    {
        // line 18
        echo "
    ";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "            ";
        echo twig_include($this->env, $context, "includes/alerts.twig");
        echo "
        ";
    }

    // line 39
    public function block_footerinc($context, array $blocks = array())
    {
        // line 40
        echo "        <script src=\"vendor/jquery/jquery.min.js\"></script>
        <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>
        <script src=\"assets/js/jqBootstrapValidation.js\"></script>
        <script src=\"assets/js/admin.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layouts/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  108 => 39,  101 => 29,  98 => 28,  93 => 22,  88 => 18,  85 => 17,  80 => 46,  78 => 39,  71 => 35,  65 => 31,  63 => 28,  58 => 26,  51 => 22,  47 => 20,  45 => 17,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/admin.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\layouts\\admin.twig");
    }
}
