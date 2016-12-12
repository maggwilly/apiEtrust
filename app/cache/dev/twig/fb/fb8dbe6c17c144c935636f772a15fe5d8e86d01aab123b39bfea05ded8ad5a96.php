<?php

/* livraison/new.html.twig */
class __TwigTemplate_05dbd431f9a939348ff2363f70d53dda3a559dca964eceedba6dd4d76f2eee59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "livraison/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7a047ba5bc0c697a4b33f3aa6a607988d5c5b0d047e6f6ff7c596e646901d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a047ba5bc0c697a4b33f3aa6a607988d5c5b0d047e6f6ff7c596e646901d40->enter($__internal_b7a047ba5bc0c697a4b33f3aa6a607988d5c5b0d047e6f6ff7c596e646901d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "livraison/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7a047ba5bc0c697a4b33f3aa6a607988d5c5b0d047e6f6ff7c596e646901d40->leave($__internal_b7a047ba5bc0c697a4b33f3aa6a607988d5c5b0d047e6f6ff7c596e646901d40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e757d09a3e51cb0dd51af69c4d28dbc9580e630dc837f45b55ee38742f27e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e757d09a3e51cb0dd51af69c4d28dbc9580e630dc837f45b55ee38742f27e7->enter($__internal_d9e757d09a3e51cb0dd51af69c4d28dbc9580e630dc837f45b55ee38742f27e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Livraison creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d9e757d09a3e51cb0dd51af69c4d28dbc9580e630dc837f45b55ee38742f27e7->leave($__internal_d9e757d09a3e51cb0dd51af69c4d28dbc9580e630dc837f45b55ee38742f27e7_prof);

    }

    public function getTemplateName()
    {
        return "livraison/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Livraison creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('livraison_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "livraison/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\livraison\\new.html.twig");
    }
}
