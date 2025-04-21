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

/* camion_crud/new.html.twig */
class __TwigTemplate_81839e73903e30203d7765d625423666 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "camion_crud/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "camion_crud/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "camion_crud/new.html.twig", 1);
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

        yield "Nouveau Camion";
        
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
        yield "<div class=\"container-fluid px-4\">
    <div class=\"row\">
        <div class=\"col-md-10 mx-auto mt-4\">
            <!-- En-tête de page -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-truck fa-2x text-primary me-3\"></i>
                    <div>
                        <h1 class=\"h3 fw-bold mb-0\">Nouveau camion</h1>
                        <small class=\"text-muted\">Ajouter un nouveau véhicule à la flotte</small>
                    </div>
                </div>
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_index");
        yield "\" class=\"btn btn-outline-primary rounded-pill shadow-sm\">
                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>

            <!-- Form Card -->
            <div class=\"card shadow rounded-4 border-0 mb-4\">
                <div class=\"card-header bg-transparent border-bottom-0 py-4\">
                    <h5 class=\"mb-0 text-primary\">
                        <i class=\"fas fa-file-alt me-2\"></i>Formulaire de création
                    </h5>
                </div>
                <div class=\"card-body pt-0\">
                    ";
        // line 31
        yield Twig\Extension\CoreExtension::include($this->env, $context, "camion_crud/_form.html.twig");
        yield "
                </div>
                <div class=\"card-footer bg-transparent border-top-0 d-flex justify-content-between align-items-center py-3\">
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_index");
        yield "\" class=\"btn btn-link text-muted\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Annuler
                    </a>
                    <button type=\"submit\" form=\"camion-form\" class=\"btn btn-primary rounded-pill px-4 shadow-sm\">
                        <i class=\"fas fa-save me-2\"></i>Enregistrer
                    </button>
                </div>
            </div>

            <!-- Section d'aide -->
            <div class=\"alert alert-info d-flex align-items-start gap-3 shadow-sm rounded-4 mt-4 p-4\">
                <i class=\"fas fa-info-circle fa-2x text-info mt-1\"></i>
                <div>
                    <h5 class=\"mb-1 fw-semibold\">Conseils</h5>
                    <p class=\"mb-0\">Remplissez tous les champs obligatoires marqués d'un astérisque (*). Vérifiez bien les informations avant de soumettre.</p>
                </div>
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
        return "camion_crud/new.html.twig";
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
        return array (  136 => 34,  130 => 31,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Camion{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"row\">
        <div class=\"col-md-10 mx-auto mt-4\">
            <!-- En-tête de page -->
            <div class=\"d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom\">
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-truck fa-2x text-primary me-3\"></i>
                    <div>
                        <h1 class=\"h3 fw-bold mb-0\">Nouveau camion</h1>
                        <small class=\"text-muted\">Ajouter un nouveau véhicule à la flotte</small>
                    </div>
                </div>
                <a href=\"{{ path('app_camion_c_r_u_d_index') }}\" class=\"btn btn-outline-primary rounded-pill shadow-sm\">
                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>

            <!-- Form Card -->
            <div class=\"card shadow rounded-4 border-0 mb-4\">
                <div class=\"card-header bg-transparent border-bottom-0 py-4\">
                    <h5 class=\"mb-0 text-primary\">
                        <i class=\"fas fa-file-alt me-2\"></i>Formulaire de création
                    </h5>
                </div>
                <div class=\"card-body pt-0\">
                    {{ include('camion_crud/_form.html.twig') }}
                </div>
                <div class=\"card-footer bg-transparent border-top-0 d-flex justify-content-between align-items-center py-3\">
                    <a href=\"{{ path('app_camion_c_r_u_d_index') }}\" class=\"btn btn-link text-muted\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Annuler
                    </a>
                    <button type=\"submit\" form=\"camion-form\" class=\"btn btn-primary rounded-pill px-4 shadow-sm\">
                        <i class=\"fas fa-save me-2\"></i>Enregistrer
                    </button>
                </div>
            </div>

            <!-- Section d'aide -->
            <div class=\"alert alert-info d-flex align-items-start gap-3 shadow-sm rounded-4 mt-4 p-4\">
                <i class=\"fas fa-info-circle fa-2x text-info mt-1\"></i>
                <div>
                    <h5 class=\"mb-1 fw-semibold\">Conseils</h5>
                    <p class=\"mb-0\">Remplissez tous les champs obligatoires marqués d'un astérisque (*). Vérifiez bien les informations avant de soumettre.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "camion_crud/new.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\camion_crud\\new.html.twig");
    }
}
