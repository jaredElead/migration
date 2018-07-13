<?php

/* @particles/verticalslider.html.twig */
class __TwigTemplate_08c04d01478487f77d52fad5f3a6212bab22c87300387d3ec833f275441cb6c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/verticalslider.html.twig", 1);
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
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-verticalslider ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\" data-verticalslider-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        if (($this->getAttribute(($context["particle"] ?? null), "presets", array()) == "enabled")) {
            echo "data-verticalslider-presets=\"";
            echo twig_escape_filter($this->env, (twig_replace_filter((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array(), "any", false, true), "preset", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array(), "any", false, true), "preset", array()), "preset1")) : ("preset1")), array("preset" => "")) - 1), "html", null, true);
            echo "\"";
        }
        echo "  data-verticalslider-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "height", array()), "html", null, true);
        echo "\" data-verticalslider-mobileheight=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "mobileheight", array()), "html", null, true);
        echo "\" data-verticalslider-speed=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "speed", array()), "html", null, true);
        echo "\" data-verticalslider-rtl=\"";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-verticalslider-auto=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "auto", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-verticalslider-pause=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "pause", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "pause", array()), "2000")) : ("2000")), "html", null, true);
        echo "\" data-verticalslider-loop=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "loop", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-verticalslider-controls=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "controls", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-verticalslider-pager=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "pager", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-verticalslider-mobile=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method"), "51rem")) : ("51rem")), "html", null, true);
        echo "\">
        ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
        <ul>
            ";
        // line 8
        if (($this->getAttribute(($context["particle"] ?? null), "source", array()) == "wordpress")) {
            // line 9
            echo "
                ";
            // line 11
            echo "                ";
            $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["particle"] ?? null), "extra", array()));
            // line 12
            echo "                ";
            $context["post_settings"] = $this->getAttribute(($context["particle"] ?? null), "post", array());
            // line 13
            echo "                ";
            $context["filter"] = $this->getAttribute(($context["post_settings"] ?? null), "filter", array());
            // line 14
            echo "                ";
            $context["sort"] = $this->getAttribute(($context["post_settings"] ?? null), "sort", array());
            // line 15
            echo "                ";
            $context["limit"] = $this->getAttribute(($context["post_settings"] ?? null), "limit", array());
            // line 16
            echo "                ";
            $context["start"] = $this->getAttribute(($context["limit"] ?? null), "start", array());
            // line 17
            echo "                ";
            $context["display"] = $this->getAttribute(($context["post_settings"] ?? null), "display", array());
            // line 18
            echo "
                ";
            // line 20
            echo "                ";
            $context["sticky_posts"] = (($this->getAttribute(($context["filter"] ?? null), "sticky", array())) ? (false) : (true));
            // line 21
            echo "
                ";
            // line 23
            echo "                ";
            $context["query_parameters"] = array("posts_per_page" => (($this->getAttribute(            // line 24
($context["limit"] ?? null), "total", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["limit"] ?? null), "total", array()), "-1")) : ("-1")), "offset" =>             // line 25
($context["start"] ?? null), "orderby" => $this->getAttribute(            // line 26
($context["sort"] ?? null), "orderby", array()), "order" => $this->getAttribute(            // line 27
($context["sort"] ?? null), "ordering", array()), "ignore_sticky_posts" =>             // line 28
($context["sticky_posts"] ?? null));
            // line 30
            echo "
                ";
            // line 31
            if ($this->getAttribute(($context["filter"] ?? null), "posts", array())) {
                // line 32
                echo "                    ";
                $context["query_parameters"] = twig_array_merge(($context["query_parameters"] ?? null), array("post__in" => twig_split_filter($this->env, twig_replace_filter($this->getAttribute(($context["filter"] ?? null), "posts", array()), array(" " => ",", ", " => ",")), ",")));
                // line 33
                echo "                ";
            } else {
                // line 34
                echo "                    ";
                $context["query_parameters"] = twig_array_merge(($context["query_parameters"] ?? null), array("cat" => twig_replace_filter($this->getAttribute(($context["filter"] ?? null), "categories", array()), array(" " => ",", ", " => ","))));
                // line 35
                echo "                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context["posts"] = $this->getAttribute(($context["wordpress"] ?? null), "call", array(0 => "Timber::query_posts", 1 => ($context["query_parameters"] ?? null)), "method");
            // line 38
            echo "                ";
            $context["total"] = abs($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "get_pagination", array(0 => array()), "method"), "total", array()));
            // line 39
            echo "                ";
            $context["total"] = max(twig_length_filter($this->env, ($context["posts"] ?? null)), ((($context["total"] ?? null) * max(0, $this->getAttribute(($context["limit"] ?? null), "total", array()))) - 1));
            // line 40
            echo "
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 42
                echo "                    ";
                if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($context["post"], "thumbnail", array()), "src", array()))) {
                    // line 43
                    echo "                        ";
                    $context["post_image"] = $this->getAttribute($this->getAttribute($context["post"], "thumbnail", array()), "src", array());
                    // line 44
                    echo "                    ";
                }
                // line 45
                echo "
                    <li class=\"g-verticalslider-item\" style=\"background-image: url(";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(twig_escape_filter($this->env, ($context["post_image"] ?? null))), "html", null, true);
                echo ");\">
                        <div class=\"g-verticalslider-content-wrapper\">
                            <div class=\"g-verticalslider-content-before\" style=\"background-image: url(";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc(twig_escape_filter($this->env, ($context["post_image"] ?? null))), "html", null, true);
                echo ");\"></div>
                            <div class=\"g-verticalslider-content\">
                                ";
                // line 50
                if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "enabled", array()) && $this->getAttribute($context["post"], "title", array()))) {
                    echo "<span class=\"g-verticalslider-small-title\">";
                    echo (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["post"], "title", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array()))) : ($this->getAttribute($context["post"], "title", array())));
                    echo "</span>";
                }
                // line 51
                echo "                                ";
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "type", array())) {
                    // line 52
                    echo "                                    ";
                    $context["post_text"] = ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "type", array()) == "excerpt")) ? ($this->getAttribute($context["post"], "post_excerpt", array())) : ($this->getAttribute($context["post"], "content", array())));
                    // line 53
                    echo "                                    <p class=\"g-verticalslider-description\">
                                        ";
                    // line 54
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "formatting", array()) == "text")) {
                        // line 55
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(($context["post_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    } else {
                        // line 57
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml(($context["post_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    }
                    // line 59
                    echo "                                    </p>
                                ";
                }
                // line 61
                echo "                                ";
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "enabled", array())) {
                    // line 62
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()));
                    echo "\" class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "css", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                    echo "</a>
                                ";
                }
                // line 64
                echo "                            </div>
                            <div class=\"g-verticalslider-content-after\"></div>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
            ";
        } else {
            // line 71
            echo "
                ";
            // line 73
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "                    <li class=\"g-verticalslider-item\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo ");\">
                        <div class=\"g-verticalslider-content-wrapper\">
                            <div class=\"g-verticalslider-content-before\" style=\"background-image: url(";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo ");\"></div>
                            <div class=\"g-verticalslider-content\">
                                ";
                // line 78
                if ($this->getAttribute($context["item"], "small_title", array())) {
                    echo "<span class=\"g-verticalslider-small-title\">";
                    echo $this->getAttribute($context["item"], "small_title", array());
                    echo "</span>";
                }
                // line 79
                echo "                                ";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<p class=\"g-verticalslider-description\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</p>";
                }
                // line 80
                echo "                                ";
                if ($this->getAttribute($context["item"], "buttontext", array())) {
                    // line 81
                    echo "                                    <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonlink", array()));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                    echo "\" class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                    echo "</a>
                                ";
                }
                // line 83
                echo "                            </div>
                            <div class=\"g-verticalslider-content-after\"></div>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
            ";
        }
        // line 90
        echo "        </ul>
    </div>
