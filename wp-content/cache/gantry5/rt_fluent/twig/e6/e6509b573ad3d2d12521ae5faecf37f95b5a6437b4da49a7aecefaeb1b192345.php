<?php

/* @particles/newsslider.html.twig */
class __TwigTemplate_5362c6387adb1411a897f8be103d18d3bf9b8cf74d5fa387b7dd4e0b04bd3ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsslider.html.twig", 1);
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
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute(($context["particle"] ?? null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = array())
    {
        // line 13
        echo "
    <div id=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-newsslider ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\" data-newsslider-autoplay=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"  data-newsslider-loop=\"";
        if (($this->getAttribute(($context["particle"] ?? null), "loop", array()) == "enabled")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-newsslider-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-newsslider-rtl=\"";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"  ";
        echo twig_escape_filter($this->env, ($context["attr_extra"] ?? null), "html", null, true);
        echo ">
        <div class=\"g-newsslider-slides g-owlcarousel owl-carousel\" data-newsslider-slides-id=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "fixedheight", array())) {
            echo "style=\"height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fixedheight", array()), "html", null, true);
            echo "px;\"";
        }
        echo ">

            ";
        // line 17
        if (($this->getAttribute(($context["particle"] ?? null), "source", array()) == "wordpress")) {
            // line 18
            echo "
                ";
            // line 20
            echo "                ";
            $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute(($context["particle"] ?? null), "extra", array()));
            // line 21
            echo "                ";
            $context["post_settings"] = $this->getAttribute(($context["particle"] ?? null), "post", array());
            // line 22
            echo "                ";
            $context["filter"] = $this->getAttribute(($context["post_settings"] ?? null), "filter", array());
            // line 23
            echo "                ";
            $context["sort"] = $this->getAttribute(($context["post_settings"] ?? null), "sort", array());
            // line 24
            echo "                ";
            $context["limit"] = $this->getAttribute(($context["post_settings"] ?? null), "limit", array());
            // line 25
            echo "                ";
            $context["start"] = $this->getAttribute(($context["limit"] ?? null), "start", array());
            // line 26
            echo "                ";
            $context["display"] = $this->getAttribute(($context["post_settings"] ?? null), "display", array());
            // line 27
            echo "
                ";
            // line 29
            echo "                ";
            $context["sticky_posts"] = (($this->getAttribute(($context["filter"] ?? null), "sticky", array())) ? (false) : (true));
            // line 30
            echo "
                ";
            // line 32
            echo "                ";
            $context["query_parameters"] = array("posts_per_page" => (($this->getAttribute(            // line 33
($context["limit"] ?? null), "total", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["limit"] ?? null), "total", array()), "-1")) : ("-1")), "offset" =>             // line 34
($context["start"] ?? null), "orderby" => $this->getAttribute(            // line 35
($context["sort"] ?? null), "orderby", array()), "order" => $this->getAttribute(            // line 36
($context["sort"] ?? null), "ordering", array()), "ignore_sticky_posts" =>             // line 37
($context["sticky_posts"] ?? null));
            // line 39
            echo "
                ";
            // line 40
            if ($this->getAttribute(($context["filter"] ?? null), "posts", array())) {
                // line 41
                echo "                    ";
                $context["query_parameters"] = twig_array_merge(($context["query_parameters"] ?? null), array("post__in" => twig_split_filter($this->env, twig_replace_filter($this->getAttribute(($context["filter"] ?? null), "posts", array()), array(" " => ",", ", " => ",")), ",")));
                // line 42
                echo "                ";
            } else {
                // line 43
                echo "                    ";
                $context["query_parameters"] = twig_array_merge(($context["query_parameters"] ?? null), array("cat" => twig_replace_filter($this->getAttribute(($context["filter"] ?? null), "categories", array()), array(" " => ",", ", " => ","))));
                // line 44
                echo "                ";
            }
            // line 45
            echo "
                ";
            // line 46
            $context["posts"] = $this->getAttribute(($context["wordpress"] ?? null), "call", array(0 => "Timber::query_posts", 1 => ($context["query_parameters"] ?? null)), "method");
            // line 47
            echo "                ";
            $context["total"] = abs($this->getAttribute($this->getAttribute(($context["posts"] ?? null), "get_pagination", array(0 => array()), "method"), "total", array()));
            // line 48
            echo "                ";
            $context["total"] = max(twig_length_filter($this->env, ($context["posts"] ?? null)), ((($context["total"] ?? null) * max(0, $this->getAttribute(($context["limit"] ?? null), "total", array()))) - 1));
            // line 49
            echo "
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 51
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", array()), "enabled", array())) {
                    // line 52
                    echo "                        <div class=\"g-newsslider-slides-item-image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["post"], "thumbnail", array()), "src", array())), "html", null, true);
                    echo ")\">
                    ";
                }
                // line 54
                echo "
                    ";
                // line 55
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array())) {
                    // line 56
                    echo "                        ";
                    $context["category_link"] = ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array()) == "link");
                    // line 57
                    echo "                        <span class=\"g-newsslider-slides-item-category\">
                            ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
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
                        // line 59
                        if (($context["category_link"] ?? null)) {
                            // line 60
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "link", array()), "html", null, true);
                            echo "\">
                                        ";
                            // line 61
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                            echo "
                                    </a>";
                        } else {
                            // line 64
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                        }
                        // line 66
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo twig_escape_filter($this->env, twig_trim_filter(","), "html", null, true);
                        }
                        // line 67
                        echo "                            ";
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
                    // line 68
                    echo "                        </span>
                    ";
                }
                // line 70
                echo "
                    ";
                // line 71
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array())) {
                    // line 72
                    echo "                        <span class=\"g-newsslider-slides-item-date\">
                          ";
                    // line 73
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array()) == "modified")) {
                        // line 74
                        echo "                              ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->getAttribute($context["post"], "post_modified", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array()))), "html", null, true);
                        echo "
                          ";
                    } else {
                        // line 76
                        echo "                              ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->getAttribute($context["post"], "post_date", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array()))), "html", null, true);
                        echo "
                          ";
                    }
                    // line 78
                    echo "                      </span>
                    ";
                }
                // line 80
                echo "
                    <div class=\"g-newsslider-slides-item-content\">
                        ";
                // line 82
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "enabled", array())) {
                    // line 83
                    echo "                            <div class=\"g-newsslider-slides-item-title\">
                                <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 85
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["post"], "title", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array()))) : ($this->getAttribute($context["post"], "title", array()))), "html", null, true);
                    echo "
                                </a>
                            </div>
                        ";
                }
                // line 89
                echo "
                        ";
                // line 90
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", array()), "enabled", array())) {
                    // line 91
                    echo "                            <div class=\"g-newsslider-slides-item-meta\">
                                <div class=\"g-newsslider-slides-item-author\">
                                    ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "name", array()), "html", null, true);
                    echo "
                                </div>
                            </div>
                        ";
                }
                // line 97
                echo "
                        ";
                // line 98
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "enabled", array())) {
                    // line 99
                    echo "                            <a href=\"";
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
                // line 101
                echo "                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
            ";
        } else {
            // line 106
            echo "
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 108
                echo "                    ";
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 109
                    echo "                        <div class=\"g-newsslider-slides-item-image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())), "html", null, true);
                    echo ")\">
                    ";
                }
                // line 111
                echo "
                    ";
                // line 112
                if ($this->getAttribute($context["item"], "categoryname", array())) {
                    // line 113
                    echo "                        <span class=\"g-newsslider-slides-item-category\">
                            ";
                    // line 114
                    if ($this->getAttribute($context["item"], "categorylink", array())) {
                        // line 115
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categorylink", array()), "html", null, true);
                        echo "\">
                                    ";
                        // line 116
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categoryname", array()), "html", null, true);
                        echo "
                                </a>
                            ";
                    } else {
                        // line 119
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categoryname", array()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 121
                    echo "                        </span>
                    ";
                }
                // line 123
                echo "
                    ";
                // line 124
                if ($this->getAttribute($context["item"], "date", array())) {
                    // line 125
                    echo "                        <span class=\"g-newsslider-slides-item-date\">
                            ";
                    // line 126
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->getAttribute($context["item"], "date", array()), (($this->getAttribute($context["item"], "date_format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "date_format", array()), "l, F d, Y")) : ("l, F d, Y")))), "html", null, true);
                    echo "
                        </span>
                    ";
                }
                // line 129
                echo "
                    <div class=\"g-newsslider-slides-item-content\">
                        ";
                // line 131
                if ($this->getAttribute($context["item"], "avatar", array())) {
                    // line 132
                    echo "                            <div class=\"g-newsslider-slides-item-avatar\">
                                <img src=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "avatar", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                    echo "\">
                            </div>
                        ";
                }
                // line 136
                echo "
                        ";
                // line 137
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 138
                    echo "                            <div class=\"g-newsslider-slides-item-title\">
                                <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "link", array()), "#")) : ("#")), "html", null, true);
                    echo "\">
                                    ";
                    // line 140
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
                                </a>
                            </div>
                        ";
                }
                // line 144
                echo "
                        ";
                // line 145
                if ((($this->getAttribute($context["item"], "date", array()) || $this->getAttribute($context["item"], "author", array())) || $this->getAttribute($context["item"], "categoryname", array()))) {
                    // line 146
                    echo "                            <div class=\"g-newsslider-slides-item-meta\">
                                ";
                    // line 147
                    if ($this->getAttribute($context["item"], "author", array())) {
                        // line 148
                        echo "                                    <div class=\"g-newsslider-slides-item-author\">
                                        ";
                        // line 149
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()), "html", null, true);
                        echo "
                                    </div>
                                ";
                    }
                    // line 152
                    echo "                            </div>
                        ";
                }
                // line 154
                echo "                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "
            ";
        }
        // line 159
        echo "
        </div>
        <div class=\"g-newsslider-carousel\" data-newsslider-carousel-id=\"";
        // line 161
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "fixedheight", array())) {
            echo "style=\"height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fixedheight", array()), "html", null, true);
            echo "px;\"";
        }
        echo ">

            ";
        // line 163
        if (($this->getAttribute(($context["particle"] ?? null), "source", array()) == "wordpress")) {
            // line 164
            echo "
                ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 166
                echo "                    <div class=\"g-newsslider-carousel-item-container\">
                        <div class=\"g-newsslider-carousel-item-content\">

                            ";
                // line 169
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array())) {
                    // line 170
                    echo "                                ";
                    $context["category_link"] = ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array()) == "link");
                    // line 171
                    echo "                                <span class=\"g-newsslider-carousel-item-category\">
                                    ";
                    // line 172
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
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
                        // line 173
                        if (($context["category_link"] ?? null)) {
                            // line 174
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "link", array()), "html", null, true);
                            echo "\">
                                                ";
                            // line 175
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                            echo "
                                            </a>";
                        } else {
                            // line 178
                            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                        }
                        // line 180
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            echo twig_escape_filter($this->env, twig_trim_filter(","), "html", null, true);
                        }
                        // line 181
                        echo "                                    ";
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
                    // line 182
                    echo "                                </span>
                            ";
                }
                // line 184
                echo "
                            ";
                // line 185
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "enabled", array())) {
                    // line 186
                    echo "                                <div class=\"g-newsslider-carousel-item-title\">
                                    ";
                    // line 187
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["post"], "title", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array()))) : ($this->getAttribute($context["post"], "title", array()))), "html", null, true);
                    echo "
                                </div>
                            ";
                }
                // line 190
                echo "
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "
            ";
        } else {
            // line 196
            echo "
                ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 198
                echo "                    <div class=\"g-newsslider-carousel-item-container\">
                        <div class=\"g-newsslider-carousel-item-content\">
                         ";
                // line 200
                if ($this->getAttribute($context["item"], "categoryname", array())) {
                    // line 201
                    echo "                            <span class=\"g-newsslider-carousel-item-category\">
                                ";
                    // line 202
                    if ($this->getAttribute($context["item"], "categorylink", array())) {
                        // line 203
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categorylink", array()), "html", null, true);
                        echo "\">
                                        ";
                        // line 204
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categoryname", array()), "html", null, true);
                        echo "
                                    </a>
                                ";
                    } else {
                        // line 207
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categoryname", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 209
                    echo "                            </span>
                        ";
                }
                // line 211
                echo "                        ";
                if ($this->getAttribute($context["item"], "title", array())) {
                    // line 212
                    echo "                            <div class=\"g-newsslider-carousel-item-title\">
                                ";
                    // line 213
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "
                            </div>
                        ";
                }
                // line 216
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "
            ";
        }
        // line 221
        echo "
        </div>
    </div>

";
    }

    // line 227
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 228
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 229
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.matchHeight-min.js"), 1 => 10, 2 => "footer"), "method");
        // line 230
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.mThumbnailScroller.js"), 1 => 10, 2 => "footer"), "method");
        // line 231
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.js"), 1 => 10, 2 => "footer"), "method");
        // line 232
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/newsslider.init.js"), 1 => 10, 2 => "footer"), "method");
    }

    public function getTemplateName()
    {
        return "@particles/newsslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 232,  671 => 231,  669 => 230,  667 => 229,  665 => 228,  662 => 227,  654 => 221,  650 => 219,  642 => 216,  636 => 213,  633 => 212,  630 => 211,  626 => 209,  620 => 207,  614 => 204,  609 => 203,  607 => 202,  604 => 201,  602 => 200,  598 => 198,  594 => 197,  591 => 196,  587 => 194,  578 => 190,  572 => 187,  569 => 186,  567 => 185,  564 => 184,  560 => 182,  546 => 181,  542 => 180,  539 => 178,  534 => 175,  529 => 174,  527 => 173,  510 => 172,  507 => 171,  504 => 170,  502 => 169,  497 => 166,  493 => 165,  490 => 164,  488 => 163,  477 => 161,  473 => 159,  469 => 157,  461 => 154,  457 => 152,  451 => 149,  448 => 148,  446 => 147,  443 => 146,  441 => 145,  438 => 144,  431 => 140,  427 => 139,  424 => 138,  422 => 137,  419 => 136,  411 => 133,  408 => 132,  406 => 131,  402 => 129,  396 => 126,  393 => 125,  391 => 124,  388 => 123,  384 => 121,  378 => 119,  372 => 116,  367 => 115,  365 => 114,  362 => 113,  360 => 112,  357 => 111,  351 => 109,  348 => 108,  344 => 107,  341 => 106,  337 => 104,  329 => 101,  317 => 99,  315 => 98,  312 => 97,  305 => 93,  301 => 91,  299 => 90,  296 => 89,  289 => 85,  285 => 84,  282 => 83,  280 => 82,  276 => 80,  272 => 78,  266 => 76,  260 => 74,  258 => 73,  255 => 72,  253 => 71,  250 => 70,  246 => 68,  232 => 67,  228 => 66,  225 => 64,  220 => 61,  215 => 60,  213 => 59,  196 => 58,  193 => 57,  190 => 56,  188 => 55,  185 => 54,  179 => 52,  176 => 51,  172 => 50,  169 => 49,  166 => 48,  163 => 47,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  144 => 40,  141 => 39,  139 => 37,  138 => 36,  137 => 35,  136 => 34,  135 => 33,  133 => 32,  130 => 30,  127 => 29,  124 => 27,  121 => 26,  118 => 25,  115 => 24,  112 => 23,  109 => 22,  106 => 21,  103 => 20,  100 => 18,  98 => 17,  87 => 15,  59 => 14,  56 => 13,  53 => 12,  49 => 1,  38 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/newsslider.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/newsslider.html.twig");
    }
}
