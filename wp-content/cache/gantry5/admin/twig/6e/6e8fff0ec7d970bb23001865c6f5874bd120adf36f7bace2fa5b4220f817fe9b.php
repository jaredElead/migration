<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_58d710fa3277567e77a32b1b1dc75784a7847fcdee7befd63d90e91353805abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_2148d5718add09b18e5ab2734d7b2b664df537e676e090a9af521c86454d3138 = ($context["php_version"] ?? null)) && is_string($__internal_1e1f08833578ef61b24dc7b18042066cf8c379989df0e8566307da6fc2329e89 = "5.4") && ('' === $__internal_1e1f08833578ef61b24dc7b18042066cf8c379989df0e8566307da6fc2329e89 || 0 === strpos($__internal_2148d5718add09b18e5ab2734d7b2b664df537e676e090a9af521c86454d3138, $__internal_1e1f08833578ef61b24dc7b18042066cf8c379989df0e8566307da6fc2329e89)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
