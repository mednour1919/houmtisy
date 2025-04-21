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

/* reponse/index.html.twig */
class __TwigTemplate_60c84001301b8c768dbfd07c0fee4ca7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reponse/index.html.twig", 1);
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

        yield "Reponse index";
        
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

    /* Style des boutons */
    .btn {
        display: inline-block;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        margin-right: 5px;
    }

    .btn-info {
        background-color: #17a2b8;
        color: white;
        border: 1px solid #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
        border: 1px solid #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
        padding: 10px 20px;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le message \"Aucun fournisseur trouvé\" */
    .table tbody tr td[colspan=\"5\"] {
        text-align: center;
        padding: 20px;
        color: #6c757d;
        font-style: italic;
    }

    /* Style des liens */
    a {
        color: #007bff;
        text-decoration: none;
        transition: all 0.2s;
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Style du bouton Create new */
    .create-new {
        display: inline-block;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.3s;
    }

    .create-new:hover {
        background-color: #218838;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
        }
    }
</style>

    <h1>Reponse index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_reponse</th>
                <th>Reponse</th>
                <th>Date_reponse</th>
                <th>Statut</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 172, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 173
            yield "            <tr>
                <td>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "idReponse", [], "any", false, false, false, 174), "html", null, true);
            yield "</td>
                <td>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
                <td>";
            // line 176
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 176)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateReponse", [], "any", false, false, false, 176), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "statut", [], "any", false, false, false, 177), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_show", ["id_reponse" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id_reponse", [], "any", false, false, false, 179)]), "html", null, true);
            yield "\" class=\"btn btn-info\">show</a>
                    <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id_reponse" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id_reponse", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 183
        if (!$context['_iterated']) {
            // line 184
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new");
        yield "\" class=\"create-new\">Create new</a>
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
        return "reponse/index.html.twig";
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
        return array (  321 => 191,  316 => 188,  307 => 184,  305 => 183,  297 => 180,  293 => 179,  288 => 177,  284 => 176,  280 => 175,  276 => 174,  273 => 173,  268 => 172,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reponse index{% endblock %}

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

    /* Style des boutons */
    .btn {
        display: inline-block;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        margin-right: 5px;
    }

    .btn-info {
        background-color: #17a2b8;
        color: white;
        border: 1px solid #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
        border: 1px solid #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
        padding: 10px 20px;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style pour le message \"Aucun fournisseur trouvé\" */
    .table tbody tr td[colspan=\"5\"] {
        text-align: center;
        padding: 20px;
        color: #6c757d;
        font-style: italic;
    }

    /* Style des liens */
    a {
        color: #007bff;
        text-decoration: none;
        transition: all 0.2s;
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Style du bouton Create new */
    .create-new {
        display: inline-block;
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.3s;
    }

    .create-new:hover {
        background-color: #218838;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
        }
    }
</style>

    <h1>Reponse index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_reponse</th>
                <th>Reponse</th>
                <th>Date_reponse</th>
                <th>Statut</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reponse in reponses %}
            <tr>
                <td>{{ reponse.idReponse }}</td>
                <td>{{ reponse.reponse }}</td>
                <td>{{ reponse.dateReponse ? reponse.dateReponse|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ reponse.statut }}</td>
                <td>
                    <a href=\"{{ path('app_reponse_show', {'id_reponse': reponse.id_reponse}) }}\" class=\"btn btn-info\">show</a>
                    <a href=\"{{ path('app_reponse_edit', {'id_reponse': reponse.id_reponse}) }}\" class=\"btn btn-warning\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_reponse_new') }}\" class=\"create-new\">Create new</a>
{% endblock %}", "reponse/index.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\reponse\\index.html.twig");
    }
}
