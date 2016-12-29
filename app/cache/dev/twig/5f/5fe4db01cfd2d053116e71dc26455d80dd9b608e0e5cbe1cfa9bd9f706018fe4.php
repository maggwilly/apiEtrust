<?php

/* @App/User/new.html.twig */
class __TwigTemplate_20d679bc76a15247a44591b1dcbe37a027347fd4ea9db648a58118428d12d2b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/User/new.html.twig", 1);
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
        $__internal_ef27c9d1caa8f57b5ace60748b60c8c5eec222bd725008e730ebd19e848d4ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef27c9d1caa8f57b5ace60748b60c8c5eec222bd725008e730ebd19e848d4ea7->enter($__internal_ef27c9d1caa8f57b5ace60748b60c8c5eec222bd725008e730ebd19e848d4ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/User/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef27c9d1caa8f57b5ace60748b60c8c5eec222bd725008e730ebd19e848d4ea7->leave($__internal_ef27c9d1caa8f57b5ace60748b60c8c5eec222bd725008e730ebd19e848d4ea7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dbdc45edfb73644d0a5186d3cb9a6b5d7255ebf1b34753d9519deab7957f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbdc45edfb73644d0a5186d3cb9a6b5d7255ebf1b34753d9519deab7957f62e->enter($__internal_3dbdc45edfb73644d0a5186d3cb9a6b5d7255ebf1b34753d9519deab7957f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_3dbdc45edfb73644d0a5186d3cb9a6b5d7255ebf1b34753d9519deab7957f62e->leave($__internal_3dbdc45edfb73644d0a5186d3cb9a6b5d7255ebf1b34753d9519deab7957f62e_prof);

    }

    public function getTemplateName()
    {
        return "@App/User/new.html.twig";
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
    <h1>User creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('user') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "@App/User/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\User\\new.html.twig");
    }
}
