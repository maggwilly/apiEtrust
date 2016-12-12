<?php

/* @App/Produit/new.html.twig */
class __TwigTemplate_a168a5ce7ecde11e872bbe9bbe6bfa0131070e01c82d96c8ece2d053534ddcc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Produit/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_821bfcf7f75b280d5f2d7941c4d65ebbc57955062635cfbed43a200ba1159fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821bfcf7f75b280d5f2d7941c4d65ebbc57955062635cfbed43a200ba1159fa0->enter($__internal_821bfcf7f75b280d5f2d7941c4d65ebbc57955062635cfbed43a200ba1159fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Produit/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821bfcf7f75b280d5f2d7941c4d65ebbc57955062635cfbed43a200ba1159fa0->leave($__internal_821bfcf7f75b280d5f2d7941c4d65ebbc57955062635cfbed43a200ba1159fa0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14fc36b62cc7f1aee3e84df0703461bd086d9ba365551bd9e2fa94649ea5961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14fc36b62cc7f1aee3e84df0703461bd086d9ba365551bd9e2fa94649ea5961->enter($__internal_c14fc36b62cc7f1aee3e84df0703461bd086d9ba365551bd9e2fa94649ea5961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produit creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_c14fc36b62cc7f1aee3e84df0703461bd086d9ba365551bd9e2fa94649ea5961->leave($__internal_c14fc36b62cc7f1aee3e84df0703461bd086d9ba365551bd9e2fa94649ea5961_prof);

    }

    public function getTemplateName()
    {
        return "@App/Produit/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Produit creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('produit') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "@App/Produit/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\Produit\\new.html.twig");
    }
}
