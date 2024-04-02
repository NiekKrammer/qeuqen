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

/* includes/header.html.twig */
class __TwigTemplate_a88782e67a5b5036784405049d66385b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<nav>
    <a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_default");
        echo "\" class=\"nav-logo\">Qeuqen</a>
    <ul class=\"nav-menu\">
        ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "            <li>
                <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\" class=\"nav-link\">admin</a>
            </li>
        ";
        }
        // line 9
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["_route"], "method", false, false, false, 10) != "app_order_history")) {
                // line 11
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_history");
                echo "\" class=\"nav-link\">bestellingen</a></li>
            ";
            } else {
                // line 13
                echo "                <!-- Add your link for the \"app_order_history\" page -->
                <li><a href=\"";
                // line 14
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_default");
                echo "\" class=\"nav-link\">startpagina</a></li>
            ";
            }
            // line 16
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">uitloggen</a></li>
        ";
        } else {
            // line 18
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">inloggen</a></li>
        ";
        }
        // line 20
        echo "        <li class=\"cart\"><a href=\"#\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\"
                            aria-controls=\"offcanvasRight\"><i class=\"fa-solid fa-cart-shopping cart-icon\"><span class=\"counter\"
                                                                                                                id=\"cart-counter\"></span></i></a></li>
    </ul>

    <div class=\"hamburger\">
        <span class=\"bar\"></span>
        <span class=\"bar-middle\"></span>
        <span class=\"bar\"></span>
    </div>
</nav>

<!-- Shopping cart -->
<div class=\"offcanvas offcanvas-end shopping_cart\" tabindex=\"-1\" id=\"offcanvasRight\"
     aria-labelledby=\"offcanvasRightLabel\">
    <div class=\"offcanvas-header\">
        <h4 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Winkelwagen</h4>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body cart d-flex flex-column justify-content-between\">

        <!-- added products -->
        <div id=\"cart-content\">
        </div>

        <div>
            <p id=\"total-price\"></p>
            ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47) == "app_order")) {
            // line 48
            echo "                <a class=\"order_btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\">Wijzig Bestelling</a>
            ";
        } else {
            // line 50
            echo "                <a class=\"order_btn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\">Verder naar bestellen</a>
            ";
        }
        // line 52
        echo "        </div>

    </div>
</div>

<script>
    // Hamburger menu
    const hamburger = document.querySelector(\".hamburger\");
    const navMenu = document.querySelector(\".nav-menu\");

    hamburger.addEventListener(\"click\", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle(\"active\");
        navMenu.classList.toggle(\"active\");
    }

    const navLink = document.querySelectorAll(\".nav-link\");

    navLink.forEach((n) => n.addEventListener(\"click\", closeMenu));

    function closeMenu() {
        hamburger.classList.remove(\"active\");
        navMenu.classList.remove(\"active\");
    }
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/header.html.twig";
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
        return array (  137 => 52,  131 => 50,  125 => 48,  123 => 47,  94 => 20,  88 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 11,  65 => 10,  62 => 9,  56 => 6,  53 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <a href=\"{{ path('app_default') }}\" class=\"nav-logo\">Qeuqen</a>
    <ul class=\"nav-menu\">
        {% if is_granted('ROLE_ADMIN') %}
            <li>
                <a href=\"{{ path('app_admin') }}\" class=\"nav-link\">admin</a>
            </li>
        {% endif %}
        {% if app.user %}
            {% if app.request.attributes.get('_route') != 'app_order_history' %}
                <li><a href=\"{{ path('app_order_history') }}\" class=\"nav-link\">bestellingen</a></li>
            {% else %}
                <!-- Add your link for the \"app_order_history\" page -->
                <li><a href=\"{{ path('app_default') }}\" class=\"nav-link\">startpagina</a></li>
            {% endif %}
            <li><a href=\"{{ path('app_logout') }}\" class=\"nav-link\">uitloggen</a></li>
        {% else %}
            <li><a href=\"{{ path('app_login') }}\" class=\"nav-link\">inloggen</a></li>
        {% endif %}
        <li class=\"cart\"><a href=\"#\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\"
                            aria-controls=\"offcanvasRight\"><i class=\"fa-solid fa-cart-shopping cart-icon\"><span class=\"counter\"
                                                                                                                id=\"cart-counter\"></span></i></a></li>
    </ul>

    <div class=\"hamburger\">
        <span class=\"bar\"></span>
        <span class=\"bar-middle\"></span>
        <span class=\"bar\"></span>
    </div>
</nav>

<!-- Shopping cart -->
<div class=\"offcanvas offcanvas-end shopping_cart\" tabindex=\"-1\" id=\"offcanvasRight\"
     aria-labelledby=\"offcanvasRightLabel\">
    <div class=\"offcanvas-header\">
        <h4 class=\"offcanvas-title\" id=\"offcanvasRightLabel\">Winkelwagen</h4>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body cart d-flex flex-column justify-content-between\">

        <!-- added products -->
        <div id=\"cart-content\">
        </div>

        <div>
            <p id=\"total-price\"></p>
            {% if app.request.get('_route') == \"app_order\" %}
                <a class=\"order_btn\" href=\"{{ path('app_order') }}\">Wijzig Bestelling</a>
            {% else %}
                <a class=\"order_btn\" href=\"{{ path('app_order') }}\">Verder naar bestellen</a>
            {% endif %}
        </div>

    </div>
</div>

<script>
    // Hamburger menu
    const hamburger = document.querySelector(\".hamburger\");
    const navMenu = document.querySelector(\".nav-menu\");

    hamburger.addEventListener(\"click\", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle(\"active\");
        navMenu.classList.toggle(\"active\");
    }

    const navLink = document.querySelectorAll(\".nav-link\");

    navLink.forEach((n) => n.addEventListener(\"click\", closeMenu));

    function closeMenu() {
        hamburger.classList.remove(\"active\");
        navMenu.classList.remove(\"active\");
    }
</script>", "includes/header.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\includes\\header.html.twig");
    }
}
