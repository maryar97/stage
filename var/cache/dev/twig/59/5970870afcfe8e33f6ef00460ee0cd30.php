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

/* formedeboxe/index.html.twig */
class __TwigTemplate_9f48d8c56007654008c58ade5c5a9efe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formedeboxe/index.html.twig", 1);
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

        echo "AMIENSBC FORME DE BOXE ";
        
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
        echo "        <div class=\"container text-center mb-4\">
            <div class=\"row\">
                <div class=\"col\">

                    <h1 class=\"mb-5\">forme de boxe</h1>
                </div>
            </div>
        </div>



<div class=\"container\">
    



                 
                  <div class=\"row  align-items-start\">
                      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formes"]) || array_key_exists("formes", $context) ? $context["formes"] : (function () { throw new RuntimeError('Variable "formes" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forme"]) {
            // line 25
            echo "                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme"], "photo", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bea");
            echo "\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formes1"]) || array_key_exists("formes1", $context) ? $context["formes1"] : (function () { throw new RuntimeError('Variable "formes1" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forme1"]) {
            // line 40
            echo "                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme1"], "photo", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme1"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ba");
            echo "\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forme1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                     
                      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formes2"]) || array_key_exists("formes2", $context) ? $context["formes2"] : (function () { throw new RuntimeError('Variable "formes2" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forme2"]) {
            // line 56
            echo "                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme2"], "photo", [], "any", false, false, false, 58), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme2"], "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bp");
            echo "\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forme2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                     
                      ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formes3"]) || array_key_exists("formes3", $context) ? $context["formes3"] : (function () { throw new RuntimeError('Variable "formes3" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forme3"]) {
            // line 72
            echo "                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme3"], "photo", [], "any", false, false, false, 74), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forme3"], "nom", [], "any", false, false, false, 76), "html", null, true);
            echo "</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aeroboxe");
            echo "\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forme3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "formedeboxe/index.html.twig";
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
        return array (  243 => 85,  230 => 78,  225 => 76,  220 => 74,  216 => 72,  212 => 71,  208 => 69,  195 => 62,  190 => 60,  185 => 58,  181 => 56,  177 => 55,  173 => 53,  160 => 46,  155 => 44,  150 => 42,  146 => 40,  142 => 39,  139 => 38,  126 => 31,  121 => 29,  116 => 27,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}AMIENSBC FORME DE BOXE {% endblock %}

{% block body %}
        <div class=\"container text-center mb-4\">
            <div class=\"row\">
                <div class=\"col\">

                    <h1 class=\"mb-5\">forme de boxe</h1>
                </div>
            </div>
        </div>



<div class=\"container\">
    



                 
                  <div class=\"row  align-items-start\">
                      {% for forme in formes %}
                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/{{ forme.photo }}\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">{{ forme.nom}}</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"{{path(\"app_bea\")}}\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      {% endfor %}

                      {% for forme1 in formes1 %}
                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/{{ forme1.photo }}\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">{{ forme1.nom}}</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"{{path(\"app_ba\")}}\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      {% endfor %}

                     
                      {% for forme2 in formes2 %}
                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/{{ forme2.photo }}\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">{{ forme2.nom}}</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"{{path(\"app_bp\")}}\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      {% endfor %}

                     
                      {% for forme3 in formes3 %}
                      <div class=\"col\">
                          <div class=\"card\" style=\"width: 18rem;\">
                              <img src=\"/image/{{ forme3.photo }}\" class=\"card-img-top\" alt=\"...\">
                              <div class=\"card-body\">
                                  <h2 class=\"card-title\">{{ forme3.nom}}</h2>
                                  <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
                                      <a href=\"{{path(\"app_aeroboxe\")}}\" class=\"btn btn-light\">detail</a>
                                      <div class=\"btn-group\" role=\"group\">
                                      </div>                                </div>
                              </div>
                          </div>
                      </div>
                      {% endfor %}


{% endblock %}
", "formedeboxe/index.html.twig", "/home/mary/Documents/stage/templates/formedeboxe/index.html.twig");
    }
}
