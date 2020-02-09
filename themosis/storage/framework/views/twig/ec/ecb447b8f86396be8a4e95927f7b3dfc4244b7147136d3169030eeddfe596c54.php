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

/* layouts/default.twig */
class __TwigTemplate_e74e00146c8fda7e37e9a4d853d847baa34ca3ac0c40f96ae6d2b5846e5d946f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"author\" content=\"\">


  <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
  <meta name=\"theme-color\" content=\"#ffffff\">

  <meta property=\"og:url\" content=\"\"/>
  <meta property=\"og:type\" content=\"website\" />
  <meta property=\"og:title\" content=\"\" />
  <meta property=\"og:description\" content=\"\" />
  <meta property=\"og:image\" content=\"\"/>
  <meta property=\"og:image\" content=\"\"/>
  <meta property=\"og:image\" content=\"\"/>
  <meta property=\"og:image\" content=\"\"/>

  <title>";
        // line 27
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["site_description"] ?? null), "html", null, true);
        echo "</title>

  <link rel=\"icon\" type=\"image/png\" sizes=\"196x196\" href=\"img/additional/icon_196x196.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"128x128\" href=\"img/additional/icon_128x128.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"img/additional/icon_96x96.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"img/additional/icon_32x32.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"img/additional/icon_16x16.png\">


  <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["assets_url"] ?? null), "html", null, true);
        echo "/dist/main.css?v2\" />


</head>


<body ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fn"] ?? null), "body_class", [], "method", false, false, false, 42), "html", null, true);
        echo ">

  <!--[if lt IE 10]>
  <div class=\"ancient\">
      <h2>:(</h2>
      <p>Używasz <strong>przestarzałej</strong> przeglądarki. </p>
      <p>Proszę <a href=\"http://browsehappy.com/\">zainstaluj nowszą wersję</a>, aby poprawnie wyświetlić stronę.</p>
  </div>
  <![endif]-->

";
        // line 52
        if (( !(isset($context["page_template"]) || array_key_exists("page_template", $context)) || (($context["page_template"] ?? null) != "cart"))) {
            // line 53
            echo "<div class=\"loading-screen\" id=\"loadScreen\"></div>
<header class=\"header\" id=\"Header\">
    <div class=\"__top-bar\">
        <button class=\"burger-btn\" id=\"burgerMenuBtn\">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
            echo "\" class=\"__logo\">
          ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, ($context["fn"] ?? null), "include_svg", [0 => "logo_sigur.svg"], "method", false, false, false, 63);
            echo "
        </a>

        <button class=\"__basket-btn\" id=\"openCart\">             
            <i class=\"__basket-icom\">
              ";
            // line 68
            echo twig_get_attribute($this->env, $this->source, ($context["fn"] ?? null), "include_svg", [0 => "cart.svg"], "method", false, false, false, 68);
            echo "
            </i>
            <span>";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 70)), "html", null, true);
            echo "</span>
        </button>

    </div>

    <div class=\"__menu-holder\" id=\"mainMenu\">
        <nav class=\"__nav\">
            <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
            echo "products/elke\"><span>elke</span></a>
            <a href=\"mailto:info@sigur.eu\"><span>contact: info@sigur.eu</span></a>
        </nav>
        
        <div class=\"__sub-nav\" id=\"subMenu\">
            <div class=\"__inner\">
                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fn"] ?? null), "get_privacy_policy_url", [], "method", false, false, false, 83), "html", null, true);
            echo "\"><span>Privacy policy and cookies</span></a>
            </div>
        </div>
        ";
            // line 96
            echo "        <div class=\"__claim\" id=\"menuClaim\">
            <h3>like life<br>items</h3>
        </div>
      
    </div>

</header>
";
        }
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('header', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        if (((isset($context["page_template"]) || array_key_exists("page_template", $context)) && (($context["page_template"] ?? null) == "cart"))) {
            // line 108
            echo "<!-- CART INNER-->
<div class=\"cart -inner\" id=\"cartInner\">
    <div class=\"__head\">
        <span>Basket (";
            // line 111
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 111)), "html", null, true);
            echo ")</span>
    </div>
    <div class=\"__product-listing\">
        ";
            // line 114
            echo twig_include($this->env, $context, "elements/cart-product-listing.twig");
            echo "
    </div>
    <div class=\"__summary\">
        ";
            // line 117
            echo twig_include($this->env, $context, "elements/cart-summary.twig");
            echo "
    </div>
