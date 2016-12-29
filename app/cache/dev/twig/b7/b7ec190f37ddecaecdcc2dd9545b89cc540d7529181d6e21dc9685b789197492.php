<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1aa1f83ac1f4dc01a028568dbb3d2bea1b713cb1edabe75ecf9f86f7005c3efb extends Twig_Template
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
        $__internal_e9d5b6666f927f3bfe87c9f3892c164b8ec8c4e48748c90f6e2539f8be14b7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d5b6666f927f3bfe87c9f3892c164b8ec8c4e48748c90f6e2539f8be14b7a3->enter($__internal_e9d5b6666f927f3bfe87c9f3892c164b8ec8c4e48748c90f6e2539f8be14b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e9d5b6666f927f3bfe87c9f3892c164b8ec8c4e48748c90f6e2539f8be14b7a3->leave($__internal_e9d5b6666f927f3bfe87c9f3892c164b8ec8c4e48748c90f6e2539f8be14b7a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5df8ae2a8396d676a0e9705c2e36d2542093b19f15cf79d9ecaf8815a7875f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df8ae2a8396d676a0e9705c2e36d2542093b19f15cf79d9ecaf8815a7875f6d->enter($__internal_5df8ae2a8396d676a0e9705c2e36d2542093b19f15cf79d9ecaf8815a7875f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5df8ae2a8396d676a0e9705c2e36d2542093b19f15cf79d9ecaf8815a7875f6d->leave($__internal_5df8ae2a8396d676a0e9705c2e36d2542093b19f15cf79d9ecaf8815a7875f6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
