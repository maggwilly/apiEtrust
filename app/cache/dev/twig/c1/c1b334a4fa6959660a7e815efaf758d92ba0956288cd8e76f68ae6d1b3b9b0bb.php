<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_fb26bf802d3b0a71b1a987ce7fb1e20a17fcd5490b16549e91df3782bfb76047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5213a6a9eddbe478206ffccc492438ec36f0d92cf28b9250dd2e8a354dc9a013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5213a6a9eddbe478206ffccc492438ec36f0d92cf28b9250dd2e8a354dc9a013->enter($__internal_5213a6a9eddbe478206ffccc492438ec36f0d92cf28b9250dd2e8a354dc9a013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5213a6a9eddbe478206ffccc492438ec36f0d92cf28b9250dd2e8a354dc9a013->leave($__internal_5213a6a9eddbe478206ffccc492438ec36f0d92cf28b9250dd2e8a354dc9a013_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cb644034b678c716146ec6f759bba15cd7b685e9953dfa77640d55c2a506ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb644034b678c716146ec6f759bba15cd7b685e9953dfa77640d55c2a506ab5->enter($__internal_0cb644034b678c716146ec6f759bba15cd7b685e9953dfa77640d55c2a506ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0cb644034b678c716146ec6f759bba15cd7b685e9953dfa77640d55c2a506ab5->leave($__internal_0cb644034b678c716146ec6f759bba15cd7b685e9953dfa77640d55c2a506ab5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
