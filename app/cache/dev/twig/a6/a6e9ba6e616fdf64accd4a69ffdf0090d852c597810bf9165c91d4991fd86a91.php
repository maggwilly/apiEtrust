<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_42dc5b08908ba23abcbdfe1e28f3dd816729b609cc0c340c958ad422af9a2200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_d1f9c8506503af72353a53b1d80f18583819426c811a0c6b1647d3a83edf8d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f9c8506503af72353a53b1d80f18583819426c811a0c6b1647d3a83edf8d8e->enter($__internal_d1f9c8506503af72353a53b1d80f18583819426c811a0c6b1647d3a83edf8d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f9c8506503af72353a53b1d80f18583819426c811a0c6b1647d3a83edf8d8e->leave($__internal_d1f9c8506503af72353a53b1d80f18583819426c811a0c6b1647d3a83edf8d8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aa530decc4fb967cae751cfb672274351fa054f927e4cef1f85e629960fc281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa530decc4fb967cae751cfb672274351fa054f927e4cef1f85e629960fc281->enter($__internal_3aa530decc4fb967cae751cfb672274351fa054f927e4cef1f85e629960fc281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3aa530decc4fb967cae751cfb672274351fa054f927e4cef1f85e629960fc281->leave($__internal_3aa530decc4fb967cae751cfb672274351fa054f927e4cef1f85e629960fc281_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0644badeb8f99120d5106ff3f7968e2348ea177de275eae55b2f1d873d054e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0644badeb8f99120d5106ff3f7968e2348ea177de275eae55b2f1d873d054e7->enter($__internal_f0644badeb8f99120d5106ff3f7968e2348ea177de275eae55b2f1d873d054e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0644badeb8f99120d5106ff3f7968e2348ea177de275eae55b2f1d873d054e7->leave($__internal_f0644badeb8f99120d5106ff3f7968e2348ea177de275eae55b2f1d873d054e7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
