<?php

/* includes/navbar.twig */
class __TwigTemplate_d416df84de5dbb6d8308df1ee23f8f001ca0c2067a48f06a1923c278b60bfdcf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav text-uppercase ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=home\">home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"#portfolio\">Portfolio</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=login\">login</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=register\">register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "includes/navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/navbar.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\includes\\navbar.twig");
    }
}
