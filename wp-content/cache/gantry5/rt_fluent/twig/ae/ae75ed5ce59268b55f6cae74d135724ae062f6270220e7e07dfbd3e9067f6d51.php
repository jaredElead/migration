<?php

/* partials/content-page.html.twig */
class __TwigTemplate_94d483d6ff1254fb2b9ea1cf5945c4ba9ca9ef0516dcb2a3462c563a7488efa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article class=\"post-type-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", array());
        echo " ";
        echo $this->getAttribute(($context["post"] ?? null), "class", array());
        echo "\" id=\"post-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", array());
        echo "\">

    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
</article>
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 6
        echo "        <section class=\"entry-header\">

            ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".title.enabled"), 1 => "1"), "method")) {
            // line 9
            echo "                ";
            // line 10
            echo "                <div class=\"page-header\">
                    <h2 class=\"entry-title\">
                        ";
            // line 12
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".title.link"), 1 => "0"), "method")) {
                // line 13
                echo "                            <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", array());
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "\">";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "</a>
                        ";
            } else {
                // line 15
                echo "                            ";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "
                        ";
            }
            // line 17
            echo "                    </h2>
                </div>
                ";
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            ";
        // line 23
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"), "method") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"), "method"))) {
            // line 24
            echo "                ";
            $this->loadTemplate(array(0 => (("partials/meta-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/meta.html.twig"), "partials/content-page.html.twig", 24)->display($context);
            // line 25
            echo "            ";
        }
        // line 26
        echo "            ";
        // line 27
        echo "
        </section>
        ";
        // line 30
        echo "
        ";
        // line 32
        echo "        ";
        if ( !call_user_func_array($this->env->getFunction('function')->getCallable(), array("post_password_required", $this->getAttribute(($context["post"] ?? null), "ID", array())))) {
            // line 33
            echo "
            ";
            // line 35
            echo "            <section class=\"entry-content\">

                ";
            // line 38
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.enabled"), 1 => "1"), "method") && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", array()), "src", array()))) {
                // line 39
                echo "                    ";
                $context["position"] = ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"), "method") == "none")) ? ("") : (("float-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"), "method"))));
                // line 40
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", array());
                echo "\" class=\"post-thumbnail\" aria-hidden=\"true\">
                        <img src=\"";
                // line 41
                echo Timber\ImageHelper::resize($this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", array()), "src", array()), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.width"), 1 => "1150"), "method"), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.height"), 1 => "285"), "method"));
                echo "\" class=\"featured-image tease-featured-image ";
                echo ($context["position"] ?? null);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "\" />
                    </a>
                ";
            }
            // line 44
            echo "                ";
            // line 45
            echo "
                ";
            // line 47
            echo "                ";
            echo $this->getAttribute(($context["post"] ?? null), "content", array());
            echo "

                ";
            // line 49
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_link_pages", array("before" => "<div class=\"page-links\" itemprop=\"pagination\">", "after" => "</div>", "link_before" => "<span class=\"page-number page-numbers\">", "link_after" => "</span>", "echo" => 0)));
            echo "
                ";
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("edit_post_link", call_user_func_array($this->env->getFunction('__')->getCallable(), array("Edit", "g5_fluent")), "<span class=\"edit-link\">", "</span>"));
            echo "
                ";
            // line 55
            echo "
            </section>
            ";
            // line 58
            echo "
        ";
        } else {
            // line 60
            echo "
            ";
            // line 62
            echo "            <div class=\"password-form\">

                ";
            // line 65
            echo "                ";
            $this->loadTemplate("partials/password-form.html.twig", "partials/content-page.html.twig", 65)->display($context);
            // line 66
            echo "
            </div>
            ";
            // line 69
            echo "
        ";
        }
        // line 71
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/content-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 71,  178 => 69,  174 => 66,  171 => 65,  167 => 62,  164 => 60,  160 => 58,  156 => 55,  151 => 53,  148 => 51,  144 => 49,  138 => 47,  135 => 45,  133 => 44,  123 => 41,  118 => 40,  115 => 39,  112 => 38,  108 => 35,  105 => 33,  102 => 32,  99 => 30,  95 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 21,  78 => 20,  74 => 17,  68 => 15,  58 => 13,  56 => 12,  52 => 10,  50 => 9,  48 => 8,  44 => 6,  41 => 4,  38 => 3,  32 => 73,  30 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/content-page.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/views/partials/content-page.html.twig");
    }
}
