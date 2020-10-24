<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_c9e8989e290c34625f00a18a90b6218f487dead783b1daafcacf513a1516e44d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p><a href=\"https://part0n.xyz/\">Part0n</a> Webhosting </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><a href=\"https://part0n.xyz/\">Part0n</a> Webhosting </section>
</section>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\part0n.xyz\\rismose\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
