<?php

/* @particles/casestudies.html.twig */
class __TwigTemplate_2dac3434b3c8a51314676be349270c6aca7cf2b0c78feba3224a22ffc313751a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/casestudies.html.twig", 1);
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo " g-casestudies\" data-casestudies-id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">

    <div class=\"g-casestudies-pattern\">
        <svg
        xmlns=\"http://www.w3.org/2000/svg\"
        xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 2342 747\">
            <path class=\"g-casestudies-pattern-1\"
        d=\"M2340.958,746.540 C1857.879,551.886 1202.654,19.186 582.000,174.000 C292.145,246.300 112.194,287.488 1.367,310.951 C1.020,262.721 1.000,184.000 1.000,184.000 L1.000,147.000 C1.000,147.000 1.298,142.792 1.370,129.039 C357.239,43.910 886.935,-63.401 1819.000,168.000 C2048.362,224.943 2216.933,243.942 2340.642,239.771 \"/>
            <path class=\"g-casestudies-pattern-2\"
        d=\"M2341.350,540.886 C2078.714,411.412 1055.330,-44.714 1.215,136.052 C0.431,64.942 -0.000,72.000 -0.000,72.000 L1.000,58.000 C1.000,58.000 1.206,70.193 1.000,16.000 C1144.992,-102.939 1911.000,496.936 2319.000,202.000 C2326.255,196.756 2333.279,191.815 2340.079,187.170 \"/>
        </svg>
    </div>

    <div class=\"g-casestudies-header\">
        ";
        // line 18
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            // line 19
            echo "            <div class=\"g-casestudies-title\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"g-casestudies-nav\">
            <div class=\"g-casestudies-nav-container\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
                <div class=\"g-casestudies-nav-item selected\" data-group=\"all\">
                    All
                </div>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "cases", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "                    <div class=\"g-casestudies-nav-item\" data-group=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
    </div>

    <div class=\"g-casestudies-grid ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()), "html", null, true);
        echo "\">
        <div class=\"g-casestudies-grid-sizer\"></div>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "cases", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["case"]) {
            // line 41
            echo "            ";
            $context["case_index"] = $this->getAttribute($context["loop"], "index", array());
            // line 42
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["case"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "                    <div class=\"g-casestudies-grid-item\" data-groups='[\"";
                echo twig_escape_filter($this->env, ($context["case_index"] ?? null), "html", null, true);
                echo "\"]'>
                        <div class=\"g-casestudies-grid-item-wrapper g-casestudies-variation-";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "variation", array()), "html", null, true);
                echo " g-casestudies-layout-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", array()), "html", null, true);
                echo "\">
                            <div class=\"g-casestudies-grid-item-content\">
                                <div class=\"g-casestudies-grid-item-subtitle\">
                                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subtitle", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"g-casestudies-grid-item-title\">
                                    ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                </div>
                            </div>
                            <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" />
                            <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_blank")) : ("_blank")), "html", null, true);
                echo "\"></a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
</div>
";
    }

    // line 63
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 64
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "jquery"), "method");
        // line 65
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("//cdn.polyfill.io/v2/polyfill.min.js?features=default,fetch,Array.prototype.includes"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/shuffle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/casestudies.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/casestudies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 69,  227 => 68,  223 => 67,  219 => 66,  214 => 65,  212 => 64,  209 => 63,  203 => 59,  189 => 58,  177 => 54,  171 => 53,  165 => 50,  159 => 47,  151 => 44,  146 => 43,  141 => 42,  138 => 41,  121 => 40,  116 => 38,  110 => 34,  93 => 31,  88 => 30,  71 => 29,  63 => 23,  57 => 20,  54 => 19,  52 => 18,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/casestudies.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/particles/casestudies.html.twig");
    }
}
