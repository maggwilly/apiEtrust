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
        $__internal_f3b98702f4e165c3354990e53ab0c1d41b17ca9e68cb93db73eb2d997cfcad3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b98702f4e165c3354990e53ab0c1d41b17ca9e68cb93db73eb2d997cfcad3c->enter($__internal_f3b98702f4e165c3354990e53ab0c1d41b17ca9e68cb93db73eb2d997cfcad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f3b98702f4e165c3354990e53ab0c1d41b17ca9e68cb93db73eb2d997cfcad3c->leave($__internal_f3b98702f4e165c3354990e53ab0c1d41b17ca9e68cb93db73eb2d997cfcad3c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_762128955426656cb9add34d74be56191122b489dedb4d15bb6dcc3f723efb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762128955426656cb9add34d74be56191122b489dedb4d15bb6dcc3f723efb21->enter($__internal_762128955426656cb9add34d74be56191122b489dedb4d15bb6dcc3f723efb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_762128955426656cb9add34d74be56191122b489dedb4d15bb6dcc3f723efb21->leave($__internal_762128955426656cb9add34d74be56191122b489dedb4d15bb6dcc3f723efb21_prof);

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
