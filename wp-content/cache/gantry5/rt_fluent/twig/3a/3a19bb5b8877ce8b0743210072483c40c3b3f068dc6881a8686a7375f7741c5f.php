<?php

/* @particles/infolist.html.twig */
class __TwigTemplate_660dbf62a99b6654d09813f5cc61a82a5b5e467998cd72ae9ce0b1167110fa8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/infolist.html.twig", 1);
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
    <div class=\"g-infolist-particle\">

        ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title g-infolist-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 8
        echo "
        ";
        // line 9
        if ($this->getAttribute(($context["particle"] ?? null), "intro", array())) {
            // line 10
            echo "            <p class=\"g-infolist-desc\">";
            echo $this->getAttribute(($context["particle"] ?? null), "intro", array());
            echo "</p>
        ";
        }
        // line 12
        echo "
        <div class=\"g-infolist ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "infolists", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["infolist"]) {
            // line 16
            echo "                <div class=\"g-infolist-item";
            if ($this->getAttribute($context["infolist"], "icon", array())) {
                echo " g-infolist-with-icon";
            }
            if ($this->getAttribute($context["infolist"], "image", array())) {
                echo " g-infolist-with-img";
            }
            echo " ";
            if ((($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "center")) || ($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "center")))) {
                echo "center";
            }
            echo "\">

                    <div class=\"g-infolist-item-container\">

                    ";
            // line 20
            ob_start();
            // line 21
            echo "                        <div class=\"g-infolist-item-icon ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "iconloc", array()));
            echo "\">
                            <i class=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "icon", array()));
            echo "\"></i>
                        </div>
                    ";
            $context["icondata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
                    ";
            // line 26
            ob_start();
            // line 27
            echo "                        <div class=\"g-infolist-item-img g-block";
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "compact")) {
                echo " size-22";
            }
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                echo " browser";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "imageloc", array()));
            echo " ";
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "avatar")) {
                echo "avatar";
            }
            echo "\">
                            ";
            // line 28
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                // line 29
                echo "                            <div class=\"browser-wrapper\">
                                <div class=\"browser-bar\">
                                    <span class=\"browser-button\"></span>
                                </div>
                            ";
            }
            // line 34
            echo "
                                <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["infolist"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "title", array()), "html", null, true);
            echo "\" />

                            ";
            // line 37
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                // line 38
                echo "                            </div>
                            ";
            }
            // line 40
            echo "                        </div>
                    ";
            $context["imagedata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 42
            echo "
                    ";
            // line 43
            if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "left"))) {
                // line 44
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["icondata"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 46
            echo "
                    ";
            // line 47
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "left"))) {
                // line 48
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["imagedata"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 50
            echo "
                    <div class=\"g-infolist-item-text";
            // line 51
            if (($this->getAttribute($context["infolist"], "icon", array()) || $this->getAttribute($context["infolist"], "image", array()))) {
                echo " ";
            }
            echo " g-infolist-textstyle-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "textstyle", array()), "html", null, true);
            echo "\">
                        ";
            // line 52
            if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "center"))) {
                // line 53
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["icondata"] ?? null), "html", null, true);
                echo "
                        ";
            }
            // line 55
            echo "
                        ";
            // line 56
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "center"))) {
                // line 57
                echo "                            ";
                echo twig_escape_filter($this->env, ($context["imagedata"] ?? null), "html", null, true);
                echo "
                        ";
            }
            // line 59
            echo "
                        ";
            // line 60
            if (($this->getAttribute($context["infolist"], "tag", array()) || $this->getAttribute($context["infolist"], "subtag", array()))) {
                // line 61
                echo "                            <div class=\"g-infolist-tags\">
                                ";
                // line 62
                if ($this->getAttribute($context["infolist"], "tag", array())) {
                    // line 63
                    echo "                                    ";
                    if ($this->getAttribute($context["infolist"], "link", array())) {
                        // line 64
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["infolist"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["infolist"], "readmoretarget", array()), "_self")) : ("_self")));
                        echo "\">
                                    ";
                    }
                    // line 66
                    echo "
                                        <span class=\"g-tag\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "tag", array()));
                    echo "</span>

                                    ";
                    // line 69
                    if ($this->getAttribute($context["infolist"], "link", array())) {
                        // line 70
                        echo "                                    </a>
                                    ";
                    }
                    // line 72
                    echo "                                ";
                }
                // line 73
                echo "
                                ";
                // line 74
                if ($this->getAttribute($context["infolist"], "subtag", array())) {
                    // line 75
                    echo "                                    <span class=\"g-small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "subtag", array()));
                    echo "</span>
                                ";
                }
                // line 77
                echo "                            </div>
                        ";
            }
            // line 79
            echo "
                        ";
            // line 80
            if ($this->getAttribute($context["infolist"], "title", array())) {
                // line 81
                ob_start();
                // line 82
                echo "<div class=\"g-infolist-item-title ";
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "bold")) {
                    echo "g-bold";
                }
                echo "\">";
                // line 83
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 84
                    echo "<div class=\"g-title-hero\">";
                }
                // line 87
                if ($this->getAttribute($context["infolist"], "link", array())) {
                    // line 88
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["infolist"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["infolist"], "readmoretarget", array()), "_self")) : ("_self")));
                    echo "\">";
                }
                // line 91
                if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "inline"))) {
                    // line 92
                    echo "                                    <span class=\"g-infolist-item-icon-inline\">
                                        <i class=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "icon", array()));
                    echo "\"></i>
                                    </span>
                                    ";
                }
                // line 97
                echo $this->getAttribute($context["infolist"], "title", array());
                // line 99
                if ($this->getAttribute($context["infolist"], "link", array())) {
                    // line 100
                    echo "</a>";
                }
                // line 103
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 104
                    echo "</div>";
                }
                // line 106
                echo "</div>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
            // line 109
            echo "
                        ";
            // line 110
            if ($this->getAttribute($context["infolist"], "desc", array())) {
                // line 111
                echo "                            <div class=\"g-infolist-item-desc\">
                                ";
                // line 112
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 113
                    echo "                                <div class=\"g-large\">
                                ";
                }
                // line 115
                echo "
                                    ";
                // line 116
                echo $this->getAttribute($context["infolist"], "desc", array());
                echo "

                                ";
                // line 118
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 119
                    echo "                                </div>
                                ";
                }
                // line 121
                echo "                            </div>
                        ";
            }
            // line 123
            echo "
                        ";
            // line 124
            if ($this->getAttribute($context["infolist"], "link", array())) {
                // line 125
                echo "                            <div class=\"g-infolist-link\">
                                <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infolist"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["infolist"], "readmoretarget", array()), "_self")) : ("_self")));
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "readmoreclass", array()));
                echo "\">
                                    ";
                // line 127
                if ($this->getAttribute($context["infolist"], "buttonicon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "buttonicon", array()));
                    echo "\"></i>";
                }
                // line 128
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "label", array()));
                echo "
                                </a>
                            </div>
                        ";
            }
            // line 132
            echo "                    </div>

                    ";
            // line 134
            if (($this->getAttribute($context["infolist"], "icon", array()) && ($this->getAttribute($context["infolist"], "iconloc", array()) == "right"))) {
                // line 135
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["icondata"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 137
            echo "
                    ";
            // line 138
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "right"))) {
                // line 139
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["imagedata"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 141
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/infolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 144,  391 => 141,  385 => 139,  383 => 138,  380 => 137,  374 => 135,  372 => 134,  368 => 132,  360 => 128,  354 => 127,  346 => 126,  343 => 125,  341 => 124,  338 => 123,  334 => 121,  330 => 119,  328 => 118,  323 => 116,  320 => 115,  316 => 113,  314 => 112,  311 => 111,  309 => 110,  306 => 109,  302 => 106,  299 => 104,  297 => 103,  294 => 100,  292 => 99,  290 => 97,  284 => 93,  281 => 92,  279 => 91,  272 => 88,  270 => 87,  267 => 84,  265 => 83,  259 => 82,  257 => 81,  255 => 80,  252 => 79,  248 => 77,  242 => 75,  240 => 74,  237 => 73,  234 => 72,  230 => 70,  228 => 69,  223 => 67,  220 => 66,  212 => 64,  209 => 63,  207 => 62,  204 => 61,  202 => 60,  199 => 59,  193 => 57,  191 => 56,  188 => 55,  182 => 53,  180 => 52,  172 => 51,  169 => 50,  163 => 48,  161 => 47,  158 => 46,  152 => 44,  150 => 43,  147 => 42,  143 => 40,  139 => 38,  137 => 37,  130 => 35,  127 => 34,  120 => 29,  118 => 28,  102 => 27,  100 => 26,  97 => 25,  91 => 22,  86 => 21,  84 => 20,  67 => 16,  63 => 15,  56 => 13,  53 => 12,  47 => 10,  45 => 9,  42 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/infolist.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/infolist.html.twig");
    }
}
