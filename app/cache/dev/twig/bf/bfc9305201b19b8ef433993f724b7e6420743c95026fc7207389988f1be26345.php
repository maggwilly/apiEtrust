<?php

/* base.html.twig */
class __TwigTemplate_bb224609dde754e7771f0aa0db8c7be03f287911a6b49f6e0f19defa7b2d8430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_376999dec005ee8a0433ce608ab6ae5068a89c01cc2ef2975955c532b7c7a778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376999dec005ee8a0433ce608ab6ae5068a89c01cc2ef2975955c532b7c7a778->enter($__internal_376999dec005ee8a0433ce608ab6ae5068a89c01cc2ef2975955c532b7c7a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_376999dec005ee8a0433ce608ab6ae5068a89c01cc2ef2975955c532b7c7a778->leave($__internal_376999dec005ee8a0433ce608ab6ae5068a89c01cc2ef2975955c532b7c7a778_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f99fa81ddad2dbd3e0fc8948071f2ab4686cad8e82bd5dde15a90a5088c1487c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99fa81ddad2dbd3e0fc8948071f2ab4686cad8e82bd5dde15a90a5088c1487c->enter($__internal_f99fa81ddad2dbd3e0fc8948071f2ab4686cad8e82bd5dde15a90a5088c1487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f99fa81ddad2dbd3e0fc8948071f2ab4686cad8e82bd5dde15a90a5088c1487c->leave($__internal_f99fa81ddad2dbd3e0fc8948071f2ab4686cad8e82bd5dde15a90a5088c1487c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8604c91655114b086f055d2dea12d8c3efba5cb7a7e58f9e90f73c5171413ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8604c91655114b086f055d2dea12d8c3efba5cb7a7e58f9e90f73c5171413ef0->enter($__internal_8604c91655114b086f055d2dea12d8c3efba5cb7a7e58f9e90f73c5171413ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8604c91655114b086f055d2dea12d8c3efba5cb7a7e58f9e90f73c5171413ef0->leave($__internal_8604c91655114b086f055d2dea12d8c3efba5cb7a7e58f9e90f73c5171413ef0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e75f95b685350b8f75a1b83d73237a76e37f39eacb42f1ebc0925309ad33aca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75f95b685350b8f75a1b83d73237a76e37f39eacb42f1ebc0925309ad33aca3->enter($__internal_e75f95b685350b8f75a1b83d73237a76e37f39eacb42f1ebc0925309ad33aca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e75f95b685350b8f75a1b83d73237a76e37f39eacb42f1ebc0925309ad33aca3->leave($__internal_e75f95b685350b8f75a1b83d73237a76e37f39eacb42f1ebc0925309ad33aca3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_827c9447023ddcee3b1e201f1f36d4e33c42f132cf13e047d4b273bb34e8c87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827c9447023ddcee3b1e201f1f36d4e33c42f132cf13e047d4b273bb34e8c87e->enter($__internal_827c9447023ddcee3b1e201f1f36d4e33c42f132cf13e047d4b273bb34e8c87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_827c9447023ddcee3b1e201f1f36d4e33c42f132cf13e047d4b273bb34e8c87e->leave($__internal_827c9447023ddcee3b1e201f1f36d4e33c42f132cf13e047d4b273bb34e8c87e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\base.html.twig");
    }
}
