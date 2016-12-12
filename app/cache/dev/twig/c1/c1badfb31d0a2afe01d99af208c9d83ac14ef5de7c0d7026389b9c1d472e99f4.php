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
        $__internal_f652fc18d43e1ffe6d2dddb62a1f624ebd302c12e02bfbc6f88e40dc937bb55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f652fc18d43e1ffe6d2dddb62a1f624ebd302c12e02bfbc6f88e40dc937bb55c->enter($__internal_f652fc18d43e1ffe6d2dddb62a1f624ebd302c12e02bfbc6f88e40dc937bb55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f652fc18d43e1ffe6d2dddb62a1f624ebd302c12e02bfbc6f88e40dc937bb55c->leave($__internal_f652fc18d43e1ffe6d2dddb62a1f624ebd302c12e02bfbc6f88e40dc937bb55c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a9c967265deb3fe62cc58c0747e05e119bc85027c916b5612adace103e375e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9c967265deb3fe62cc58c0747e05e119bc85027c916b5612adace103e375e2->enter($__internal_9a9c967265deb3fe62cc58c0747e05e119bc85027c916b5612adace103e375e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a9c967265deb3fe62cc58c0747e05e119bc85027c916b5612adace103e375e2->leave($__internal_9a9c967265deb3fe62cc58c0747e05e119bc85027c916b5612adace103e375e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fa96566acbd40f6c3d777b2578a15dceec893e24dd6ab251e57431aa75372f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa96566acbd40f6c3d777b2578a15dceec893e24dd6ab251e57431aa75372f8->enter($__internal_8fa96566acbd40f6c3d777b2578a15dceec893e24dd6ab251e57431aa75372f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8fa96566acbd40f6c3d777b2578a15dceec893e24dd6ab251e57431aa75372f8->leave($__internal_8fa96566acbd40f6c3d777b2578a15dceec893e24dd6ab251e57431aa75372f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3538c41b42a32c76bb32554f702a7b7267853290dcac00a5c02ed2708404ef02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3538c41b42a32c76bb32554f702a7b7267853290dcac00a5c02ed2708404ef02->enter($__internal_3538c41b42a32c76bb32554f702a7b7267853290dcac00a5c02ed2708404ef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3538c41b42a32c76bb32554f702a7b7267853290dcac00a5c02ed2708404ef02->leave($__internal_3538c41b42a32c76bb32554f702a7b7267853290dcac00a5c02ed2708404ef02_prof);

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
