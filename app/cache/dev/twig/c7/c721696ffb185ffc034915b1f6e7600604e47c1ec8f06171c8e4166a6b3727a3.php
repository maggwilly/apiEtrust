<?php

/* :livraison:new.html.twig */
class __TwigTemplate_25d380ae7e94247f74881697c8a6b7119319a02e58729332f56277836c132402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":livraison:new.html.twig", 1);
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
        $__internal_01cdf020175a2d0d4d48554ef3182edff570f4168ad668754cf1c1d9a179935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cdf020175a2d0d4d48554ef3182edff570f4168ad668754cf1c1d9a179935d->enter($__internal_01cdf020175a2d0d4d48554ef3182edff570f4168ad668754cf1c1d9a179935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":livraison:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cdf020175a2d0d4d48554ef3182edff570f4168ad668754cf1c1d9a179935d->leave($__internal_01cdf020175a2d0d4d48554ef3182edff570f4168ad668754cf1c1d9a179935d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bbe78c7e9fd47576d8647bff194a66bdfdad3b6ab6bbce7cff489519f48d119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbe78c7e9fd47576d8647bff194a66bdfdad3b6ab6bbce7cff489519f48d119->enter($__internal_5bbe78c7e9fd47576d8647bff194a66bdfdad3b6ab6bbce7cff489519f48d119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5bbe78c7e9fd47576d8647bff194a66bdfdad3b6ab6bbce7cff489519f48d119->leave($__internal_5bbe78c7e9fd47576d8647bff194a66bdfdad3b6ab6bbce7cff489519f48d119_prof);

    }

    public function getTemplateName()
    {
        return ":livraison:new.html.twig";
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
", ":livraison:new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/livraison/new.html.twig");
    }
}
