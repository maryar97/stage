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

/* horaire/index.html.twig */
class __TwigTemplate_d13aa1bb446f632cb0b7271f90a37780 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "horaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "horaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "horaire/index.html.twig", 1);
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

        echo "AMIENS BC  horaire";
        
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
        echo "

<div class=\"horaire text-color-white\">
    <div id=\"carouselExampleInterval\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\" data-bs-interval=\"10000\">
            <H1>BOXE EDUCATIVE</H1>
            <H2>BOXE LOISIR</H2>
            <H6> DU LUNDI AU VENDREDI DE 18H À 19H30</H6>
            <H5> MERCREDI 16H/18H samedi 10H/12H</H5>
            <h6>tarif:150€</h6>

            <img src=\"image/logoa.png\" class=\"d-block w-10\" alt=\"...\"  width=\"700px\"  >
          </div>
          <div class=\"carousel-item\" data-bs-interval=\"2000\">
            <H1>BOXE Amateur</H1>
            <H5> DU LUNDI AU VENDREDI DE 19H30 À 21H00</H5>
            <h6>tarif:150€</h6>
            <img src=\"image/logob.png\" class=\"d-block w-10\" alt=\"...\" width=\"700px\">
          </div>
          <div class=\"carousel-item\">
            <H1>BOXE PROFESSIONNELLE</H1>
            <H5> DU LUNDI AU VENDREDI DE 19H30 À 21H00</H5>
            <h6>tarif selon le groupe </h6>
            <img src=\"image/logodc.png\" class=\"d-block w-10\" alt=\"...\" width=\"700px\">
          </div>
          <div class=\"carousel-item\">
            <H1>AEROBOXE</H1>
            <H5> LUNDI 19H/21H  mercredi 19H/21H  SAMEDI 10H/12H</H5>
            <h6>tarif:150€  une seance par semaine</h6>
            <img src=\"image/logod.png\"class=\"d-block w-10\" alt=\"...\" width=\"700px\">
          </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Next</span>
        </button>
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
        return "horaire/index.html.twig";
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

{% block title %}AMIENS BC  horaire{% endblock %}

{% block body %}


<div class=\"horaire text-color-white\">
    <div id=\"carouselExampleInterval\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\" data-bs-interval=\"10000\">
            <H1>BOXE EDUCATIVE</H1>
            <H2>BOXE LOISIR</H2>
            <H6> DU LUNDI AU VENDREDI DE 18H À 19H30</H6>
            <H5> MERCREDI 16H/18H samedi 10H/12H</H5>
            <h6>tarif:150€</h6>

            <img src=\"image/logoa.png\" class=\"d-block w-10\" alt=\"...\"  width=\"700px\"  >
          </div>
          <div class=\"carousel-item\" data-bs-interval=\"2000\">
            <H1>BOXE Amateur</H1>
            <H5> DU LUNDI AU VENDREDI DE 19H30 À 21H00</H5>
            <h6>tarif:150€</h6>
            <img src=\"image/logob.png\" class=\"d-block w-10\" alt=\"...\" width=\"700px\">
          </div>
          <div class=\"carousel-item\">
            <H1>BOXE PROFESSIONNELLE</H1>
            <H5> DU LUNDI AU VENDREDI DE 19H30 À 21H00</H5>
            <h6>tarif selon le groupe </h6>
            <img src=\"image/logodc.png\" class=\"d-block w-10\" alt=\"...\" width=\"700px\">
          </div>
          <div class=\"carousel-item\">
            <H1>AEROBOXE</H1>
            <H5> LUNDI 19H/21H  mercredi 19H/21H  SAMEDI 10H/12H</H5>
            <h6>tarif:150€  une seance par semaine</h6>
            <img src=\"image/logod.png\"class=\"d-block w-10\" alt=\"...\" width=\"700px\">
          </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"visually-hidden\">Next</span>
        </button>
      </div>
</div>
{% endblock %}
", "horaire/index.html.twig", "/home/mary/Documents/stage/templates/horaire/index.html.twig");
    }
}
