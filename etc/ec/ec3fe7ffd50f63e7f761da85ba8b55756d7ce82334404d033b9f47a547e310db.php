<?php

/* users.php */
class __TwigTemplate_3a56986c30df21c3b978af55025ed97e1f376de4241355a6840143e00105c168 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "users.php", 1);
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
        echo "المستخدمين";
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
            <h1>المستخدمين</h1>
            <p>ادارة المستخدمين</p>
            <a href=\"?page=user-create\" class=\"btn btn-success float-right\">مستخدم جديد</a>
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        ";
        // line 22
        if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["session"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["logedinUser"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["admin"] ?? null) : null) == 2)) {
            echo "<th>البريد الالكتروني</th>";
        }
        // line 23
        echo "                        <th>اسم المستخدم</th>
                        <th>الاسم</th>
                        <th>النسب</th>
                        <th>العنوان</th>
                        <th>رقم الهاتف</th>
                        <th>النوع</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
                        ";
            // line 36
            if (((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["session"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["logedinUser"] ?? null) : null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["admin"] ?? null) : null) == 2)) {
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
                echo "</td>";
            }
            // line 37
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "secondName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", array()), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "admin", array()) == 2)) {
                // line 44
                echo "                            مدير عام
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["user"], "admin", array()) == 1)) {
                // line 46
                echo "                            مدير
                        ";
            } else {
                // line 47
                echo " 
                            عميل 
                        ";
            }
            // line 50
            echo "                        </td>
                        <td><a class=\"btn btn-primary\" href=\"mvc/controllers/userController.php?action=edit&id=";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">تغيير</a><a class=\"btn btn-danger\"  onclick=\"deleteEntity(event,";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo ")\">محو</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
        </div>
    </div>
    <form action=\"mvc/controllers/userController.php\" method=\"post\" id=\"deleteUserForm\">
        <input type=\"hidden\" name=\"route\" value=\"delete\">
        <input type=\"hidden\" name=\"id\" value=\"\" id=\"deleteId\">
    </form>
";
    }

    // line 63
    public function block_footerinc($context, array $blocks = array())
    {
        // line 64
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
        return "users.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 64,  163 => 63,  151 => 54,  140 => 51,  137 => 50,  132 => 47,  128 => 46,  126 => 45,  123 => 44,  121 => 43,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  99 => 37,  93 => 36,  89 => 35,  86 => 34,  82 => 33,  70 => 23,  66 => 22,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\users.php");
    }
}
