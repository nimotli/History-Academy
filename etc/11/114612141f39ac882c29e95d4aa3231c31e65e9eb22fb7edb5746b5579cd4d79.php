<?php

/* page.create.php */
class __TwigTemplate_4e3bb3598e194270197ce0b0ede776e0b8168d295fcbda6eda70dc505343441b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "page.create.php", 1);
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
        echo "

    <!-- Page Content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <h1>Create a new page</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <form method=\"post\" action=\"mvc/controllers/PageController.php\" id=\"pageCreateForm\">
                <div class=\"form-group\">
                    name :<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Page name\">
                </div>
                <div class=\"form-group\">
                    Content :  <textarea id=\"summernote\" name=\"editordata\"></textarea>
                </div>
                
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\" onclick=\"createPage(event)\">
                <input type=\"hidden\" name=\"route\" value=\"page-create\">
                <input type=\"hidden\" name=\"content\" value=\"\" id=\"pageContent\">
            </form>
        </div>
    </div>
";
    }

    // line 32
    public function block_footerinc($context, array $blocks = array())
    {
        // line 33
        echo "
   ";
        // line 34
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>
   <script src=\"assets/js/editorLangage.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "page.create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  80 => 33,  77 => 32,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.create.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\page.create.php");
    }
}
