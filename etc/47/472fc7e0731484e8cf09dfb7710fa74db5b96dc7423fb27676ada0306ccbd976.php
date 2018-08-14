<?php

/* admin.php */
class __TwigTemplate_0c8f24d40507cd897114b55f44cd6dbafaeea28c63d1fed380b239b1baab5d9f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layouts/admin.twig", "admin.php", 2);
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
        echo "    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\">
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "

    <!-- Page Content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <h1>ادارة موقع ";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["sets"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["siteName"] ?? null) : null), "html", null, true);
        echo "</h1>
            <p>هذه المنصة تسمح لك بادارة محتوى الموقع</p>
            <p> - <code>#page-content-wrapper</code>.</p>
            
        </div>
    </div>
";
    }

    // line 23
    public function block_footerinc($context, array $blocks = array())
    {
        // line 24
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "admin.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  71 => 23,  60 => 16,  53 => 11,  50 => 10,  44 => 6,  41 => 5,  35 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\admin.php");
    }
}
