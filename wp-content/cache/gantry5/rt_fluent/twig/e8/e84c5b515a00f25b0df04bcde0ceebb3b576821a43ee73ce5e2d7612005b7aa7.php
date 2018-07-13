<?php

/* searchform.html.twig */
class __TwigTemplate_ba4af6998b9714de10f370846d7d0916212255f3d7b7a901832d58277a8d9086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'searchform' => array($this, 'block_searchform'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["twigTemplate"] = "searchform.html.twig";
        // line 2
        $context["scope"] = "searchform";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('searchform', $context, $blocks);
    }

    public function block_searchform($context, array $blocks = array())
    {
        // line 5
        echo "
    <form role=\"search\" method=\"get\" class=\"search-form form search\" action=\"";
        // line 6
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "/\">
        <label>
            <input type=\"search\" class=\"search-field inputbox\" value=\"\" name=\"s\" title=\"";
        // line 8
        echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Search for:", "g5_fluent"));
        echo "\" />
        </label>
    </form>

";
    }

    public function getTemplateName()
    {
        return "searchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set twigTemplate = 'searchform.html.twig' %}
{% set scope = 'searchform' %}

{% block searchform %}

    <form role=\"search\" method=\"get\" class=\"search-form form search\" action=\"{{ site.url }}/\">
        <label>
            <input type=\"search\" class=\"search-field inputbox\" value=\"\" name=\"s\" title=\"{{ __('Search for:', 'g5_fluent') }}\" />
        </label>
    </form>

{% endblock %}
", "searchform.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/themes/rt_fluent/views/searchform.html.twig");
    }
}
