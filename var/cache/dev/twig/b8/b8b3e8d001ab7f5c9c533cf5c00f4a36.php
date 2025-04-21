<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* zone_de_collecte_crud/_delete_form.html.twig */
class __TwigTemplate_e27c15744ea9d1e7422b5a2fe7b76df5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zone_de_collecte_crud/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zone_de_collecte_crud/_delete_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "zone_de_collecte_crud/_delete_form.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <div class=\"container mt-4\">
        <h1>Supprimer la zone de collecte</h1>
        
        <div class=\"alert alert-warning\">
            Êtes-vous sûr de vouloir supprimer la zone \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["zone_de_collecte"]) || array_key_exists("zone_de_collecte", $context) ? $context["zone_de_collecte"] : (function () { throw new RuntimeError('Variable "zone_de_collecte" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        yield "\" ?
        </div>

        <form method=\"post\" action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["zone_de_collecte"]) || array_key_exists("zone_de_collecte", $context) ? $context["zone_de_collecte"] : (function () { throw new RuntimeError('Variable "zone_de_collecte" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Confirmez-vous la suppression ?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["zone_de_collecte"]) || array_key_exists("zone_de_collecte", $context) ? $context["zone_de_collecte"] : (function () { throw new RuntimeError('Variable "zone_de_collecte" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13))), "html", null, true);
        yield "\">
            
            <div class=\"form-actions\">
                <button class=\"btn btn-danger\">
                    <i class=\"fas fa-trash-alt\"></i> Confirmer la suppression
                </button>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Annuler
                </a>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "zone_de_collecte_crud/_delete_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  101 => 19,  92 => 13,  88 => 12,  82 => 9,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Assurez-vous d'étendre votre template de base #}
{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Supprimer la zone de collecte</h1>
        
        <div class=\"alert alert-warning\">
            Êtes-vous sûr de vouloir supprimer la zone \"{{ zone_de_collecte.nom }}\" ?
        </div>

        <form method=\"post\" action=\"{{ path('app_zone_de_collecte_crud_delete', {'id': zone_de_collecte.id}) }}\" onsubmit=\"return confirm('Confirmez-vous la suppression ?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ zone_de_collecte.id) }}\">
            
            <div class=\"form-actions\">
                <button class=\"btn btn-danger\">
                    <i class=\"fas fa-trash-alt\"></i> Confirmer la suppression
                </button>
                <a href=\"{{ path('app_zone_de_collecte_crud_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Annuler
                </a>
            </div>
        </form>
    </div>
{% endblock %}", "zone_de_collecte_crud/_delete_form.html.twig", "C:\\Users\\user\\Downloads\\HoumtiS\\templates\\zone_de_collecte_crud\\_delete_form.html.twig");
    }
}
