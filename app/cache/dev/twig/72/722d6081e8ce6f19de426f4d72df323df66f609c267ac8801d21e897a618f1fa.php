<?php

/* @App/PointVente/new.html.twig */
class __TwigTemplate_8bf41475536cd54b64b0f6a020a9c516b19a94f360c12b4ee15a034993237102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/PointVente/new.html.twig", 1);
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
        $__internal_13c7214fe293156c9478e2daded5041633380aeaca8040b1321e8cb26422774d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c7214fe293156c9478e2daded5041633380aeaca8040b1321e8cb26422774d->enter($__internal_13c7214fe293156c9478e2daded5041633380aeaca8040b1321e8cb26422774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/PointVente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13c7214fe293156c9478e2daded5041633380aeaca8040b1321e8cb26422774d->leave($__internal_13c7214fe293156c9478e2daded5041633380aeaca8040b1321e8cb26422774d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f784b87a598e9e24854d187e7551419068ab095cef5a22fc6c2467f3430faa31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f784b87a598e9e24854d187e7551419068ab095cef5a22fc6c2467f3430faa31->enter($__internal_f784b87a598e9e24854d187e7551419068ab095cef5a22fc6c2467f3430faa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PointVente creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_f784b87a598e9e24854d187e7551419068ab095cef5a22fc6c2467f3430faa31->leave($__internal_f784b87a598e9e24854d187e7551419068ab095cef5a22fc6c2467f3430faa31_prof);

    }

    public function getTemplateName()
    {
        return "@App/PointVente/new.html.twig";
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
    <h1>PointVente creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('point_vente') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "@App/PointVente/new.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\src\\AppBundle\\Resources\\views\\PointVente\\new.html.twig");
    }
}
