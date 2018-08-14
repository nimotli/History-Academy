<?php

/* includes/contact.twig */
class __TwigTemplate_40ee2cb9cd72bf960c892cd1848f4e86fb3106f8e97057a8c5683ab71fa47f8a extends Twig_Template
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
        echo "<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            <h2 class=\"section-heading text-uppercase\">تواصل معنا</h2>
            <h3 class=\"section-subheading text-muted\">سنجيبك في أقرب وقت</h3>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-lg-12\">
            <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"اسمك *\" required=\"required\" data-validation-required-message=\"المرجو ادخال اسمك\">
                    <p class=\"help-block text-danger\"></p>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"بريدك الإلكتروني *\" required=\"required\" data-validation-required-message=\"المرجو ادخال بريدك الإلكتروني\">
                    <p class=\"help-block text-danger\"></p>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"رقم هاتفك *\" required=\"required\" data-validation-required-message=\"المرجو ادخال رقم هاتفك\">
                    <p class=\"help-block text-danger\"></p>
                </div>
                </div>
                <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <textarea class=\"form-control\" id=\"message\" placeholder=\"رسالتك *\" required=\"required\" data-validation-required-message=\"المرجو ادخال رسالتك\"></textarea>
                    <p class=\"help-block text-danger\"></p>
                </div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"col-lg-12 text-center\">
                <div id=\"success\"></div>
                <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\" type=\"submit\">ارسال</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "includes/contact.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/contact.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\includes\\contact.twig");
    }
}
