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

/* reponse/new.html.twig */
class __TwigTemplate_a64203e1ce139a8c0d98dfbf481fdf0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse/new.html.twig", 1);
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

        yield "Nouvelle Réponse";
        
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
        yield "    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-primary text-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h1 class=\"h3 mb-0\">
                                <i class=\"fas fa-reply me-2\"></i> Nouvelle Réponse
                            </h1>
                            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"btn btn-sm btn-light\">
                                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                            </a>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        ";
        // line 22
        if ((isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "                            <div class=\"card mb-4\">
                                <div class=\"card-header\">
                                    <h5>Détails du signalement</h5>
                                </div>
                                <div class=\"card-body\">
                                    <p><strong>Type :</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 28, $this->source); })()), "typeSignalement", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                                    <p><strong>Description :</strong> ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
                                    <p><strong>Date :</strong> ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["signalement"]) || array_key_exists("signalement", $context) ? $context["signalement"] : (function () { throw new RuntimeError('Variable "signalement" does not exist.', 30, $this->source); })()), "dateSignalement", [], "any", false, false, false, 30), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        ";
        }
        // line 34
        yield "
                        ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'widget');
        yield "
                            <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mt-3\">
                                <button type=\"submit\" class=\"btn btn-primary me-md-2\">
                                    <i class=\"fas fa-save me-1\"></i> Enregistrer
                                </button>
                                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fas fa-list me-1\"></i> Voir toutes les réponses
                                </a>
                            </div>
                        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 0.5rem;
            border: none;
        }
        .card-header {
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
    </style>
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
        return "reponse/new.html.twig";
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
        return array (  167 => 45,  160 => 41,  152 => 36,  148 => 35,  145 => 34,  138 => 30,  134 => 29,  130 => 28,  123 => 23,  121 => 22,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Réponse{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-primary text-white\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h1 class=\"h3 mb-0\">
                                <i class=\"fas fa-reply me-2\"></i> Nouvelle Réponse
                            </h1>
                            <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-sm btn-light\">
                                <i class=\"fas fa-arrow-left me-1\"></i> Retour à la liste
                            </a>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        {% if signalement %}
                            <div class=\"card mb-4\">
                                <div class=\"card-header\">
                                    <h5>Détails du signalement</h5>
                                </div>
                                <div class=\"card-body\">
                                    <p><strong>Type :</strong> {{ signalement.typeSignalement }}</p>
                                    <p><strong>Description :</strong> {{ signalement.description }}</p>
                                    <p><strong>Date :</strong> {{ signalement.dateSignalement|date('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                        {% endif %}

                        {{ form_start(form) }}
                            {{ form_widget(form) }}
                            <div class=\"d-grid gap-2 d-md-flex justify-content-md-end mt-3\">
                                <button type=\"submit\" class=\"btn btn-primary me-md-2\">
                                    <i class=\"fas fa-save me-1\"></i> Enregistrer
                                </button>
                                <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-outline-secondary\">
                                    <i class=\"fas fa-list me-1\"></i> Voir toutes les réponses
                                </a>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 0.5rem;
            border: none;
        }
        .card-header {
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
    </style>
{% endblock %}
", "reponse/new.html.twig", "C:\\Users\\user\\Downloads\\HoumtiS\\templates\\reponse\\new.html.twig");
    }
}
