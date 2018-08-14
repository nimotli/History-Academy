<?php

/* pageRenderer.php */
class __TwigTemplate_940e0ed66e931a305c62e5ef7c3a3c823a43dc45a4d0d4d41631f46566375552 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/nohero.twig", "pageRenderer.php", 1);
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
        echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["page"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["name"] ?? null) : null), "html", null, true);
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
                <center><h1>";
        // line 15
        echo (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["page"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["name"] ?? null) : null);
        echo "</h1></center>
                <div>
                    ";
        // line 17
        echo (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["page"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["content"] ?? null) : null);
        echo "
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 24
    public function block_footerinc($context, array $blocks = array())
    {
        // line 25
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "pageRenderer.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  75 => 24,  64 => 17,  59 => 15,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pageRenderer.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\pageRenderer.php");
    }
}