";
    }

    // line 94
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 96
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/length.min.js"), 1 => 10, 2 => "footer"), "method");
        // line 97
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/lightslider.js"), 1 => 10, 2 => "footer"), "method");
        // line 98
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/verticalslider.init.js"), 1 => 9, 2 => "footer"), "method");
    }

    public function getTemplateName()
    {
        return "@particles/verticalslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 98,  337 => 97,  334 => 96,  331 => 95,  328 => 94,  322 => 90,  318 => 88,  308 => 83,  294 => 81,  291 => 80,  284 => 79,  278 => 78,  273 => 76,  267 => 74,  262 => 73,  259 => 71,  255 => 69,  245 => 64,  233 => 62,  230 => 61,  226 => 59,  220 => 57,  214 => 55,  212 => 54,  209 => 53,  206 => 52,  203 => 51,  197 => 50,  192 => 48,  187 => 46,  184 => 45,  181 => 44,  178 => 43,  175 => 42,  171 => 41,  168 => 40,  165 => 39,  162 => 38,  160 => 37,  157 => 36,  154 => 35,  151 => 34,  148 => 33,  145 => 32,  143 => 31,  140 => 30,  138 => 28,  137 => 27,  136 => 26,  135 => 25,  134 => 24,  132 => 23,  129 => 21,  126 => 20,  123 => 18,  120 => 17,  117 => 16,  114 => 15,  111 => 14,  108 => 13,  105 => 12,  102 => 11,  99 => 9,  97 => 8,  93 => 6,  87 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/verticalslider.html.twig", "/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/themes/rt_fluent/particles/verticalslider.html.twig");
    }
}
