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
        $__internal_88d33a88b44f888be75254a13cd7f420637207738c32059b42f2c8b53ce81b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d33a88b44f888be75254a13cd7f420637207738c32059b42f2c8b53ce81b99->enter($__internal_88d33a88b44f888be75254a13cd7f420637207738c32059b42f2c8b53ce81b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <div id=\"fb-root\"></div>
     <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8\";
         fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_88d33a88b44f888be75254a13cd7f420637207738c32059b42f2c8b53ce81b99->leave($__internal_88d33a88b44f888be75254a13cd7f420637207738c32059b42f2c8b53ce81b99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9099de8cade1ea7a535a73b757e18d1e810fbf7eaeb3779a8cbb788fa8040b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9099de8cade1ea7a535a73b757e18d1e810fbf7eaeb3779a8cbb788fa8040b1->enter($__internal_d9099de8cade1ea7a535a73b757e18d1e810fbf7eaeb3779a8cbb788fa8040b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d9099de8cade1ea7a535a73b757e18d1e810fbf7eaeb3779a8cbb788fa8040b1->leave($__internal_d9099de8cade1ea7a535a73b757e18d1e810fbf7eaeb3779a8cbb788fa8040b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4e607dfcea9bb594396652848edee2a620b88f83ab37b6ba74b864a760014ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e607dfcea9bb594396652848edee2a620b88f83ab37b6ba74b864a760014ad->enter($__internal_e4e607dfcea9bb594396652848edee2a620b88f83ab37b6ba74b864a760014ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e4e607dfcea9bb594396652848edee2a620b88f83ab37b6ba74b864a760014ad->leave($__internal_e4e607dfcea9bb594396652848edee2a620b88f83ab37b6ba74b864a760014ad_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_37aca1d0617cfe49e200dfac7cf1dd5370b8c89a96b0fca4ac9fabb86da5d112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37aca1d0617cfe49e200dfac7cf1dd5370b8c89a96b0fca4ac9fabb86da5d112->enter($__internal_37aca1d0617cfe49e200dfac7cf1dd5370b8c89a96b0fca4ac9fabb86da5d112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37aca1d0617cfe49e200dfac7cf1dd5370b8c89a96b0fca4ac9fabb86da5d112->leave($__internal_37aca1d0617cfe49e200dfac7cf1dd5370b8c89a96b0fca4ac9fabb86da5d112_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d43f45a19c4826dd337e8efbe43a12341bedb262640a8b24102492548d9b8eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43f45a19c4826dd337e8efbe43a12341bedb262640a8b24102492548d9b8eef->enter($__internal_d43f45a19c4826dd337e8efbe43a12341bedb262640a8b24102492548d9b8eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d43f45a19c4826dd337e8efbe43a12341bedb262640a8b24102492548d9b8eef->leave($__internal_d43f45a19c4826dd337e8efbe43a12341bedb262640a8b24102492548d9b8eef_prof);

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
        return array (  102 => 20,  91 => 19,  80 => 6,  68 => 5,  59 => 21,  56 => 20,  54 => 19,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    <div id=\"fb-root\"></div>
     <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8\";
         fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app\\Resources\\views\\base.html.twig");
    }
}
