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
class __TwigTemplate_5929620252ceb060f36323da5da3a2a7 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", ["_route"], "method", false, false, false, 10) != "app_order_history")) {
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47) == "app_order")) {
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
        return array (  131 => 52,  125 => 50,  119 => 48,  117 => 47,  88 => 20,  82 => 18,  76 => 16,  71 => 14,  68 => 13,  62 => 11,  59 => 10,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/header.html.twig", "/home/niekkra1/domains/websites/qeuqen/templates/includes/header.html.twig");
    }
}
