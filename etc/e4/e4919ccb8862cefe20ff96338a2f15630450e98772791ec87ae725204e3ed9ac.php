<?php

/* user.create.php */
class __TwigTemplate_58f98da059d8742e8644752e2e5b3ea8ea19befd74ddbf5ca6bdcc61883979a0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "user.create.php", 1);
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
        echo "اضافة مستعمل";
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

    <!-- Page Content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <h1>اضافة مستعمل</h1>
            <p>اضافة مستعمل جديد</p>
            <form method=\"post\" action=\"mvc/controllers/userController.php\">
                <div class=\"form-group\">
                <p align=\"right\">اسم المستعمل</p><input name=\"username\" type=\"text\" class=\"form-control\" placeholder=\"Username\" required>
                </div>
                <div class=\"form-group\">
                <p align=\"right\">كلمة المرور</p><input name=\"password\" type=\"password\" class=\"form-control\" required>
                </div>
                <div class=\"form-group\">
                <p align=\"right\">تأكيد كلمة المرور</p><input type=\"password\" name=\"confirm-password\" class=\"form-control\" required>
                </div>
                ";
        // line 27
        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["session"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["logedinUser"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["admin"] ?? null) : null) == 2)) {
            // line 28
            echo "                <div class=\"form-group\">
                <p align=\"right\">البريد الإلكتروني</p><input type=\"email\" name=\"email\" class=\"form-control\"  required>
                </div>
                ";
        } else {
            // line 32
            echo "                <input type=\"hidden\" name=\"email\" class=\"form-control\" value=\" \" required>
                ";
        }
        // line 34
        echo "                <div class=\"form-group\">
                <p align=\"right\">الاسم</p><input type=\"text\" name=\"name\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">النسب</p><input type=\"text\" name=\"secondName\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">العنوان</p><input type=\"text\" name=\"address\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">الهاتف</p><input type=\"text\" name=\"phone\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">النوع</p><select name=\"type\" class=\"form-control\">
                ";
        // line 48
        if (((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["session"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["logedinUser"] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["admin"] ?? null) : null) == 2)) {
            // line 49
            echo "                        <option value=\"2\">مدير عام</option>
                ";
        }
        // line 51
        echo "                        <option value=\"1\">مدير</option>
                        <option value=\"0\">عميل</option>
                    </select>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"اضافة\">
                <input type=\"hidden\" name=\"route\" value=\"user-create\">
            </form>
        </div>
    </div>
";
    }

    // line 61
    public function block_footerinc($context, array $blocks = array())
    {
        // line 62
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
   <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
   <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "user.create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 62,  118 => 61,  105 => 51,  101 => 49,  99 => 48,  83 => 34,  79 => 32,  73 => 28,  71 => 27,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user.create.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\user.create.php");
    }
}