</div>
";
        } else {
            // line 121
            echo "<div class=\"cart\" id=\"cart\">
    <button type=\"button\" class=\"__close-x\" id=\"closeCartBtn\">
        <span></span>
        <span></span>
    </button>
    <div class=\"__head\">
        <span>Basket ";
            // line 127
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 127))) {
                echo "(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 127)), "html", null, true);
                echo ")";
            }
            echo "</span>
    </div>
    <div class=\"__product-listing\">
        ";
            // line 130
            echo twig_include($this->env, $context, "elements/cart-product-listing.twig");
            echo "
    </div>
    <div class=\"__summary\">
        ";
            // line 133
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 133))) {
                // line 134
                echo "        ";
                echo twig_include($this->env, $context, "elements/cart-summary.twig");
                echo "
        <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
                echo "basket\" class=\"btn-primary -block\"><span>Proceed to oder</span></a>
        ";
            }
            // line 137
            echo "    </div>
</div>
";
        }
        // line 140
        echo "

<div class=\"page-wrapper\" id=\"pageWrapper\">
";
        // line 143
        $this->displayBlock('main', $context, $blocks);
        // line 144
        echo "</div>





";
        // line 150
        if (( !(isset($context["page_template"]) || array_key_exists("page_template", $context)) || (($context["page_template"] ?? null) != "cart"))) {
            // line 151
            echo twig_include($this->env, $context, "elements/footer.twig");
            echo "
";
        }
        // line 153
        echo "

<script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, ($context["assets_url"] ?? null), "html", null, true);
        echo "/dist/bundle.js?v2\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, ($context["assets_url"] ?? null), "html", null, true);
        echo "/dist/cart.js\"></script>


</body>

</html>\t";
    }

    // line 105
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 143
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 143,  284 => 105,  274 => 157,  269 => 155,  265 => 153,  260 => 151,  258 => 150,  250 => 144,  248 => 143,  243 => 140,  238 => 137,  233 => 135,  228 => 134,  226 => 133,  220 => 130,  210 => 127,  202 => 121,  195 => 117,  189 => 114,  183 => 111,  178 => 108,  176 => 107,  173 => 106,  171 => 105,  168 => 104,  158 => 96,  152 => 83,  143 => 77,  133 => 70,  128 => 68,  120 => 63,  116 => 62,  105 => 53,  103 => 52,  90 => 42,  81 => 36,  67 => 27,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"author\" content=\"\">


  <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
  <meta name=\"theme-color\" content=\"#ffffff\">

  <meta property=\"og:url\" content=\"\"/>
  <meta property=\"og:type\" content=\"website\" />
  <meta property=\"og:title\" content=\"\" />
  <meta property=\"og:description\" content=\"\" />
  <meta property=\"og:image\" content=\"\"/>
  <meta property=\"og:image\" content=\"\"/>
  <meta property=\"og:image\" content=\"\"/>
  <meta property=\"og:image\" content=\"\"/>

  <title>{{ site_name }} - {{ site_description }}</title>

  <link rel=\"icon\" type=\"image/png\" sizes=\"196x196\" href=\"img/additional/icon_196x196.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"128x128\" href=\"img/additional/icon_128x128.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"img/additional/icon_96x96.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"img/additional/icon_32x32.png\">
  <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"img/additional/icon_16x16.png\">


  <link rel=\"stylesheet\" href=\"{{ assets_url }}/dist/main.css?v2\" />


