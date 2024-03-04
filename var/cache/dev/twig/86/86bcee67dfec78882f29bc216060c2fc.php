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

/* cart/index.html.twig */
class __TwigTemplate_f9a042f7adea3ce87aebde3a4c0ecaf6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier";
        
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
        echo "<div class=\"container text-center\">
    <div class=\"row\">
        <div class=\"col\">

<main class=\"page-wrapper\">
    ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "    <div class=\"container position-relative  pt-5 pb-lg-5 pb-md-4 pb-2\">
        <div class=\"row\">
            <div class=\"col-lg-12  pt-1\">
                <h2>Mon panier</h2>
                    ";
            // line 16
            $context["total"] = 0;
            echo "  ";
            // line 17
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "                        ";
                $context["formedeboxe"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18);
                // line 19
                echo "                        ";
                $context["description"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 19), "description", [], "any", false, false, false, 19);
                // line 20
                echo "                        ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 20, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 20), "prix", [], "any", false, false, false, 20));
                echo "  ";
                // line 21
                echo "                        <div class=\"container text-center\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"d-sm-flex align-items-center border-top py-4\">
                                        <div class=\"w-100 pt-1 ps-sm-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"card\" style=\"width: 18rem;\">
                                                    <h3 class=\"h5 mb-2\">";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "</h3>  ";
                // line 29
                echo "                                                    <h4 class=\"h5 mb-2\">";
                echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "</h4>  ";
                // line 30
                echo "                                                    <h4 class=\"h5 mb-2\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 30), "prix", [], "any", false, false, false, 30), "html", null, true);
                echo "€</h4>
                                                    <img src=\"/image/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 31), "photo", [], "any", false, false, false, 31), "html", null, true);
                echo "\" alt=\"\">
                                                </div>
                                                <div class=\"text-end ms-auto\">
                                                    <div class=\"fs-5 mb-2\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-4\">
                                        <div class=\"ms-3 d-flex col-xl-2 col-lg-3 col-sm-4 col-6\">
                                        </div>
                                        <div class=\"nav d-flex justify-content-end col-xl-9 col-lg-8 col-sm-7 col-6\">
                                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"nav-link\" data-bs-toggle=\"tooltip\" title=\"Remove\">  ";
                // line 45
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z\" />
                                                    <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z\" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
                    <div class=\"d-flex align-items-center justify-content-between border-top fs-xl pt-4\">Total:<span class=\"fs-3 fw-semibold text-dark ms-2\">";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 57, $this->source); })()), 2, ",", "."), "html", null, true);
            echo "€</span></div>
                    <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_create");
            echo "\" class=\"btn btn-lg btn-dark w-100 w-sm-auto mt-4\">Valider mon panier</a>
                </div>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 64
            echo "    <div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
        <div class=\"text-center pt-4 mt-lg-2\">
            <h1 class=\"display-5\">Votre panier est vide</h1>
            ";
            // line 68
            echo "        </div>
    </div>
    ";
        }
        // line 71
        echo "</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  203 => 71,  198 => 68,  193 => 64,  184 => 58,  180 => 57,  177 => 56,  161 => 45,  158 => 44,  142 => 31,  137 => 30,  133 => 29,  130 => 28,  121 => 21,  117 => 20,  114 => 19,  111 => 18,  106 => 17,  103 => 16,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block body %}
<div class=\"container text-center\">
    <div class=\"row\">
        <div class=\"col\">

<main class=\"page-wrapper\">
    {% if cart|length > 0 %}
    <div class=\"container position-relative  pt-5 pb-lg-5 pb-md-4 pb-2\">
        <div class=\"row\">
            <div class=\"col-lg-12  pt-1\">
                <h2>Mon panier</h2>
                    {% set total = 0 %}  {# Initialisation de total à 0 #}
                    {% for element in cart %}
                        {% set formedeboxe = element.formedeboxe.nom %}
                        {% set description = element.formedeboxe.description %}
                        {% set total = total + element.formedeboxe.prix %}  {# Calcul du total #}
                        <div class=\"container text-center\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"d-sm-flex align-items-center border-top py-4\">
                                        <div class=\"w-100 pt-1 ps-sm-4\">
                                            <div class=\"d-flex\">
                                                <div class=\"card\" style=\"width: 18rem;\">
                                                    <h3 class=\"h5 mb-2\">{{ formedeboxe }}</h3>  {# Utilisation de formedeboxe plutôt que element.formedeboxe.nom #}
                                                    <h4 class=\"h5 mb-2\">{{ description }}</h4>  {# Utilisation de description plutôt que element.formedeboxe.description #}
                                                    <h4 class=\"h5 mb-2\">{{ element.formedeboxe.prix }}€</h4>
                                                    <img src=\"/image/{{ element.formedeboxe.photo }}\" alt=\"\">
                                                </div>
                                                <div class=\"text-end ms-auto\">
                                                    <div class=\"fs-5 mb-2\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-4\">
                                        <div class=\"ms-3 d-flex col-xl-2 col-lg-3 col-sm-4 col-6\">
                                        </div>
                                        <div class=\"nav d-flex justify-content-end col-xl-9 col-lg-8 col-sm-7 col-6\">
                                            <a href=\"{{ path('cart_remove', {'id': element.formedeboxe.id}) }}\" class=\"nav-link\" data-bs-toggle=\"tooltip\" title=\"Remove\">  {# Correction de la syntaxe de path #}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">
                                                    <path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z\" />
                                                    <path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z\" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    <div class=\"d-flex align-items-center justify-content-between border-top fs-xl pt-4\">Total:<span class=\"fs-3 fw-semibold text-dark ms-2\">{{ total|number_format(2, ',', '.') }}€</span></div>
                    <a href=\"{{path('order_create') }}\" class=\"btn btn-lg btn-dark w-100 w-sm-auto mt-4\">Valider mon panier</a>
                </div>
            </div>
        </div>
    </div>
    {% else %}
    <div class=\"container d-flex flex-column justify-content-center min-vh-100 py-5\">
        <div class=\"text-center pt-4 mt-lg-2\">
            <h1 class=\"display-5\">Votre panier est vide</h1>
            {# <a href=\"#\" class=\"btn btn-lg btn-dark\">commandez</a> #}
        </div>
    </div>
    {% endif %}
</main>
{% endblock %}
", "cart/index.html.twig", "/home/mary/Documents/stage/templates/cart/index.html.twig");
    }
}
