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
class __TwigTemplate_8690ca4508a9cd736adfdcf6a5a77fa7 extends Template
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
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Font Awesome 6 -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background-color: var(--light-bg);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Enhanced Navbar */
        .navbar-master {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 1rem;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.8rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            margin: 0 2px;
        }
        
        .nav-link:hover, .nav-link:focus {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 0.5rem 0;
        }
        
        .dropdown-item {
            padding: 0.5rem 1.5rem;
            transition: all 0.2s;
        }
        
        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateX(5px);
        }
        
        /* Mega Menu for large screens */
        @media (min-width: 992px) {
            .mega-dropdown {
                position: static !important;
            }
            
            .mega-dropdown-menu {
                width: 100%;
                left: 0;
                right: 0;
                padding: 2rem;
                margin-top: 0;
                background-color: white;
                border-radius: 0 0 8px 8px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
            
            .mega-dropdown-menu .container {
                display: flex;
                flex-wrap: wrap;
            }
            
            .mega-dropdown-column {
                flex: 1;
                min-width: 200px;
                padding: 0 1rem;
            }
            
            .mega-dropdown-title {
                font-weight: 600;
                color: var(--secondary-color);
                border-bottom: 2px solid var(--primary-color);
                padding-bottom: 0.5rem;
                margin-bottom: 1rem;
            }
        }
        
        /* Mobile menu enhancements */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                max-height: 80vh;
                overflow-y: auto;
                padding: 1rem;
                background-color: var(--secondary-color);
                border-radius: 0 0 8px 8px;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            }
            
            .dropdown-menu {
                background-color: rgba(0, 0, 0, 0.1);
                margin-left: 1rem;
                border-left: 3px solid var(--primary-color);
            }
        }
        
        /* Main content area */
        .main-content {
            flex: 1;
            padding: 2rem 0;
        }
        
        /* Card enhancements */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            padding: 1rem 1.5rem;
        }
        
        /* Table styling */
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background-color: var(--secondary-color);
            color: white;
            border-bottom: none;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.05em;
        }
        
        .table tbody tr {
            transition: all 0.2s;
        }
        
        .table tbody tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
            transform: scale(1.01);
        }
        
        /* Buttons */
        .btn {
            border-radius: 6px;
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }
        
        .btn-sm {
            padding: 0.25rem 0.75rem;
        }
        
        /* Footer */
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        
        /* Utility classes */
        .text-accent {
            color: var(--accent-color);
        }
        
        .bg-accent {
            background-color: var(--accent-color);
        }
        
        .rounded-xl {
            border-radius: 12px;
        }
    </style>
    
    ";
        // line 233
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 234
        yield "</head>
