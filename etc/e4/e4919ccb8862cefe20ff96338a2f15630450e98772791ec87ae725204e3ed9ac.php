<?php

/* user.create.php */
class __TwigTemplate_58f98da059d8742e8644752e2e5b3ea8ea19befd74ddbf5ca6bdcc61883979a0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.twig", "user.create.php", 1);
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
        <div class=\"container-fluid\">
            <h1>Create a new user</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <form method=\"post\" action=\"mvc/controllers/userController.php\">
                <div class=\"form-group\">
                    username :<input name=\"username\" type=\"text\" class=\"form-control\" placeholder=\"Username\">
                </div>
                <div class=\"form-group\">
                    password :<input name=\"password\" type=\"password\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    Confirm password :<input type=\"password\" name=\"confirm-password\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    email :<input type=\"email\" name=\"email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    first name :<input type=\"text\" name=\"name\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    second name :<input type=\"text\" name=\"secondName\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    address :<input type=\"text\" name=\"address\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    phone number :<input type=\"text\" name=\"phone\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    type :<select name=\"type\" class=\"form-control\">
                        <option value=\"1\">Admin</option>
                        <option value=\"0\">Client</option>
                    </select>
                </div>
                <input type=\"submit\" class=\"btn btn-primary\" value=\"register\">
                <input type=\"hidden\" name=\"route\" value=\"user-create\">
            </form>
        </div>
    </div>
";
    }

    // line 54
    public function block_footerinc($context, array $blocks = array())
    {
        // line 55
        echo "   ";
        $this->displayParentBlock("footerinc", $context, $blocks);
        echo " 
   <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
   <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
   <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "user.create.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  99 => 54,  52 => 10,  49 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user.create.php", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\user.create.php");
    }
}
