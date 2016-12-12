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
        $__internal_6f04bbb597ff8fa5d09a8ad4aa4409c0bb853a9bb2bce802e4d7e237764d1f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f04bbb597ff8fa5d09a8ad4aa4409c0bb853a9bb2bce802e4d7e237764d1f80->enter($__internal_6f04bbb597ff8fa5d09a8ad4aa4409c0bb853a9bb2bce802e4d7e237764d1f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f04bbb597ff8fa5d09a8ad4aa4409c0bb853a9bb2bce802e4d7e237764d1f80->leave($__internal_6f04bbb597ff8fa5d09a8ad4aa4409c0bb853a9bb2bce802e4d7e237764d1f80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e9826b7adf080d8f883cb51d9a131c0b6c009b65e1aa2eefa8767309cac5a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9826b7adf080d8f883cb51d9a131c0b6c009b65e1aa2eefa8767309cac5a7a->enter($__internal_0e9826b7adf080d8f883cb51d9a131c0b6c009b65e1aa2eefa8767309cac5a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e9826b7adf080d8f883cb51d9a131c0b6c009b65e1aa2eefa8767309cac5a7a->leave($__internal_0e9826b7adf080d8f883cb51d9a131c0b6c009b65e1aa2eefa8767309cac5a7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d0b6eff8b7d7c4e4d755fe15b4b0fef99b7d1b7355f63f864376e06aabec18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0b6eff8b7d7c4e4d755fe15b4b0fef99b7d1b7355f63f864376e06aabec18c->enter($__internal_9d0b6eff8b7d7c4e4d755fe15b4b0fef99b7d1b7355f63f864376e06aabec18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d0b6eff8b7d7c4e4d755fe15b4b0fef99b7d1b7355f63f864376e06aabec18c->leave($__internal_9d0b6eff8b7d7c4e4d755fe15b4b0fef99b7d1b7355f63f864376e06aabec18c_prof);

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
