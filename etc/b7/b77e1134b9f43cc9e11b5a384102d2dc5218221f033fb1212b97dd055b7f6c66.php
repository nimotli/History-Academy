<?php

/* lives.show.php */
class __TwigTemplate_7aaf34655e53730a1091827b68a99ba418c2c4374347b69788a0599b93e22142 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "lives.show.php", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footerinc' => array($this, 'block_footerinc'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "دروس مباشرة";
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
        echo "

    <!-- live Content -->
    <div id=\"live-content-wrapper\">
        <div class=\"container-fluid\">
            <h1 align=\"center\">الدروس المباشرة</h1>
            <p align=\"center\">ادارة الدروس المباشرة</p>
            <a href=\"?page=live-create\" class=\"btn btn-success float-right\">درس جديد</a>
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>العنوان</th>
                        <th>الوصف</th>
                        <th>الموعد</th>
                        <th>الثمن</th>
                        <th>الحالة</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lives"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["live"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "description", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "date", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "price", array()), "html", null, true);
            echo " \$</td>
                        <td>
                            ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["live"], "state", array()) == "notDone")) {
                // line 40
                echo "                                لم تنجز بعد
                            ";
            } else {
                // line 42
                echo "                                انتها
                            ";
            }
            // line 44
            echo "                        </td>
                        <td><a class=\"btn btn-warning\" href=\"mvc/controllers/liveController.php?action=live-start&id=";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "id", array()), "html", null, true);
            echo "&as=tutor\">بدأ</a><a class=\"btn btn-secondary\" href=\"mvc/controllers/liveController.php?action=live-start&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "id", array()), "html", null, true);
            echo "&as=student\"> بدأ كمتتبع</a><a class=\"btn btn-primary\" href=\"mvc/controllers/liveController.php?action=update&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "id", array()), "html", null, true);
            echo "\">تغيير</a><a class=\"btn btn-success\"  href=\"mvc/controllers/liveController.php?action=afct&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "id", array()), "html", null, true);
            echo "\">اضافة مستخدم</a><a class=\"btn btn-danger\"  href=\"mvc/controllers/liveController.php?action=stop&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["live"], "id", array()), "html", null, true);
            echo "\">انهاء</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['live'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
        </div>
    </div>
    <form action=\"mvc/controllers/liveController.php\" method=\"post\" id=\"deleteUserForm\">
        <input type=\"hidden\" name=\"route\" value=\"delete\">
        <input type=\"hidden\" name=\"id\" value=\"\" id=\"deleteId\">
    </form>
";
    }

    // line 57
    public function block_footerinc($context, array $blocks = array())
    {
        // line 58
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
   <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "lives.show.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 58,  145 => 57,  133 => 48,  116 => 45,  113 => 44,  109 => 42,  105 => 40,  103 => 39,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  79 => 32,  75 => 31,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lives.show.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\lives.show.php");
    }
}
