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

/* projet/index.html.twig */
class __TwigTemplate_0d0a2ed1909937e7514de3ec00f49a62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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

        yield "Projet index";
        
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
        yield "<style>
    /* Style général de la page */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        padding: 20px;
    }

    h1 {
        color: #2c3e50;
        margin-bottom: 30px;
        font-weight: 600;
        text-align: center;
    }

    /* Style du tableau */
    .table {
        width: 100%;
        margin-bottom: 30px;
        border-collapse: collapse;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .table thead tr {
        background-color: #3498db;
        color: white;
        text-align: left;
    }

    .table th,
    .table td {
        padding: 15px;
    }

    .table tbody tr {
        border-bottom: 1px solid #dddddd;
        transition: all 0.2s ease;
    }

    .table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .table tbody tr:last-of-type {
        border-bottom: 2px solid #3498db;
    }

    .table tbody tr:hover {
        background-color: #e3f2fd;
        transform: scale(1.01);
    }

    /* Style des liens d'action */
    .action-links {
        display: flex;
        gap: 10px;
    }

    .action-links a {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .show-link {
        background-color: #17a2b8;
        color: white;
        border: 1px solid #17a2b8;
    }

    .show-link:hover {
        background-color: #138496;
        border-color: #117a8b;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .edit-link {
        background-color: #ffc107;
        color: #212529;
        border: 1px solid #ffc107;
    }

    .edit-link:hover {
        background-color: #e0a800;
        border-color: #d39e00;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style du bouton Create new */
    .create-new {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .create-new:hover {
        background-color: #0069d9;
        border-color: #0062cc;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le message \"no records found\" */
    .table tbody tr td[colspan=\"9\"] {
        text-align: center;
        padding: 20px;
        color: #6c757d;
        font-style: italic;
    }

    /* Formatage des données */
    .currency {
        font-family: 'Courier New', monospace;
        font-weight: bold;
    }

    .status {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        text-transform: capitalize;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
        }
        
        .action-links {
            flex-direction: column;
            gap: 5px;
        }
    }
</style>

<div class=\"container\">
    <h1>Liste des Projets</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Statut</th>
                <th>Budget</th>
                <th>Dépense</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 177, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 178
            yield "            <tr>
                <td>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 179), "html", null, true);
            yield "</td>
                <td>";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "nom", [], "any", false, false, false, 180), "html", null, true);
            yield "</td>
                <td>
                    <span class=\"status\" style=\"background-color: 
                    ";
            // line 183
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "statut", [], "any", false, false, false, 183) == "terminé")) {
                yield "#28a745
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 184
$context["projet"], "statut", [], "any", false, false, false, 184) == "en cours")) {
                yield "#17a2b8
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 185
$context["projet"], "statut", [], "any", false, false, false, 185) == "suspendu")) {
                yield "#6c757d
                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 186
$context["projet"], "statut", [], "any", false, false, false, 186) == "planifié")) {
                yield "#ffc107
                    ";
            } else {
                // line 187
                yield "#007bff";
            }
            yield ";
                    color: white;\">
                        ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "statut", [], "any", false, false, false, 189), "html", null, true);
            yield "
                    </span>
                </td>
                <td class=\"currency\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "budget", [], "any", false, false, false, 192), 2, ",", " "), "html", null, true);
            yield " €</td>
                <td class=\"currency\">";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "depense", [], "any", false, false, false, 193), 2, ",", " "), "html", null, true);
            yield " €</td>
                <td>";
            // line 194
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 194)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 194), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 195
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateFin", [], "any", false, false, false, 195)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateFin", [], "any", false, false, false, 195), "d/m/Y"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 196), 0, 50), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 196)) > 50)) {
                yield "...";
            }
            yield "</td>
                <td>
                    <div class=\"action-links\">
                        <a href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 199)]), "html", null, true);
            yield "\" class=\"show-link\">Voir</a>
                        <a href=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            yield "\" class=\"edit-link\">Modifier</a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 204
        if (!$context['_iterated']) {
            // line 205
            yield "            <tr>
                <td colspan=\"9\">Aucun projet trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['projet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_new");
        yield "\" class=\"create-new\">Créer un nouveau projet</a>
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
        return "projet/index.html.twig";
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
        return array (  374 => 212,  369 => 209,  360 => 205,  358 => 204,  349 => 200,  345 => 199,  336 => 196,  332 => 195,  328 => 194,  324 => 193,  320 => 192,  314 => 189,  308 => 187,  303 => 186,  299 => 185,  295 => 184,  291 => 183,  285 => 180,  281 => 179,  278 => 178,  273 => 177,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projet index{% endblock %}

{% block body %}
<style>
    /* Style général de la page */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        padding: 20px;
    }

    h1 {
        color: #2c3e50;
        margin-bottom: 30px;
        font-weight: 600;
        text-align: center;
    }

    /* Style du tableau */
    .table {
        width: 100%;
        margin-bottom: 30px;
        border-collapse: collapse;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .table thead tr {
        background-color: #3498db;
        color: white;
        text-align: left;
    }

    .table th,
    .table td {
        padding: 15px;
    }

    .table tbody tr {
        border-bottom: 1px solid #dddddd;
        transition: all 0.2s ease;
    }

    .table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .table tbody tr:last-of-type {
        border-bottom: 2px solid #3498db;
    }

    .table tbody tr:hover {
        background-color: #e3f2fd;
        transform: scale(1.01);
    }

    /* Style des liens d'action */
    .action-links {
        display: flex;
        gap: 10px;
    }

    .action-links a {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .show-link {
        background-color: #17a2b8;
        color: white;
        border: 1px solid #17a2b8;
    }

    .show-link:hover {
        background-color: #138496;
        border-color: #117a8b;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .edit-link {
        background-color: #ffc107;
        color: #212529;
        border: 1px solid #ffc107;
    }

    .edit-link:hover {
        background-color: #e0a800;
        border-color: #d39e00;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style du bouton Create new */
    .create-new {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .create-new:hover {
        background-color: #0069d9;
        border-color: #0062cc;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le message \"no records found\" */
    .table tbody tr td[colspan=\"9\"] {
        text-align: center;
        padding: 20px;
        color: #6c757d;
        font-style: italic;
    }

    /* Formatage des données */
    .currency {
        font-family: 'Courier New', monospace;
        font-weight: bold;
    }

    .status {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        text-transform: capitalize;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
        }
        
        .action-links {
            flex-direction: column;
            gap: 5px;
        }
    }
</style>

<div class=\"container\">
    <h1>Liste des Projets</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Statut</th>
                <th>Budget</th>
                <th>Dépense</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td>{{ projet.id }}</td>
                <td>{{ projet.nom }}</td>
                <td>
                    <span class=\"status\" style=\"background-color: 
                    {% if projet.statut == 'terminé' %}#28a745
                    {% elseif projet.statut == 'en cours' %}#17a2b8
                    {% elseif projet.statut == 'suspendu' %}#6c757d
                    {% elseif projet.statut == 'planifié' %}#ffc107
                    {% else %}#007bff{% endif %};
                    color: white;\">
                        {{ projet.statut }}
                    </span>
                </td>
                <td class=\"currency\">{{ projet.budget|number_format(2, ',', ' ') }} €</td>
                <td class=\"currency\">{{ projet.depense|number_format(2, ',', ' ') }} €</td>
                <td>{{ projet.dateDebut ? projet.dateDebut|date('d/m/Y') : '' }}</td>
                <td>{{ projet.dateFin ? projet.dateFin|date('d/m/Y') : '' }}</td>
                <td>{{ projet.description|slice(0, 50) }}{% if projet.description|length > 50 %}...{% endif %}</td>
                <td>
                    <div class=\"action-links\">
                        <a href=\"{{ path('app_projet_show', {'id': projet.id}) }}\" class=\"show-link\">Voir</a>
                        <a href=\"{{ path('app_projet_edit', {'id': projet.id}) }}\" class=\"edit-link\">Modifier</a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">Aucun projet trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_projet_new') }}\" class=\"create-new\">Créer un nouveau projet</a>
</div>
{% endblock %}", "projet/index.html.twig", "C:\\Users\\user\\Downloads\\HoumtiS\\templates\\projet\\index.html.twig");
    }
}
