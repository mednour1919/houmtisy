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

/* camion_crud/show.html.twig */
class __TwigTemplate_0340cae9a156ea7dd520b4c1f21fc8df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "camion_crud/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "camion_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "camion_crud/show.html.twig", 1);
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

        yield "Camion";
        
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
        yield "    <h1>Détails du Camion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 20, $this->source); })()), "statut", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Capacité</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 24, $this->source); })()), "capacity", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
    <th>Image</th>
    <td>
        ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33)) {
            // line 34
            yield "           <img src=\"/uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34), "html", null, true);
            yield "\" width=\"200\">
        ";
        } else {
            // line 36
            yield "            Pas d'image
        ";
        }
        // line 38
        yield "    </td>
</tr>
        </tbody>
    </table>

    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["camion"]) || array_key_exists("camion", $context) ? $context["camion"] : (function () { throw new RuntimeError('Variable "camion" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"btn btn-primary\"> Modifier</a>

    ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "camion_crud/_delete_form.html.twig");
        yield "
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
        return "camion_crud/show.html.twig";
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
        return array (  172 => 46,  167 => 44,  163 => 43,  156 => 38,  152 => 36,  146 => 34,  144 => 33,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Camion{% endblock %}

{% block body %}
    <h1>Détails du Camion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ camion.id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ camion.type }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ camion.statut }}</td>
            </tr>
            <tr>
                <th>Capacité</th>
                <td>{{ camion.capacity }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ camion.nom }}</td>
            </tr>
            <tr>
    <th>Image</th>
    <td>
        {% if camion.image %}
           <img src=\"/uploads/{{ camion.image }}\" width=\"200\">
        {% else %}
            Pas d'image
        {% endif %}
    </td>
</tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_camion_c_r_u_d_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
    <a href=\"{{ path('app_camion_c_r_u_d_edit', {'id': camion.id}) }}\" class=\"btn btn-primary\"> Modifier</a>

    {{ include('camion_crud/_delete_form.html.twig') }}
{% endblock %}", "camion_crud/show.html.twig", "C:\\Users\\LENOVO\\Desktop\\HoumtiS\\HoumtiS\\templates\\camion_crud\\show.html.twig");
    }
}
