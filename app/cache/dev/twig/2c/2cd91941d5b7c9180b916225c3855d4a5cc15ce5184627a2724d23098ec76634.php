<?php

/* livraison/edit.html.twig */
class __TwigTemplate_0a95320f105182d4362c80a854efe80c281b43cbc4ea745d0d2514f3c44bd364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "livraison/edit.html.twig", 1);
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
        $__internal_72246e7ceb778050ef3a4db29c84ffb92f1bcd2426495107cf8769f91eb7301e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72246e7ceb778050ef3a4db29c84ffb92f1bcd2426495107cf8769f91eb7301e->enter($__internal_72246e7ceb778050ef3a4db29c84ffb92f1bcd2426495107cf8769f91eb7301e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "livraison/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72246e7ceb778050ef3a4db29c84ffb92f1bcd2426495107cf8769f91eb7301e->leave($__internal_72246e7ceb778050ef3a4db29c84ffb92f1bcd2426495107cf8769f91eb7301e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7d8d114a4dda1ea23395aafe7e093e2672157cf926c4f3e1a16a6a142c76b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d8d114a4dda1ea23395aafe7e093e2672157cf926c4f3e1a16a6a142c76b8c->enter($__internal_c7d8d114a4dda1ea23395aafe7e093e2672157cf926c4f3e1a16a6a142c76b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Livraison edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c7d8d114a4dda1ea23395aafe7e093e2672157cf926c4f3e1a16a6a142c76b8c->leave($__internal_c7d8d114a4dda1ea23395aafe7e093e2672157cf926c4f3e1a16a6a142c76b8c_prof);

    }

    public function getTemplateName()
    {
        return "livraison/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Livraison edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('livraison_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "livraison/edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\livraison\\edit.html.twig");
    }
}