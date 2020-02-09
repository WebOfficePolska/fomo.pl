<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/home.twig */
class __TwigTemplate_076ce51e655c7ccf182529b5092c6e0194c6d2189c36a9bf687cf6a5a90f9084 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/default.twig", "pages/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
\t
<section class=\"home-intro\" id=\"homeIntro\">

  <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "products/elke\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "thumb", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\">
  </a>


</section>

";
    }

    public function getTemplateName()
    {
        return "pages/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 9,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/default.twig' %}


{% block main %}

\t
<section class=\"home-intro\" id=\"homeIntro\">

  <a href=\"{{ home_url }}products/elke\">
    <img src=\"{{ page.thumb }}\" alt=\"\">
  </a>


</section>

{% endblock %}", "pages/home.twig", "/var/www/mamezi/themosis/htdocs/content/themes/my-theme/views/pages/home.twig");
    }
}
