<?php

/* @App/Produit/edit.html.twig */
class __TwigTemplate_d03e67712b6ea0459d6ba4f538f7294dd1649af6f725460950ce99fb84d08bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/Produit/edit.html.twig", 1);
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
        $__internal_4f6d574a8312fd8fe23098101b1f75045ad51a05ab431c4a997f5796aa6a476d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6d574a8312fd8fe23098101b1f75045ad51a05ab431c4a997f5796aa6a476d->enter($__internal_4f6d574a8312fd8fe23098101b1f75045ad51a05ab431c4a997f5796aa6a476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Produit/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6d574a8312fd8fe23098101b1f75045ad51a05ab431c4a997f5796aa6a476d->leave($__internal_4f6d574a8312fd8fe23098101b1f75045ad51a05ab431c4a997f5796aa6a476d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_134fdc4917d8ad5d74daa5fba51f6b5e41a290c530e11ced2e484f7da334c1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134fdc4917d8ad5d74daa5fba51f6b5e41a290c530e11ced2e484f7da334c1d5->enter($__internal_134fdc4917d8ad5d74daa5fba51f6b5e41a290c530e11ced2e484f7da334c1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produit edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_134fdc4917d8ad5d74daa5fba51f6b5e41a290c530e11ced2e484f7da334c1d5->leave($__internal_134fdc4917d8ad5d74daa5fba51f6b5e41a290c530e11ced2e484f7da334c1d5_prof);

    }

    public function getTemplateName()
    {
        return "@App/Produit/edit.html.twig";
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
    <h1>Produit edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('produit') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@App/Produit/edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\Produit\\edit.html.twig");
    }
}
