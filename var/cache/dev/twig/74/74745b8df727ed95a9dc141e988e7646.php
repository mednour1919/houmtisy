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

/* camion_crud/index.html.twig */
class __TwigTemplate_049ffa7f26338f2bcaf7e1668b3d8fff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "camion_crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "camion_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "camion_crud/index.html.twig", 1);
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

        yield "Camion index";
        
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
        yield "    <h1>Liste des Camions</h1>

    <div class=\"mb-4 d-flex justify-content-between align-items-center\">
        <!-- Formulaire de recherche -->
        <form action=\"\" method=\"GET\" class=\"d-flex gap-2\">
            <input type=\"text\" name=\"query\" placeholder=\"Recherche...\" 
                   value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", ["query"], "method", false, false, false, 12), "html", null, true);
        yield "\" class=\"form-control\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </form>

        <!-- Boutons d'actions -->
        <div class=\"btn-group\">
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_new");
        yield "\" class=\"btn btn-warning\">
                <i class=\"bi bi-plus-circle\"></i> Nouveau camion
            </a>
        </div>
    </div>

    <table class=\"table table-striped\">
        <thead class=\"table-dark\">
            <tr>
                <th>Type</th>
                <th>Statut</th>
                <th>Capacity</th>
                <th>Image</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context["query"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["query"], "method", false, false, false, 36);
        // line 37
        yield "        ";
        $context["filteredCamions"] = (isset($context["camions"]) || array_key_exists("camions", $context) ? $context["camions"] : (function () { throw new RuntimeError('Variable "camions" does not exist.', 37, $this->source); })());
        // line 38
        yield "
        ";
        // line 39
        if ((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 39, $this->source); })())) {
            // line 40
            yield "            ";
            $context["filteredCamions"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["camions"]) || array_key_exists("camions", $context) ? $context["camions"] : (function () { throw new RuntimeError('Variable "camions" does not exist.', 40, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return ((CoreExtension::matches((("/" .             // line 41
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 41, $this->source); })())) . "/i"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41)) || CoreExtension::matches((("/" .             // line 42
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 42, $this->source); })())) . "/i"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42))) || CoreExtension::matches((("/" .             // line 43
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 43, $this->source); })())) . "/i"), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43))); });
            // line 45
            yield "        ";
        }
        // line 46
        yield "
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filteredCamions"]) || array_key_exists("filteredCamions", $context) ? $context["filteredCamions"] : (function () { throw new RuntimeError('Variable "filteredCamions" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["camion"]) {
            // line 48
            yield "            <tr>
                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "type", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "statut", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "capacity", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "image", [], "any", false, false, false, 53)) {
                // line 54
                yield "                        <img src=\"/uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "image", [], "any", false, false, false, 54), "html", null, true);
                yield "\" width=\"100\" style=\"max-height: 80px; object-fit: cover;\">
                    ";
            } else {
                // line 56
                yield "                        <span class=\"text-muted\">Aucune image</span>
                    ";
            }
            // line 58
            yield "                </td>
                <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">
                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"bi bi-eye\"></i>consulter
                        </a>
                        <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">
                            <i class=\"bi bi-pencil\"></i>modifier
                        </a>
                        <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["camion"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-\">
                            <i class=\"fas fa-trash-alt\"></i>supprimer
                        </a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "            <tr>
                <td colspan=\"6\" class=\"text-center\">Aucun camion trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['camion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </tbody>
    </table>
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
        return "camion_crud/index.html.twig";
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
        return array (  236 => 79,  227 => 75,  225 => 74,  214 => 68,  208 => 65,  202 => 62,  196 => 59,  193 => 58,  189 => 56,  183 => 54,  181 => 53,  176 => 51,  172 => 50,  168 => 49,  165 => 48,  160 => 47,  157 => 46,  154 => 45,  152 => 43,  151 => 42,  150 => 41,  148 => 40,  146 => 39,  143 => 38,  140 => 37,  138 => 36,  117 => 18,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Camion index{% endblock %}

{% block body %}
    <h1>Liste des Camions</h1>

    <div class=\"mb-4 d-flex justify-content-between align-items-center\">
        <!-- Formulaire de recherche -->
        <form action=\"\" method=\"GET\" class=\"d-flex gap-2\">
            <input type=\"text\" name=\"query\" placeholder=\"Recherche...\" 
                   value=\"{{ app.request.query.get('query') }}\" class=\"form-control\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </form>

        <!-- Boutons d'actions -->
        <div class=\"btn-group\">
            <a href=\"{{ path('app_camion_c_r_u_d_new') }}\" class=\"btn btn-warning\">
                <i class=\"bi bi-plus-circle\"></i> Nouveau camion
            </a>
        </div>
    </div>

    <table class=\"table table-striped\">
        <thead class=\"table-dark\">
            <tr>
                <th>Type</th>
                <th>Statut</th>
                <th>Capacity</th>
                <th>Image</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% set query = app.request.query.get('query') %}
        {% set filteredCamions = camions %}

        {% if query %}
            {% set filteredCamions = camions|filter(item => 
                item.nom matches '/' ~ query ~ '/i' or 
                item.type matches '/' ~ query ~ '/i' or 
                item.statut matches '/' ~ query ~ '/i'
            ) %}
        {% endif %}

        {% for camion in filteredCamions %}
            <tr>
                <td>{{ camion.type }}</td>
                <td>{{ camion.statut }}</td>
                <td>{{ camion.capacity }}</td>
                <td>
                    {% if camion.image %}
                        <img src=\"/uploads/{{ camion.image }}\" width=\"100\" style=\"max-height: 80px; object-fit: cover;\">
                    {% else %}
                        <span class=\"text-muted\">Aucune image</span>
                    {% endif %}
                </td>
                <td>{{ camion.nom }}</td>
                <td>
                    <div class=\"btn-group\" role=\"group\">
                        <a href=\"{{ path('app_camion_c_r_u_d_show', {'id': camion.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"bi bi-eye\"></i>consulter
                        </a>
                        <a href=\"{{ path('app_camion_c_r_u_d_edit', {'id': camion.id}) }}\" class=\"btn btn-sm btn-warning\">
                            <i class=\"bi bi-pencil\"></i>modifier
                        </a>
                        <a href=\"{{ path('app_camion_c_r_u_d_delete', {'id': camion.id}) }}\" class=\"btn btn-danger btn-\">
                            <i class=\"fas fa-trash-alt\"></i>supprimer
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\" class=\"text-center\">Aucun camion trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "camion_crud/index.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\camion_crud\\index.html.twig");
    }
}
