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
class __TwigTemplate_e332f444b945279488f4ac3da15bd1f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/reviews.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/reviews.html.twig"));

        // line 1
        echo "<!-- Reviews -->
<h2 class=\"text-center mb-5\" data-aos=\"fade-right\" data-aos-duration=\"1300\">Beoordelingen</h2>

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Reviews -->
<h2 class=\"text-center mb-5\" data-aos=\"fade-right\" data-aos-duration=\"1300\">Beoordelingen</h2>

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
", "includes/reviews.html.twig", "C:\\xampp\\htdocs\\qeuqen\\templates\\includes\\reviews.html.twig");
    }
}
