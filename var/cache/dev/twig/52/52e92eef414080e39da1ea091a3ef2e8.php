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

/* zone_de_collecte_crud/index.html.twig */
class __TwigTemplate_4435f103c30e02b35073809c7686eada extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zone_de_collecte_crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "zone_de_collecte_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "zone_de_collecte_crud/index.html.twig", 1);
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

        yield "Gestion des zones de collecte";
        
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
        yield "    <div class=\"container-fluid px-4 py-4\">
        <!-- En-tête avec boutons -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"mb-0\">
                    <i class=\"fas fa-map-marked-alt text-primary me-2\"></i>
                    Zones de collecte
                </h1>
                <p class=\"text-muted mb-0\">Gestion des différentes zones de collecte</p>
            </div>
            
            <div class=\"btn-group\">
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Ajouter
                </a>
            </div>
        </div>

        <!-- Carte principale -->
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-header bg-white py-3 border-bottom\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Liste des zones</h5>
                </div>
            </div>
            
            <div class=\"card-body p-0\">
                <!-- Tableau -->
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"ps-4\">Zone</th>
                                <th>Population</th>
                                <th>Temps de collecte</th>
                                <th class=\"text-end pe-4\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["zone_de_collectes"]) || array_key_exists("zone_de_collectes", $context) ? $context["zone_de_collectes"] : (function () { throw new RuntimeError('Variable "zone_de_collectes" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["zone_de_collecte"]) {
            // line 46
            yield "                                <tr>
                                    <td class=\"ps-4\">
                                        <strong>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-primary rounded-pill\">
                                            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "population", [], "any", false, false, false, 52), "html", null, true);
            yield " hab.
                                        </span>
                                    </td>
                                    <td>
                                        ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "tempsDeCollecte", [], "any", false, false, false, 56)) {
                // line 57
                yield "                                            <i class=\"far fa-clock text-muted me-2\"></i>
                                            ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "tempsDeCollecte", [], "any", false, false, false, 58), "H:i"), "html", null, true);
                yield "
                                        ";
            } else {
                // line 60
                yield "                                            <span class=\"text-muted\">Non défini</span>
                                        ";
            }
            // line 62
            yield "                                    </td>
                                    <td class=\"text-end pe-4\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-outline-info\" title=\"Voir détails\">
                                               <i class=\"fas fa-eye\"></i>detail
                                            </a>
                                            <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-outline-warning\" title=\"Modifier\">
                                               <i class=\"fas fa-edit\"></i>modifier
                                            </a>
                                            <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["zone_de_collecte"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-danger\" title=\"supprimer\">
                                               <i class=\"fas fa-trash-alt\"></i>supprimer
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                                <tr>
                                    <td colspan=\"4\" class=\"text-center py-5\">
                                        <div class=\"py-4\">
                                            <i class=\"fas fa-map-marked-alt fa-3x text-muted mb-3\"></i>
                                            <p class=\"text-muted\">Aucune zone de collecte trouvée</p>
                                            <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_new");
            yield "\" 
                                               class=\"btn btn-primary\">
                                               <i class=\"fas fa-plus me-2\"></i>Ajouter une zone
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone_de_collecte'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        return "zone_de_collecte_crud/index.html.twig";
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
        return array (  235 => 94,  221 => 86,  214 => 81,  212 => 80,  200 => 73,  193 => 69,  186 => 65,  181 => 62,  177 => 60,  172 => 58,  169 => 57,  167 => 56,  160 => 52,  153 => 48,  149 => 46,  144 => 45,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des zones de collecte{% endblock %}

{% block body %}
    <div class=\"container-fluid px-4 py-4\">
        <!-- En-tête avec boutons -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"mb-0\">
                    <i class=\"fas fa-map-marked-alt text-primary me-2\"></i>
                    Zones de collecte
                </h1>
                <p class=\"text-muted mb-0\">Gestion des différentes zones de collecte</p>
            </div>
            
            <div class=\"btn-group\">
                <a href=\"{{ path('app_zone_de_collecte_crud_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Ajouter
                </a>
            </div>
        </div>

        <!-- Carte principale -->
        <div class=\"card border-0 shadow-sm\">
            <div class=\"card-header bg-white py-3 border-bottom\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Liste des zones</h5>
                </div>
            </div>
            
            <div class=\"card-body p-0\">
                <!-- Tableau -->
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle mb-0\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"ps-4\">Zone</th>
                                <th>Population</th>
                                <th>Temps de collecte</th>
                                <th class=\"text-end pe-4\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for zone_de_collecte in zone_de_collectes %}
                                <tr>
                                    <td class=\"ps-4\">
                                        <strong>{{ zone_de_collecte.nom }}</strong>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-primary rounded-pill\">
                                            {{ zone_de_collecte.population }} hab.
                                        </span>
                                    </td>
                                    <td>
                                        {% if zone_de_collecte.tempsDeCollecte %}
                                            <i class=\"far fa-clock text-muted me-2\"></i>
                                            {{ zone_de_collecte.tempsDeCollecte|date('H:i') }}
                                        {% else %}
                                            <span class=\"text-muted\">Non défini</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-end pe-4\">
                                        <div class=\"btn-group btn-group-sm\">
                                            <a href=\"{{ path('app_zone_de_collecte_crud_show', {'id': zone_de_collecte.id}) }}\" 
                                               class=\"btn btn-outline-info\" title=\"Voir détails\">
                                               <i class=\"fas fa-eye\"></i>detail
                                            </a>
                                            <a href=\"{{ path('app_zone_de_collecte_crud_edit', {'id': zone_de_collecte.id}) }}\" 
                                               class=\"btn btn-outline-warning\" title=\"Modifier\">
                                               <i class=\"fas fa-edit\"></i>modifier
                                            </a>
                                            <a href=\"{{ path('app_zone_de_collecte_crud_delete', {'id': zone_de_collecte.id}) }}\" 
                                               class=\"btn btn-danger\" title=\"supprimer\">
                                               <i class=\"fas fa-trash-alt\"></i>supprimer
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"4\" class=\"text-center py-5\">
                                        <div class=\"py-4\">
                                            <i class=\"fas fa-map-marked-alt fa-3x text-muted mb-3\"></i>
                                            <p class=\"text-muted\">Aucune zone de collecte trouvée</p>
                                            <a href=\"{{ path('app_zone_de_collecte_crud_new') }}\" 
                                               class=\"btn btn-primary\">
                                               <i class=\"fas fa-plus me-2\"></i>Ajouter une zone
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "zone_de_collecte_crud/index.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\zone_de_collecte_crud\\index.html.twig");
    }
}
