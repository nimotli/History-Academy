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
        <img src=\"assets/img/logo.png\" height=\"40px\"><a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">";
        // line 3
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["sets"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["siteName"] ?? null) : null), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fa fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav text-uppercase ml-auto\">
                
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=home\">البداية</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=courses-p\">دروس</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=courses-l\">دروس مباشرة</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link js-scroll-trigger\" href=\"?page=analysis\">تحليل</a>
                </li>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" onclick=\"renderPage(";
            // line 25
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["page"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["id"] ?? null) : null), "html", null, true);
            echo ",event)\" >";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["page"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["name"] ?? null) : null), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        if ((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["session"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["logedin"] ?? null) : null)) {
            // line 29
            echo "                    ";
            if (((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["session"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["logedinUser"] ?? null) : null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["admin"] ?? null) : null) > 0)) {
                // line 30
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link js-scroll-trigger\" href=\"?page=admin\">الإدارة</a>
                        </li>
                    ";
            }
            // line 34
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"?page=profile&id=";
            // line 35
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["session"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["logedinUser"] ?? null) : null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["id"] ?? null) : null), "html", null, true);
            echo "\">صفحتي</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"mvc/controllers/userController.php?action=logout\">تسجيل الخروج</a>
                    </li>
                ";
        } else {
            // line 41
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"?page=login\">تسجيل الدخول</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scroll-trigger\" href=\"?page=register\">تسجيل</a>
                    </li>
                ";
        }
        // line 48
        echo "            </ul>
        </div>
        <form method=\"post\" action=\"mvc/controllers/pageController.php\" id=\"pageForm\">
            <input type=\"hidden\" name=\"route\" value=\"pageRender\" id=\"pageRender\">
            <input type=\"hidden\" name=\"pageId\" value=\"\" id=\"pageId\" >
        </form>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "includes/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 48,  92 => 41,  83 => 35,  80 => 34,  74 => 30,  71 => 29,  68 => 28,  57 => 25,  54 => 24,  50 => 23,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/navbar.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\includes\\navbar.twig");
    }
}
