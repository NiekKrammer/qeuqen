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

/* emails/registration.html.twig */
class __TwigTemplate_9ab923d6aafdd3d2adea9454cc679188 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/registration.html.twig"));

        // line 1
        echo "<div style=\"background: linear-gradient(to left, #9cd5aa, #68b38e); padding: 20px 10px;\">
    <h1 style=\"margin: 0 0 10px 0; color: #0a0a0a;\">Qeuqen</h1>

    <h2 style=\"color: #0a0a0a;\">Beste ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 4, $this->source); })()), "html", null, true);
        echo ",</h2>

    <p style=\"font-size: 18px; font-weight: 550; color: #0a0a0a;\">Je registratie bij Qeuqen is succesvol voltooid!</p>

    <p style=\"font-size: 16px; color: #0a0a0a;\">Je kunt nu inloggen om toegang te krijgen tot jouw account.</p>

    <a href=\"http://qeuqen.niekkrammer.nl/login\" style=\"color: black;
        padding: 7px 26px;
        background-color: #EFEFEF;
        text-decoration: none;
        border-style: solid;
        border-width: 3px;
        border-top-color: grey;
        border-right-color: black;
        border-bottom-color: black;
        border-left-color: grey; font-weight: bold;\">Inloggen</a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/registration.html.twig";
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
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"background: linear-gradient(to left, #9cd5aa, #68b38e); padding: 20px 10px;\">
    <h1 style=\"margin: 0 0 10px 0; color: #0a0a0a;\">Qeuqen</h1>

    <h2 style=\"color: #0a0a0a;\">Beste {{ username }},</h2>

    <p style=\"font-size: 18px; font-weight: 550; color: #0a0a0a;\">Je registratie bij Qeuqen is succesvol voltooid!</p>

    <p style=\"font-size: 16px; color: #0a0a0a;\">Je kunt nu inloggen om toegang te krijgen tot jouw account.</p>

    <a href=\"http://qeuqen.niekkrammer.nl/login\" style=\"color: black;
        padding: 7px 26px;
        background-color: #EFEFEF;
        text-decoration: none;
        border-style: solid;
        border-width: 3px;
        border-top-color: grey;
        border-right-color: black;
        border-bottom-color: black;
        border-left-color: grey; font-weight: bold;\">Inloggen</a>
</div>", "emails/registration.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\emails\\registration.html.twig");
    }
}
