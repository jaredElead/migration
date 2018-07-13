<?php

/* @particles/testimonialslider.html.twig */
class __TwigTemplate_c3871090493d1d84874f64b8ccf8dd35231aaa01774c84693013608adf258384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/testimonialslider.html.twig", 1);
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
        echo "\" class=\"g-testimonialslider ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\" data-testimonialslider-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-testimonialslider-speed=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "speed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "speed", array()), "10")) : ("10")), "html", null, true);
        echo "\" data-testimonialslider-rtl=\"";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\" data-testimonialslider-matchheight=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "matchheight", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "matchheight", array()), "enabled")) : ("enabled")), "html", null, true);
        echo "\" data-testimonialslider-mobile=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array(), "any", false, true), "get", array(0 => "styles.breakpoints.mobile-menu-breakpoint"), "method"), "51rem")) : ("51rem")), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["attr_extra"] ?? null), "html", null, true);
        echo ">
        <div class=\"g-testimonialslider-carousel\" data-testimonialslider-carousel-id=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        if (($this->getAttribute(($context["particle"] ?? null), "matchheight", array()) == "enabled")) {
            echo "style=\"height: 50px;\"";
        } elseif ((($this->getAttribute(($context["particle"] ?? null), "matchheight", array()) == "disabled") && $this->getAttribute(($context["particle"] ?? null), "fixedheight", array()))) {
            echo "style=\"height: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "fixedheight", array()), "html", null, true);
            echo "px;\"";
        }
        echo ">

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                <div class=\"g-testimonialslider-carousel-item-container\">
                    <div class=\"g-testimonialslider-carousel-item-content\">
                    ";
            // line 20
            if ($this->getAttribute($context["item"], "description", array())) {
                // line 21
                echo "                        <div class=\"g-testimonialslider-carousel-item-description\">
                            ";
                // line 22
                echo $this->getAttribute($context["item"], "description", array());
                echo "
                        </div>
                    ";
            }
            // line 25
            echo "
                    ";
            // line 26
            if ((($this->getAttribute($context["item"], "avatar", array()) || $this->getAttribute($context["item"], "author", array())) || $this->getAttribute($context["item"], "authortitle", array()))) {
                // line 27
                echo "                        <div class=\"g-testimonialslider-carousel-item-author-details\">
                            ";
                // line 28
                if ($this->getAttribute($context["item"], "avatar", array())) {
                    // line 29
                    echo "                                <div class=\"g-testimonialslider-carousel-item-avatar\">
                                    <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "avatar", array()));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                    echo "\" />
                                </div>
                            ";
                }
                // line 33
                echo "
                            ";
                // line 34
                if (($this->getAttribute($context["item"], "author", array()) || $this->getAttribute($context["item"], "authortitle", array()))) {
                    // line 35
                    echo "                                <div class=\"g-testimonialslider-carousel-item-author-name-title\">
                                    ";
                    // line 36
                    if ($this->getAttribute($context["item"], "author", array())) {
                        // line 37
                        echo "                                        <div class=\"g-testimonialslider-carousel-item-author\">
                                            ";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                        echo "
                                        </div>
                                    ";
                    }
                    // line 41
                    echo "
                                    ";
                    // line 42
                    if ($this->getAttribute($context["item"], "authortitle", array())) {
                        // line 43
                        echo "                                        <div class=\"g-testimonialslider-carousel-item-author-title\">
                                            ";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "authortitle", array()));
                        echo "
                                        </div>
                                    ";
                    }
                    // line 47
                    echo "                                </div>
                            ";
                }
                // line 49
                echo "                        </div>
                    ";
            }
            // line 51
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </div>
    </div>

";
    }

    // line 60
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 61
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 62
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/length.min.js"), 1 => 10, 2 => "footer"), "method");
        // line 63
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.matchHeight-min.js"), 1 => 10, 2 => "footer"), "method");
        // line 64
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.mThumbnailScroller.js"), 1 => 10, 2 => "footer"), "method");
        // line 65
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "document", array()), "addScript", array(0 => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/testimonialslider.init.js"), 1 => 10, 2 => "footer"), "method");
    }

    public function getTemplateName()
    {
        return "@particles/testimonialslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 65,  200 => 64,  198 => 63,  196 => 62,  194 => 61,  191 => 60,  183 => 54,  175 => 51,  171 => 49,  167 => 47,  161 => 44,  158 => 43,  156 => 42,  153 => 41,  147 => 38,  144 => 37,  142 => 36,  139 => 35,  137 => 34,  134 => 33,  126 => 30,  123 => 29,  121 => 28,  118 => 27,  116 => 26,  113 => 25,  107 => 22,  104 => 21,  102 => 20,  98 => 18,  94 => 17,  81 => 15,  59 => 14,  56 => 13,  53 => 12,  49 => 1,  38 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/testimonialslider.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/testimonialslider.html.twig");
    }
}
