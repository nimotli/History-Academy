<?php

/* course.content.show.php */
class __TwigTemplate_1bfa66383c5e418670a1066588aa0ee7fac16451e1df9f7c52b2a2e01b09af9b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "course.content.show.php", 1);
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
        echo "TITILE";
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

    <!-- coursePart Content -->
    <div id=\"coursePart-content-wrapper\">
        <div class=\"container-fluid\">
            <h1>Course Part</h1>
            <p>Buffer text.</p>
            <a href=\"mvc/controllers/courseController.php?action=content-create&id=";
        // line 17
        echo twig_escape_filter($this->env, ($context["courseId"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-success float-right\">Create coursePart</a>
            <table id=\"example\" class=\"table table-striped table-bordered\" style=\"width:100%\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coursePart"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coursePart"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coursePart"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coursePart"], "description", array())) > 100)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["coursePart"], "description", array()), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["coursePart"], "description", array()))), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-primary\" href=\"mvc/controllers/courseController.php?action=updateContent&id=";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coursePart"], "id", array()), "html", null, true);
            echo "\">Update</a>
                            <a class=\"btn btn-danger\"  onclick=\"deleteEntity(event,";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coursePart"], "id", array()), "html", null, true);
            echo ")\">Delete</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coursePart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>
        </div>
    </div>
    <form action=\"mvc/controllers/courseController.php\" method=\"post\" id=\"deleteUserForm\">
        <input type=\"hidden\" name=\"route\" value=\"deletecontent\">
        <input type=\"hidden\" name=\"id\" value=\"\" id=\"deleteId\">
        <input type=\"hidden\" name=\"course\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["courseId"] ?? null), "html", null, true);
        echo "\">
    </form>
";
    }

    // line 49
    public function block_footerinc($context, array $blocks = array())
    {
        // line 50
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
   <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "course.content.show.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  125 => 49,  118 => 46,  109 => 39,  99 => 35,  95 => 34,  90 => 32,  86 => 31,  82 => 30,  79 => 29,  75 => 28,  61 => 17,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course.content.show.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\course.content.show.php");
    }
}
