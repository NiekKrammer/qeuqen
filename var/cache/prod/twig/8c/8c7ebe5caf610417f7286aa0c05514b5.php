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

/* @EasyAdmin/includes/_js_assets.html.twig */
class __TwigTemplate_2e25819e08e9d6661c8c7a64e428b14a extends Template
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
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["js_asset"], "preload", [], "any", false, false, false, 3)) {
                // line 4
                echo "        <link rel=\"preload\" href=\"";
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "preload", $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 4)), ["as" => "script", "nopush" => twig_get_attribute($this->env, $this->source, $context["js_asset"], "nopush", [], "any", false, false, false, 4)]);
                echo "\"
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
    ";
            } else {
                // line 7
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["js_asset"], "value", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, $context["js_asset"], "packageName", [], "any", false, false, false, 7)), "html", null, true);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["js_asset"], "async", [], "any", false, false, false, 7)) ? ("async") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["js_asset"], "defer", [], "any", false, false, false, 7)) ? ("defer") : (""));
                echo "
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["js_asset"], "htmlAttributes", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html_attr");
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "></script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@EasyAdmin/includes/_js_assets.html.twig";
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
        return array (  73 => 8,  64 => 7,  49 => 5,  44 => 4,  41 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/includes/_js_assets.html.twig", "/home/niekkra1/domains/websites/qeuqen/vendor/easycorp/easyadmin-bundle/src/Resources/views/includes/_js_assets.html.twig");
    }
}
