<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4704e10cb9354a4e870e63374115f96a604a5cee74051f51d030e7eff9bf88e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f972636524b28d7cd572a311e40cac329e7b6fbe75c45aed41e2004634ef5fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f972636524b28d7cd572a311e40cac329e7b6fbe75c45aed41e2004634ef5fac->enter($__internal_f972636524b28d7cd572a311e40cac329e7b6fbe75c45aed41e2004634ef5fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f972636524b28d7cd572a311e40cac329e7b6fbe75c45aed41e2004634ef5fac->leave($__internal_f972636524b28d7cd572a311e40cac329e7b6fbe75c45aed41e2004634ef5fac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a8f07241294f8bb4b899c5383760d8d5230bc2358828bc8308ff30705b03936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8f07241294f8bb4b899c5383760d8d5230bc2358828bc8308ff30705b03936->enter($__internal_8a8f07241294f8bb4b899c5383760d8d5230bc2358828bc8308ff30705b03936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8a8f07241294f8bb4b899c5383760d8d5230bc2358828bc8308ff30705b03936->leave($__internal_8a8f07241294f8bb4b899c5383760d8d5230bc2358828bc8308ff30705b03936_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94bf3cd79cef30a325d3fe92c7e9493eb8afea63c08eced2395ee9b40d6397a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bf3cd79cef30a325d3fe92c7e9493eb8afea63c08eced2395ee9b40d6397a3->enter($__internal_94bf3cd79cef30a325d3fe92c7e9493eb8afea63c08eced2395ee9b40d6397a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94bf3cd79cef30a325d3fe92c7e9493eb8afea63c08eced2395ee9b40d6397a3->leave($__internal_94bf3cd79cef30a325d3fe92c7e9493eb8afea63c08eced2395ee9b40d6397a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e58b1d17d9e45014fbedfe769f4c50c8cf3a7d25148dc9eb018d105cda229ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e58b1d17d9e45014fbedfe769f4c50c8cf3a7d25148dc9eb018d105cda229ac->enter($__internal_0e58b1d17d9e45014fbedfe769f4c50c8cf3a7d25148dc9eb018d105cda229ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e58b1d17d9e45014fbedfe769f4c50c8cf3a7d25148dc9eb018d105cda229ac->leave($__internal_0e58b1d17d9e45014fbedfe769f4c50c8cf3a7d25148dc9eb018d105cda229ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
