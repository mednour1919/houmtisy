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

/* User/login.html.twig */
class __TwigTemplate_e4f59171b606e00a9b135357f781cec6 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .auth-container {
            max-width: 450px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
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
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"auth-container\">
            <div class=\"auth-header\">
                <h2>Login</h2>
                <p class=\"text-muted\">Welcome back</p>
            </div>

            ";
        // line 40
        if ((array_key_exists("error", $context) && (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()))) {
            // line 41
            yield "                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 43
        yield "
            <form method=\"post\" action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <div class=\"form-group\">
                    <label for=\"username\" class=\"form-label\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"password\" class=\"form-label\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
                </div>

                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">Login</button>
                </div>
                
                <div class=\"auth-links\">
                    <p>Don't have an account? <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "User/login.html.twig";
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
        return array (  119 => 60,  100 => 44,  97 => 43,  91 => 41,  89 => 40,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .auth-container {
            max-width: 450px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
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
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"auth-container\">
            <div class=\"auth-header\">
                <h2>Login</h2>
                <p class=\"text-muted\">Welcome back</p>
            </div>

            {% if error is defined and error %}
                <div class=\"alert alert-danger\">{{ error }}</div>
            {% endif %}

            <form method=\"post\" action=\"{{ path('app_login') }}\">
                <div class=\"form-group\">
                    <label for=\"username\" class=\"form-label\">Username</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required>
                </div>

                <div class=\"form-group\">
                    <label for=\"password\" class=\"form-label\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
                </div>

                <div class=\"d-grid gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg\">Login</button>
                </div>
                
                <div class=\"auth-links\">
                    <p>Don't have an account? <a href=\"{{ path('app_register') }}\">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>", "User/login.html.twig", "C:\\Users\\ahmed\\Downloads\\Houmti2\\templates\\User\\Login.html.twig");
    }
}
