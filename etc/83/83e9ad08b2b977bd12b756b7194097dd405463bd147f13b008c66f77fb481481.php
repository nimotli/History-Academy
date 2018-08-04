<?php

/* course.content.edit.php */
class __TwigTemplate_13a32f592d87cd5e1399ba1d61e7d7ae3bc738e5eb945cc7e2c5cf52b3bce928 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "course.content.edit.php", 1);
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
        echo "admin";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <link href=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <!-- Page Content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <h1>edit course content</h1>
            <p>dsfds</p>
            <form method=\"post\" action=\"mvc/controllers/courseController.php\" id=\"contentCreateForm\">
                <div class=\"form-group\">
                    name :<input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["coursePart"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["name"] ?? null) : null), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    description :<textarea name=\"description\"  class=\"form-control\" >";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["coursePart"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["description"] ?? null) : null), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"form-group\">
                    Content :  <textarea id=\"summernote\" name=\"editordata\">";
        // line 23
        echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["coursePart"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["content"] ?? null) : null);
        echo "</textarea>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" onclick=\"createContent(event)\">
                <input type=\"hidden\" name=\"route\" value=\"content-update\">
                <input type=\"hidden\" name=\"content\" value=\"\" id=\"pageContent\">
                <input type=\"hidden\" name=\"course\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["courseId"] ?? null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["coursePart"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["id"] ?? null) : null), "html", null, true);
        echo "\">
            </form>
        </div>
    </div>
";
    }

    // line 34
    public function block_footerinc($context, array $blocks = array())
    {
        // line 35
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>
   <script src=\"assets/js/editorLangage.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "course.content.edit.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  94 => 34,  85 => 29,  81 => 28,  73 => 23,  67 => 20,  61 => 17,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course.content.edit.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\course.content.edit.php");
    }
}
