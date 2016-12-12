<?php

/* @App/PointVente/edit.html.twig */
class __TwigTemplate_53b945c3c7357931dbb9f700f30ec65940f8d01946baacccc152f486ecf7c854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/PointVente/edit.html.twig", 1);
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
        $__internal_0a72882cf0e61c23d6ebbc45dbe5221f50f0a24cce287cf271812f44f8972434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a72882cf0e61c23d6ebbc45dbe5221f50f0a24cce287cf271812f44f8972434->enter($__internal_0a72882cf0e61c23d6ebbc45dbe5221f50f0a24cce287cf271812f44f8972434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/PointVente/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a72882cf0e61c23d6ebbc45dbe5221f50f0a24cce287cf271812f44f8972434->leave($__internal_0a72882cf0e61c23d6ebbc45dbe5221f50f0a24cce287cf271812f44f8972434_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8040ebcbf8d4f0a1f6af7aa3c59b87dffc2c655956fab40a1c4b9be0372b3c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8040ebcbf8d4f0a1f6af7aa3c59b87dffc2c655956fab40a1c4b9be0372b3c28->enter($__internal_8040ebcbf8d4f0a1f6af7aa3c59b87dffc2c655956fab40a1c4b9be0372b3c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PointVente edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("point_vente");
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
        
        $__internal_8040ebcbf8d4f0a1f6af7aa3c59b87dffc2c655956fab40a1c4b9be0372b3c28->leave($__internal_8040ebcbf8d4f0a1f6af7aa3c59b87dffc2c655956fab40a1c4b9be0372b3c28_prof);

    }

    public function getTemplateName()
    {
        return "@App/PointVente/edit.html.twig";
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
    <h1>PointVente edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('point_vente') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "@App/PointVente/edit.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\PointVente\\edit.html.twig");
    }
}