</head>


<body {{ fn.body_class() }}>

  <!--[if lt IE 10]>
  <div class=\"ancient\">
      <h2>:(</h2>
      <p>Używasz <strong>przestarzałej</strong> przeglądarki. </p>
      <p>Proszę <a href=\"http://browsehappy.com/\">zainstaluj nowszą wersję</a>, aby poprawnie wyświetlić stronę.</p>
  </div>
  <![endif]-->

{% if page_template is not defined or page_template != 'cart' %}
<div class=\"loading-screen\" id=\"loadScreen\"></div>
<header class=\"header\" id=\"Header\">
    <div class=\"__top-bar\">
        <button class=\"burger-btn\" id=\"burgerMenuBtn\">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <a href=\"{{ home_url }}\" class=\"__logo\">
          {{ fn.include_svg('logo_sigur.svg')|raw }}
        </a>

        <button class=\"__basket-btn\" id=\"openCart\">             
            <i class=\"__basket-icom\">
              {{ fn.include_svg('cart.svg')|raw }}
            </i>
            <span>{{ cart.products|length }}</span>
        </button>

    </div>

    <div class=\"__menu-holder\" id=\"mainMenu\">
        <nav class=\"__nav\">
            <a href=\"{{ home_url }}products/elke\"><span>elke</span></a>
            <a href=\"mailto:info@sigur.eu\"><span>contact: info@sigur.eu</span></a>
        </nav>
        
        <div class=\"__sub-nav\" id=\"subMenu\">
            <div class=\"__inner\">
                <a href=\"{{ fn.get_privacy_policy_url() }}\"><span>Privacy policy and cookies</span></a>
            </div>
        </div>
        {#
        <div class=\"__social\" id=\"menuSocial\">
            <span>Follow us</span>
            <div class=\"__social-items\">
                <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
        #}
        <div class=\"__claim\" id=\"menuClaim\">
            <h3>like life<br>items</h3>
        </div>
      
    </div>

</header>
{% endif %}

{% block header %}{% endblock %}

{% if page_template is defined and page_template == 'cart' %}
<!-- CART INNER-->
<div class=\"cart -inner\" id=\"cartInner\">
    <div class=\"__head\">
        <span>Basket ({{ cart.products|length }})</span>
    </div>
    <div class=\"__product-listing\">
        {{ include('elements/cart-product-listing.twig') }}
    </div>
    <div class=\"__summary\">
        {{ include('elements/cart-summary.twig') }}
    </div>
</div>
{% else %}
<div class=\"cart\" id=\"cart\">
    <button type=\"button\" class=\"__close-x\" id=\"closeCartBtn\">
        <span></span>
        <span></span>
    </button>
    <div class=\"__head\">
        <span>Basket {% if cart.products is not empty %}({{ cart.products|length }}){% endif %}</span>
    </div>
    <div class=\"__product-listing\">
        {{ include('elements/cart-product-listing.twig') }}
    </div>
    <div class=\"__summary\">
        {% if cart.products is not empty %}
        {{ include('elements/cart-summary.twig') }}
        <a href=\"{{ home_url }}basket\" class=\"btn-primary -block\"><span>Proceed to oder</span></a>
        {% endif %}
    </div>
</div>
{% endif %}


<div class=\"page-wrapper\" id=\"pageWrapper\">
{% block main %}{% endblock %}
</div>





{% if page_template is not defined or page_template != 'cart' %}
{{ include('elements/footer.twig') }}
{% endif %}


<script type=\"text/javascript\" src=\"{{ assets_url }}/dist/bundle.js?v2\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ assets_url }}/dist/cart.js\"></script>


</body>

</html>\t", "layouts/default.twig", "/var/www/mamezi/themosis/htdocs/content/themes/sigur/views/layouts/default.twig");
    }
}
