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
        if ((is_string($__internal_9dbcd779edec553e86a4f2a1cc2aa1a79de869e83b57efba5f0b5ea42b5c27c4 = ($context["php_version"] ?? null)) && is_string($__internal_62634ad0a850cccca0c19ab948cde5a28d8f08d661c8b81dc1a189675f2449ac = "5.4") && ('' === $__internal_62634ad0a850cccca0c19ab948cde5a28d8f08d661c8b81dc1a189675f2449ac || 0 === strpos($__internal_9dbcd779edec553e86a4f2a1cc2aa1a79de869e83b57efba5f0b5ea42b5c27c4, $__internal_62634ad0a850cccca0c19ab948cde5a28d8f08d661c8b81dc1a189675f2449ac)))) {
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
