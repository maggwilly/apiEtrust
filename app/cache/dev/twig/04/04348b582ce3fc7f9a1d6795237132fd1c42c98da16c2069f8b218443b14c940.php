<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c30cd97cd9ebfda03d79550c2636db08807a9d370c5f0c7c39fdb21cd23ddda5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_e6c40ebf8f69358da801b3bbccefa2580d4b1189ffc6d710d21a4f929795d7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c40ebf8f69358da801b3bbccefa2580d4b1189ffc6d710d21a4f929795d7ca->enter($__internal_e6c40ebf8f69358da801b3bbccefa2580d4b1189ffc6d710d21a4f929795d7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c40ebf8f69358da801b3bbccefa2580d4b1189ffc6d710d21a4f929795d7ca->leave($__internal_e6c40ebf8f69358da801b3bbccefa2580d4b1189ffc6d710d21a4f929795d7ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8fa6eae49a9af3f71dbd972bd21b567d4f5da6d7b629719b5e2bf1288081139e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa6eae49a9af3f71dbd972bd21b567d4f5da6d7b629719b5e2bf1288081139e->enter($__internal_8fa6eae49a9af3f71dbd972bd21b567d4f5da6d7b629719b5e2bf1288081139e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8fa6eae49a9af3f71dbd972bd21b567d4f5da6d7b629719b5e2bf1288081139e->leave($__internal_8fa6eae49a9af3f71dbd972bd21b567d4f5da6d7b629719b5e2bf1288081139e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef65f22f033a9f12185bbc547a8b1b0bf2c0ddd09c1daf67ced89fefa7afb443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef65f22f033a9f12185bbc547a8b1b0bf2c0ddd09c1daf67ced89fefa7afb443->enter($__internal_ef65f22f033a9f12185bbc547a8b1b0bf2c0ddd09c1daf67ced89fefa7afb443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef65f22f033a9f12185bbc547a8b1b0bf2c0ddd09c1daf67ced89fefa7afb443->leave($__internal_ef65f22f033a9f12185bbc547a8b1b0bf2c0ddd09c1daf67ced89fefa7afb443_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf8958744f9d0eb8727aafcf6f9c25a0055c6e73891dea3ee78c56fd8deef441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8958744f9d0eb8727aafcf6f9c25a0055c6e73891dea3ee78c56fd8deef441->enter($__internal_cf8958744f9d0eb8727aafcf6f9c25a0055c6e73891dea3ee78c56fd8deef441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf8958744f9d0eb8727aafcf6f9c25a0055c6e73891dea3ee78c56fd8deef441->leave($__internal_cf8958744f9d0eb8727aafcf6f9c25a0055c6e73891dea3ee78c56fd8deef441_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