<body>
    <!-- Enhanced Navbar with Mega Menu -->
    <nav class=\"navbar navbar-expand-lg navbar-dark navbar-master\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                <i class=\"fas fa-users-cog\"></i>
                <span>UserSystem</span>
            </a>
            
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#mainNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 251
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <i class=\"fas fa-user-plus me-1\"></i> Register
                        </a>
                    </li>
                    
                    <!-- Mega Menu Trigger -->
                    <li class=\"nav-item dropdown mega-dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"managementDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-cogs me-1\"></i> Management
                        </a>
                        
                        <!-- Mega Menu Content -->
                        <div class=\"dropdown-menu mega-dropdown-menu\">
                            <div class=\"container\">
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-map-marked-alt me-2\"></i> Locations
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_index");
        yield "\">
                                        <i class=\"fas fa-gas-pump me-2\"></i> Stations
                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_zone_de_collecte_crud_index");
        yield "\">
                                        <i class=\"fas fa-map-marked me-2\"></i> Collection Zones
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-truck me-2\"></i> Vehicles
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"";
        // line 287
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_index");
        yield "\">
                                        <i class=\"fas fa-truck-moving me-2\"></i> Trucks
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-comments me-2\"></i> Communications
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"";
        // line 296
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_index");
        yield "\">
                                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Reports
                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 299
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">
                                        <i class=\"fas fa-reply me-2\"></i> Responses
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-project-diagram me-2\"></i> Projects
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"";
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        yield "\">
                                        <i class=\"fas fa-tasks me-2\"></i> Projects
                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contribution_index");
        yield "\">
                                        <i class=\"fas fa-hand-holding-usd me-2\"></i> Contributions
                                    </a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_projet_index");
        yield "\">
                                        <i class=\"fas fa-money-bill-wave me-2\"></i> Expenses
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-building me-2\"></i> Suppliers
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"";
        // line 323
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\">
                                        <i class=\"fas fa-parachute-box me-2\"></i> Suppliers
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <!-- User Actions -->
                <div class=\"d-flex\">
                    ";
        // line 334
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "session", [], "any", false, false, false, 334), "get", ["user_id"], "method", false, false, false, 334)) {
            // line 335
            yield "                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"btn btn-outline-light dropdown-toggle\" id=\"userDropdown\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-user-circle me-1\"></i> My Account
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user me-2\"></i> Profile
                                </a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cog me-2\"></i> Settings
                                </a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item text-danger\" href=\"";
            // line 347
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                                </a></li>
                            </ul>
                        </div>
                    ";
        } else {
            // line 353
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-light\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> Login
                        </a>
                    ";
        }
        // line 357
        yield "                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"main-content\">
        <div class=\"container\">
            <!-- Flash Messages -->
            ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 366, $this->source); })()), "flashes", ["success"], "method", false, false, false, 366));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 367
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 372
        yield "            
            ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 373, $this->source); })()), "flashes", ["error"], "method", false, false, false, 373));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 374
            yield "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        yield "            
            <!-- Page Content -->
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"mb-0\">
                        <i class=\"fas fa-users me-2\"></i> User List
                    </h3>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Username</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Role</th>
                                    <th scope=\"col\" class=\"text-end\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 401
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 401, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 402
            yield "                                    <tr>
                                        <td>";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 403), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"avatar-sm me-2\">
                                                    <span class=\"avatar-title bg-light text-dark rounded-circle\">
                                                        ";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 408))), "html", null, true);
            yield "
                                                    </span>
                                                </div>
                                                ";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 411), "html", null, true);
            yield "
                                            </div>
                                        </td>
                                        <td>";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 414), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge bg-info\">User</span>
                                        </td>
                                        <td class=\"text-end\">
                                            <div class=\"btn-group\" role=\"group\">
                                                
                                                <form method=\"post\" action=\"";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 421)]), "html", null, true);
            yield "\" class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-user-" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 422))), "html", null, true);
            yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" 
                                                            onclick=\"return confirm('Are you sure you want to delete this user?')\"
                                                            title=\"Delete\">
                                                        <i class=\"fas fa-trash-alt\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 432
        if (!$context['_iterated']) {
            // line 433
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <div class=\"empty-state\">
                                                <i class=\"fas fa-users-slash fa-3x text-muted mb-3\"></i>
                                                <h4>No users found</h4>
                                                <p class=\"text-muted\">There are currently no users in the system</p>
                                                <a href=\"";
            // line 439
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-primary\">
                                                    <i class=\"fas fa-plus me-1\"></i> Add New User
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"text-muted\">
                            Showing <strong>";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 454, $this->source); })())), "html", null, true);
        yield "</strong> users
                        </div>
                        <a href=\"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-1\"></i> Add New User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h5><i class=\"fas fa-users-cog me-2\"></i> User Management</h5>
                    <p class=\"text-muted\">A comprehensive user management system with advanced features.</p>
                </div>
                <div class=\"col-md-2\">
                    <h5>Quick Links</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 476
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-white\">Dashboard</a></li>
                        <li><a href=\"";
        // line 477
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-white\">Register</a></li>
                        <li><a href=\"#\" class=\"text-white\">Documentation</a></li>
                    </ul>
                </div>
                <div class=\"col-md-2\">
                    <h5>Management</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 484
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_station_index");
        yield "\" class=\"text-white\">Stations</a></li>
                        <li><a href=\"";
        // line 485
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_camion_c_r_u_d_index");
        yield "\" class=\"text-white\">Trucks</a></li>
                        <li><a href=\"";
        // line 486
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_projet_index");
        yield "\" class=\"text-white\">Projects</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h5>Contact</h5>
                    <ul class=\"list-unstyled text-muted\">
                        <li><i class=\"fas fa-envelope me-2\"></i> support@usermanagement.com</li>
                        <li><i class=\"fas fa-phone me-2\"></i> +1 (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4 bg-light\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-0\">&copy; 2025 User Management System. All rights reserved.</p>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"#\" class=\"text-white\"><i class=\"fab fa-github\"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            
            // Mega menu auto-close when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.mega-dropdown')) {
                    var megaMenus = document.querySelectorAll('.mega-dropdown-menu');
                    megaMenus.forEach(function(menu) {
                        menu.style.display = 'none';
                    });
                }
            });
        });
    </script>
    
    ";
        // line 536
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 537
        yield "</body>
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

        yield "User Management System";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 233
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

    // line 536
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
        return array (  785 => 536,  763 => 233,  740 => 6,  728 => 537,  726 => 536,  673 => 486,  669 => 485,  665 => 484,  655 => 477,  651 => 476,  628 => 456,  623 => 454,  613 => 446,  600 => 439,  592 => 433,  590 => 432,  575 => 422,  571 => 421,  561 => 414,  555 => 411,  549 => 408,  541 => 403,  538 => 402,  533 => 401,  509 => 379,  499 => 375,  496 => 374,  492 => 373,  489 => 372,  479 => 368,  476 => 367,  472 => 366,  461 => 357,  453 => 353,  444 => 347,  430 => 335,  428 => 334,  414 => 323,  402 => 314,  396 => 311,  390 => 308,  378 => 299,  372 => 296,  360 => 287,  348 => 278,  342 => 275,  321 => 257,  312 => 251,  297 => 239,  290 => 234,  288 => 233,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}User Management System{% endblock %}</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    <!-- Font Awesome 6 -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background-color: var(--light-bg);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Enhanced Navbar */
        .navbar-master {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 1rem;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            margin-right: 10px;
            font-size: 1.8rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            margin: 0 2px;
        }
        
        .nav-link:hover, .nav-link:focus {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 0.5rem 0;
        }
        
        .dropdown-item {
            padding: 0.5rem 1.5rem;
            transition: all 0.2s;
        }
        
        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateX(5px);
        }
        
        /* Mega Menu for large screens */
        @media (min-width: 992px) {
            .mega-dropdown {
                position: static !important;
            }
            
            .mega-dropdown-menu {
                width: 100%;
                left: 0;
                right: 0;
                padding: 2rem;
                margin-top: 0;
                background-color: white;
                border-radius: 0 0 8px 8px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
            
            .mega-dropdown-menu .container {
                display: flex;
                flex-wrap: wrap;
            }
            
            .mega-dropdown-column {
                flex: 1;
                min-width: 200px;
                padding: 0 1rem;
            }
            
            .mega-dropdown-title {
                font-weight: 600;
                color: var(--secondary-color);
                border-bottom: 2px solid var(--primary-color);
                padding-bottom: 0.5rem;
                margin-bottom: 1rem;
            }
        }
        
        /* Mobile menu enhancements */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                max-height: 80vh;
                overflow-y: auto;
                padding: 1rem;
                background-color: var(--secondary-color);
                border-radius: 0 0 8px 8px;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            }
            
            .dropdown-menu {
                background-color: rgba(0, 0, 0, 0.1);
                margin-left: 1rem;
                border-left: 3px solid var(--primary-color);
            }
        }
        
        /* Main content area */
        .main-content {
            flex: 1;
            padding: 2rem 0;
        }
        
        /* Card enhancements */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            padding: 1rem 1.5rem;
        }
        
        /* Table styling */
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            background-color: var(--secondary-color);
            color: white;
            border-bottom: none;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.05em;
        }
        
        .table tbody tr {
            transition: all 0.2s;
        }
        
        .table tbody tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
            transform: scale(1.01);
        }
        
        /* Buttons */
        .btn {
            border-radius: 6px;
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }
        
        .btn-sm {
            padding: 0.25rem 0.75rem;
        }
        
        /* Footer */
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        
        /* Utility classes */
        .text-accent {
            color: var(--accent-color);
        }
        
        .bg-accent {
            background-color: var(--accent-color);
        }
        
        .rounded-xl {
            border-radius: 12px;
        }
    </style>
    
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <!-- Enhanced Navbar with Mega Menu -->
    <nav class=\"navbar navbar-expand-lg navbar-dark navbar-master\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_dashboard') }}\">
                <i class=\"fas fa-users-cog\"></i>
                <span>UserSystem</span>
            </a>
            
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#mainNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            
            <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_dashboard') }}\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_register') }}\">
                            <i class=\"fas fa-user-plus me-1\"></i> Register
                        </a>
                    </li>
                    
                    <!-- Mega Menu Trigger -->
                    <li class=\"nav-item dropdown mega-dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"managementDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                            <i class=\"fas fa-cogs me-1\"></i> Management
                        </a>
                        
                        <!-- Mega Menu Content -->
                        <div class=\"dropdown-menu mega-dropdown-menu\">
                            <div class=\"container\">
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-map-marked-alt me-2\"></i> Locations
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_station_index') }}\">
                                        <i class=\"fas fa-gas-pump me-2\"></i> Stations
                                    </a>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_zone_de_collecte_crud_index') }}\">
                                        <i class=\"fas fa-map-marked me-2\"></i> Collection Zones
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-truck me-2\"></i> Vehicles
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_camion_c_r_u_d_index') }}\">
                                        <i class=\"fas fa-truck-moving me-2\"></i> Trucks
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-comments me-2\"></i> Communications
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_signalement_index') }}\">
                                        <i class=\"fas fa-exclamation-triangle me-2\"></i> Reports
                                    </a>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_reponse_index') }}\">
                                        <i class=\"fas fa-reply me-2\"></i> Responses
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-project-diagram me-2\"></i> Projects
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_projet_index') }}\">
                                        <i class=\"fas fa-tasks me-2\"></i> Projects
                                    </a>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_contribution_index') }}\">
                                        <i class=\"fas fa-hand-holding-usd me-2\"></i> Contributions
                                    </a>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_depense_projet_index') }}\">
                                        <i class=\"fas fa-money-bill-wave me-2\"></i> Expenses
                                    </a>
                                </div>
                                
                                <div class=\"mega-dropdown-column\">
                                    <h5 class=\"mega-dropdown-title\">
                                        <i class=\"fas fa-building me-2\"></i> Suppliers
                                    </h5>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_fournisseur_index') }}\">
                                        <i class=\"fas fa-parachute-box me-2\"></i> Suppliers
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <!-- User Actions -->
                <div class=\"d-flex\">
                    {% if app.session.get('user_id') %}
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"btn btn-outline-light dropdown-toggle\" id=\"userDropdown\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-user-circle me-1\"></i> My Account
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user me-2\"></i> Profile
                                </a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cog me-2\"></i> Settings
                                </a></li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li><a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt me-2\"></i> Logout
                                </a></li>
                            </ul>
                        </div>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-light\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i> Login
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class=\"main-content\">
        <div class=\"container\">
            <!-- Flash Messages -->
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}
            
            <!-- Page Content -->
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"mb-0\">
                        <i class=\"fas fa-users me-2\"></i> User List
                    </h3>
                </div>
                
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover align-middle\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Username</th>
                                    <th scope=\"col\">Email</th>
                                    <th scope=\"col\">Role</th>
                                    <th scope=\"col\" class=\"text-end\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>{{ user.id }}</td>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"avatar-sm me-2\">
                                                    <span class=\"avatar-title bg-light text-dark rounded-circle\">
                                                        {{ user.username|first|upper }}
                                                    </span>
                                                </div>
                                                {{ user.username }}
                                            </div>
                                        </td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            <span class=\"badge bg-info\">User</span>
                                        </td>
                                        <td class=\"text-end\">
                                            <div class=\"btn-group\" role=\"group\">
                                                
                                                <form method=\"post\" action=\"{{ path('app_user_delete', { id: user.id }) }}\" class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-user-' ~ user.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" 
                                                            onclick=\"return confirm('Are you sure you want to delete this user?')\"
                                                            title=\"Delete\">
                                                        <i class=\"fas fa-trash-alt\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center py-4\">
                                            <div class=\"empty-state\">
                                                <i class=\"fas fa-users-slash fa-3x text-muted mb-3\"></i>
                                                <h4>No users found</h4>
                                                <p class=\"text-muted\">There are currently no users in the system</p>
                                                <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary\">
                                                    <i class=\"fas fa-plus me-1\"></i> Add New User
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"text-muted\">
                            Showing <strong>{{ users|length }}</strong> users
                        </div>
                        <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus me-1\"></i> Add New User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <h5><i class=\"fas fa-users-cog me-2\"></i> User Management</h5>
                    <p class=\"text-muted\">A comprehensive user management system with advanced features.</p>
                </div>
                <div class=\"col-md-2\">
                    <h5>Quick Links</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"{{ path('app_dashboard') }}\" class=\"text-white\">Dashboard</a></li>
                        <li><a href=\"{{ path('app_register') }}\" class=\"text-white\">Register</a></li>
                        <li><a href=\"#\" class=\"text-white\">Documentation</a></li>
                    </ul>
                </div>
                <div class=\"col-md-2\">
                    <h5>Management</h5>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"{{ path('app_station_index') }}\" class=\"text-white\">Stations</a></li>
                        <li><a href=\"{{ path('app_camion_c_r_u_d_index') }}\" class=\"text-white\">Trucks</a></li>
                        <li><a href=\"{{ path('app_projet_index') }}\" class=\"text-white\">Projects</a></li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h5>Contact</h5>
                    <ul class=\"list-unstyled text-muted\">
                        <li><i class=\"fas fa-envelope me-2\"></i> support@usermanagement.com</li>
                        <li><i class=\"fas fa-phone me-2\"></i> +1 (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            <hr class=\"my-4 bg-light\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p class=\"mb-0\">&copy; 2025 User Management System. All rights reserved.</p>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"#\" class=\"text-white me-3\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"#\" class=\"text-white\"><i class=\"fab fa-github\"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            
            // Mega menu auto-close when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.mega-dropdown')) {
                    var megaMenus = document.querySelectorAll('.mega-dropdown-menu');
                    megaMenus.forEach(function(menu) {
                        menu.style.display = 'none';
                    });
                }
            });
        });
    </script>
    
    {% block javascripts %}{% endblock %}
</body>
</html>", "dashboard/index.html.twig", "C:\\Users\\ahmed\\Downloads\\Houmti2\\templates\\dashboard\\index.html.twig");
    }
}
