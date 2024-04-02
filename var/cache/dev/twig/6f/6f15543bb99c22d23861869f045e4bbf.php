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

/* order_history.html.twig */
class __TwigTemplate_fdfb775c9b0ccbe0fa53c1d3ecadb440 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order_history.html.twig", 1);
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
        echo "    <div class=\"container order_history px-3\">

        <h3 class=\"mt-4 mb-3\">Bestelgeschiedenis</h3>

        <p class=\"welcome_user_text\">Welkom, ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
        echo " &#x1F44B;</p>
        <p>Hier vind je jouw bestellingen</p>
        <div class=\"table-responsive mt-4 mb-5 order_history_table\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                <tr>
                    <th>Bestelnummer</th>
                    <th>Optie</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>E-mail</th>
                    <th>Telefoonnummer</th>
                    <th>Gekozen datum</th>
                    <th>Gekozen tijd</th>
                    <th>Opmerking</th>
                    <th>Items</th>
                    <th>Totale prijs</th>
                    <th>Besteld op</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 29, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "deliveryOption", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "phoneNr", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["order"], "time", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "time", [], "any", false, false, false, 38), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "getOrderItems", [], "method", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 42
                echo "                                <p class=\"order_history_list\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "item", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </td>
                        <td>
                            €";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_array_reduce($this->env, twig_array_map($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getOrderItems", [], "method", false, false, false, 46), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "price", [], "any", false, false, false, 46); }), function ($__total__, $__price__) use ($context, $macros) { $context["total"] = $__total__; $context["price"] = $__price__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()) + (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 46, $this->source); })())); }, 0), 2, ".", ","), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["order"], "getOrderedAt", [], "method", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getOrderedAt", [], "method", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order_history.html.twig";
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
        return array (  172 => 50,  163 => 47,  159 => 46,  155 => 44,  146 => 42,  142 => 41,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  102 => 30,  98 => 29,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container order_history px-3\">

        <h3 class=\"mt-4 mb-3\">Bestelgeschiedenis</h3>

        <p class=\"welcome_user_text\">Welkom, {{ app.user.username }} &#x1F44B;</p>
        <p>Hier vind je jouw bestellingen</p>
        <div class=\"table-responsive mt-4 mb-5 order_history_table\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                <tr>
                    <th>Bestelnummer</th>
                    <th>Optie</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>E-mail</th>
                    <th>Telefoonnummer</th>
                    <th>Gekozen datum</th>
                    <th>Gekozen tijd</th>
                    <th>Opmerking</th>
                    <th>Items</th>
                    <th>Totale prijs</th>
                    <th>Besteld op</th>
                </tr>
                </thead>
                <tbody>
                {% for order in orders|reverse %}
                    <tr>
                        <td>{{ order.id }}</td>
                        <td>{{ order.deliveryOption }}</td>
                        <td>{{ order.name }}</td>
                        <td>{{ order.address }}</td>
                        <td>{{ order.email }}</td>
                        <td>{{ order.phoneNr }}</td>
                        <td>{{ order.date ? order.date|date('Y-m-d') : '' }}</td>
                        <td>{{ order.time ? order.time|date('H:i:s') : '' }}</td>
                        <td>{{ order.comment }}</td>
                        <td>
                            {% for orderItem in order.getOrderItems() %}
                                <p class=\"order_history_list\">{{ orderItem.item }}</p>
                            {% endfor %}
                        </td>
                        <td>
                            €{{ order.getOrderItems()|map(item => item.price)|reduce((total, price) => total + price, 0)|number_format(2, '.', ',') }}</td>
                        <td>{{ order.getOrderedAt() ? order.getOrderedAt()|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

        </div>
    </div>
{% endblock %}
", "order_history.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\order_history.html.twig");
    }
}
