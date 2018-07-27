<?php

/* includes/footer.twig */
class __TwigTemplate_bf571445fcf79da0f2fda52af0db80577523409f06741082b64abaf9f7327c8d extends Twig_Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-md-4\">
            <span class=\"copyright\">Copyright &copy; Your Website 2018</span>
        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline social-buttons\">
            <li class=\"list-inline-item\">
                <a href=\"#\">
                <i class=\"fa fa-twitter\"></i>
                </a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">
                <i class=\"fa fa-facebook\"></i>
                </a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">
                <i class=\"fa fa-linkedin\"></i>
                </a>
            </li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <ul class=\"list-inline quicklinks\">
            <li class=\"list-inline-item\">
                <a href=\"#\">Privacy Policy</a>
            </li>
            <li class=\"list-inline-item\">
                <a href=\"#\">Terms of Use</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "includes/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/footer.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\includes\\footer.twig");
    }
}
