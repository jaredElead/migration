<?php

/* @nucleus/content/atom.html.twig */
class __TwigTemplate_a5a71122aca6041f94b5fb8e829801968b52f95cdd41ef3d96d438f713588a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/content/particle.html.twig", "@nucleus/content/atom.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/content/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@nucleus/content/atom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@nucleus/content/atom.html.twig", "/var/www/vhosts/rzn8.com/elead.rzn8.com/wp-content/plugins/gantry5/engines/nucleus/templates/content/atom.html.twig");
    }
}
