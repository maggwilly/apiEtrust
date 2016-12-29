<?php

/* @App/CommandeClient/edit.html.twig */
class __TwigTemplate_3a0dcacc6f35bbd0a793456a6d635309873630279755da8a4cb0c18bb9eda4db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/CommandeClient/edit.html.twig", 1);
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
        $__internal_99cbf4afadeb31ffe7e6c233bac320a5708807b4a4caefdc2e81004ea2dc7d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cbf4afadeb31ffe7e6c233bac320a5708807b4a4caefdc2e81004ea2dc7d24->enter($__internal_99cbf4afadeb31ffe7e6c233bac320a5708807b4a4caefdc2e81004ea2dc7d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/CommandeClient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99cbf4afadeb31ffe7e6c233bac320a5708807b4a4caefdc2e81004ea2dc7d24->leave($__internal_99cbf4afadeb31ffe7e6c233bac320a5708807b4a4caefdc2e81004ea2dc7d24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac4f2da77af02c484d35e8d2a7e8ec1bfc91e4df2dc188c2ebf24e8d3db12ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac4f2da77af02c484d35e8d2a7e8ec1bfc91e4df2dc188c2ebf24e8d3db12ee->enter($__internal_4ac4f2da77af02c484d35e8d2a7e8ec1bfc91e4df2dc188c2ebf24e8d3db12ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>CommandeClient edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_4ac4f2da77af02c484d35e8d2a7e8ec1bfc91e4df2dc188c2ebf24e8d3db12ee->leave($__internal_4ac4f2da77af02c484d35e8d2a7e8ec1bfc91e4df2dc188c2ebf24e8d3db12ee_prof);

    }

    public function getTemplateName()
    {
        return "@App/CommandeClient/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>CommandeClient edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('commande_client') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@App/CommandeClient/edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\CommandeClient\\edit.html.twig");
    }
}
