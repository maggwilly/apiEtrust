<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_42dc5b08908ba23abcbdfe1e28f3dd816729b609cc0c340c958ad422af9a2200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5b583fb41ecad5b312310cfa8c44728835ac2583ab99c105bf122cfe3d1df894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b583fb41ecad5b312310cfa8c44728835ac2583ab99c105bf122cfe3d1df894->enter($__internal_5b583fb41ecad5b312310cfa8c44728835ac2583ab99c105bf122cfe3d1df894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b583fb41ecad5b312310cfa8c44728835ac2583ab99c105bf122cfe3d1df894->leave($__internal_5b583fb41ecad5b312310cfa8c44728835ac2583ab99c105bf122cfe3d1df894_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_942a1a88d55640e62c33b6a42ea00266dc4f672e40d7b90c7d0659e2c2b77071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942a1a88d55640e62c33b6a42ea00266dc4f672e40d7b90c7d0659e2c2b77071->enter($__internal_942a1a88d55640e62c33b6a42ea00266dc4f672e40d7b90c7d0659e2c2b77071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_942a1a88d55640e62c33b6a42ea00266dc4f672e40d7b90c7d0659e2c2b77071->leave($__internal_942a1a88d55640e62c33b6a42ea00266dc4f672e40d7b90c7d0659e2c2b77071_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b538059e5734a16a4e7f478e42314a4e9092acfac8b5e92911fb47870187ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b538059e5734a16a4e7f478e42314a4e9092acfac8b5e92911fb47870187ae8->enter($__internal_2b538059e5734a16a4e7f478e42314a4e9092acfac8b5e92911fb47870187ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b538059e5734a16a4e7f478e42314a4e9092acfac8b5e92911fb47870187ae8->leave($__internal_2b538059e5734a16a4e7f478e42314a4e9092acfac8b5e92911fb47870187ae8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
