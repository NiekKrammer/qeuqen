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

/* homepage.html.twig */
class __TwigTemplate_48132d1229095c08076cdf6ed6738b44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <!-- Herosection -->
    ";
        // line 6
        $this->loadTemplate("includes/herosection.html.twig", "homepage.html.twig", 6)->display($context);
        // line 7
        echo "
    <!-- The Menu -->
    <div data-aos=\"fade-right\" data-aos-duration=\"1300\" id=\"the_menu\" class=\"d-flex justify-content-center\"><h2 class=\"mt-5 mb-4\"><i class=\"fa-solid fa-utensils\"></i> Menu</h2>
    </div>

    <!-- Filter Buttons -->
    <div class=\"d-flex justify-content-center mt-1 mb-5 gap-2 filter_buttons\" data-aos=\"fade-left\" data-aos-duration=\"1300\">
        <button class=\"btn tab-button filter_button active\" onclick=\"openTab('food')\">Eten</button>
        <button class=\"btn tab-button filter_button\" onclick=\"openTab('drinks')\">Drankjes</button>
        <button class=\"btn tab-button filter_button\" onclick=\"openTab('desserts')\">Desserts</button>
    </div>

    <!-- Food Section -->
    <div id=\"food\" class=\"container mb-5 tab-content\">
        <div class=\"row d-flex justify-content-center\">

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 24) == "food")) {
                // line 25
                echo "                    <div class=\"col-lg-4 col-md-6 mb-5\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                        <div class=\"product rounded-full\">
                            <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image_file", [], "any", false, false, false, 27))), "html", null, true);
                echo "\" class=\"img-fluid\"
                                 alt=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                            <h3>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</h3>
                            <p>€ ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
                            <button class=\"btn btn-outline-success add_btn\" data-product-id=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31), "html", null, true);
                echo "\"><i class=\"fa-solid fa-cart-shopping\"></i> In winkelwagen</button>
                        </div>
                    </div>
                ";
            }
            // line 35
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        </div>
    </div>

    <!-- Drinks Section -->
    <div id=\"drinks\" class=\"container mb-5 tab-content\">
        <div class=\"row d-flex justify-content-center\">

            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 45
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 45) == "drinks")) {
                // line 46
                echo "                    <div class=\"col-lg-3 col-md-4 col-sm-6 mb-5\">
                        <div class=\"product rounded-full d-flex flex-column h-100\">
                            <div class=\"d-flex flex-column align-items-center justify-content-center flex-grow-1\">
                                <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image_file", [], "any", false, false, false, 49))), "html", null, true);
                echo "\"
                                     class=\"img-fluid drinks_image\"
                                     alt=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"mt-auto text-center\">
                                <h3>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo "</h3>
                                <p>€ ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55), "html", null, true);
                echo "</p>
                                <button class=\"btn btn-outline-success add_btn\" data-product-id=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 56), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56), "html", null, true);
                echo "\"><i class=\"fa-solid fa-cart-shopping\"></i> In winkelwagen</button>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 61
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        </div>
    </div>

    <!-- Desserts Section -->
    <div id=\"desserts\" class=\"container mb-5 tab-content\">
        <div class=\"row d-flex justify-content-center\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 70
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 70) == "desserts")) {
                // line 71
                echo "                    <div class=\"col-lg-3 col-md-6 mb-5\">
                        <div class=\"product rounded-full\">
                            <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image_file", [], "any", false, false, false, 73))), "html", null, true);
                echo "\" class=\"img-fluid\"
                                 alt=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74), "html", null, true);
                echo "\">
                            <h3>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75), "html", null, true);
                echo "</h3>
                            <p>€ ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76), "html", null, true);
                echo "</p>
                            <button class=\"btn btn-outline-success add_btn\" data-product-id=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77), "html", null, true);
                echo "\"><i class=\"fa-solid fa-cart-shopping\"></i> In winkelwagen</button>
                        </div>
                    </div>
                ";
            }
            // line 81
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </div>
    </div>

    <!-- Reviews -->
    ";
        // line 86
        $this->loadTemplate("includes/reviews.html.twig", "homepage.html.twig", 86)->display($context);
        // line 87
        echo "    ";
        $this->loadTemplate("includes/contact.html.twig", "homepage.html.twig", 87)->display($context);
        // line 88
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  241 => 88,  238 => 87,  236 => 86,  230 => 82,  224 => 81,  213 => 77,  209 => 76,  205 => 75,  201 => 74,  197 => 73,  193 => 71,  190 => 70,  186 => 69,  177 => 62,  171 => 61,  159 => 56,  155 => 55,  151 => 54,  145 => 51,  140 => 49,  135 => 46,  132 => 45,  128 => 44,  118 => 36,  112 => 35,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 25,  78 => 24,  74 => 23,  56 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "homepage.html.twig", "/home/niekkra1/domains/websites/qeuqen/templates/homepage.html.twig");
    }
}
