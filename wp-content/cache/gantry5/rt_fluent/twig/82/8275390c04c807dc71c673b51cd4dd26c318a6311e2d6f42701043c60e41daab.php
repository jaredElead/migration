<?php

/* partials/meta.html.twig */
class __TwigTemplate_652bf44e3c33640907430fbd52823b82fb0bb905e266f8d3f98f6cefb8893ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["twigTemplate"] = "meta.html.twig";
        // line 2
        echo "
<div class=\"entry-meta\">

    ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 108
        echo "
</div>
";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "
        ";
        // line 8
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"), "method") && $this->getAttribute(($context["post"] ?? null), "date", array()))) {
            // line 9
            echo "            <div class=\"meta-date\">
                ";
            // line 10
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.prefix"), 1 => ""), "method"))) {
                // line 11
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.prefix"), 1 => ""), "method") . " ");
                echo "</span>
                ";
            }
            // line 13
            echo "
                ";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.link"), 1 => "1"), "method")) {
                // line 15
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", array());
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "\" class=\"meta-date-link\">
                        <span class=\"date\">";
                // line 16
                echo $this->getAttribute(($context["post"] ?? null), "date", array(0 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.format"), 1 => "j F Y"), "method")), "method");
                echo "</span>
                    </a>
                ";
            } else {
                // line 19
                echo "                    <span class=\"date\">";
                echo $this->getAttribute(($context["post"] ?? null), "date", array(0 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.format"), 1 => "j F Y"), "method")), "method");
                echo "</span>
                ";
            }
            // line 21
            echo "            </div>
        ";
        }
        // line 23
        echo "        ";
        // line 24
        echo "
        ";
        // line 26
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"), "method") && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", array()), "name", array()))) {
            // line 27
            echo "            <div class=\"meta-author\">
                ";
            // line 28
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.prefix"), 1 => ""), "method"))) {
                // line 29
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.prefix"), 1 => ""), "method") . " ");
                echo "</span>
                ";
            }
            // line 31
            echo "
                ";
            // line 32
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.link"), 1 => "1"), "method")) {
                // line 33
                echo "                    <a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", array()), "link", array());
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", array()), "name", array());
                echo "\" class=\"meta-author-link\"><span class=\"author\">";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", array()), "name", array());
                echo "</span></a>
                ";
            } else {
                // line 35
                echo "                    <span class=\"author\">";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "author", array()), "name", array());
                echo "</span>
                ";
            }
            // line 37
            echo "            </div>
        ";
        }
        // line 39
        echo "        ";
        // line 40
        echo "
        ";
        // line 42
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.enabled"), 1 => "1"), "method")) {
            // line 43
            echo "            <div class=\"meta-comments-count\">
                ";
            // line 44
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.prefix"), 1 => ""), "method"))) {
                // line 45
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.prefix"), 1 => ""), "method") . " ");
                echo "</span>
                ";
            }
            // line 47
            echo "
                ";
            // line 48
            if (($this->getAttribute(($context["post"] ?? null), "comment_count", array()) == "0")) {
                // line 49
                echo "                    ";
                $context["comment_count"] = call_user_func_array($this->env->getFunction('__')->getCallable(), array("No comments", "g5_fluent"));
                // line 50
                echo "                ";
            } elseif (($this->getAttribute(($context["post"] ?? null), "comment_count", array()) == "1")) {
                // line 51
                echo "                    ";
                $context["comment_count"] = (($this->getAttribute(($context["post"] ?? null), "comment_count", array()) . " ") . call_user_func_array($this->env->getFunction('__')->getCallable(), array("Comment", "g5_fluent")));
                // line 52
                echo "                ";
            } else {
                // line 53
                echo "                    ";
                $context["comment_count"] = (($this->getAttribute(($context["post"] ?? null), "comment_count", array()) . " ") . call_user_func_array($this->env->getFunction('__')->getCallable(), array("Comments", "g5_fluent")));
                // line 54
                echo "                ";
            }
            // line 55
            echo "
                ";
            // line 56
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.link"), 1 => "0"), "method")) {
                // line 57
                echo "                    <a href=\"";
                echo ($this->getAttribute(($context["post"] ?? null), "link", array()) . "#comments");
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "comment_count", array());
                echo "\" class=\"meta-comments-link\"><span class=\"comment-count\">";
                echo ($context["comment_count"] ?? null);
                echo "</span></a>
                ";
            } else {
                // line 59
                echo "                    <span class=\"comments-count\">";
                echo ($context["comment_count"] ?? null);
                echo "</span>
                ";
            }
            // line 61
            echo "            </div>
        ";
        }
        // line 63
        echo "        ";
        // line 64
        echo "
        ";
        // line 66
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.enabled"), 1 => "1"), "method") &&  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "categories", array())))) {
            // line 67
            echo "            <div class=\"meta-categories\">
                ";
            // line 68
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.prefix"), 1 => "Categories:"), "method"))) {
                // line 69
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.prefix"), 1 => "Categories:"), "method") . " ");
                echo "</span>
                ";
            }
            // line 71
            echo "
                <span class=\"categories\">
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 74
                if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.link"), 1 => "1"), "method")) {
                    // line 75
                    echo "<a href=\"";
                    echo $this->getAttribute($context["category"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"meta-category-link\"><span class=\"single-cat\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</span></a>";
                } else {
                    // line 77
                    echo "<span class=\"single-cat\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</span>";
                }
                // line 79
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo twig_trim_filter(",");
                }
                // line 80
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                </span>
            </div>
        ";
        }
        // line 84
        echo "        ";
        // line 85
        echo "
        ";
        // line 87
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.enabled"), 1 => "1"), "method") &&  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "tags", array())))) {
            // line 88
            echo "            <div class=\"meta-tags\">
                ";
            // line 89
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.prefix"), 1 => "Tags:"), "method"))) {
                // line 90
                echo "                    <span class=\"meta-prefix\">";
                echo ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.prefix"), 1 => "Tags:"), "method") . " ");
                echo "</span>
                ";
            }
            // line 92
            echo "
                <span class=\"tags\">
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "tags", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 95
                if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.link"), 1 => "1"), "method")) {
                    // line 96
                    echo "<a href=\"";
                    echo $this->getAttribute($context["tag"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["tag"], "name", array());
                    echo "\" class=\"meta-tag-link\"><span class=\"single-tag\">";
                    echo $this->getAttribute($context["tag"], "name", array());
                    echo "</span></a>";
                } else {
                    // line 98
                    echo "<span class=\"single-tag\">";
                    echo $this->getAttribute($context["tag"], "name", array());
                    echo "</span>";
                }
                // line 100
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo twig_trim_filter(",");
                }
                // line 101
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </span>
            </div>
        ";
        }
        // line 105
        echo "        ";
        // line 106
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 106,  352 => 105,  347 => 102,  333 => 101,  329 => 100,  324 => 98,  315 => 96,  313 => 95,  296 => 94,  292 => 92,  286 => 90,  284 => 89,  281 => 88,  278 => 87,  275 => 85,  273 => 84,  268 => 81,  254 => 80,  250 => 79,  245 => 77,  236 => 75,  234 => 74,  217 => 73,  213 => 71,  207 => 69,  205 => 68,  202 => 67,  199 => 66,  196 => 64,  194 => 63,  190 => 61,  184 => 59,  174 => 57,  172 => 56,  169 => 55,  166 => 54,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  151 => 49,  149 => 48,  146 => 47,  140 => 45,  138 => 44,  135 => 43,  132 => 42,  129 => 40,  127 => 39,  123 => 37,  117 => 35,  107 => 33,  105 => 32,  102 => 31,  96 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 24,  83 => 23,  79 => 21,  73 => 19,  67 => 16,  60 => 15,  58 => 14,  55 => 13,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 6,  35 => 5,  29 => 108,  27 => 5,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/meta.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/views/partials/meta.html.twig");
    }
}
