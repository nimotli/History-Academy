<?php

/* includes/alerts.twig */
class __TwigTemplate_248fc12015e5cb07c3f85925d0824854af29d4dcbaa26de4fd047e0db59d342c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($context["errors"] ?? null) ==  -1)) {
        } else {
            // line 3
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 4
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["session"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["logedin"] ?? null) : null), "html", null, true);
            echo "
        <ul>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "includes/alerts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  38 => 7,  34 => 6,  29 => 4,  26 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "includes/alerts.twig", "E:\\xampp\\htdocs\\historyAcademy\\mvc\\views\\includes\\alerts.twig");
    }
}
