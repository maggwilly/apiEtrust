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
        $__internal_1c590b6a274c921ec04d6f2ca9a6d15f4d088e69e2c33a0306ac4bd8e9b5d467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c590b6a274c921ec04d6f2ca9a6d15f4d088e69e2c33a0306ac4bd8e9b5d467->enter($__internal_1c590b6a274c921ec04d6f2ca9a6d15f4d088e69e2c33a0306ac4bd8e9b5d467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c590b6a274c921ec04d6f2ca9a6d15f4d088e69e2c33a0306ac4bd8e9b5d467->leave($__internal_1c590b6a274c921ec04d6f2ca9a6d15f4d088e69e2c33a0306ac4bd8e9b5d467_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b37beea04abf08c0a62e91b236f3abc418fb8c04ff557b10180ca3a50c51add8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37beea04abf08c0a62e91b236f3abc418fb8c04ff557b10180ca3a50c51add8->enter($__internal_b37beea04abf08c0a62e91b236f3abc418fb8c04ff557b10180ca3a50c51add8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b37beea04abf08c0a62e91b236f3abc418fb8c04ff557b10180ca3a50c51add8->leave($__internal_b37beea04abf08c0a62e91b236f3abc418fb8c04ff557b10180ca3a50c51add8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcce49a7267ef069339ce10ed65654e1d35a40f64022a275e875a7d1eba6d3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcce49a7267ef069339ce10ed65654e1d35a40f64022a275e875a7d1eba6d3e2->enter($__internal_dcce49a7267ef069339ce10ed65654e1d35a40f64022a275e875a7d1eba6d3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dcce49a7267ef069339ce10ed65654e1d35a40f64022a275e875a7d1eba6d3e2->leave($__internal_dcce49a7267ef069339ce10ed65654e1d35a40f64022a275e875a7d1eba6d3e2_prof);

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
