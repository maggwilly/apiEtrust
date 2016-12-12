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
        $__internal_02d0d1c3f1ac863e43c5b9483a195203987054bf6544f55dea35607cbe7ddb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d0d1c3f1ac863e43c5b9483a195203987054bf6544f55dea35607cbe7ddb53->enter($__internal_02d0d1c3f1ac863e43c5b9483a195203987054bf6544f55dea35607cbe7ddb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_02d0d1c3f1ac863e43c5b9483a195203987054bf6544f55dea35607cbe7ddb53->leave($__internal_02d0d1c3f1ac863e43c5b9483a195203987054bf6544f55dea35607cbe7ddb53_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a93f564aaf28563973782a58750f078db3b11bfdcd5362f523f3d9db86fea417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93f564aaf28563973782a58750f078db3b11bfdcd5362f523f3d9db86fea417->enter($__internal_a93f564aaf28563973782a58750f078db3b11bfdcd5362f523f3d9db86fea417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a93f564aaf28563973782a58750f078db3b11bfdcd5362f523f3d9db86fea417->leave($__internal_a93f564aaf28563973782a58750f078db3b11bfdcd5362f523f3d9db86fea417_prof);

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
