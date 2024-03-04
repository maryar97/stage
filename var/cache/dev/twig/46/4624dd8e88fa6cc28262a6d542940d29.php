<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* club/index.html.twig */
class __TwigTemplate_2b13aa11078e241cda425c8140fa483f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AMIENS BC   club";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"table\">
    <h1>bureau amiens boxing club</h1>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card cyan\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Présidente</h2>
                    <p class=\"card-text\">Vnessa FOUACHE</p>
                </div>
            </div>

            <div class=\"card blue mt-4\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Secrétaire</h2>
                    <p class=\"card-text\">Sabine FOUACHE</p>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card red\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Vice-Président</h2>
                    <p class=\"card-text\">Vincent DUFFRENOY</p>
                </div>
            </div>

            <div class=\"card orange mt-4\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Trésorier</h2>
                    <p class=\"card-text\">Thomas HAMIDI</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card orange\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Membre</h2>
                    <p class=\"card-text\">Steffy FOUACHE</p>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card orange\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Membre</h2>
                    <p class=\"card-text\">Lucien DUPONT</p>
                </div>
            </div>

            <div class=\"card orange mt-4\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Cadre Technique</h2>
                    <p class=\"card-text\">Jérome FOUACHE</p>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "club/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AMIENS BC   club{% endblock %}

{% block body %}
<div class=\"table\">
    <h1>bureau amiens boxing club</h1>
</div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card cyan\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Présidente</h2>
                    <p class=\"card-text\">Vnessa FOUACHE</p>
                </div>
            </div>

            <div class=\"card blue mt-4\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Secrétaire</h2>
                    <p class=\"card-text\">Sabine FOUACHE</p>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card red\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Vice-Président</h2>
                    <p class=\"card-text\">Vincent DUFFRENOY</p>
                </div>
            </div>

            <div class=\"card orange mt-4\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Trésorier</h2>
                    <p class=\"card-text\">Thomas HAMIDI</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card orange\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Membre</h2>
                    <p class=\"card-text\">Steffy FOUACHE</p>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"card orange\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Membre</h2>
                    <p class=\"card-text\">Lucien DUPONT</p>
                </div>
            </div>

            <div class=\"card orange mt-4\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">Cadre Technique</h2>
                    <p class=\"card-text\">Jérome FOUACHE</p>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}
", "club/index.html.twig", "/home/mary/Documents/stage/templates/club/index.html.twig");
    }
}
