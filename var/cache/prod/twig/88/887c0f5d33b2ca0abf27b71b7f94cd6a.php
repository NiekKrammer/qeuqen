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

/* includes/reviews.html.twig */
class __TwigTemplate_a3e50ca0842c0f988e5c386a9c68a988 extends Template
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
        echo "<!-- Reviews -->
<h2 class=\"text-center mb-4\" data-aos=\"fade-right\" data-aos-duration=\"1300\">Beoordelingen</h2>

<section class=\"review-container mb-5\" data-aos=\"fade-up\" data-aos-duration=\"1000\">

    <div class=\"review\">
        <div class=\"user-image\">
            <i class=\"fas fa-user\"></i>
        </div>
        <h3>Vaste klant #1</h3>
        <p class=\"stars\">
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
        </p>
        <p>\"Ik had een geweldige eetervaring bij Qeuqen. Het eten was voortreffelijk en de service was top!\"</p>
    </div>

    <div class=\"review\">
        <div class=\"user-image\">
            <i class=\"fas fa-user\"></i>
        </div>
        <h3>Vaste klant #2</h3>
        <p class=\"stars\">
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
        </p>
        <p>\"Mijn bezoek aan Qeuqen was uiterst aangenaam. Het diner was verrukkelijk en de bediening was uitstekend. Ik
            kan het zeker aanbevelen.\"</p>
    </div>

    <div class=\"review\">
        <div class=\"user-image\">
            <i class=\"fas fa-user\"></i>
        </div>
        <h3>Vaste klant #3</h3>
        <p class=\"stars\">
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
        </p>
        <p>\"De sfeer bij Qeuqen is gezellig en uitnodigend. Het personeel is vriendelijk en het menu biedt een grote
            hoeveelheid aan opties. Ik kom zeker terug!\"</p>
    </div>

    <div class=\"review\">
        <div class=\"user-image\">
            <i class=\"fas fa-user\"></i>
        </div>
        <h3>Vaste klant #4</h3>
        <p class=\"stars\">
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star-half-alt\"></i>
        </p>
        <p>\"Uitstekende ervaring! Het eten en de service waren voortreffelijk.\"</p>
    </div>

</section>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/reviews.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/reviews.html.twig", "/home/niekkra1/domains/websites/qeuqen/templates/includes/reviews.html.twig");
    }
}
