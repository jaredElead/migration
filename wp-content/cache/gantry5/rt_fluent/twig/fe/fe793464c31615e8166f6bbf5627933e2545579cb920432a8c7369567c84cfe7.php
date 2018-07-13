<?php

/* @particles/newsletter.html.twig */
class __TwigTemplate_5d0364afb176da7bdd8eef34807d768bd8642b0b70d50b148eeae6155f57a16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsletter.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"g-newsletter-particle ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

        ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 8
        echo "
        <div id=\"g-newsletter-";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-newsletter ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", array()));
        echo "\">
            ";
        // line 10
        if ($this->getAttribute(($context["particle"] ?? null), "headtext", array())) {
            // line 11
            echo "                <div class=\"g-newsletter-headtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headtext", array());
            echo "</div>
            ";
        }
        // line 13
        echo "
            <form id=\"g-newsletter-form-";
        // line 14
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-newsletter-form\" action=\"//feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('//feedburner.google.com/fb/a/mailverify?uri=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "uri", array()));
        echo "', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">

                <div class=\"g-newsletter-form-wrapper\">
                    <div class=\"g-newsletter-inputbox\">
                        <input type=\"email\" placeholder=\"";
        // line 18
        echo $this->getAttribute(($context["particle"] ?? null), "inputboxtext", array());
        echo "\" name=\"email\">
                        <input type=\"hidden\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "uri", array()));
        echo "\" name=\"uri\">
                        <input type=\"hidden\" name=\"loc\" value=\"en_US\">
                    </div>
                    ";
        // line 22
        if ($this->getAttribute(($context["particle"] ?? null), "buttontext", array())) {
            // line 23
            echo "                    <div class=\"g-newsletter-button\">
                        <a class=\"g-newsletter-button-submit button ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", array()));
            echo "\" href=\"#\" onclick=\"document.getElementById('g-newsletter-form-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').submit()\">
                            ";
            // line 25
            if ($this->getAttribute(($context["particle"] ?? null), "buttonicon", array())) {
                // line 26
                echo "                                <span class=\"g-newsletter-button-icon\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonicon", array()));
                echo "\"></i></span>
                            ";
            }
            // line 28
            echo "                            <span class=\"g-newsletter-button-text\">";
            echo twig_escape_filter($this->env, _twig_default_filter($this->getAttribute(($context["particle"] ?? null), "buttontext", array()), "Join"), "html", null, true);
            echo "</span>
                        </a>
                    </div>
                    ";
        }
        // line 32
        echo "                </div>

                ";
        // line 34
        if ($this->getAttribute(($context["particle"] ?? null), "sidetext", array())) {
            // line 35
            echo "                    <div class=\"g-newsletter-sidetext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "sidetext", array());
            echo "</div>
                ";
        }
        // line 37
        echo "
            </form>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  121 => 35,  119 => 34,  115 => 32,  107 => 28,  101 => 26,  99 => 25,  93 => 24,  90 => 23,  88 => 22,  82 => 19,  78 => 18,  69 => 14,  66 => 13,  60 => 11,  58 => 10,  48 => 9,  45 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/newsletter.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/newsletter.html.twig");
    }
}
