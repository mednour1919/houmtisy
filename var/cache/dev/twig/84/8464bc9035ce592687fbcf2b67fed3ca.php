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

/* station/edit.html.twig */
class __TwigTemplate_c774e1792fcb00242c62e8bc137c5779 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "station/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier Station";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-4\">
        <div class=\"card shadow\">
            <div class=\"card-header bg-primary text-white\">
                <h2 class=\"mb-0\">Modifier Station</h2>
            </div>
            <div class=\"card-body\">
                ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "station/_form.html.twig", ["button_label" => "Enregistrer", "button_class" => "btn btn-success"]);
        // line 15
        yield "
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "station/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer le formulaire
        const form = document.querySelector('form');
        
        // Ajouter un événement pour valider avant la soumission
        form.addEventListener('submit', function(event) {
            let isValid = true;
            const nomStation = document.querySelector('input[name=\"station[nomStation]\"]');
            const capacite = document.querySelector('input[name=\"station[capacite]\"]');
            const zone = document.querySelector('input[name=\"station[zone]\"]');
            
            // Validation du nom de la station (non vide et au moins 3 caractères)
            if (!nomStation.value || nomStation.value.length < 3) {
                showError(nomStation, 'Le nom de la station doit contenir au moins 3 caractères');
                isValid = false;
            } else {
                clearError(nomStation);
            }
            
            // Validation de la capacité (nombre positif)
            if (!capacite.value || isNaN(capacite.value) || parseInt(capacite.value) <= 0) {
                showError(capacite, 'La capacité doit être un nombre positif');
                isValid = false;
            } else {
                clearError(capacite);
            }
            
            // Validation de la zone (non vide)
            if (!zone.value) {
                showError(zone, 'La zone est requise');
                isValid = false;
            } else {
                clearError(zone);
            }
            
            if (!isValid) {
                event.preventDefault();
            }
        });
        
        // Fonction pour afficher un message d'erreur
        function showError(input, message) {
            // Supprimer d'abord tout message d'erreur existant
            clearError(input);
            
            // Créer et ajouter le message d'erreur
            const errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback d-block';
            errorDiv.innerText = message;
            input.classList.add('is-invalid');
            input.parentNode.appendChild(errorDiv);
        }
        
        // Fonction pour effacer un message d'erreur
        function clearError(input) {
            input.classList.remove('is-invalid');
            const errorDiv = input.parentNode.querySelector('.invalid-feedback');
            if (errorDiv) {
                errorDiv.remove();
            }
        }
    });
</script>
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
        return "station/edit.html.twig";
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
        return array (  151 => 28,  138 => 27,  122 => 21,  116 => 18,  111 => 15,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Station{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"card shadow\">
            <div class=\"card-header bg-primary text-white\">
                <h2 class=\"mb-0\">Modifier Station</h2>
            </div>
            <div class=\"card-body\">
                {{ include('station/_form.html.twig', {
                    'button_label': 'Enregistrer',
                    'button_class': 'btn btn-success'
                }) }}
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <a href=\"{{ path('app_station_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                {{ include('station/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer le formulaire
        const form = document.querySelector('form');
        
        // Ajouter un événement pour valider avant la soumission
        form.addEventListener('submit', function(event) {
            let isValid = true;
            const nomStation = document.querySelector('input[name=\"station[nomStation]\"]');
            const capacite = document.querySelector('input[name=\"station[capacite]\"]');
            const zone = document.querySelector('input[name=\"station[zone]\"]');
            
            // Validation du nom de la station (non vide et au moins 3 caractères)
            if (!nomStation.value || nomStation.value.length < 3) {
                showError(nomStation, 'Le nom de la station doit contenir au moins 3 caractères');
                isValid = false;
            } else {
                clearError(nomStation);
            }
            
            // Validation de la capacité (nombre positif)
            if (!capacite.value || isNaN(capacite.value) || parseInt(capacite.value) <= 0) {
                showError(capacite, 'La capacité doit être un nombre positif');
                isValid = false;
            } else {
                clearError(capacite);
            }
            
            // Validation de la zone (non vide)
            if (!zone.value) {
                showError(zone, 'La zone est requise');
                isValid = false;
            } else {
                clearError(zone);
            }
            
            if (!isValid) {
                event.preventDefault();
            }
        });
        
        // Fonction pour afficher un message d'erreur
        function showError(input, message) {
            // Supprimer d'abord tout message d'erreur existant
            clearError(input);
            
            // Créer et ajouter le message d'erreur
            const errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback d-block';
            errorDiv.innerText = message;
            input.classList.add('is-invalid');
            input.parentNode.appendChild(errorDiv);
        }
        
        // Fonction pour effacer un message d'erreur
        function clearError(input) {
            input.classList.remove('is-invalid');
            const errorDiv = input.parentNode.querySelector('.invalid-feedback');
            if (errorDiv) {
                errorDiv.remove();
            }
        }
    });
</script>
{% endblock %}", "station/edit.html.twig", "C:\\Users\\pc\\Desktop\\HoumtiS\\templates\\station\\edit.html.twig");
    }
}
