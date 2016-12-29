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
        $__internal_30be75a8b4cf99af882973489d9345f7f78c0c7794d8938e93f26045d5fba275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30be75a8b4cf99af882973489d9345f7f78c0c7794d8938e93f26045d5fba275->enter($__internal_30be75a8b4cf99af882973489d9345f7f78c0c7794d8938e93f26045d5fba275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30be75a8b4cf99af882973489d9345f7f78c0c7794d8938e93f26045d5fba275->leave($__internal_30be75a8b4cf99af882973489d9345f7f78c0c7794d8938e93f26045d5fba275_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6846fba061cf48ef20ce37cc72336e9de1f26521992041362078e44563b3d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6846fba061cf48ef20ce37cc72336e9de1f26521992041362078e44563b3d59->enter($__internal_c6846fba061cf48ef20ce37cc72336e9de1f26521992041362078e44563b3d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6846fba061cf48ef20ce37cc72336e9de1f26521992041362078e44563b3d59->leave($__internal_c6846fba061cf48ef20ce37cc72336e9de1f26521992041362078e44563b3d59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e644ca39fe39fdf869d41ca2086edbd189874887ac0e19933a89017f3e12cdb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e644ca39fe39fdf869d41ca2086edbd189874887ac0e19933a89017f3e12cdb4->enter($__internal_e644ca39fe39fdf869d41ca2086edbd189874887ac0e19933a89017f3e12cdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e644ca39fe39fdf869d41ca2086edbd189874887ac0e19933a89017f3e12cdb4->leave($__internal_e644ca39fe39fdf869d41ca2086edbd189874887ac0e19933a89017f3e12cdb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e615a69ba5a26c9cc2b4f2b2c06c7e418f42c7e0702d7cc3d716ee6afb7e4104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e615a69ba5a26c9cc2b4f2b2c06c7e418f42c7e0702d7cc3d716ee6afb7e4104->enter($__internal_e615a69ba5a26c9cc2b4f2b2c06c7e418f42c7e0702d7cc3d716ee6afb7e4104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e615a69ba5a26c9cc2b4f2b2c06c7e418f42c7e0702d7cc3d716ee6afb7e4104->leave($__internal_e615a69ba5a26c9cc2b4f2b2c06c7e418f42c7e0702d7cc3d716ee6afb7e4104_prof);

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
