<?php

/* layouts/nohero.twig */
class __TwigTemplate_a1a0b1f88576aa26176cb01d2de366a3bd5dcb1a6f92759c249f374fdf0e94ab extends Twig_Template
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
<html lang=\"ar\" dir=\"rtl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["sets"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["siteDescription"] ?? null) : null), "html", null, true);
        echo "\">
    <meta name=\"Keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["sets"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["siteKeywords"] ?? null) : null), "html", null, true);
        echo "\">
    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href=\"assets/css/agency.min.css\" rel=\"stylesheet\">

    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["sets"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["siteName"] ?? null) : null), "html", null, true);
        echo "</title>
</head>
<body id=\"page-top\">

    ";
        // line 26
        echo twig_include($this->env, $context, "includes/navbar.twig");
        echo "

    ";
        // line 28
        $this->displayBlock('hero', $context, $blocks);
        // line 35
        echo "
    <div id=\"container bg-light\">
        
        
        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    </div>

    <div id=\"footer\">
        
        ";
        // line 46
        echo twig_include($this->env, $context, "includes/contact.twig");
        echo "
        ";
        // line 47
        echo twig_include($this->env, $context, "includes/footer.twig");
        echo "

    </div>

    ";
        // line 51
        $this->displayBlock('footerinc', $context, $blocks);
        // line 62
        echo "</body>
</html>";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
    }

    // line 28
    public function block_hero($context, array $blocks = array())
    {
        // line 29
        echo "        <header class=\"masthead\">
            <div class=\"container\">
                -
            </div>
        </header>
    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "        ";
        echo twig_include($this->env, $context, "includes/alerts.twig");
        echo "
        ";
    }

    // line 51
    public function block_footerinc($context, array $blocks = array())
    {
        // line 52
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
        return "layouts/nohero.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  141 => 51,  134 => 40,  131 => 39,  122 => 29,  119 => 28,  114 => 22,  109 => 10,  106 => 9,  101 => 62,  99 => 51,  92 => 47,  88 => 46,  82 => 42,  80 => 39,  74 => 35,  72 => 28,  67 => 26,  58 => 22,  46 => 12,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/nohero.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\layouts\\nohero.twig");
    }
}
