<?php

/* course.content.create.php */
class __TwigTemplate_ba9d558297ef2c3894413dbcde7510bffe6064f6b8c3c3c01709004ef9f32a3d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "course.content.create.php", 1);
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
            <h1>Create course content</h1>
            <p>dsfds</p>
            <form method=\"post\" action=\"mvc/controllers/courseController.php\" id=\"contentCreateForm\">
                <div class=\"form-group\">
                    name :<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Page name\">
                </div>
                <div class=\"form-group\">
                    description :<textarea name=\"description\"  class=\"form-control\" ></textarea>
                </div>
                <div class=\"form-group\">
                    Content :  <textarea id=\"summernote\" name=\"editordata\"></textarea>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\" onclick=\"createContent(event)\">
                <input type=\"hidden\" name=\"route\" value=\"content-create\">
                <input type=\"hidden\" name=\"content\" value=\"\" id=\"pageContent\">
                <input type=\"hidden\" name=\"course\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["courseId"] ?? null), "html", null, true);
        echo "\">
            </form>
        </div>
    </div>
";
    }

    // line 33
    public function block_footerinc($context, array $blocks = array())
    {
        // line 34
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>
   <script src=\"assets/js/editorLangage.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "course.content.create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  81 => 33,  72 => 28,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "course.content.create.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\course.content.create.php");
    }
}
