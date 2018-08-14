<?php

/* user.edit.php */
class __TwigTemplate_01da28615a8e0e94451084afa98ddf61235fcb8ba701fb63443416263400e88f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "user.edit.php", 1);
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
            <h1>تعديل مستعمل</h1>
            <p>تعديل مستعمل </p>
            <form method=\"post\" action=\"mvc/controllers/userController.php\">
            <input name=\"id\" type=\"hidden\"  value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\" >
                <div class=\"form-group\">
                <p align=\"right\">اسم المستعمل</p><input name=\"username\" type=\"text\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "\" required>
                </div>
                <input name=\"password\" type=\"hidden\"  value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "password", array()), "html", null, true);
        echo "\" >
                </div>
                ";
        // line 24
        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["session"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["logedinUser"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["admin"] ?? null) : null) == 2)) {
            // line 25
            echo "                <div class=\"form-group\">
                <p align=\"right\">البريد الإلكتروني</p><input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
            echo "\" required>
                </div>
                ";
        } else {
            // line 29
            echo "                <input type=\"hidden\" name=\"email\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
            echo "\" required>
                ";
        }
        // line 31
        echo "                <div class=\"form-group\">
                <p align=\"right\">الاسم</p><input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">النسب</p><input type=\"text\" name=\"secondName\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "secondName", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">الهاتف</p><input type=\"text\" name=\"phone\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">العنوان</p><input type=\"text\" name=\"address\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                <p align=\"right\">النوع</p><select name=\"type\" class=\"form-control\">
                ";
        // line 45
        if (((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["session"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["logedinUser"] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["admin"] ?? null) : null) == 2)) {
            // line 46
            echo "                        <option value=\"2\">مدير عام</option>
                ";
        }
        // line 48
        echo "                        <option value=\"1\">مدير</option>
                        <option value=\"0\">عميل</option>
                    </select>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"حفض\">
                <input type=\"hidden\" name=\"route\" value=\"user-update\">
            </form>
        </div>
    </div>
";
    }

    // line 58
    public function block_footerinc($context, array $blocks = array())
    {
        // line 59
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
        return "user.edit.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  141 => 58,  128 => 48,  124 => 46,  122 => 45,  115 => 41,  109 => 38,  103 => 35,  97 => 32,  94 => 31,  88 => 29,  82 => 26,  79 => 25,  77 => 24,  72 => 22,  67 => 20,  62 => 18,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user.edit.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\user.edit.php");
    }
}
