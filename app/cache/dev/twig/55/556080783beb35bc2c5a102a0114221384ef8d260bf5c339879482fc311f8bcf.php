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
        $__internal_d5c78f3126a7ff27ba12d4a9ed87fccf1508f7442ffc501cc8c6e7f6b2e76b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c78f3126a7ff27ba12d4a9ed87fccf1508f7442ffc501cc8c6e7f6b2e76b2c->enter($__internal_d5c78f3126a7ff27ba12d4a9ed87fccf1508f7442ffc501cc8c6e7f6b2e76b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d5c78f3126a7ff27ba12d4a9ed87fccf1508f7442ffc501cc8c6e7f6b2e76b2c->leave($__internal_d5c78f3126a7ff27ba12d4a9ed87fccf1508f7442ffc501cc8c6e7f6b2e76b2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5658ac9f0d793dfb544f9b09478fb783be7ea3344632e71d5695563233417115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5658ac9f0d793dfb544f9b09478fb783be7ea3344632e71d5695563233417115->enter($__internal_5658ac9f0d793dfb544f9b09478fb783be7ea3344632e71d5695563233417115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5658ac9f0d793dfb544f9b09478fb783be7ea3344632e71d5695563233417115->leave($__internal_5658ac9f0d793dfb544f9b09478fb783be7ea3344632e71d5695563233417115_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3083d67776cd2d7ffcbc63272f8642043e318a0b74308467d767883b0fd2192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3083d67776cd2d7ffcbc63272f8642043e318a0b74308467d767883b0fd2192->enter($__internal_e3083d67776cd2d7ffcbc63272f8642043e318a0b74308467d767883b0fd2192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e3083d67776cd2d7ffcbc63272f8642043e318a0b74308467d767883b0fd2192->leave($__internal_e3083d67776cd2d7ffcbc63272f8642043e318a0b74308467d767883b0fd2192_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_7956656a0fb4ebe4cba25b138f84ed8445a0cde73050433bd2b8531ee9da7e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7956656a0fb4ebe4cba25b138f84ed8445a0cde73050433bd2b8531ee9da7e67->enter($__internal_7956656a0fb4ebe4cba25b138f84ed8445a0cde73050433bd2b8531ee9da7e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7956656a0fb4ebe4cba25b138f84ed8445a0cde73050433bd2b8531ee9da7e67->leave($__internal_7956656a0fb4ebe4cba25b138f84ed8445a0cde73050433bd2b8531ee9da7e67_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50ebce441bea1de5f8f7971336838fa28c1cfe5a7f159d607435be4317b18342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ebce441bea1de5f8f7971336838fa28c1cfe5a7f159d607435be4317b18342->enter($__internal_50ebce441bea1de5f8f7971336838fa28c1cfe5a7f159d607435be4317b18342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_50ebce441bea1de5f8f7971336838fa28c1cfe5a7f159d607435be4317b18342->leave($__internal_50ebce441bea1de5f8f7971336838fa28c1cfe5a7f159d607435be4317b18342_prof);

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
", "::base.html.twig", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\app/Resources\\views/base.html.twig");
    }
}
