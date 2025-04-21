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

/* signalement/show.html.twig */
class __TwigTemplate_8ba5905b2ff24320daba1d13811a3778 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signalement/show.html.twig"));

        // line 1
        yield "#[Route('/{id_signalement}', name: 'app_signalement_show', methods: ['GET'])]
public function show(Signalement \$signalement): Response
{
    \$image = null;
    if (\$signalement->getImage()) {
        \$imageContent = stream_get_contents(\$signalement->getImage());
        rewind(\$signalement->getImage());
        \$image = base64_encode(\$imageContent);
    }

    return \$this->render('signalement/show.html.twig', [
        'signalement' => \$signalement,
        'image' => \$image,
    ]);
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "signalement/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("#[Route('/{id_signalement}', name: 'app_signalement_show', methods: ['GET'])]
public function show(Signalement \$signalement): Response
{
    \$image = null;
    if (\$signalement->getImage()) {
        \$imageContent = stream_get_contents(\$signalement->getImage());
        rewind(\$signalement->getImage());
        \$image = base64_encode(\$imageContent);
    }

    return \$this->render('signalement/show.html.twig', [
        'signalement' => \$signalement,
        'image' => \$image,
    ]);
}", "signalement/show.html.twig", "C:\\Users\\user\\Downloads\\HoumtiS\\templates\\signalement\\show.html.twig");
    }
}
