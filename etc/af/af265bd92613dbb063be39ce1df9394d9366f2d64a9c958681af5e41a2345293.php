<?php

/* includes/sidebar.twig */
class __TwigTemplate_a3623681150067492110897fe978a83df8f0dc630a080c240ec5f954079f78d1 extends Twig_Template
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
        echo "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar-nav\">
        <li class=\"sidebar-brand\">
            <a href=\"#menu-toggle\" id=\"menu-toggle\"><i class=\"fa fa-bars\"></i>&nbsp;&nbsp;&nbsp;الإدارة</a>
        </li>
        <li>
        <a href=\"#\"></a>
        </li>
        <li>
        <a href=\"?page=home\"><i class=\"fa fa-archive\"></i>&nbsp;&nbsp;&nbsp;الموقع الرئيسي</a>
        </li>
        <li>
        <a href=\"mvc/controllers/userController.php?action=show\"><i class=\"fa fa-address-book\"></i>&nbsp;&nbsp;&nbsp;المستخدمين</a>
        </li>
        <li>
        <a href=\"mvc/controllers/pageController.php?action=show\"><i class=\"fa fa-sticky-note-o\"></i>&nbsp;&nbsp;&nbsp;الصفحات</a>
        </li>
        <li>
        <a href=\"mvc/controllers/categoryController.php?action=show\"><i class=\"fa fa-server\"></i>&nbsp;&nbsp;&nbsp;الفئات</a>
        </li>
        <li>
        <a href=\"mvc/controllers/courseController.php?action=show\"><i class=\"fa fa-newspaper-o\"></i>&nbsp;&nbsp;&nbsp;الدروس</a>
        </li>
        <li>
        <a href=\"mvc/controllers/analysisController.php?action=show\"><i class=\"fa fa-map-o\"></i>&nbsp;&nbsp;&nbsp;التحاليل</a>
        </li>
        <li>
        <a href=\"mvc/controllers/liveController.php?action=show\"><i class=\"fa fa-archive\"></i>&nbsp;&nbsp;&nbsp;الدروس المباشرة</a>
        </li>
        <li>
        <a href=\"mvc/controllers/settingController.php?action=show\"><i class=\"fa fa-gear\"></i>&nbsp;&nbsp;&nbsp;اعدادات</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "includes/sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/sidebar.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\includes\\sidebar.twig");
    }
}
