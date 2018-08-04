<?php

/* category.create.php */
class __TwigTemplate_ca03ed41f88bdc2a9132384d3e616f10d30723ae871d380202a2571dcb3fb4ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "category.create.php", 1);
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
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "

    <!-- category Content -->
    <div id=\"category-content-wrapper\">
        <div class=\"container-fluid\">
            <h1>Create a new category</h1>
            <p>Buffer text</p>
            <form method=\"post\" action=\"mvc/controllers/categoryController.php\" id=\"categoryCreateForm\">
                <div class=\"form-group\">
                    name :<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"category name\">
                </div>
                
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Create\" >
                <input type=\"hidden\" name=\"route\" value=\"category-create\">
            </form>
        </div>
    </div>
";
    }

    // line 27
    public function block_footerinc($context, array $blocks = array())
    {
        // line 28
        echo "
   ";
        // line 29
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "category.create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  73 => 28,  70 => 27,  49 => 9,  46 => 8,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "category.create.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\category.create.php");
    }
}
