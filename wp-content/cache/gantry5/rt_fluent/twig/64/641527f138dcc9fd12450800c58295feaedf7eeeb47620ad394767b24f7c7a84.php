<?php

/* @particles/frameworks.html.twig */
class __TwigTemplate_bcaae44063888a3fd9c943fb4ebece4c0ba81cbc29d6df16b1f8af106a98f969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", array()), "enabled", array())) {
            // line 2
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
            // line 3
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", array()), "ui_core", array())) {
                // line 4
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery.ui.core"), "method");
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "jquery", array()), "ui_sortable", array())) {
                // line 7
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery.ui.sortable"), "method");
                // line 8
                echo "    ";
            }
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "bootstrap3", array()), "enabled", array())) {
            // line 12
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "bootstrap.3"), "method");
        } elseif ($this->getAttribute($this->getAttribute(        // line 13
($context["particle"] ?? null), "bootstrap2", array()), "enabled", array())) {
            // line 14
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "bootstrap.2"), "method");
        }
        // line 16
        echo "
";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "mootools", array()), "enabled", array())) {
            // line 18
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "mootools"), "method");
            // line 19
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "mootools", array()), "more", array())) {
                // line 20
                echo "        ";
                $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "mootools.more"), "method");
                // line 21
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@particles/frameworks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  68 => 20,  65 => 19,  62 => 18,  60 => 17,  57 => 16,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/frameworks.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/plugins/gantry5/engines/nucleus/particles/frameworks.html.twig");
    }
}
