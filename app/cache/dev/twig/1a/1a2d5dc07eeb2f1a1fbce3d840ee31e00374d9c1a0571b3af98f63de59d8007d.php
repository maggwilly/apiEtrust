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
        $__internal_022125df9827f1e0de06234027ab3b5e70b192311673d47e20dd3e0add651e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022125df9827f1e0de06234027ab3b5e70b192311673d47e20dd3e0add651e45->enter($__internal_022125df9827f1e0de06234027ab3b5e70b192311673d47e20dd3e0add651e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022125df9827f1e0de06234027ab3b5e70b192311673d47e20dd3e0add651e45->leave($__internal_022125df9827f1e0de06234027ab3b5e70b192311673d47e20dd3e0add651e45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f606465efbffc0d6f2410d6d67f61c7175874b03e30a8a3863c9418c5bc19264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f606465efbffc0d6f2410d6d67f61c7175874b03e30a8a3863c9418c5bc19264->enter($__internal_f606465efbffc0d6f2410d6d67f61c7175874b03e30a8a3863c9418c5bc19264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f606465efbffc0d6f2410d6d67f61c7175874b03e30a8a3863c9418c5bc19264->leave($__internal_f606465efbffc0d6f2410d6d67f61c7175874b03e30a8a3863c9418c5bc19264_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b86ddad1a6d5b158938a70b39ce67ec91f20f48d355d7ee4eaabb8bad08a5760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86ddad1a6d5b158938a70b39ce67ec91f20f48d355d7ee4eaabb8bad08a5760->enter($__internal_b86ddad1a6d5b158938a70b39ce67ec91f20f48d355d7ee4eaabb8bad08a5760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b86ddad1a6d5b158938a70b39ce67ec91f20f48d355d7ee4eaabb8bad08a5760->leave($__internal_b86ddad1a6d5b158938a70b39ce67ec91f20f48d355d7ee4eaabb8bad08a5760_prof);

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
