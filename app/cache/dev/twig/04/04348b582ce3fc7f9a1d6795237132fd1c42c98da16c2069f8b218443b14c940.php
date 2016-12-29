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
        $__internal_7869cbdfa3a73581b6b640fa423e490dd83f6a8e14653cd2df169236e0c3d26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7869cbdfa3a73581b6b640fa423e490dd83f6a8e14653cd2df169236e0c3d26f->enter($__internal_7869cbdfa3a73581b6b640fa423e490dd83f6a8e14653cd2df169236e0c3d26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7869cbdfa3a73581b6b640fa423e490dd83f6a8e14653cd2df169236e0c3d26f->leave($__internal_7869cbdfa3a73581b6b640fa423e490dd83f6a8e14653cd2df169236e0c3d26f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ddfee9828ead66498b8d5b4849dc3160246ff691a6c42b9132641e68c574eaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfee9828ead66498b8d5b4849dc3160246ff691a6c42b9132641e68c574eaf5->enter($__internal_ddfee9828ead66498b8d5b4849dc3160246ff691a6c42b9132641e68c574eaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ddfee9828ead66498b8d5b4849dc3160246ff691a6c42b9132641e68c574eaf5->leave($__internal_ddfee9828ead66498b8d5b4849dc3160246ff691a6c42b9132641e68c574eaf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e882f719ca658be2e91a269504126311edf64975bc6b36ac54362226d7cb782e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e882f719ca658be2e91a269504126311edf64975bc6b36ac54362226d7cb782e->enter($__internal_e882f719ca658be2e91a269504126311edf64975bc6b36ac54362226d7cb782e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e882f719ca658be2e91a269504126311edf64975bc6b36ac54362226d7cb782e->leave($__internal_e882f719ca658be2e91a269504126311edf64975bc6b36ac54362226d7cb782e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0696f4e4c6171197252ec978e3b83c56d7bfabe7512ad5f2b2c47adc48a6f5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0696f4e4c6171197252ec978e3b83c56d7bfabe7512ad5f2b2c47adc48a6f5a3->enter($__internal_0696f4e4c6171197252ec978e3b83c56d7bfabe7512ad5f2b2c47adc48a6f5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0696f4e4c6171197252ec978e3b83c56d7bfabe7512ad5f2b2c47adc48a6f5a3->leave($__internal_0696f4e4c6171197252ec978e3b83c56d7bfabe7512ad5f2b2c47adc48a6f5a3_prof);

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
