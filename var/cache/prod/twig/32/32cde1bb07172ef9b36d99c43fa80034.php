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
class __TwigTemplate_be03e9474a25d0b560934003427699d4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order_history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container order_history px-3\">

        <h3 class=\"mt-4 mb-3\">Bestelgeschiedenis</h3>

        <p class=\"welcome_user_text\">Welkom, ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["orders"] ?? null)));
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_array_reduce($this->env, twig_array_map($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getOrderItems", [], "method", false, false, false, 46), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 46); }), function ($__total__, $__price__) use ($context, $macros) { $context["total"] = $__total__; $context["price"] = $__price__; return (($context["total"] ?? null) + ($context["price"] ?? null)); }, 0), 2, ".", ","), "html", null, true);
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
        return array (  154 => 50,  145 => 47,  141 => 46,  137 => 44,  128 => 42,  124 => 41,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  84 => 30,  80 => 29,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order_history.html.twig", "/home/niekkra1/domains/websites/qeuqen/templates/order_history.html.twig");
    }
}
