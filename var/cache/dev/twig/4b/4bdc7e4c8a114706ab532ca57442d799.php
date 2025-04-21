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
class __TwigTemplate_f1ea3fca252e144799feb2f29fe79221 extends Template
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
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/seodashlogo.png"), "html", null, true);
        yield "\"> <!-- Logo comme favicon -->
        
        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "    </head>
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
      <!-- Sidebar scroll-->
      <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
          <a href=\"./index.html\" class=\"text-nowrap logo-img\">
            <img src=\"../assets/images/logos/logo-light.svg\" alt=\"\" />
          </a>
          <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
            <i class=\"ti ti-x fs-8\"></i>
          </div>
        </div>
         <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
          <ul id=\"sidebarnav\">
            <li class=\"nav-small-cap\">
              <i class=\"ti ti-dots nav-small-cap-icon fs-6\"></i>
              <span class=\"hide-menu\">Home</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/signalement\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:home-smile-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">liste des signalement</span>
              </a>
            </li>
             <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/reponse\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:home-smile-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">liste des reponse</span>
              </a>
            </li>
            
            <li class=\"nav-small-cap\">
              <i class=\"ti ti-dots nav-small-cap-icon fs-6\"></i>
              <span class=\"hide-menu\">UI COMPONENTS</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/signalement/new\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:layers-minimalistic-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Signalement</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/reponse/new\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:danger-circle-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Reponse</span>
              </a>
            </li>
            
            
            
            <li class=\"nav-small-cap\">
              <iconify-icon icon=\"solar:menu-dots-linear\" class=\"nav-small-cap-icon fs-6\" class=\"fs-6\"></iconify-icon>
              <span class=\"hide-menu\">AUTH</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./authentication-login.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:login-3-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Login</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./authentication-register.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:user-plus-rounded-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Register</span>
              </a>
            </li>
            <li class=\"nav-small-cap\">
              <iconify-icon icon=\"solar:menu-dots-linear\" class=\"nav-small-cap-icon fs-4\" class=\"fs-6\"></iconify-icon>
              <span class=\"hide-menu\">EXTRA</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./icon-tabler.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:sticker-smile-circle-2-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Icons</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./sample-page.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:planet-3-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class=\"unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3\"> 
            <div class=\"d-flex\">
              <div class=\"unlimited-access-title me-3\">
                <h6 class=\"fw-semibold fs-4 mb-6 text-dark w-75\">Upgrade to pro</h6>
                <a href=\"#\" target=\"_blank\"
                  class=\"btn btn-primary fs-2 fw-semibold lh-sm\">Buy Pro</a>
              </div>
              <div class=\"unlimited-access-img\">
                <img src=\"../assets/images/backgrounds/rocket.png\" alt=\"\" class=\"img-fluid\">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <body>
 <!--  Body Wrapper -->
 
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    
    <!--  Main wrapper -->

