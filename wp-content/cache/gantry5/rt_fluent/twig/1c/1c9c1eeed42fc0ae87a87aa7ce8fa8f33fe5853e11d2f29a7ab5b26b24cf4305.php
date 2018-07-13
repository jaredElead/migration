<?php

/* @particles/search.html.twig */
class __TwigTemplate_73408d2ef795582d18c0313b22b73d54816e642d6282e8274d5084d40948d5ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/search.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
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
    <div id=\"g-search-";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-search ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
        ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "name", array()) == "joomla")) {
            // line 7
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["joomla"] ?? null), "route", array(0 => "index.php?option=com_search"), "method"), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"text\" name=\"searchword\" placeholder=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "placeholder", array()), "html", null, true);
            echo "\" size=\"30\" maxlength=\"200\" value=\"\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", array()), "html", null, true);
            echo "\">
        </form>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 10
($context["gantry"] ?? null), "platform", array()), "name", array()) == "wordpress")) {
            // line 11
            echo "        <form method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", array(), "method"), "html", null, true);
            echo "\" role=\"search\">
            <input type=\"search\" placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "placeholder", array()), "html", null, true);
            echo "\" value=\"\" name=\"s\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", array()), "html", null, true);
            echo "\">
        </form>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 14
($context["gantry"] ?? null), "platform", array()), "name", array()) == "grav")) {
            // line 15
            echo "                <form name=\"search\" onSubmit=\"return validateSearch(event);\" data-simplesearch-form>
                    <input
                        name=\"searchfield\"
                        class=\"search-input\"
                        type=\"text\"
                        required
                        value=\"\"
                        placeholder=\"";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "placeholder", array()), "")) : ("")), "html", null, true);
            echo "\"
                        data-search-separator=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
            echo "\"
                        data-search-input=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "siteUrl", array(), "method"), "html", null, true);
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()))))), "html", null, true);
            echo "/query\"
                        title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", array()), "html", null, true);
            echo "\"
                    />
                </form>
        ";
        }
        // line 29
        echo "    </div>

";
    }

    // line 33
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 35
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "lightcase.init"), "method");
        echo " 
    ";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "name", array()) == "grav")) {
            // line 37
            echo "        <script>
            ";
            // line 38
            $context["min_chars"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "simplesearch", array(), "any", false, true), "min_query_length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "simplesearch", array(), "any", false, true), "min_query_length", array()), "3")) : ("3"));
            // line 39
            echo "            function validateSearch(event) {
                var input = document.forms[\"search\"][\"searchfield\"];
                var location = input.getAttribute('data-search-input');
                var separator = input.getAttribute('data-search-separator');
                if (input.value.length >= ";
            // line 43
            echo twig_escape_filter($this->env, ($context["min_chars"] ?? null), "html", null, true);
            echo ") {
                    event.preventDefault();
                    window.location.href = location + separator + input.value;
                } else {
                    event.preventDefault();
                }
            }
        </script>
    ";
        }
        // line 51
        echo "    
";
    }

    public function getTemplateName()
    {
        return "@particles/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  130 => 43,  124 => 39,  122 => 38,  119 => 37,  117 => 36,  112 => 35,  109 => 34,  106 => 33,  100 => 29,  93 => 25,  88 => 24,  84 => 23,  80 => 22,  71 => 15,  69 => 14,  62 => 12,  57 => 11,  55 => 10,  48 => 8,  43 => 7,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/search.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/search.html.twig");
    }
}
