<?php

/* category.edit.php */
class __TwigTemplate_104c2051c91ad3f5274d45d22311d3ecb7e96451bbe9140c4de17dda47d26951 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "category.edit.php", 1);
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
                    name :<input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["category"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["name"] ?? null) : null), "html", null, true);
        echo "\">
                </div>
                
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" >
                <input type=\"hidden\" name=\"route\" value=\"update\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["category"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["id"] ?? null) : null), "html", null, true);
        echo "\" >
            </form>
        </div>
    </div>
";
    }

    // line 28
    public function block_footerinc($context, array $blocks = array())
    {
        // line 29
        echo "
   ";
        // line 30
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "category.edit.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  80 => 29,  77 => 28,  68 => 23,  60 => 18,  49 => 9,  46 => 8,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "category.edit.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\category.edit.php");
    }
}
