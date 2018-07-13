<?php

/* partials/content.html.twig */
class __TwigTemplate_4229ec73874739060dd94d7caf2e1a9c7286d95573b4a95000faf94d4fc19797 extends Twig_Template
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
        echo "<article class=\"tease tease-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", array());
        echo " ";
        echo $this->getAttribute(($context["post"] ?? null), "class", array());
        echo " clearfix\" id=\"tease-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", array());
        echo "\">

    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 96
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
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".title.enabled"), 1 => "1"), "method")) {
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
        }
        // line 20
        echo "            ";
        // line 21
        echo "
            ";
        // line 23
        echo "            ";
        if ((((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"), "method") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"), "method")) || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-comments.enabled"), 1 => "1"), "method")) || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-categories.enabled"), 1 => "1"), "method")) || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-tags.enabled"), 1 => "0"), "method"))) {
            // line 24
            echo "                ";
            $this->loadTemplate(array(0 => (("partials/meta-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/meta.html.twig"), "partials/content.html.twig", 24)->display($context);
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
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".content.enabled"), 1 => "1"), "method")) {
                // line 48
                echo "                    ";
                if ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".content.type"), 1 => "content"), "method") == "excerpt") &&  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "post_excerpt", array())))) {
                    // line 49
                    echo "                        <div class=\"post-excerpt\">";
                    echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), array($this->getAttribute(($context["post"] ?? null), "post_excerpt", array()), "the_excerpt"));
                    echo "</div>
                    ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 50
