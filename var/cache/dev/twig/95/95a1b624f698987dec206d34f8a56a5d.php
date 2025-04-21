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

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/smartcity.jpg"), "html", null, true);
        yield "\">
    
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 220
        yield "</head>
<body>
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
        <div>
            <div class=\"brand-logo d-flex align-items-center justify-content-between\">
                <a href=\"";
        // line 226
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-nowrap logo-img\">
                    <img src=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/logo-light.svg"), "html", null, true);
        yield "\" alt=\"Logo\" width=\"150\">
                </a>
                <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
                    <i class=\"fas fa-times\"></i>
                </div>
            </div>
            
            <!-- Sidebar navigation -->
            <nav class=\"sidebar-nav scroll-sidebar\">
                <ul id=\"sidebarnav\">
                    <li class=\"nav-small-cap\">
                        <span class=\"hide-menu\">Navigation</span>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:home-smile-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 251
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_index");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:danger-triangle-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Signalements</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:chat-round-dots-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Réponses</span>
                        </a>
                    </li>
                    
                    <li class=\"nav-small-cap\">
                        <span class=\"hide-menu\">Actions</span>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signalement_new");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:add-circle-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Nouveau Signalement</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:chat-round-line-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Nouvelle Réponse</span>
                        </a>
                    </li>
                    
                    
                    <li class=\"nav-small-cap\">
                        <span class=\"hide-menu\">Compte</span>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 296
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:login-3-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Connexion</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 305
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:user-plus-rounded-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Inscription</span>
                        </a>
                    </li>
                    
                    <!-- Upgrade Banner -->
                    <li class=\"mt-4\">
                        <div class=\"upgrade-banner\">
                            <h6 class=\"fw-semibold mb-2\">Version Pro</h6>
                            <p class=\"fs-7 mb-3\">Accédez à toutes les fonctionnalités avancées</p>
                            <a href=\"#\" class=\"btn btn-sm btn-primary\">Mettre à niveau</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- Sidebar End -->
    
    <!-- Main Wrapper -->
    <div class=\"page-wrapper\" id=\"main-wrapper\">
        <!-- Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Header Start -->
            <header class=\"app-header\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item d-block d-xl-none\">
                            <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"#\">
                                <i class=\"fas fa-bars\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link nav-icon-hover\" href=\"#\">
                                <i class=\"fas fa-bell\"></i>
                                <div class=\"notification bg-danger rounded-circle\"></div>
                            </a>
                        </li>
                    </ul>
                    
                    <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
                        <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
                            <li class=\"nav-item me-3\">
                                <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                    <span class=\"d-none d-md-inline\">Version Pro</span>
                                    <span class=\"d-inline d-md-none\">Pro</span>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link nav-icon-hover\" href=\"#\" id=\"profileDropdown\" data-bs-toggle=\"dropdown\">
                                    <img src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-1.jpg"), "html", null, true);
        yield "\" alt=\"Profile\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"profileDropdown\">
                                    <div class=\"message-body\">
                                        <a href=\"#\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                            <i class=\"fas fa-user\"></i>
                                            <span>Mon Profil</span>
                                        </a>
                                        <a href=\"#\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                            <i class=\"fas fa-cog\"></i>
                                            <span>Paramètres</span>
                                        </a>
                                        <a href=\"#\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                            <i class=\"fas fa-envelope\"></i>
                                            <span>Messages</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a href=\"";
        // line 375
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-sm btn-outline-danger mx-3 mt-2 d-block\">Déconnexion</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Header End -->
            
            <!-- Main Content -->
            <div class=\"container-fluid\">
                ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 387, $this->source); })()), "flashes", ["success"], "method", false, false, false, 387));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 388
            yield "                    <div class=\"alert alert-success alert-dismissible fade show mt-3\">
                        ";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        yield "                
                ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 394, $this->source); })()), "flashes", ["error"], "method", false, false, false, 394));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 395
            yield "                    <div class=\"alert alert-danger alert-dismissible fade show mt-3\">
                        ";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        yield "                
                ";
        // line 401
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 433
        yield "            </div>
        </div>
    </div>
    
    ";
        // line 437
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 476
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

        yield "Dashboard Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        <!-- Iconify -->
        <script src=\"https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js\"></script>
        
        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.min.css"), "html", null, true);
        yield "\">
        
        <style>
            :root {
                --primary-color: #5D87FF;
                --secondary-color: #49BEFF;
                --success-color: #3DD9A0;
                --danger-color: #FC4B6C;
                --warning-color: #FEC90F;
                --dark-color: #2A3547;
                --light-color: #f5f7fa;
                --sidebar-width: 270px;
                --header-height: 70px;
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f5f7fa;
                overflow-x: hidden;
            }
            
            /* Sidebar Styles */
            .left-sidebar {
                width: var(--sidebar-width);
                background: white;
                position: fixed;
                left: 0;
                top: 0;
                height: 100vh;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                z-index: 1000;
                transition: all 0.3s ease;
            }
            
            .brand-logo {
                padding: 15px 30px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            .sidebar-nav {
                padding: 20px;
                height: calc(100vh - 70px);
                overflow-y: auto;
            }
            
            .sidebar-item {
                margin-bottom: 5px;
            }
            
            .sidebar-link {
                display: flex;
                align-items: center;
                padding: 12px 15px;
                color: var(--dark-color);
                border-radius: 8px;
                transition: all 0.3s ease;
            }
            
            .sidebar-link:hover, .sidebar-link.active {
                background-color: rgba(93, 135, 255, 0.1);
                color: var(--primary-color);
            }
            
            .sidebar-link span:first-child {
                margin-right: 10px;
                display: flex;
                align-items: center;
            }
            
            .nav-small-cap {
                font-size: 0.75rem;
                text-transform: uppercase;
                color: #6c757d;
                font-weight: 600;
                padding: 15px 15px 5px;
                margin-top: 15px;
                display: block;
            }
            
            /* Main Content Styles */
            .page-wrapper {
                margin-left: var(--sidebar-width);
                min-height: 100vh;
                transition: all 0.3s ease;
            }
            
            .body-wrapper {
                padding-top: var(--header-height);
            }
            
            /* Header Styles */
            .app-header {
                position: fixed;
                top: 0;
                right: 0;
                left: var(--sidebar-width);
                height: var(--header-height);
                background: white;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                z-index: 999;
                transition: all 0.3s ease;
            }
            
            .nav-icon-hover {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: all 0.3s ease;
            }
            
            .nav-icon-hover:hover {
                background-color: rgba(0, 0, 0, 0.05);
            }
            
            .notification {
                position: absolute;
                top: 5px;
                right: 5px;
                width: 8px;
                height: 8px;
            }
            
            /* Card Styles */
            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                margin-bottom: 20px;
                transition: all 0.3s ease;
            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
            
            .card-title {
                font-weight: 600;
                color: var(--dark-color);
            }
            
            /* Responsive Adjustments */
            @media (max-width: 992px) {
                .left-sidebar {
                    transform: translateX(-100%);
                }
                
                .left-sidebar.active {
                    transform: translateX(0);
                }
                
                .page-wrapper, .app-header {
                    left: 0;
                }
                
                .page-wrapper.sidebar-active {
                    margin-left: 0;
                }
            }
            
            /* Upgrade Banner */
            .upgrade-banner {
                background: linear-gradient(135deg, rgba(93, 135, 255, 0.1), rgba(73, 190, 255, 0.1));
                border-radius: 10px;
                padding: 15px;
                margin: 20px 0;
                position: relative;
                overflow: hidden;
            }
            
            .upgrade-banner::after {
                content: \"\";
                position: absolute;
                right: 0;
                bottom: 0;
                width: 100px;
                height: 100px;
                background-image: url('";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/backgrounds/rocket.png"), "html", null, true);
        yield "');
                background-size: contain;
                background-repeat: no-repeat;
                opacity: 0.2;
            }
            
            /* Custom Utilities */
            .rounded-xl {
                border-radius: 12px;
            }
            
            .fs-7 {
                font-size: 0.9rem;
            }
            
            .bg-primary-subtle {
                background-color: rgba(93, 135, 255, 0.1) !important;
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 401
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

        // line 402
        yield "                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title d-flex align-items-center gap-2\">
                                    <iconify-icon icon=\"solar:pie-chart-2-bold-duotone\"></iconify-icon>
                                    <span>Aperçu des Signalements</span>
                                </h5>
                                <div class=\"mt-4\">
                                    <!-- Content will be loaded here -->
                                    ";
        // line 412
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 413
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title d-flex align-items-center gap-2\">
                                    <iconify-icon icon=\"solar:bell-bing-bold-duotone\"></iconify-icon>
                                    <span>Activités Récentes</span>
                                </h5>
                                <div class=\"activity-list mt-4\">
                                    <!-- Activity items will go here -->
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

    // line 412
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 437
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

        // line 438
        yield "        <!-- jQuery -->
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        
        <!-- Bootstrap 5 JS Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        <!-- Custom JS -->
        <script>
            // Toggle sidebar on mobile
            document.addEventListener('DOMContentLoaded', function() {
                const sidebarToggler = document.getElementById('headerCollapse');
                const sidebar = document.querySelector('.left-sidebar');
                const pageWrapper = document.querySelector('.page-wrapper');
                
                sidebarToggler.addEventListener('click', function(e) {
                    e.preventDefault();
                    sidebar.classList.toggle('active');
                    pageWrapper.classList.toggle('sidebar-active');
                });
                
                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(e) {
                    if (window.innerWidth < 992) {
                        if (!sidebar.contains(e.target) && !sidebarToggler.contains(e.target)) {
                            sidebar.classList.remove('active');
                            pageWrapper.classList.remove('sidebar-active');
                        }
                    }
                });
                
                // Initialize tooltips
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            });
        </script>
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
        return "base.html.twig";
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
        return array (  689 => 438,  676 => 437,  654 => 412,  624 => 413,  622 => 412,  610 => 402,  597 => 401,  566 => 200,  383 => 20,  371 => 10,  358 => 9,  335 => 6,  323 => 476,  321 => 437,  315 => 433,  313 => 401,  310 => 400,  300 => 396,  297 => 395,  293 => 394,  290 => 393,  280 => 389,  277 => 388,  273 => 387,  258 => 375,  238 => 358,  182 => 305,  170 => 296,  153 => 282,  141 => 273,  125 => 260,  113 => 251,  101 => 242,  83 => 227,  79 => 226,  71 => 220,  69 => 9,  64 => 7,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Dashboard Admin{% endblock %}</title>
    <link rel=\"icon\" href=\"{{ asset('images/logos/smartcity.jpg') }}\">
    
    {% block stylesheets %}
        <!-- Bootstrap 5 CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        <!-- Iconify -->
        <script src=\"https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js\"></script>
        
        <!-- Custom CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.min.css') }}\">
        
        <style>
            :root {
                --primary-color: #5D87FF;
                --secondary-color: #49BEFF;
                --success-color: #3DD9A0;
                --danger-color: #FC4B6C;
                --warning-color: #FEC90F;
                --dark-color: #2A3547;
                --light-color: #f5f7fa;
                --sidebar-width: 270px;
                --header-height: 70px;
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f5f7fa;
                overflow-x: hidden;
            }
            
            /* Sidebar Styles */
            .left-sidebar {
                width: var(--sidebar-width);
                background: white;
                position: fixed;
                left: 0;
                top: 0;
                height: 100vh;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                z-index: 1000;
                transition: all 0.3s ease;
            }
            
            .brand-logo {
                padding: 15px 30px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }
            
            .sidebar-nav {
                padding: 20px;
                height: calc(100vh - 70px);
                overflow-y: auto;
            }
            
            .sidebar-item {
                margin-bottom: 5px;
            }
            
            .sidebar-link {
                display: flex;
                align-items: center;
                padding: 12px 15px;
                color: var(--dark-color);
                border-radius: 8px;
                transition: all 0.3s ease;
            }
            
            .sidebar-link:hover, .sidebar-link.active {
                background-color: rgba(93, 135, 255, 0.1);
                color: var(--primary-color);
            }
            
            .sidebar-link span:first-child {
                margin-right: 10px;
                display: flex;
                align-items: center;
            }
            
            .nav-small-cap {
                font-size: 0.75rem;
                text-transform: uppercase;
                color: #6c757d;
                font-weight: 600;
                padding: 15px 15px 5px;
                margin-top: 15px;
                display: block;
            }
            
            /* Main Content Styles */
            .page-wrapper {
                margin-left: var(--sidebar-width);
                min-height: 100vh;
                transition: all 0.3s ease;
            }
            
            .body-wrapper {
                padding-top: var(--header-height);
            }
            
            /* Header Styles */
            .app-header {
                position: fixed;
                top: 0;
                right: 0;
                left: var(--sidebar-width);
                height: var(--header-height);
                background: white;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                z-index: 999;
                transition: all 0.3s ease;
            }
            
            .nav-icon-hover {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: all 0.3s ease;
            }
            
            .nav-icon-hover:hover {
                background-color: rgba(0, 0, 0, 0.05);
            }
            
            .notification {
                position: absolute;
                top: 5px;
                right: 5px;
                width: 8px;
                height: 8px;
            }
            
            /* Card Styles */
            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                margin-bottom: 20px;
                transition: all 0.3s ease;
            }
            
            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
            
            .card-title {
                font-weight: 600;
                color: var(--dark-color);
            }
            
            /* Responsive Adjustments */
            @media (max-width: 992px) {
                .left-sidebar {
                    transform: translateX(-100%);
                }
                
                .left-sidebar.active {
                    transform: translateX(0);
                }
                
                .page-wrapper, .app-header {
                    left: 0;
                }
                
                .page-wrapper.sidebar-active {
                    margin-left: 0;
                }
            }
            
            /* Upgrade Banner */
            .upgrade-banner {
                background: linear-gradient(135deg, rgba(93, 135, 255, 0.1), rgba(73, 190, 255, 0.1));
                border-radius: 10px;
                padding: 15px;
                margin: 20px 0;
                position: relative;
                overflow: hidden;
            }
            
            .upgrade-banner::after {
                content: \"\";
                position: absolute;
                right: 0;
                bottom: 0;
                width: 100px;
                height: 100px;
                background-image: url('{{ asset('images/backgrounds/rocket.png') }}');
                background-size: contain;
                background-repeat: no-repeat;
                opacity: 0.2;
            }
            
            /* Custom Utilities */
            .rounded-xl {
                border-radius: 12px;
            }
            
            .fs-7 {
                font-size: 0.9rem;
            }
            
            .bg-primary-subtle {
                background-color: rgba(93, 135, 255, 0.1) !important;
            }
        </style>
    {% endblock %}
</head>
<body>
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
        <div>
            <div class=\"brand-logo d-flex align-items-center justify-content-between\">
                <a href=\"{{ path('app_dashboard') }}\" class=\"text-nowrap logo-img\">
                    <img src=\"{{ asset('images/logos/logo-light.svg') }}\" alt=\"Logo\" width=\"150\">
                </a>
                <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
                    <i class=\"fas fa-times\"></i>
                </div>
            </div>
            
            <!-- Sidebar navigation -->
            <nav class=\"sidebar-nav scroll-sidebar\">
                <ul id=\"sidebarnav\">
                    <li class=\"nav-small-cap\">
                        <span class=\"hide-menu\">Navigation</span>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_dashboard') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:home-smile-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_signalement_index') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:danger-triangle-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Signalements</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_reponse_index') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:chat-round-dots-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Réponses</span>
                        </a>
                    </li>
                    
                    <li class=\"nav-small-cap\">
                        <span class=\"hide-menu\">Actions</span>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_signalement_new') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:add-circle-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Nouveau Signalement</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_reponse_new') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:chat-round-line-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Nouvelle Réponse</span>
                        </a>
                    </li>
                    
                    
                    <li class=\"nav-small-cap\">
                        <span class=\"hide-menu\">Compte</span>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_login') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:login-3-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Connexion</span>
                        </a>
                    </li>
                    
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"{{ path('app_register') }}\" aria-expanded=\"false\">
                            <span>
                                <iconify-icon icon=\"solar:user-plus-rounded-bold-duotone\"></iconify-icon>
                            </span>
                            <span class=\"hide-menu\">Inscription</span>
                        </a>
                    </li>
                    
                    <!-- Upgrade Banner -->
                    <li class=\"mt-4\">
                        <div class=\"upgrade-banner\">
                            <h6 class=\"fw-semibold mb-2\">Version Pro</h6>
                            <p class=\"fs-7 mb-3\">Accédez à toutes les fonctionnalités avancées</p>
                            <a href=\"#\" class=\"btn btn-sm btn-primary\">Mettre à niveau</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- Sidebar End -->
    
    <!-- Main Wrapper -->
    <div class=\"page-wrapper\" id=\"main-wrapper\">
        <!-- Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Header Start -->
            <header class=\"app-header\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
                    <ul class=\"navbar-nav\">
                        <li class=\"nav-item d-block d-xl-none\">
                            <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"#\">
                                <i class=\"fas fa-bars\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link nav-icon-hover\" href=\"#\">
                                <i class=\"fas fa-bell\"></i>
                                <div class=\"notification bg-danger rounded-circle\"></div>
                            </a>
                        </li>
                    </ul>
                    
                    <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
                        <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
                            <li class=\"nav-item me-3\">
                                <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                    <span class=\"d-none d-md-inline\">Version Pro</span>
                                    <span class=\"d-inline d-md-none\">Pro</span>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link nav-icon-hover\" href=\"#\" id=\"profileDropdown\" data-bs-toggle=\"dropdown\">
                                    <img src=\"{{ asset('images/profile/user-1.jpg') }}\" alt=\"Profile\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"profileDropdown\">
                                    <div class=\"message-body\">
                                        <a href=\"#\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                            <i class=\"fas fa-user\"></i>
                                            <span>Mon Profil</span>
                                        </a>
                                        <a href=\"#\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                            <i class=\"fas fa-cog\"></i>
                                            <span>Paramètres</span>
                                        </a>
                                        <a href=\"#\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                                            <i class=\"fas fa-envelope\"></i>
                                            <span>Messages</span>
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-sm btn-outline-danger mx-3 mt-2 d-block\">Déconnexion</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Header End -->
            
            <!-- Main Content -->
            <div class=\"container-fluid\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show mt-3\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}
                
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger alert-dismissible fade show mt-3\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    </div>
                {% endfor %}
                
                {% block body %}
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title d-flex align-items-center gap-2\">
                                    <iconify-icon icon=\"solar:pie-chart-2-bold-duotone\"></iconify-icon>
                                    <span>Aperçu des Signalements</span>
                                </h5>
                                <div class=\"mt-4\">
                                    <!-- Content will be loaded here -->
                                    {% block content %}{% endblock %}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-4\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title d-flex align-items-center gap-2\">
                                    <iconify-icon icon=\"solar:bell-bing-bold-duotone\"></iconify-icon>
                                    <span>Activités Récentes</span>
                                </h5>
                                <div class=\"activity-list mt-4\">
                                    <!-- Activity items will go here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endblock %}
            </div>
        </div>
    </div>
    
    {% block javascripts %}
        <!-- jQuery -->
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        
        <!-- Bootstrap 5 JS Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        <!-- Custom JS -->
        <script>
            // Toggle sidebar on mobile
            document.addEventListener('DOMContentLoaded', function() {
                const sidebarToggler = document.getElementById('headerCollapse');
                const sidebar = document.querySelector('.left-sidebar');
                const pageWrapper = document.querySelector('.page-wrapper');
                
                sidebarToggler.addEventListener('click', function(e) {
                    e.preventDefault();
                    sidebar.classList.toggle('active');
                    pageWrapper.classList.toggle('sidebar-active');
                });
                
                // Close sidebar when clicking outside on mobile
                document.addEventListener('click', function(e) {
                    if (window.innerWidth < 992) {
                        if (!sidebar.contains(e.target) && !sidebarToggler.contains(e.target)) {
                            sidebar.classList.remove('active');
                            pageWrapper.classList.remove('sidebar-active');
                        }
                    }
                });
                
                // Initialize tooltips
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            });
        </script>
    {% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\user\\Downloads\\HoumtiS\\templates\\base.html.twig");
    }
}
