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

/* login.html.twig */
class __TwigTemplate_f6e003c122f928fb72c7ab33f1727a98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        echo "    <div class=\"container my-5\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", ["registration_success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"alert alert-success my-4 mx-auto text-center col-12 col-lg-6\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\" class=\"form py-5 px-4 p-lg-5\">
            <h1 class=\"mb-4\">Log in</h1>

            ";
        // line 14
        if ((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                <p class=\"text-danger\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "
                </p>
            ";
        }
        // line 19
        echo "
            <div class=\"mb-3\">
                <label for=\"inputUsername\" class=\"form-label\">Gebruikersnaam</label>
                <input type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\"
                       class=\"form-control\" autocomplete=\"username\" required autofocus>
            </div>
            <div class=\"mb-3\">
                <label for=\"inputPassword\" class=\"form-label\">Wachtwoord</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                       autocomplete=\"current-password\" required>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <button class=\"btn btn-md btn-primary form_button px-3\" type=\"submit\">Log in</button>
            <div class=\"d-flex mt-3 gap-1 form_div\">
                <p class=\"m-0 p-0\">Heb je nog geen account?</p>
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
        echo "\" class=\"form_link\">Registreer hier</a>
            </div>
        </form>
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
        return "login.html.twig";
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
        return array (  130 => 34,  123 => 30,  112 => 22,  107 => 19,  101 => 16,  98 => 15,  96 => 14,  90 => 11,  87 => 10,  78 => 7,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container my-5\">
        {% for message in app.flashes('registration_success') %}
            <div class=\"alert alert-success my-4 mx-auto text-center col-12 col-lg-6\">
                {{ message }}
            </div>
        {% endfor %}

        <form action=\"{{ path('app_login') }}\" method=\"post\" class=\"form py-5 px-4 p-lg-5\">
            <h1 class=\"mb-4\">Log in</h1>

            {% if errorMessage %}
                <p class=\"text-danger\">
                    {{ errorMessage }}
                </p>
            {% endif %}

            <div class=\"mb-3\">
                <label for=\"inputUsername\" class=\"form-label\">Gebruikersnaam</label>
                <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\"
                       class=\"form-control\" autocomplete=\"username\" required autofocus>
            </div>
            <div class=\"mb-3\">
                <label for=\"inputPassword\" class=\"form-label\">Wachtwoord</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\"
                       autocomplete=\"current-password\" required>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <button class=\"btn btn-md btn-primary form_button px-3\" type=\"submit\">Log in</button>
            <div class=\"d-flex mt-3 gap-1 form_div\">
                <p class=\"m-0 p-0\">Heb je nog geen account?</p>
                <a href=\"{{ path('app_registration') }}\" class=\"form_link\">Registreer hier</a>
            </div>
        </form>
    </div>
{% endblock %}
", "login.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\login.html.twig");
    }
}
