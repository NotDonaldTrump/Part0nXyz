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

/* @images/grav-logo.svg */
class __TwigTemplate_909843ffc8f4c27325601bf7fb8c51f01aa339493d44948c569e38d58d9582bf extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2101\" height=\"584\" viewBox=\"0 0 2101 584\">
  <defs>
    <style>
      .cls-1 {
        font-size: 300px;
        opacity: 0;
        text-anchor: middle;
        font-family: \"Helvetica Neue\";
      }
    </style>
  </defs>
  <text id=\"Bruh_idk\" data-name=\"Bruh idk\" class=\"cls-1\" x=\"1039.508\" y=\"394.688\"><tspan x=\"1039.508\">Bruh idk</tspan></text>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@images/grav-logo.svg";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2101\" height=\"584\" viewBox=\"0 0 2101 584\">
  <defs>
    <style>
      .cls-1 {
        font-size: 300px;
        opacity: 0;
        text-anchor: middle;
        font-family: \"Helvetica Neue\";
      }
    </style>
  </defs>
  <text id=\"Bruh_idk\" data-name=\"Bruh idk\" class=\"cls-1\" x=\"1039.508\" y=\"394.688\"><tspan x=\"1039.508\">Bruh idk</tspan></text>
</svg>
", "@images/grav-logo.svg", "C:\\xampp\\htdocs\\part0n.xyz\\rismose\\user\\themes\\quark\\images\\grav-logo.svg");
    }
}
