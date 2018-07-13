<?php

/* archive.html.twig */
class __TwigTemplate_7e83ad8df48ca3b4ccafed5321ae6e8146d6f8b40c93ff1420b1585dd40ae22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "archive.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["twigTemplate"] = "archive.html.twig";
        // line 3
        $context["scope"] = "archive";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"archive\">

            ";
        // line 11
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".heading.enabled"), 1 => "0"), "method")) {
            // line 12
            echo "                <header class=\"page-header\">
                    <h2>
                        ";
            // line 14
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".heading.text")), "method"))) {
                // line 15
                echo "                            ";
                echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".heading.text")), "method");
                echo "
                        ";
            } else {
                // line 17
                echo "                            ";
                echo ($context["title"] ?? null);
                echo "
                        ";
            }
            // line 19
            echo "                    </h2>
                </header>
            ";
        }
        // line 22
        echo "            ";
        // line 23
        echo "
            ";
        // line 24
        if ( !twig_test_empty(($context["posts"] ?? null))) {
            // line 25
            echo "
                ";
            // line 27
            echo "                <section class=\"entries\">
                    <div class=\"g-grid\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 30
                echo "                            <div class=\"g-block ";
                if ((($this->getAttribute(($context["pagination"] ?? null), "current", array()) == 1) && twig_in_filter("sticky", $this->getAttribute($context["post"], "class", array())))) {
                    echo "size-100";
                } else {
                    echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".content.columns")), "method");
                }
                echo "\">
                                ";
                // line 31
                $this->loadTemplate(array(0 => (("partials/content-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => (($this->getAttribute($context["post"], "format", array())) ? ((("partials/content-" . $this->getAttribute($context["post"], "format", array())) . ".html.twig")) : ("")), 2 => "partials/content.html.twig"), "archive.html.twig", 31)->display($context);
                // line 32
                echo "                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </div>
                </section>
                ";
            // line 37
            echo "
                ";
            // line 39
            echo "                ";
            if (($this->getAttribute(($context["pagination"] ?? null), "pages", array()) && (twig_length_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "pages", array())) > 1))) {
                // line 40
                echo "                    ";
                $this->loadTemplate("partials/pagination.html.twig", "archive.html.twig", 40)->display($context);
                // line 41
                echo "                ";
            }
            // line 42
            echo "                ";
            // line 43
            echo "
            ";
        } else {
            // line 45
            echo "
                ";
            // line 47
            echo "                <div class=\"no-matches-notice\">
                    <h1>
                        ";
            // line 49
            echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Sorry, but there aren't any posts matching your query.", "g5_fluent"));
            echo "
                    </h1>
                </div>

            ";
        }
        // line 54
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 54,  154 => 49,  150 => 47,  147 => 45,  143 => 43,  141 => 42,  138 => 41,  135 => 40,  132 => 39,  129 => 37,  125 => 34,  110 => 32,  108 => 31,  99 => 30,  82 => 29,  78 => 27,  75 => 25,  73 => 24,  70 => 23,  68 => 22,  63 => 19,  57 => 17,  51 => 15,  49 => 14,  45 => 12,  42 => 11,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "archive.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/views/archive.html.twig");
    }
}
