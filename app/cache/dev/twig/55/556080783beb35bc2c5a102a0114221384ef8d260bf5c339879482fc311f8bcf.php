<?php

/* ::base.html.twig */
class __TwigTemplate_94165d261b34f013268db1c86bb71e5bc19445f57458d53425f19bbd4a0ec7f0 extends Twig_Template
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
        $__internal_8b35250cb9e0fff97289438aeca9d5ba89b06e9e472019d6496f82fc9102baf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b35250cb9e0fff97289438aeca9d5ba89b06e9e472019d6496f82fc9102baf5->enter($__internal_8b35250cb9e0fff97289438aeca9d5ba89b06e9e472019d6496f82fc9102baf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8b35250cb9e0fff97289438aeca9d5ba89b06e9e472019d6496f82fc9102baf5->leave($__internal_8b35250cb9e0fff97289438aeca9d5ba89b06e9e472019d6496f82fc9102baf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21ed258aeb8ba343df671bcdc331d86bc6f655b223036d5fd605f0b0c8d13a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ed258aeb8ba343df671bcdc331d86bc6f655b223036d5fd605f0b0c8d13a59->enter($__internal_21ed258aeb8ba343df671bcdc331d86bc6f655b223036d5fd605f0b0c8d13a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_21ed258aeb8ba343df671bcdc331d86bc6f655b223036d5fd605f0b0c8d13a59->leave($__internal_21ed258aeb8ba343df671bcdc331d86bc6f655b223036d5fd605f0b0c8d13a59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be994b49796a15512eac8ed0f9053664f65e81bca19daaeb3b5d14c1fc08bbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be994b49796a15512eac8ed0f9053664f65e81bca19daaeb3b5d14c1fc08bbd0->enter($__internal_be994b49796a15512eac8ed0f9053664f65e81bca19daaeb3b5d14c1fc08bbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_be994b49796a15512eac8ed0f9053664f65e81bca19daaeb3b5d14c1fc08bbd0->leave($__internal_be994b49796a15512eac8ed0f9053664f65e81bca19daaeb3b5d14c1fc08bbd0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_84a92d0c3b4332edf6cace2322c84474a2860d4a2000a01f2414575b69a5f09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a92d0c3b4332edf6cace2322c84474a2860d4a2000a01f2414575b69a5f09f->enter($__internal_84a92d0c3b4332edf6cace2322c84474a2860d4a2000a01f2414575b69a5f09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84a92d0c3b4332edf6cace2322c84474a2860d4a2000a01f2414575b69a5f09f->leave($__internal_84a92d0c3b4332edf6cace2322c84474a2860d4a2000a01f2414575b69a5f09f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7861a5a9bddccd37bba0be97b7f6ac03693b6fb7e285456ab24cbf88549d7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7861a5a9bddccd37bba0be97b7f6ac03693b6fb7e285456ab24cbf88549d7b3->enter($__internal_c7861a5a9bddccd37bba0be97b7f6ac03693b6fb7e285456ab24cbf88549d7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c7861a5a9bddccd37bba0be97b7f6ac03693b6fb7e285456ab24cbf88549d7b3->leave($__internal_c7861a5a9bddccd37bba0be97b7f6ac03693b6fb7e285456ab24cbf88549d7b3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/base.html.twig");
    }
}
