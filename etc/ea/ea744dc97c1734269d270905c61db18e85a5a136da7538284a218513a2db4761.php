<?php

/* course.content.php */
class __TwigTemplate_0241227bcd67bec0de204b61f763c117a4a73f1b2dd2d07dda381d2da1737d1c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/nohero.twig", "course.content.php", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footerinc' => array($this, 'block_footerinc'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/nohero.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "admin";
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
        <div class=\"container\">
            <div style=\"padding-top:80px;padding-bottom:50px;\">
                <center><h1>course Parts</h1></center>
                <table class=\"table table-striped\">
                    <thead class=\"thead-dark\">
                        <tr>
                        <th scope=\"col\">What you will learn in this course</th>
                        </tr>
                    </thead>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coursepart"]) {
            // line 23
            echo "                        <tr><td scope=\"row\"><a href=\"mvc/controllers/courseController.php?action=showCoursePart&id=";
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["coursepart"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["coursepart"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["name"] ?? null) : null), "html", null, true);
            echo "</a></td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coursepart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </table>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 32
    public function block_footerinc($context, array $blocks = array())
    {
        // line 33
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "course.content.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  91 => 32,  81 => 25,  70 => 23,  66 => 22,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course.content.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\course.content.php");
    }
}