<div class=\"body-wrapper\">
      <!--  Header Start -->
      <header class=\"app-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
              <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                <i class=\"ti ti-menu-2\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                <i class=\"ti ti-bell-ringing\"></i>
                <div class=\"notification bg-primary rounded-circle\"></div>
              </a>
            </li>
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
              <a href=\"#\" target=\"_blank\"
                class=\"btn btn-primary me-2\"><span class=\"d-none d-md-block\">Check Pro Version</span> <span class=\"d-block d-md-none\">Pro</span></a>
              <a href=\"#\" target=\"_blank\"
                class=\"btn btn-success\"><span class=\"d-none d-md-block\">Download Free </span> <span class=\"d-block d-md-none\">Free</span></a>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\">
                  <img src=\"../assets/images/profile/user-1.jpg\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                  <div class=\"message-body\">
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-user fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Profile</p>
                    </a>
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-mail fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Account</p>
                    </a>
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-list-check fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Task</p>
                    </a>
                    <a href=\"./authentication-login.html\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title d-flex align-items-center gap-2 mb-4\">
                           
  <script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
  <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../assets/libs/apexcharts/dist/apexcharts.min.js\"></script>
  <script src=\"../assets/libs/simplebar/dist/simplebar.js\"></script>
  <script src=\"../assets/js/sidebarmenu.js\"></script>
  <script src=\"../assets/js/app.min.js\"></script>
  <script src=\"../assets/js/dashboard.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js\"></script>

        ";
        // line 208
        yield "        <header>
            <!-- Logo principal -->
            <img src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/logo-light.svg"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\">
        </header>

        ";
        // line 213
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 226
        yield "
        ";
        // line 227
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 232
        yield "
        <footer>
            <!-- Logo de pied de page -->
            <img src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos/seodashlogo.png"), "html", null, true);
        yield "\" alt=\"Logo SEO Dash\" width=\"100\">
        </footer>
    </body>
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
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.min.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 213
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

        // line 214
        yield "            <!-- Exemple d'images dynamiques -->
            <section class=\"hero\" style=\"background-image: url('";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/backgrounds/rocket.png"), "html", null, true);
        yield "')\">
                <h1>Bienvenue sur notre plateforme</h1>
            </section>

           
            <!-- Profils utilisateurs -->
            <div class=\"team\">
                <img src=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-1.jpg"), "html", null, true);
        yield "\" alt=\"Membre 1\" class=\"rounded-circle\">
                <img src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/profile/user-2.jpg"), "html", null, true);
        yield "\" alt=\"Membre 2\" class=\"rounded-circle\">
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 227
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

        // line 228
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
        yield "\"></script>
            ";
        // line 230
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
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
        return array (  423 => 230,  419 => 229,  414 => 228,  401 => 227,  387 => 223,  383 => 222,  373 => 215,  370 => 214,  357 => 213,  344 => 11,  339 => 10,  326 => 9,  303 => 6,  288 => 235,  283 => 232,  281 => 227,  278 => 226,  276 => 213,  270 => 210,  266 => 208,  70 => 13,  68 => 9,  63 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('images/logos/seodashlogo.png') }}\"> <!-- Logo comme favicon -->
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.min.css') }}\">
        {% endblock %}
    </head>
    <!-- Sidebar Start -->
    <aside class=\"left-sidebar\">
      <!-- Sidebar scroll-->
      <div>
        <div class=\"brand-logo d-flex align-items-center justify-content-between\">
          <a href=\"./index.html\" class=\"text-nowrap logo-img\">
            <img src=\"../assets/images/logos/logo-light.svg\" alt=\"\" />
          </a>
          <div class=\"close-btn d-xl-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
            <i class=\"ti ti-x fs-8\"></i>
          </div>
        </div>
         <!-- Sidebar navigation-->
        <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar=\"\">
          <ul id=\"sidebarnav\">
            <li class=\"nav-small-cap\">
              <i class=\"ti ti-dots nav-small-cap-icon fs-6\"></i>
              <span class=\"hide-menu\">Home</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/signalement\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:home-smile-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">liste des signalement</span>
              </a>
            </li>
             <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/reponse\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:home-smile-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">liste des reponse</span>
              </a>
            </li>
            
            <li class=\"nav-small-cap\">
              <i class=\"ti ti-dots nav-small-cap-icon fs-6\"></i>
              <span class=\"hide-menu\">UI COMPONENTS</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/signalement/new\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:layers-minimalistic-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Signalement</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"http://127.0.0.1:8000/reponse/new\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:danger-circle-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Reponse</span>
              </a>
            </li>
            
            
            
            <li class=\"nav-small-cap\">
              <iconify-icon icon=\"solar:menu-dots-linear\" class=\"nav-small-cap-icon fs-6\" class=\"fs-6\"></iconify-icon>
              <span class=\"hide-menu\">AUTH</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./authentication-login.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:login-3-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Login</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./authentication-register.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:user-plus-rounded-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Register</span>
              </a>
            </li>
            <li class=\"nav-small-cap\">
              <iconify-icon icon=\"solar:menu-dots-linear\" class=\"nav-small-cap-icon fs-4\" class=\"fs-6\"></iconify-icon>
              <span class=\"hide-menu\">EXTRA</span>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./icon-tabler.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:sticker-smile-circle-2-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Icons</span>
              </a>
            </li>
            <li class=\"sidebar-item\">
              <a class=\"sidebar-link\" href=\"./sample-page.html\" aria-expanded=\"false\">
                <span>
                  <iconify-icon icon=\"solar:planet-3-bold-duotone\" class=\"fs-6\"></iconify-icon>
                </span>
                <span class=\"hide-menu\">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class=\"unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3\"> 
            <div class=\"d-flex\">
              <div class=\"unlimited-access-title me-3\">
                <h6 class=\"fw-semibold fs-4 mb-6 text-dark w-75\">Upgrade to pro</h6>
                <a href=\"#\" target=\"_blank\"
                  class=\"btn btn-primary fs-2 fw-semibold lh-sm\">Buy Pro</a>
              </div>
              <div class=\"unlimited-access-img\">
                <img src=\"../assets/images/backgrounds/rocket.png\" alt=\"\" class=\"img-fluid\">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <body>
 <!--  Body Wrapper -->
 
  <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
    data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    
    <!--  Main wrapper -->

