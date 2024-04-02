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

/* includes/herosection.html.twig */
class __TwigTemplate_0e6e5055e5679959a0fc6987bd5870b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/herosection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/herosection.html.twig"));

        // line 1
        echo "<!-- Herosection -->
<section class=\"herosection\">
    <div class=\"hero_div px-5\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", ["order_success"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "            <div class=\"alert alert-success my-5 p-4 text-center\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        <h1 data-aos=\"fade-right\" data-aos-duration=\"1500\">Welkom bij Qeuqen!</h1>
        <div data-aos=\"fade-right\" data-aos-duration=\"2000\"><p class=\"mt-3 mb-5\">Klik hier voor het menu</p></div>
        <a href=\"#the_menu\"><img src=\"images/gifs/arrow_down.gif\" class=\"arrow_down\" data-aos=\"fade-down\" data-aos-duration=\"1500\"></a>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/herosection.html.twig";
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
        return array (  64 => 9,  55 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Herosection -->
<section class=\"herosection\">
    <div class=\"hero_div px-5\">
        {% for message in app.flashes('order_success') %}
            <div class=\"alert alert-success my-5 p-4 text-center\">
                {{ message }}
            </div>
        {% endfor %}
        <h1 data-aos=\"fade-right\" data-aos-duration=\"1500\">Welkom bij Qeuqen!</h1>
        <div data-aos=\"fade-right\" data-aos-duration=\"2000\"><p class=\"mt-3 mb-5\">Klik hier voor het menu</p></div>
        <a href=\"#the_menu\"><img src=\"images/gifs/arrow_down.gif\" class=\"arrow_down\" data-aos=\"fade-down\" data-aos-duration=\"1500\"></a>
    </div>
</section>
", "includes/herosection.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\includes\\herosection.html.twig");
    }
}
