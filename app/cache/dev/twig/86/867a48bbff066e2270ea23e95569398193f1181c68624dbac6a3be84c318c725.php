<?php

/* @App/CommandeClient/new.html.twig */
class __TwigTemplate_1f248c75701622528166afa5bd1f93d2302c377373cf565e934468035e8a3112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/CommandeClient/new.html.twig", 1);
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
        $__internal_ff41a84bf401f782bb8cb1a4b62ee5a91c2d7e473a61b5379134a87be7bd169c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff41a84bf401f782bb8cb1a4b62ee5a91c2d7e473a61b5379134a87be7bd169c->enter($__internal_ff41a84bf401f782bb8cb1a4b62ee5a91c2d7e473a61b5379134a87be7bd169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/CommandeClient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff41a84bf401f782bb8cb1a4b62ee5a91c2d7e473a61b5379134a87be7bd169c->leave($__internal_ff41a84bf401f782bb8cb1a4b62ee5a91c2d7e473a61b5379134a87be7bd169c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad4d9add4ce260a6798fac6bc77487eea7182d2db701bc8a3e6325dc2fa9f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad4d9add4ce260a6798fac6bc77487eea7182d2db701bc8a3e6325dc2fa9f19->enter($__internal_1ad4d9add4ce260a6798fac6bc77487eea7182d2db701bc8a3e6325dc2fa9f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_client");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_1ad4d9add4ce260a6798fac6bc77487eea7182d2db701bc8a3e6325dc2fa9f19->leave($__internal_1ad4d9add4ce260a6798fac6bc77487eea7182d2db701bc8a3e6325dc2fa9f19_prof);

    }

    public function getTemplateName()
    {
        return "@App/CommandeClient/new.html.twig";
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
    <h1>CommandeClient creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('commande_client') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "@App/CommandeClient/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\CommandeClient\\new.html.twig");
    }
}
