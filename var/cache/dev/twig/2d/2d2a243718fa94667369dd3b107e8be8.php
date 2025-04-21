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

/* dashboard/index.html.twig */
class __TwigTemplate_807a3e697f43ba16764a64c7099bf611 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        
        ";
        // line 9
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        ";
        // line 12
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
        
        ";
        // line 15
        yield "        <style>
            /* Enhanced styling for the user dashboard */
            body {
                background-color: #f5f7fa;
                font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
                min-height: 100vh;
            }

            /* Header styling */
            h1 {
                color: #2c3e50;
                font-weight: 600;
            }

            /* Card enhancements */
            .card {
                border-radius: 10px;
                border: none;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
            }

            .card-header {
                border-top-left-radius: 10px !important;
                border-top-right-radius: 10px !important;
                padding: 15px 20px;
            }

            .card-header h3 {
                font-weight: 500;
            }

            .card-body {
                padding: 25px;
            }

            .card-footer {
                background-color: #f8f9fa;
                border-bottom-left-radius: 10px !important;
                border-bottom-right-radius: 10px !important;
                padding: 15px 25px;
            }

            /* Table styling */
            .table {
                margin-bottom: 0;
            }

            .table thead th {
                border-top: none;
                border-bottom: 2px solid #e9ecef;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.8rem;
                letter-spacing: 0.05em;
            }

            .table tbody tr:hover {
                background-color: rgba(0, 123, 255, 0.04);
            }

            .table td {
                vertical-align: middle;
                border-color: #e9ecef;
            }

            /* Button styling */
            .btn {
                border-radius: 5px;
                padding: 8px 16px;
                font-weight: 500;
                transition: all 0.2s;
            }

            .btn-success {
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-success:hover {
                background-color: #218838;
                border-color: #1e7e34;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-danger:hover {
                background-color: #c82333;
                border-color: #bd2130;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Navbar enhancements */
            .navbar {
                padding: 15px 0;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .navbar-brand {
                font-weight: 700;
                font-size: 1.4rem;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.85);
                font-weight: 500;
                padding: 8px 15px;
                border-radius: 5px;
                transition: all 0.2s;
            }

            .navbar-dark .navbar-nav .nav-link:hover {
                color: #ffffff;
                background-color: rgba(255, 255, 255, 0.1);
            }

            /* Flash messages */
            .alert {
                border-radius: 8px;
                border: none;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
                padding: 15px 20px;
            }

            .alert-success {
                background-color: #d4edda;
                color: #155724;
            }

            .alert-danger {
                background-color: #f8d7da;
                color: #721c24;
            }

            /* Responsive improvements */
            @media (max-width: 768px) {
                .card-body {
                    padding: 15px;
                }
                
                .container {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                
                .table thead th {
                    font-size: 0.75rem;
                }
            }

            /* Added styling for auth pages */
            .auth-container {
                max-width: 450px;
                margin: 50px auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }

            .auth-header {
                text-align: center;
                margin-bottom: 30px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .auth-links {
                text-align: center;
                margin-top: 25px;
            }

            .form-control {
                border-radius: 5px;
                padding: 12px;
                border: 1px solid #e0e0e0;
                transition: border-color 0.2s, box-shadow 0.2s;
            }

            .form-control:focus {
                border-color: #4a89dc;
                box-shadow: 0 0 0 0.2rem rgba(74, 137, 220, 0.25);
            }

            .form-label {
                font-weight: 500;
                color: #495057;
            }
        </style>
        
        ";
        // line 218
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 219
        yield "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary mb-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">User Management</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Dashboard</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Register</a>
                        </li>
                      
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_index");
        yield "\">Station</a>
                        </li>
                         </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_index");
        yield "\">Camions</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_index");
        yield "\">Zones de Collecte</a>
    </li>


                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">reponse</a>
                        </li>

  <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_index");
        yield "\">signalement</a>
                        </li>

                    </ul>
                    ";
        // line 257
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "session", [], "any", false, false, false, 257), "get", ["user_id"], "method", false, false, false, 257)) {
            // line 258
            yield "                        <div class=\"d-flex\">
                            <a href=\"";
            // line 259
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"btn btn-outline-light\">Logout</a>
                        </div>
                    ";
        } else {
            // line 262
            yield "                        <div class=\"d-flex\">
                            <a href=\"";
            // line 263
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-light\">Login</a>
                        </div>
                    ";
        }
        // line 266
        yield "                </div>
            </div>
        </nav>

       <div class=\"card shadow\">
        <div class=\"card-header bg-primary text-white\">
            <h3 class=\"mb-0\">User List</h3>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\" class=\"py-3\">ID</th>
                        <th scope=\"col\" class=\"py-3\">Username</th>
                        <th scope=\"col\" class=\"py-3\">Email</th>
                        <th scope=\"col\" class=\"py-3 text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 285, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 286
            yield "                    <tr>
                        <td class=\"py-3\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 287), "html", null, true);
            yield "</td>
                        <td class=\"py-3\">";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 288), "html", null, true);
            yield "</td>
                        <td class=\"py-3\">";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 289), "html", null, true);
            yield "</td>
                        <td class=\"py-3 text-center\">
                            <form method=\"post\" action=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 291)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-user-" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 292))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash-alt\"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 299
        if (!$context['_iterated']) {
            // line 300
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center py-4\">No users found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        yield "                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <a href=\"";
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Add New User
            </a>
        </div>
    </div>
</div>

        
        ";
        // line 317
        yield "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        ";
        // line 318
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 319
        yield "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 218
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 318
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  510 => 318,  488 => 218,  465 => 6,  453 => 319,  451 => 318,  448 => 317,  437 => 308,  431 => 304,  422 => 300,  420 => 299,  408 => 292,  404 => 291,  399 => 289,  395 => 288,  391 => 287,  388 => 286,  383 => 285,  362 => 266,  356 => 263,  353 => 262,  347 => 259,  344 => 258,  342 => 257,  335 => 253,  328 => 249,  320 => 244,  314 => 241,  307 => 237,  300 => 233,  294 => 230,  284 => 223,  278 => 219,  276 => 218,  71 => 15,  67 => 12,  63 => 9,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        
        {# Bootstrap CSS #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        {# Font Awesome Icons #}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">
        
        {# Custom CSS #}
        <style>
            /* Enhanced styling for the user dashboard */
            body {
                background-color: #f5f7fa;
                font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
                min-height: 100vh;
            }

            /* Header styling */
            h1 {
                color: #2c3e50;
                font-weight: 600;
            }

            /* Card enhancements */
            .card {
                border-radius: 10px;
                border: none;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
            }

            .card-header {
                border-top-left-radius: 10px !important;
                border-top-right-radius: 10px !important;
                padding: 15px 20px;
            }

            .card-header h3 {
                font-weight: 500;
            }

            .card-body {
                padding: 25px;
            }

            .card-footer {
                background-color: #f8f9fa;
                border-bottom-left-radius: 10px !important;
                border-bottom-right-radius: 10px !important;
                padding: 15px 25px;
            }

            /* Table styling */
            .table {
                margin-bottom: 0;
            }

            .table thead th {
                border-top: none;
                border-bottom: 2px solid #e9ecef;
                font-weight: 600;
                text-transform: uppercase;
                font-size: 0.8rem;
                letter-spacing: 0.05em;
            }

            .table tbody tr:hover {
                background-color: rgba(0, 123, 255, 0.04);
            }

            .table td {
                vertical-align: middle;
                border-color: #e9ecef;
            }

            /* Button styling */
            .btn {
                border-radius: 5px;
                padding: 8px 16px;
                font-weight: 500;
                transition: all 0.2s;
            }

            .btn-success {
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-success:hover {
                background-color: #218838;
                border-color: #1e7e34;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .btn-danger {
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-danger:hover {
                background-color: #c82333;
                border-color: #bd2130;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Navbar enhancements */
            .navbar {
                padding: 15px 0;
                box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            }

            .navbar-brand {
                font-weight: 700;
                font-size: 1.4rem;
            }

            .navbar-dark .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.85);
                font-weight: 500;
                padding: 8px 15px;
                border-radius: 5px;
                transition: all 0.2s;
            }

            .navbar-dark .navbar-nav .nav-link:hover {
                color: #ffffff;
                background-color: rgba(255, 255, 255, 0.1);
            }

            /* Flash messages */
            .alert {
                border-radius: 8px;
                border: none;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
                padding: 15px 20px;
            }

            .alert-success {
                background-color: #d4edda;
                color: #155724;
            }

            .alert-danger {
                background-color: #f8d7da;
                color: #721c24;
            }

            /* Responsive improvements */
            @media (max-width: 768px) {
                .card-body {
                    padding: 15px;
                }
                
                .container {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                
                .table thead th {
                    font-size: 0.75rem;
                }
            }

            /* Added styling for auth pages */
            .auth-container {
                max-width: 450px;
                margin: 50px auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }

            .auth-header {
                text-align: center;
                margin-bottom: 30px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .auth-links {
                text-align: center;
                margin-top: 25px;
            }

            .form-control {
                border-radius: 5px;
                padding: 12px;
                border: 1px solid #e0e0e0;
                transition: border-color 0.2s, box-shadow 0.2s;
            }

            .form-control:focus {
                border-color: #4a89dc;
                box-shadow: 0 0 0 0.2rem rgba(74, 137, 220, 0.25);
            }

            .form-label {
                font-weight: 500;
                color: #495057;
            }
        </style>
        
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary mb-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_dashboard') }}\">User Management</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_dashboard') }}\">Dashboard</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
                        </li>
                      
                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_station_index') }}\">Station</a>
                        </li>
                         </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_camion_c_r_u_d_index') }}\">Camions</a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_zone_de_collecte_crud_index') }}\">Zones de Collecte</a>
    </li>


                         <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_reponse_index') }}\">reponse</a>
                        </li>

  <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_signalement_index') }}\">signalement</a>
                        </li>

                    </ul>
                    {% if app.session.get('user_id') %}
                        <div class=\"d-flex\">
                            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-light\">Logout</a>
                        </div>
                    {% else %}
                        <div class=\"d-flex\">
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-light\">Login</a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </nav>

       <div class=\"card shadow\">
        <div class=\"card-header bg-primary text-white\">
            <h3 class=\"mb-0\">User List</h3>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped table-hover\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\" class=\"py-3\">ID</th>
                        <th scope=\"col\" class=\"py-3\">Username</th>
                        <th scope=\"col\" class=\"py-3\">Email</th>
                        <th scope=\"col\" class=\"py-3 text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td class=\"py-3\">{{ user.id }}</td>
                        <td class=\"py-3\">{{ user.username }}</td>
                        <td class=\"py-3\">{{ user.email }}</td>
                        <td class=\"py-3 text-center\">
                            <form method=\"post\" action=\"{{ path('app_user_delete', { id: user.id }) }}\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-user-' ~ user.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fas fa-trash-alt\"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center py-4\">No users found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <a href=\"{{ path('app_register') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Add New User
            </a>
        </div>
    </div>
</div>

        
        {# Bootstrap JS #}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "dashboard/index.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\dashboard\\index.html.twig");
    }
}
