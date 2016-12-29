<?php

/* AppBundle:User:edit.html.twig */
class __TwigTemplate_704e6e284dff44b75cc13a5f0728ed5dd2e0881e3ac5ad186ae05961eb7b38fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:edit.html.twig", 1);
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
        $__internal_fbb6db24475345d618648158ab53f417719a1b1caf4abb5c53dfcebbedeab214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb6db24475345d618648158ab53f417719a1b1caf4abb5c53dfcebbedeab214->enter($__internal_fbb6db24475345d618648158ab53f417719a1b1caf4abb5c53dfcebbedeab214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb6db24475345d618648158ab53f417719a1b1caf4abb5c53dfcebbedeab214->leave($__internal_fbb6db24475345d618648158ab53f417719a1b1caf4abb5c53dfcebbedeab214_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1559b032e0a99c7a54f1604e8ac651fccc985d23af1e691ab544e9c0a2975f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1559b032e0a99c7a54f1604e8ac651fccc985d23af1e691ab544e9c0a2975f8->enter($__internal_b1559b032e0a99c7a54f1604e8ac651fccc985d23af1e691ab544e9c0a2975f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_b1559b032e0a99c7a54f1604e8ac651fccc985d23af1e691ab544e9c0a2975f8->leave($__internal_b1559b032e0a99c7a54f1604e8ac651fccc985d23af1e691ab544e9c0a2975f8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:edit.html.twig";
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
    <h1>User edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('user') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "AppBundle:User:edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle/Resources/views/User/edit.html.twig");
    }
}
