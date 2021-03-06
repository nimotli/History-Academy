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
        echo " - ";
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["sets"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["siteName"] ?? null) : null), "html", null, true);
        echo "</title>
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
    
        <script src=\"vendor/jquery/jquery.min.js\"></script>
        <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>
        <script src=\"assets/js/jqBootstrapValidation.js\"></script>
        <script src=\"assets/js/admin.js\"></script>
    ";
        // line 45
        $this->displayBlock('footerinc', $context, $blocks);
        // line 47
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

    // line 45
    public function block_footerinc($context, array $blocks = array())
    {
        // line 46
        echo "    ";
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
        return array (  119 => 46,  116 => 45,  109 => 29,  106 => 28,  101 => 22,  96 => 18,  93 => 17,  88 => 47,  86 => 45,  73 => 35,  67 => 31,  65 => 28,  60 => 26,  51 => 22,  47 => 20,  45 => 17,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/admin.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\layouts\\admin.twig");
    }
}
