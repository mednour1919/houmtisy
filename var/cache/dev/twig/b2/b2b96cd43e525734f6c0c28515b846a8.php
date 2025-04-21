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

/* signalement/index.html.twig */
class __TwigTemplate_279d4a8a5f8f24a6b9d15a5f69e98fcd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "signalement/index.html.twig", 1);
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

        yield "Signalement index";
        
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

    /* Style pour le message \"Aucun signalement trouvé\" */
    .table tbody tr td[colspan=\"7\"] {
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

    /* Style des images */
    .table img {
        max-width: 100px;
        border-radius: 4px;
        transition: transform 0.3s;
    }

    .table img:hover {
        transform: scale(1.1);
    }

    /* Style pour le texte \"Aucune image\" */
    .no-image {
        color: #6c757d;
        font-style: italic;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
        }
    }
</style>

    <h1>Signalement index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_signalement</th>
                <th>Type_signalement</th>
                <th>Description</th>
                <th>Date_signalement</th>
                <th>Image</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 191, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["signalement"]) {
            // line 192
            yield "            <tr>
                <td>";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "idSignalement", [], "any", false, false, false, 193), "html", null, true);
            yield "</td>
                <td>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "typeSignalement", [], "any", false, false, false, 194), "html", null, true);
            yield "</td>
                <td>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "description", [], "any", false, false, false, 195), "html", null, true);
            yield "</td>
                <td>";
            // line 196
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "dateSignalement", [], "any", false, false, false, 196)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "dateSignalement", [], "any", false, false, false, 196), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                <td>
                    ";
            // line 198
            if (CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "image", [], "any", false, false, false, 198)) {
                // line 199
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signalement_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "idSignalement", [], "any", false, false, false, 199)]), "html", null, true);
                yield "\" alt=\"Image\">
                    ";
            } else {
                // line 201
                yield "                        <span class=\"no-image\">Aucune image</span>
                    ";
            }
            // line 203
            yield "                </td>
                <td>";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "statut", [], "any", false, false, false, 204), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_show", ["id_signalement" => CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "idSignalement", [], "any", false, false, false, 206)]), "html", null, true);
            yield "\" class=\"btn btn-info\">show</a>
                    <a href=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_edit", ["id_signalement" => CoreExtension::getAttribute($this->env, $this->source, $context["signalement"], "idSignalement", [], "any", false, false, false, 207)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 210
        if (!$context['_iterated']) {
            // line 211
            yield "            <tr>
                <td colspan=\"7\">Aucun signalement trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['signalement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_new");
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
        return "signalement/index.html.twig";
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
        return array (  360 => 218,  355 => 215,  346 => 211,  344 => 210,  336 => 207,  332 => 206,  327 => 204,  324 => 203,  320 => 201,  314 => 199,  312 => 198,  307 => 196,  303 => 195,  299 => 194,  295 => 193,  292 => 192,  287 => 191,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Signalement index{% endblock %}

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

    /* Style pour le message \"Aucun signalement trouvé\" */
    .table tbody tr td[colspan=\"7\"] {
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

    /* Style des images */
    .table img {
        max-width: 100px;
        border-radius: 4px;
        transition: transform 0.3s;
    }

    .table img:hover {
        transform: scale(1.1);
    }

    /* Style pour le texte \"Aucune image\" */
    .no-image {
        color: #6c757d;
        font-style: italic;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .table {
            display: block;
            overflow-x: auto;
        }
    }
</style>

    <h1>Signalement index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id_signalement</th>
                <th>Type_signalement</th>
                <th>Description</th>
                <th>Date_signalement</th>
                <th>Image</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for signalement in signalements %}
            <tr>
                <td>{{ signalement.idSignalement }}</td>
                <td>{{ signalement.typeSignalement }}</td>
                <td>{{ signalement.description }}</td>
                <td>{{ signalement.dateSignalement ? signalement.dateSignalement|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    {% if signalement.image %}
                        <img src=\"{{ path('signalement_image', {id: signalement.idSignalement}) }}\" alt=\"Image\">
                    {% else %}
                        <span class=\"no-image\">Aucune image</span>
                    {% endif %}
                </td>
                <td>{{ signalement.statut }}</td>
                <td>
                    <a href=\"{{ path('app_signalement_show', {'id_signalement': signalement.idSignalement}) }}\" class=\"btn btn-info\">show</a>
                    <a href=\"{{ path('app_signalement_edit', {'id_signalement': signalement.idSignalement}) }}\" class=\"btn btn-warning\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Aucun signalement trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_signalement_new') }}\" class=\"create-new\">Create new</a>
{% endblock %}", "signalement/index.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\signalement\\index.html.twig");
    }
}
