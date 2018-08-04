<?php

/* courseMain.php */
class __TwigTemplate_6c2340d7d8bfa2b89c2610b42ddc1674a1087570bbdb83b86968abe77f1b22b4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/nohero.twig", "courseMain.php", 1);
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
                <center><h1>Courses</h1></center>
                <div style=\"background-color:#fed136;\" class=\"py-3 rounded\">
                    <form action=\"\">
                        <div class=\"col-md-4\">
                            Category:
                            <select name=\"categories\" id=\"categoriesFilterCourse\" class=\"form-control my-2\">
                                <option value=\"-1\">------</option>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["category"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["category"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["name"] ?? null) : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                            </select>
                        </div>
                    </form>
                </div>
                <div class=\"row py-3\" id=\"courseHolder\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 31
            echo "                        <div class=\"col-xl-4 my-2\" >
                            <div class=\"card\" style=\"width: 18rem;\">
                                <div class=\"card-header bg-dark\">
                                    <a href=\"mvc/controllers/courseController.php?action=courseParts&id=";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", array()), "html", null, true);
            echo "</a>
                                </div>
                                <div class=\"card-body\">
                                    <p>";
            // line 37
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", array())) > 100)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", array()), 0, 100) . "...")) : (twig_get_attribute($this->env, $this->source, $context["course"], "description", array()))), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\" bg-dark rounded-bottom pt-3\" style>
                                    <center><p style=\"color:#fed136;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "price", array()), "html", null, true);
            echo " \$</p></center>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </div>
            </div>
        </div>
    </div>

";
    }

    // line 51
    public function block_footerinc($context, array $blocks = array())
    {
        // line 52
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "courseMain.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 52,  131 => 51,  122 => 45,  111 => 40,  105 => 37,  97 => 34,  92 => 31,  88 => 30,  81 => 25,  70 => 23,  66 => 22,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "courseMain.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\courseMain.php");
    }
}
