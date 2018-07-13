<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_faf72b2c6d2434c9b901cfdf953ad2036ad3c3d6b353ceaf87df45ea0099e036 extends Twig_Template
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
        if ((is_string($__internal_92f31defc824d1f86c2667b0c9aca8f8387616aeef8d7d4b0dc6226d947ca14d = ($context["php_version"] ?? null)) && is_string($__internal_87498ae127d151a6f6c5fc76f213d9f0b774e484058e5f9505cc0f3c67160368 = "5.4") && ('' === $__internal_87498ae127d151a6f6c5fc76f213d9f0b774e484058e5f9505cc0f3c67160368 || 0 === strpos($__internal_92f31defc824d1f86c2667b0c9aca8f8387616aeef8d7d4b0dc6226d947ca14d, $__internal_87498ae127d151a6f6c5fc76f213d9f0b774e484058e5f9505cc0f3c67160368)))) {
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
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/var/www/vhosts/rzn8.com/automail.rzn8.com/wp-content/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
