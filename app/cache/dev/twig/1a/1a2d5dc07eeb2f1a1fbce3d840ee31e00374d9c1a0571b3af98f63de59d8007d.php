<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c16db47633602a73f327a8b1e0639f3f3a944bedc45511dd0ffa110f2441bb25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685d867097633ff9501afe37baa91e5cf82f141ff75274a232b7b759fcc0f332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685d867097633ff9501afe37baa91e5cf82f141ff75274a232b7b759fcc0f332->enter($__internal_685d867097633ff9501afe37baa91e5cf82f141ff75274a232b7b759fcc0f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685d867097633ff9501afe37baa91e5cf82f141ff75274a232b7b759fcc0f332->leave($__internal_685d867097633ff9501afe37baa91e5cf82f141ff75274a232b7b759fcc0f332_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc5cb994e32a5499839fa7d8d1d4eab2cf26704770b464c63ef06dcde3cce024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5cb994e32a5499839fa7d8d1d4eab2cf26704770b464c63ef06dcde3cce024->enter($__internal_cc5cb994e32a5499839fa7d8d1d4eab2cf26704770b464c63ef06dcde3cce024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cc5cb994e32a5499839fa7d8d1d4eab2cf26704770b464c63ef06dcde3cce024->leave($__internal_cc5cb994e32a5499839fa7d8d1d4eab2cf26704770b464c63ef06dcde3cce024_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f6914faaa40a9599d5f3953e7492ecf18a4d406fad74ad2077e51e9f31d3a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6914faaa40a9599d5f3953e7492ecf18a4d406fad74ad2077e51e9f31d3a6e->enter($__internal_3f6914faaa40a9599d5f3953e7492ecf18a4d406fad74ad2077e51e9f31d3a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3f6914faaa40a9599d5f3953e7492ecf18a4d406fad74ad2077e51e9f31d3a6e->leave($__internal_3f6914faaa40a9599d5f3953e7492ecf18a4d406fad74ad2077e51e9f31d3a6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
