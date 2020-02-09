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

/* elements/cart-product-listing.twig */
class __TwigTemplate_b88818214c12a222f48bd5a26e38ff4b0cc0c088fd75b66159fe65b4a3243fea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"nano\">
    <div class=\"nano-content\">

        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo "        <!-- CART ITEM -->
        <div class=\"cart-item\">
            <div class=\"__pic\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "thumb", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"\"></a>
            </div>
            <div class=\"__desc\">
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"__title\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "number", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "type", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3></a>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
            echo "cart/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ID", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"__delete\">remove</a>
                <p>quantity</p>
                <div class=\"__quantity\">
                    <button data-action=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
            echo "cart/remove/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ID", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"remove\" type=\"button\">-</button>
                    <span>";
            // line 16
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cart", [], "any", false, false, false, 16)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["p"], "ID", [], "any", false, false, false, 16)] ?? null) : null), "html", null, true);
            echo "</span>
                    <button data-action=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
            echo "cart/add/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "ID", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"add\" type=\"button\">+</button>
                </div>

            </div>
            <div class=\"__price\">
                <span>";
            // line 22
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 22), ($context["base_price"] ?? null))) : (($context["base_price"] ?? null))), "html", null, true);
            echo " eur</span>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "elements/cart-product-listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  97 => 22,  87 => 17,  83 => 16,  77 => 15,  69 => 12,  59 => 11,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nano\">
    <div class=\"nano-content\">

        {% for p in cart.products %}
        <!-- CART ITEM -->
        <div class=\"cart-item\">
            <div class=\"__pic\">
                <a href=\"{{ p.url }}\"><img src=\"{{ p.thumb }}\" alt=\"\"></a>
            </div>
            <div class=\"__desc\">
                <a href=\"{{ p.url }}\" class=\"__title\"><h3>{{ p.name }}<br>{{ p.number }} {{ p.type }}</h3></a>
                <a href=\"{{ home_url }}cart/delete/{{ p.ID }}\" class=\"__delete\">remove</a>
                <p>quantity</p>
                <div class=\"__quantity\">
                    <button data-action=\"{{ home_url }}cart/remove/{{ p.ID }}\" class=\"remove\" type=\"button\">-</button>
                    <span>{{ cart.cart[p.ID] }}</span>
                    <button data-action=\"{{ home_url }}cart/add/{{ p.ID }}\" class=\"add\" type=\"button\">+</button>
                </div>

            </div>
            <div class=\"__price\">
                <span>{{ p.price|default(base_price) }} eur</span>
            </div>
        </div>
        {% endfor %}
    </div>
</div>", "elements/cart-product-listing.twig", "/var/www/mamezi/themosis/htdocs/content/themes/my-theme/views/elements/cart-product-listing.twig");
    }
}
