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

/* elements/footer.twig */
class __TwigTemplate_a29a7f2114b93bbc8c17c73671490c5ad7d9bc1d8d93f580e57fd0cf08b26ef2 extends \Twig\Template
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
        echo "<footer class=\"footer\">
  <div class=\"container-fluid\">
    <div class=\"row\">

      <div class=\"col-lg-3\">
        <div class=\"__address\">
          Sigur<br />
          ul. Mickiewicza 30/3<br/>
          60-836 Poznan/Poland <br/>
          tel: +48 696 488 332<br/>
        </div>
      </div>

      <div class=\"col-lg-2 offset-lg-1\">
        <ul class=\"__foot-menu\">
          <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fn"] ?? null), "get_privacy_policy_url", [], "method", false, false, false, 16), "html", null, true);
        echo "\">Privacy policy and cookies</a></li>
        </ul>
      </div>

      <div class=\"col-lg-2\">
      </div>

      <div class=\"col-lg-2 offset-lg-1\">
      </div>


    </div>

    <div class=\"__claim\">
        <h3>like life<br>items</h3>
    </div>


  </div>

</footer>";
    }

    public function getTemplateName()
    {
        return "elements/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
  <div class=\"container-fluid\">
    <div class=\"row\">

      <div class=\"col-lg-3\">
        <div class=\"__address\">
          Sigur<br />
          ul. Mickiewicza 30/3<br/>
          60-836 Poznan/Poland <br/>
          tel: +48 696 488 332<br/>
        </div>
      </div>

      <div class=\"col-lg-2 offset-lg-1\">
        <ul class=\"__foot-menu\">
          <li><a href=\"{{ fn.get_privacy_policy_url() }}\">Privacy policy and cookies</a></li>
        </ul>
      </div>

      <div class=\"col-lg-2\">
      </div>

      <div class=\"col-lg-2 offset-lg-1\">
      </div>


    </div>

    <div class=\"__claim\">
        <h3>like life<br>items</h3>
    </div>


  </div>

</footer>", "elements/footer.twig", "/var/www/mamezi/themosis/htdocs/content/themes/sigur/views/elements/footer.twig");
    }
}