($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".content.type"), 1 => "content"), "method") == "gexcerpt")) {
                    // line 51
                    echo "                        <div class=\"post-excerpt\">";
                    echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["post"] ?? null), "preview", array()), "length", array(0 => $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".content.gexcerpt-length"), 1 => "50"), "method")), "method"), "read_more", array(0 => false), "method"), "the_excerpt"));
                    echo "</div>
                    ";
                } else {
                    // line 53
                    echo "                        <div class=\"post-content\">
                            ";
                    // line 54
                    $context["readmore"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->pregMatch("/<!--more(.*?)?-->/", $this->getAttribute(($context["post"] ?? null), "post_content", array()));
                    // line 55
                    echo "                            ";
                    if (($context["readmore"] ?? null)) {
                        // line 56
                        echo "                                ";
                        $context["split_content"] = twig_split_filter($this->env, $this->getAttribute(($context["post"] ?? null), "post_content", array()), $this->getAttribute(($context["readmore"] ?? null), 0, array(), "array"), 2);
                        // line 57
                        echo "                                ";
                        echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), array($this->getAttribute(($context["split_content"] ?? null), 0, array(), "array"), "the_content"));
                        echo "
                            ";
                    } elseif (twig_in_filter("<!--nextpage-->", $this->getAttribute(                    // line 58
($context["post"] ?? null), "post_content", array()))) {
                        // line 59
                        echo "                                ";
                        $context["split_content"] = twig_split_filter($this->env, $this->getAttribute(($context["post"] ?? null), "post_content", array()), "<!--nextpage-->", 2);
                        // line 60
                        echo "                                ";
                        echo call_user_func_array($this->env->getFilter('apply_filters')->getCallable(), array($this->getAttribute(($context["split_content"] ?? null), 0, array(), "array"), "the_content"));
                        echo "
                            ";
                    } else {
                        // line 62
                        echo "                                ";
                        echo $this->getAttribute(($context["post"] ?? null), "content", array());
                        echo "
                            ";
                    }
                    // line 64
                    echo "                        </div>
                    ";
                }
                // line 66
                echo "                ";
            }
            // line 67
            echo "
                ";
            // line 68
            if ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".read-more.mode"), 1 => "auto"), "method") == "always") || (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".read-more.mode"), 1 => "auto"), "method") == "auto") && ((($context["readmore"] ?? null) ||  !twig_test_empty($this->getAttribute(($context["post"] ?? null), "post_excerpt", array()))) || ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".content.type"), 1 => "content"), "method") == "gexcerpt"))))) {
                // line 69
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", array());
                echo "\" class=\"read-more button\">
                        ";
                // line 70
                if ( !twig_test_empty($this->getAttribute(($context["readmore"] ?? null), 1, array(), "array"))) {
                    // line 71
                    echo $this->getAttribute(($context["readmore"] ?? null), 1, array(), "array");
                } else {
                    // line 73
                    echo "                            ";
                    echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".read-more.label"), 1 => "Read More"), "method");
                    echo "
                        ";
                }
                // line 75
                echo "                    </a>
                ";
            }
            // line 77
            echo "                ";
            // line 78
            echo "
            </section>
            ";
            // line 81
            echo "
        ";
        } else {
            // line 83
            echo "
            ";
            // line 85
            echo "            <div class=\"password-form\">

                ";
            // line 88
            echo "                ";
            $this->loadTemplate("partials/password-form.html.twig", "partials/content.html.twig", 88)->display($context);
            // line 89
            echo "
            </div>
            ";
            // line 92
            echo "
        ";
        }
        // line 94
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 94,  245 => 92,  241 => 89,  238 => 88,  234 => 85,  231 => 83,  227 => 81,  223 => 78,  221 => 77,  217 => 75,  211 => 73,  208 => 71,  206 => 70,  201 => 69,  199 => 68,  196 => 67,  193 => 66,  189 => 64,  183 => 62,  177 => 60,  174 => 59,  172 => 58,  167 => 57,  164 => 56,  161 => 55,  159 => 54,  156 => 53,  150 => 51,  148 => 50,  143 => 49,  140 => 48,  137 => 47,  134 => 45,  132 => 44,  122 => 41,  117 => 40,  114 => 39,  111 => 38,  107 => 35,  104 => 33,  101 => 32,  98 => 30,  94 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 21,  78 => 20,  73 => 17,  67 => 15,  57 => 13,  55 => 12,  51 => 10,  48 => 9,  44 => 6,  41 => 4,  38 => 3,  32 => 96,  30 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"tease tease-{{ post.post_type }} {{ post.class }} clearfix\" id=\"tease-{{ post.ID }}\">

    {% block content %}

        {# Begin Entry Header #}
        <section class=\"entry-header\">

            {# Begin Entry Title #}
            {% if gantry.config.get('content.' ~ scope ~ '.title.enabled', '1') %}
                <div class=\"page-header\">
                    <h2 class=\"entry-title\">
                        {% if gantry.config.get('content.' ~ scope ~ '.title.link', '0') %}
                            <a href=\"{{ post.link }}\" title=\"{{ post.title }}\">{{ post.title }}</a>
                        {% else %}
                            {{ post.title }}
                        {% endif %}
                    </h2>
                </div>
            {% endif %}
            {# End Entry Title #}

            {# Begin Entry Meta #}
            {% if gantry.config.get('content.' ~ scope ~ '.meta-date.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-author.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-comments.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-categories.enabled', '1') or gantry.config.get('content.' ~ scope ~ '.meta-tags.enabled', '0') %}
                {% include ['partials/meta-' ~ scope ~ '.html.twig', 'partials/meta.html.twig'] %}
            {% endif %}
            {# End Entry Meta #}

        </section>
        {# End Entry Header #}

        {# Check if post is password protected #}
        {% if not function( 'post_password_required', post.ID ) %}

            {# Begin Entry Content #}
            <section class=\"entry-content\">

                {# Begin Featured Image #}
                {% if gantry.config.get('content.' ~ scope ~ '.featured-image.enabled', '1') and post.thumbnail.src %}
                    {% set position = (gantry.config.get('content.' ~ scope ~ '.featured-image.position', 'none') == 'none') ? '' : 'float-' ~ gantry.config.get('content.' ~ scope ~ '.featured-image.position', 'none') %}
                    <a href=\"{{ post.link }}\" class=\"post-thumbnail\" aria-hidden=\"true\">
                        <img src=\"{{ post.thumbnail.src|resize(gantry.config.get('content.' ~ scope ~ '.featured-image.width', '1150'), gantry.config.get('content.' ~ scope ~ '.featured-image.height', '285')) }}\" class=\"featured-image tease-featured-image {{ position }}\" alt=\"{{ post.title }}\" />
                    </a>
                {% endif %}
                {# End Featured Image #}

                {# Begin Tease #}
                {% if gantry.config.get('content.' ~ scope ~ '.content.enabled', '1') %}
                    {% if gantry.config.get('content.' ~ scope ~ '.content.type', 'content') == 'excerpt' and post.post_excerpt is not empty %}
                        <div class=\"post-excerpt\">{{ post.post_excerpt|apply_filters('the_excerpt')|raw }}</div>
                    {% elseif gantry.config.get('content.' ~ scope ~ '.content.type', 'content') == 'gexcerpt' %}
                        <div class=\"post-excerpt\">{{ post.preview.length(gantry.config.get('content.' ~ scope ~ '.content.gexcerpt-length', '50')).read_more(false)|apply_filters('the_excerpt')|raw }}</div>
                    {% else %}
                        <div class=\"post-content\">
                            {% set readmore = preg_match('/<!--more(.*?)?-->/', post.post_content) %}
                            {% if readmore %}
                                {% set split_content = post.post_content|split(readmore[0], 2) %}
                                {{ split_content[0]|apply_filters('the_content')|raw }}
                            {% elseif '<!--nextpage-->' in post.post_content %}
                                {% set split_content = post.post_content|split('<!--nextpage-->', 2) %}
                                {{ split_content[0]|apply_filters('the_content')|raw }}
                            {% else %}
                                {{ post.content|raw }}
                            {% endif %}
                        </div>
                    {% endif %}
                {% endif %}

                {% if gantry.config.get('content.' ~ scope ~ '.read-more.mode', 'auto') == 'always' or (gantry.config.get('content.' ~ scope ~ '.read-more.mode', 'auto') == 'auto' and (readmore or post.post_excerpt is not empty or gantry.config.get('content.' ~ scope ~ '.content.type', 'content') == 'gexcerpt') )  %}
                    <a href=\"{{ post.link }}\" class=\"read-more button\">
                        {% if readmore[1] is not empty %}
                            {{- readmore[1] -}}
                        {% else %}
                            {{ gantry.config.get('content.' ~ scope ~ '.read-more.label', 'Read More') }}
                        {% endif %}
                    </a>
                {% endif %}
                {# End Tease #}

            </section>
            {# End Entry Content #}

        {% else %}

            {# Begin Password Protected Form #}
            <div class=\"password-form\">

                {# Include the password form #}
                {% include 'partials/password-form.html.twig' %}

            </div>
            {# End Password Protected Form #}

        {% endif %}

    {% endblock %}

</article>
", "partials/content.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/views/partials/content.html.twig");
    }
}
