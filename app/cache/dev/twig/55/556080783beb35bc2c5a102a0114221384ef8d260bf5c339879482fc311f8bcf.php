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
        $__internal_88524c7a926269936d198f5b7c84c4701a164097ff704624e43f567d3d5bbd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88524c7a926269936d198f5b7c84c4701a164097ff704624e43f567d3d5bbd28->enter($__internal_88524c7a926269936d198f5b7c84c4701a164097ff704624e43f567d3d5bbd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_88524c7a926269936d198f5b7c84c4701a164097ff704624e43f567d3d5bbd28->leave($__internal_88524c7a926269936d198f5b7c84c4701a164097ff704624e43f567d3d5bbd28_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4137dd9c65ab1944d036b52e8f28be313768e82dfccaaff03b2c8c434047bd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4137dd9c65ab1944d036b52e8f28be313768e82dfccaaff03b2c8c434047bd06->enter($__internal_4137dd9c65ab1944d036b52e8f28be313768e82dfccaaff03b2c8c434047bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4137dd9c65ab1944d036b52e8f28be313768e82dfccaaff03b2c8c434047bd06->leave($__internal_4137dd9c65ab1944d036b52e8f28be313768e82dfccaaff03b2c8c434047bd06_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19e108683cfe6182e7148c1fcc36eaae50f229e4adb3eb74fc090a69766fa6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e108683cfe6182e7148c1fcc36eaae50f229e4adb3eb74fc090a69766fa6d1->enter($__internal_19e108683cfe6182e7148c1fcc36eaae50f229e4adb3eb74fc090a69766fa6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19e108683cfe6182e7148c1fcc36eaae50f229e4adb3eb74fc090a69766fa6d1->leave($__internal_19e108683cfe6182e7148c1fcc36eaae50f229e4adb3eb74fc090a69766fa6d1_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b38b0a2d34251ac98b4a7f9c17ec2db9cb6b66e7fd026c637ce3ddf2e889cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b38b0a2d34251ac98b4a7f9c17ec2db9cb6b66e7fd026c637ce3ddf2e889cfa->enter($__internal_6b38b0a2d34251ac98b4a7f9c17ec2db9cb6b66e7fd026c637ce3ddf2e889cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b38b0a2d34251ac98b4a7f9c17ec2db9cb6b66e7fd026c637ce3ddf2e889cfa->leave($__internal_6b38b0a2d34251ac98b4a7f9c17ec2db9cb6b66e7fd026c637ce3ddf2e889cfa_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5a92de07f87d001833c25ee3c0bb0f9b77f58e5150fb17ade3870857f15c1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a92de07f87d001833c25ee3c0bb0f9b77f58e5150fb17ade3870857f15c1fa->enter($__internal_c5a92de07f87d001833c25ee3c0bb0f9b77f58e5150fb17ade3870857f15c1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5a92de07f87d001833c25ee3c0bb0f9b77f58e5150fb17ade3870857f15c1fa->leave($__internal_c5a92de07f87d001833c25ee3c0bb0f9b77f58e5150fb17ade3870857f15c1fa_prof);

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
