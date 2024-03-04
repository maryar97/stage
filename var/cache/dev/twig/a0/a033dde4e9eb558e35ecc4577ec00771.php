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

/* bp/index.html.twig */
class __TwigTemplate_b89bcdebc295e891201d09a97fb45822 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bp/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bp/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bp/index.html.twig", 1);
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

        echo "AMIENSBC BOXE PRO ";
        
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
        echo "<div class=\"container\">
    <div class=\"row align-items-start \">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formes2"]) || array_key_exists("formes2", $context) ? $context["formes2"] : (function () { throw new RuntimeError('Variable "formes2" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forme2"]) {
            // line 9
            echo "<div class=\"card mb-3 \" with=\"auto\">
     <div class=\"card-body\"> <div class=\"row align-items-center\">
    
        <img src=\"/image/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme2"], "photo", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
       <div class=\"col-4\" ></div>
   
      
          <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme2"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
          <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme2"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
          <p class=\"card-text\">Prix :";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme2"], "prix", [], "any", false, false, false, 18), "html", null, true);
            echo "€</p>
          <button type=\"button\" class=\"btn btn-light\" li class=\"nav-item\">
                    ";
            // line 21
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["forme2"], "prix", [], "any", false, false, false, 21) > 0)) {
                // line 22
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["forme2"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                        Prendre ma licence
                    </a> 
                ";
            }
            // line 26
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["forme2"], "prix", [], "any", false, false, false, 26) < 0)) {
                // line 27
                echo "                    <p class=\"text-warning\">
                        Temporairement en rupture de stock
                    </p>
                ";
            }
            // line 30
            echo "    
      
      </div>
    </div>
  </div> </div>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forme2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bp/index.html.twig";
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
        return array (  141 => 30,  135 => 27,  132 => 26,  124 => 22,  121 => 21,  116 => 18,  112 => 17,  108 => 16,  101 => 12,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AMIENSBC BOXE PRO {% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row align-items-start \">
        {% for forme2 in formes2 %}
<div class=\"card mb-3 \" with=\"auto\">
     <div class=\"card-body\"> <div class=\"row align-items-center\">
    
        <img src=\"/image/{{forme2.photo}}\" class=\"img-fluid rounded-start\" alt=\"...\">
       <div class=\"col-4\" ></div>
   
      
          <h5 class=\"card-title\">{{ forme2.nom }}</h5>
          <p class=\"card-text\">{{ forme2.description }}</p>
          <p class=\"card-text\">Prix :{{ forme2.prix }}€</p>
          <button type=\"button\" class=\"btn btn-light\" li class=\"nav-item\">
                    {# <a class=\"nav-link\" href=\"{{path('cart_add'}}\">prendre ma licence </a></button> #}
                    {% if forme2.prix > 0 %}
\t\t\t\t\t<a href=\"{{path('cart_add',{'id':forme2.id})}}\" class=\"btn btn-danger\">
                        Prendre ma licence
                    </a> 
                {% endif %}
                {% if forme2.prix < 0  %}
                    <p class=\"text-warning\">
                        Temporairement en rupture de stock
                    </p>
                {% endif %}    
      
      </div>
    </div>
  </div> </div>

    </div>
{% endfor %}
{% endblock %}
", "bp/index.html.twig", "/home/mary/Documents/stage/templates/bp/index.html.twig");
    }
}
