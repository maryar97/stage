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

/* stripe/index.html.twig */
class __TwigTemplate_e3b460eaaab75b2af063ce36a26db11b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe/index.html.twig", 1);
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

        echo " Payment";
        
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
   <div class=\"justify-content-center col-4\">
        <div class=\"card m-4\">
            <div class=\"card-body\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                    <div style=\"color: green;
                                border: 2px green solid;
                                text-align: center;
                                padding: 5px;margin-bottom: 10px;\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                ";
        $context["total"] = 0;
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formedeboxe"]) {
            // line 20
            echo "                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 20, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 20), "prix", [], "any", false, false, false, 20));
            // line 21
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formedeboxe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
                <form id='checkout-form' method='post'
                      action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 24, $this->source); })()), "reference", [], "any", false, false, false, 24)]), "html", null, true);
        echo "\">
                    <input type='hidden' name='paymentMethod' id='payment-method-id'>

                    <label for=\"card-element\" class=\"mb-5\">Paiement de la commande</label>
                    <br>
                    <div id=\"card-element\" class=\"form-control\"></div>
                    <div id=\"card-errors\" role=\"alert\"></div>

                    <button id='pay-btn' class=\"btn btn-primary mt-3\" type=\"button\"
                            style=\"margin-top: 20px; width: 100%;padding: 7px;\" onclick=\"handlePayment()\">Payer ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "€
                    </button>
                </form> <!-- Fermez la balise form correctement ici -->

            </div>
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var stripe = Stripe(\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var cardErrors = document.getElementById('card-errors');

        function handlePayment() {
            stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
            }).then(function (result) {
                if (result.error) {
                    // Gestion des erreurs de validation de la carte
                    cardErrors.textContent = result.error.message;
                } else {
                    // Ajoutez l'identifiant du moyen de paiement au formulaire
                    document.getElementById('payment-method-id').value = result.paymentMethod.id;

                    // Soumettez le formulaire pour effectuer le paiement
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "stripe/index.html.twig";
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
        return array (  159 => 43,  146 => 33,  134 => 24,  130 => 22,  124 => 21,  121 => 20,  116 => 19,  113 => 18,  104 => 15,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Payment{% endblock %}

{% block body %}

   <div class=\"justify-content-center col-4\">
        <div class=\"card m-4\">
            <div class=\"card-body\">
                {% for message in app.flashes('success') %}
                    <div style=\"color: green;
                                border: 2px green solid;
                                text-align: center;
                                padding: 5px;margin-bottom: 10px;\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% set total = 0 %}
                {% for formedeboxe in recapCart %}
                    {% set total = total + formedeboxe.formedeboxe.prix %}
                {% endfor %}

                <form id='checkout-form' method='post'
                      action=\"{{ path('app_stripe_charge', {'reference': commande.reference}) }}\">
                    <input type='hidden' name='paymentMethod' id='payment-method-id'>

                    <label for=\"card-element\" class=\"mb-5\">Paiement de la commande</label>
                    <br>
                    <div id=\"card-element\" class=\"form-control\"></div>
                    <div id=\"card-errors\" role=\"alert\"></div>

                    <button id='pay-btn' class=\"btn btn-primary mt-3\" type=\"button\"
                            style=\"margin-top: 20px; width: 100%;padding: 7px;\" onclick=\"handlePayment()\">Payer {{ total }}€
                    </button>
                </form> <!-- Fermez la balise form correctement ici -->

            </div>
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var stripe = Stripe(\"{{stripe_key}}\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var cardErrors = document.getElementById('card-errors');

        function handlePayment() {
            stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
            }).then(function (result) {
                if (result.error) {
                    // Gestion des erreurs de validation de la carte
                    cardErrors.textContent = result.error.message;
                } else {
                    // Ajoutez l'identifiant du moyen de paiement au formulaire
                    document.getElementById('payment-method-id').value = result.paymentMethod.id;

                    // Soumettez le formulaire pour effectuer le paiement
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>

{% endblock %}
", "stripe/index.html.twig", "/home/mary/Documents/stage/templates/stripe/index.html.twig");
    }
}
