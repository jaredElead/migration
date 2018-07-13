<?php

/* @particles/tabs.html.twig */
class __TwigTemplate_895550015bf158269adebfd2d82e1c8f61656195733a83eb22e5ab2a76e63781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/tabs.html.twig", 1);
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
        // line 12
        ob_start();
        // line 13
        echo "    <div class=\"g-particle-intro\">
        ";
        // line 14
        if ($this->getAttribute(($context["particle"] ?? null), "mainheading", array())) {
            // line 15
            echo "            <h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "mainheading", array());
            echo "</h3>
            <div class=\"g-title-separator ";
            // line 16
            if (($this->getAttribute(($context["particle"] ?? null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
        ";
        }
        // line 17
        echo " 
        ";
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "introtext", array());
            echo "</p>";
        }
        // line 19
        echo "    </div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        $context["tabsid"] = twig_random($this->env);
        // line 24
        ob_start();
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "    
        ";
            // line 26
            if ($this->getAttribute($context["item"], "title", array())) {
                // line 27
                echo "            <li class=\"g-tab-nav";
                if ($this->getAttribute($context["item"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                }
                if ((((($this->getAttribute(($context["particle"] ?? null), "justify", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "justify", array()), "no")) : ("no")) == "yes") && (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) != "left") && ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) != "right")))) {
                    echo " uk-width-1-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "justifynumber", array()));
                }
                echo "\">
                <a href=\"\">";
                // line 29
                if ($this->getAttribute($context["item"], "icon", array())) {
                    // line 30
                    echo "<span class=\"g-title-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
                    echo "\"></span>";
                }
                // line 32
                echo $this->getAttribute($context["item"], "title", array());
                // line 33
                echo "</a>
            </li>
        ";
            }
            // line 36
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["tabsnav"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        ob_start();
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            if ($this->getAttribute($context["item"], "description", array())) {
                // line 42
                echo "<li class=\"g-tab-content";
                if ($this->getAttribute($context["item"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                }
                echo "\">";
                // line 43
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "filter", array(0 => $this->getAttribute($context["item"], "description", array())), "method"));
                // line 44
                echo "</li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["tabscontent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        ob_start();
        // line 50
        echo "    ";
        if ((((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left") || ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right"))) {
            // line 51
            echo "        <div class=\"uk-width-medium-1-";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "tabswidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tabswidth", array()), "2")) : ("2")));
            if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right")) {
                echo " uk-push-";
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["particle"] ?? null), "tabswidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tabswidth", array()), "2")) : ("2")) - 1));
                echo "-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "tabswidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tabswidth", array()), "2")) : ("2")));
            }
            echo "\">
    ";
        }
        // line 53
        echo "        <ul class=\"uk-tab";
        if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "top")) {
            echo " uk-tab-top";
        }
        if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "bottom")) {
            echo " uk-tab-bottom";
        }
        if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left")) {
            echo " uk-tab-left";
        }
        if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right")) {
            echo " uk-tab-right";
        }
        if ((((($this->getAttribute(($context["particle"] ?? null), "justify", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "justify", array()), "no")) : ("no")) == "yes") && (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) != "left") && ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) != "right")))) {
            echo " uk-tab-grid";
        }
        echo "\" data-uk-tab=\"{connect:'#tabs-content_";
        echo twig_escape_filter($this->env, ($context["tabsid"] ?? null), "html", null, true);
        echo "', animation: '";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animation", array()), "none")) : ("none")));
        echo "'}\">
            ";
        // line 54
        echo twig_escape_filter($this->env, ($context["tabsnav"] ?? null), "html", null, true);
        echo "
        </ul>
    ";
        // line 56
        if ((((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left") || ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right"))) {
            // line 57
            echo "        </div>
    ";
        }
        $context["tabsnavcontainer"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        ob_start();
        // line 62
        echo "    ";
        if ((((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left") || ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right"))) {
            // line 63
            echo "        <div class=\"uk-width-medium-";
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["particle"] ?? null), "tabswidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tabswidth", array()), "2")) : ("2")) - 1));
            echo "-";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "tabswidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tabswidth", array()), "2")) : ("2")));
            if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right")) {
                echo " uk-pull-1-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "tabswidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "tabswidth", array()), "2")) : ("2")));
            }
            echo "\">
    ";
        }
        // line 65
        echo "        <ul id=\"tabs-content_";
        echo twig_escape_filter($this->env, ($context["tabsid"] ?? null), "html", null, true);
        echo "\" class=\"tabs-content uk-switcher uk-margin ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
        echo "\">
            ";
        // line 66
        echo twig_escape_filter($this->env, ($context["tabscontent"] ?? null), "html", null, true);
        echo "
        </ul>
    ";
        // line 68
        if ((((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left") || ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right"))) {
            // line 69
            echo "        </div>
    ";
        }
        $context["tabscontentcontainer"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 74
    public function block_particle($context, array $blocks = array())
    {
        echo "    
    <div class=\"g-tabs-container";
        // line 75
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array()));
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", array())) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">
        ";
        // line 76
        if (($this->getAttribute(($context["particle"] ?? null), "mainheading", array()) || $this->getAttribute(($context["particle"] ?? null), "introtext", array()))) {
            // line 77
            echo "            ";
            echo twig_escape_filter($this->env, ($context["particleheading"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 79
        echo "
        <div class=\"g-tabs\">
            ";
        // line 81
        if ((((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left") || ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right"))) {
            // line 82
            echo "                <div class=\"uk-grid\">
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        if (((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "bottom")) {
            // line 86
            echo "                ";
            echo twig_escape_filter($this->env, ($context["tabscontentcontainer"] ?? null), "html", null, true);
            echo "
                ";
            // line 87
            echo twig_escape_filter($this->env, ($context["tabsnavcontainer"] ?? null), "html", null, true);
            echo "
            ";
        } else {
            // line 89
            echo "                ";
            echo twig_escape_filter($this->env, ($context["tabsnavcontainer"] ?? null), "html", null, true);
            echo "
                ";
            // line 90
            echo twig_escape_filter($this->env, ($context["tabscontentcontainer"] ?? null), "html", null, true);
            echo "
            ";
        }
        // line 92
        echo "
            ";
        // line 93
        if ((((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "left") || ((($this->getAttribute(($context["particle"] ?? null), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "layout", array()), "top")) : ("top")) == "right"))) {
            // line 94
            echo "                </div>
            ";
        }
        // line 96
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 96,  308 => 94,  306 => 93,  303 => 92,  298 => 90,  293 => 89,  288 => 87,  283 => 86,  281 => 85,  278 => 84,  274 => 82,  272 => 81,  268 => 79,  262 => 77,  260 => 76,  249 => 75,  244 => 74,  240 => 1,  235 => 69,  233 => 68,  228 => 66,  221 => 65,  209 => 63,  206 => 62,  204 => 61,  199 => 57,  197 => 56,  192 => 54,  169 => 53,  157 => 51,  154 => 50,  152 => 49,  144 => 44,  142 => 43,  135 => 42,  133 => 41,  128 => 40,  126 => 39,  119 => 36,  114 => 33,  112 => 32,  107 => 30,  105 => 29,  93 => 27,  91 => 26,  84 => 25,  82 => 24,  80 => 22,  76 => 19,  70 => 18,  67 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/tabs.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/custom/particles/tabs.html.twig");
    }
}
