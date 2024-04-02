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
class __TwigTemplate_bd00f8498e2358a6107cc5a3d32cc771 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 23, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 44, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 69, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  259 => 88,  256 => 87,  254 => 86,  248 => 82,  242 => 81,  231 => 77,  227 => 76,  223 => 75,  219 => 74,  215 => 73,  211 => 71,  208 => 70,  204 => 69,  195 => 62,  189 => 61,  177 => 56,  173 => 55,  169 => 54,  163 => 51,  158 => 49,  153 => 46,  150 => 45,  146 => 44,  136 => 36,  130 => 35,  119 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  99 => 25,  96 => 24,  92 => 23,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!-- Herosection -->
    {% include 'includes/herosection.html.twig' %}

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

            {% for product in products %}
                {% if product.category == 'food' %}
                    <div class=\"col-lg-4 col-md-6 mb-5\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                        <div class=\"product rounded-full\">
                            <img src=\"{{ asset('images/products/'~product.image_file) }}\" class=\"img-fluid\"
                                 alt=\"{{ product.name }}\">
                            <h3>{{ product.name }}</h3>
                            <p>€ {{ product.price }}</p>
                            <button class=\"btn btn-outline-success add_btn\" data-product-id=\"{{ product.id }}\" data-name=\"{{ product.name }}\" data-price=\"{{ product.price }}\"><i class=\"fa-solid fa-cart-shopping\"></i> In winkelwagen</button>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}

        </div>
    </div>

    <!-- Drinks Section -->
    <div id=\"drinks\" class=\"container mb-5 tab-content\">
        <div class=\"row d-flex justify-content-center\">

            {% for product in products %}
                {% if product.category == 'drinks' %}
                    <div class=\"col-lg-3 col-md-4 col-sm-6 mb-5\">
                        <div class=\"product rounded-full d-flex flex-column h-100\">
                            <div class=\"d-flex flex-column align-items-center justify-content-center flex-grow-1\">
                                <img src=\"{{ asset('images/products/'~product.image_file) }}\"
                                     class=\"img-fluid drinks_image\"
                                     alt=\"{{ product.name }}\">
                            </div>
                            <div class=\"mt-auto text-center\">
                                <h3>{{ product.name }}</h3>
                                <p>€ {{ product.price }}</p>
                                <button class=\"btn btn-outline-success add_btn\" data-product-id=\"{{ product.id }}\" data-name=\"{{ product.name }}\" data-price=\"{{ product.price }}\"><i class=\"fa-solid fa-cart-shopping\"></i> In winkelwagen</button>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}

        </div>
    </div>

    <!-- Desserts Section -->
    <div id=\"desserts\" class=\"container mb-5 tab-content\">
        <div class=\"row d-flex justify-content-center\">
            {% for product in products %}
                {% if product.category == 'desserts' %}
                    <div class=\"col-lg-3 col-md-6 mb-5\">
                        <div class=\"product rounded-full\">
                            <img src=\"{{ asset('images/products/'~product.image_file) }}\" class=\"img-fluid\"
                                 alt=\"{{ product.name }}\">
                            <h3>{{ product.name }}</h3>
                            <p>€ {{ product.price }}</p>
                            <button class=\"btn btn-outline-success add_btn\" data-product-id=\"{{ product.id }}\" data-name=\"{{ product.name }}\" data-price=\"{{ product.price }}\"><i class=\"fa-solid fa-cart-shopping\"></i> In winkelwagen</button>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>

    <!-- Reviews -->
    {% include 'includes/reviews.html.twig' %}
    {% include 'includes/contact.html.twig' %}

{% endblock %}
", "homepage.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\homepage.html.twig");
    }
}
