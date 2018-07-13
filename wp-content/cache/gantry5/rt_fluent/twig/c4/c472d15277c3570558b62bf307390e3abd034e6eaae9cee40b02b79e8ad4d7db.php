<?php

/* @particles/pricingtable.html.twig */
class __TwigTemplate_162843f538163d1e8758875a8c4305f1d96a942e887797b4986d2f8262b1a457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/pricingtable.html.twig", 1);
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
        echo "    <div class=\"g-pricingtable-particle ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

        ";
        // line 6
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 7
        echo "
        ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "headertext", array())) {
            // line 9
            echo "            <div class=\"g-pricingtable-headertext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headertext", array());
            echo "</div>
        ";
        }
        // line 11
        echo "
        <div id=\"g-pricingtable-";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-pricingtable-container ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "columns", array()), "g-pricingtable-3-col")) : ("g-pricingtable-3-col")));
        echo "\">

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "tables", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 15
            echo "                <div class=\"g-pricingtable-col-item ";
            if (($this->getAttribute($context["table"], "highlight", array()) == "enabled")) {
                echo "g-pricingtable-col-item-highlight";
            }
            echo "\" id=\"g-pricingtable-col-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                    <ul class=\"g-pricingtable ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "class", array()));
            echo "\">
                        ";
            // line 17
            if ($this->getAttribute($context["table"], "ribbon", array())) {
                echo "<li class=\"g-pricingtable-ribbon\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "ribbon", array()));
                echo "</li> ";
            }
            // line 18
            echo "                        ";
            if ($this->getAttribute($context["table"], "icon", array())) {
                echo "<li class=\"g-pricingtable-icon\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "icon", array()));
                echo "\"></i></li>";
            }
            // line 19
            echo "
                        ";
            // line 20
            if ($this->getAttribute($context["table"], "plan", array())) {
                // line 21
                echo "                            <li class=\"g-pricingtable-plan\">
                                ";
                // line 22
                if ($this->getAttribute($context["table"], "buttontext", array())) {
                    // line 23
                    echo "                                <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["table"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["table"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonlink", array()));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", array()));
                    echo "\">
                                    ";
                }
                // line 25
                echo "
                                    ";
                // line 26
                echo $this->getAttribute($context["table"], "plan", array());
                echo "

                                    ";
                // line 28
                if ($this->getAttribute($context["table"], "buttontext", array())) {
                    // line 29
                    echo "                                </a>
                                ";
                }
                // line 31
                echo "                            </li>
                        ";
            }
            // line 33
            echo "
                        ";
            // line 34
            if ($this->getAttribute($context["table"], "price", array())) {
                echo "<li class=\"g-pricingtable-price\">";
                echo $this->getAttribute($context["table"], "price", array());
                echo "</li>";
            }
            // line 35
            echo "                        ";
            if ($this->getAttribute($context["table"], "period", array())) {
                echo "<li class=\"g-pricingtable-period\">";
                echo $this->getAttribute($context["table"], "period", array());
                echo "</li>";
            }
            // line 36
            echo "                        ";
            if ($this->getAttribute($context["table"], "desc", array())) {
                echo "<li class=\"g-pricingtable-desc\">";
                echo $this->getAttribute($context["table"], "desc", array());
                echo "</li> ";
            }
            // line 37
            echo "
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "items", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 39
                echo "                            <li class=\"g-pricingtable-item g-pricingtable-item-";
                echo twig_escape_filter($this->env, $context["key"]);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                echo "\">
                                ";
                // line 40
                echo $this->getAttribute($context["item"], "text", array());
                echo "
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                        ";
            // line 44
            if ($this->getAttribute($context["table"], "buttontext", array())) {
                // line 45
                echo "                            <li class=\"g-pricingtable-cta\">
                                <a target=\"";
                // line 46
                echo twig_escape_filter($this->env, (($this->getAttribute($context["table"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["table"], "buttontarget", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonlink", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonclass", array()));
                echo "\">
                                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", array()));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 51
            echo "
                    </ul>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        </div>

        ";
        // line 58
        if ($this->getAttribute(($context["particle"] ?? null), "footertext", array())) {
            // line 59
            echo "            <div class=\"g-pricingtable-footertext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "footertext", array());
            echo "</div>
        ";
        }
        // line 61
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/pricingtable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 61,  240 => 59,  238 => 58,  233 => 55,  216 => 51,  209 => 47,  199 => 46,  196 => 45,  194 => 44,  191 => 43,  182 => 40,  175 => 39,  171 => 38,  168 => 37,  161 => 36,  154 => 35,  148 => 34,  145 => 33,  141 => 31,  137 => 29,  135 => 28,  130 => 26,  127 => 25,  117 => 23,  115 => 22,  112 => 21,  110 => 20,  107 => 19,  100 => 18,  94 => 17,  90 => 16,  81 => 15,  64 => 14,  57 => 12,  54 => 11,  48 => 9,  46 => 8,  43 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/pricingtable.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/pricingtable.html.twig");
    }
}
