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
        $__internal_7d900276a95cc477748a477d97b0b7066fe33d5c4287850f273747bee383075c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d900276a95cc477748a477d97b0b7066fe33d5c4287850f273747bee383075c->enter($__internal_7d900276a95cc477748a477d97b0b7066fe33d5c4287850f273747bee383075c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7d900276a95cc477748a477d97b0b7066fe33d5c4287850f273747bee383075c->leave($__internal_7d900276a95cc477748a477d97b0b7066fe33d5c4287850f273747bee383075c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27667b32f011c648b7988aceb85329a9773b437d05f67fff1d39687250f45250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27667b32f011c648b7988aceb85329a9773b437d05f67fff1d39687250f45250->enter($__internal_27667b32f011c648b7988aceb85329a9773b437d05f67fff1d39687250f45250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_27667b32f011c648b7988aceb85329a9773b437d05f67fff1d39687250f45250->leave($__internal_27667b32f011c648b7988aceb85329a9773b437d05f67fff1d39687250f45250_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_221d9366821f280826b9e3c4951ddcd4f1ab7e5740fe32fb46a2b818d330553d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221d9366821f280826b9e3c4951ddcd4f1ab7e5740fe32fb46a2b818d330553d->enter($__internal_221d9366821f280826b9e3c4951ddcd4f1ab7e5740fe32fb46a2b818d330553d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_221d9366821f280826b9e3c4951ddcd4f1ab7e5740fe32fb46a2b818d330553d->leave($__internal_221d9366821f280826b9e3c4951ddcd4f1ab7e5740fe32fb46a2b818d330553d_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f8c8466b4154642dec93a97b1164681bdf9e423866a6c98b6fb4b597792ac46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8c8466b4154642dec93a97b1164681bdf9e423866a6c98b6fb4b597792ac46->enter($__internal_2f8c8466b4154642dec93a97b1164681bdf9e423866a6c98b6fb4b597792ac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f8c8466b4154642dec93a97b1164681bdf9e423866a6c98b6fb4b597792ac46->leave($__internal_2f8c8466b4154642dec93a97b1164681bdf9e423866a6c98b6fb4b597792ac46_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecffbda715ab686493a8cdeee08d43a9dae9b624de3ac8606620fcaf0f2c27c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecffbda715ab686493a8cdeee08d43a9dae9b624de3ac8606620fcaf0f2c27c2->enter($__internal_ecffbda715ab686493a8cdeee08d43a9dae9b624de3ac8606620fcaf0f2c27c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecffbda715ab686493a8cdeee08d43a9dae9b624de3ac8606620fcaf0f2c27c2->leave($__internal_ecffbda715ab686493a8cdeee08d43a9dae9b624de3ac8606620fcaf0f2c27c2_prof);

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
