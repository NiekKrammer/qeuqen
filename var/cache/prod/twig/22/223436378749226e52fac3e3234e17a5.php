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
class __TwigTemplate_b97150d30cf0c4418491f01b30dca2a7 extends Template
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
        echo "<div style=\"background: linear-gradient(to left, #9cd5aa, #68b38e); padding: 20px 10px;\">
    <h1 style=\"margin: 0 0 10px 0; color: #0a0a0a;\">Qeuqen</h1>

    <h2 style=\"color: #0a0a0a;\">Beste ";
        // line 4
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
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
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/registration.html.twig", "/home/niekkra1/domains/websites/qeuqen/templates/emails/registration.html.twig");
    }
}