<div class=\"body-wrapper\">
      <!--  Header Start -->
      <header class=\"app-header\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
              <a class=\"nav-link sidebartoggler nav-icon-hover\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                <i class=\"ti ti-menu-2\"></i>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\">
                <i class=\"ti ti-bell-ringing\"></i>
                <div class=\"notification bg-primary rounded-circle\"></div>
              </a>
            </li>
          </ul>
          <div class=\"navbar-collapse justify-content-end px-0\" id=\"navbarNav\">
            <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-end\">
              <a href=\"#\" target=\"_blank\"
                class=\"btn btn-primary me-2\"><span class=\"d-none d-md-block\">Check Pro Version</span> <span class=\"d-block d-md-none\">Pro</span></a>
              <a href=\"#\" target=\"_blank\"
                class=\"btn btn-success\"><span class=\"d-none d-md-block\">Download Free </span> <span class=\"d-block d-md-none\">Free</span></a>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-icon-hover\" href=\"javascript:void(0)\" id=\"drop2\" data-bs-toggle=\"dropdown\"
                  aria-expanded=\"false\">
                  <img src=\"../assets/images/profile/user-1.jpg\" alt=\"\" width=\"35\" height=\"35\" class=\"rounded-circle\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop2\">
                  <div class=\"message-body\">
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-user fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Profile</p>
                    </a>
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-mail fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Account</p>
                    </a>
                    <a href=\"javascript:void(0)\" class=\"d-flex align-items-center gap-2 dropdown-item\">
                      <i class=\"ti ti-list-check fs-6\"></i>
                      <p class=\"mb-0 fs-3\">My Task</p>
                    </a>
                    <a href=\"./authentication-login.html\" class=\"btn btn-outline-primary mx-3 mt-2 d-block\">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title d-flex align-items-center gap-2 mb-4\">
                           
  <script src=\"../assets/libs/jquery/dist/jquery.min.js\"></script>
  <script src=\"../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../assets/libs/apexcharts/dist/apexcharts.min.js\"></script>
  <script src=\"../assets/libs/simplebar/dist/simplebar.js\"></script>
  <script src=\"../assets/js/sidebarmenu.js\"></script>
  <script src=\"../assets/js/app.min.js\"></script>
  <script src=\"../assets/js/dashboard.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js\"></script>

        {# Exemple d'utilisation des images dans le body #}
        <header>
            <!-- Logo principal -->
            <img src=\"{{ asset('images/logos/logo-light.svg') }}\" alt=\"Logo\" class=\"logo\">
        </header>

        {% block body %}
            <!-- Exemple d'images dynamiques -->
            <section class=\"hero\" style=\"background-image: url('{{ asset('images/backgrounds/rocket.png') }}')\">
                <h1>Bienvenue sur notre plateforme</h1>
            </section>

           
            <!-- Profils utilisateurs -->
            <div class=\"team\">
                <img src=\"{{ asset('images/profile/user-1.jpg') }}\" alt=\"Membre 1\" class=\"rounded-circle\">
                <img src=\"{{ asset('images/profile/user-2.jpg') }}\" alt=\"Membre 2\" class=\"rounded-circle\">
            </div>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/app.min.js') }}\"></script>
            <script src=\"{{ asset('js/dashboard.js') }}\"></script>
            {{ importmap('app') }}
        {% endblock %}

        <footer>
            <!-- Logo de pied de page -->
            <img src=\"{{ asset('images/logos/seodashlogo.png') }}\" alt=\"Logo SEO Dash\" width=\"100\">
        </footer>
    </body>
</html>", "base.html.twig", "C:\\Users\\LENOVO\\Downloads\\HoumtiS\\templates\\base.html.twig");
    }
}
