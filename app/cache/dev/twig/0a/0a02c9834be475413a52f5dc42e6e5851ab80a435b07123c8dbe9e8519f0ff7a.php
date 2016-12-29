<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1946551afc3c21d9b68ed605858625011a34652214a6287dcf1850025f4b0a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83b97ecb912a6b258f59c3f7e059a2225e71d98c85c8080c35536eaf861e6af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b97ecb912a6b258f59c3f7e059a2225e71d98c85c8080c35536eaf861e6af0->enter($__internal_83b97ecb912a6b258f59c3f7e059a2225e71d98c85c8080c35536eaf861e6af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_83b97ecb912a6b258f59c3f7e059a2225e71d98c85c8080c35536eaf861e6af0->leave($__internal_83b97ecb912a6b258f59c3f7e059a2225e71d98c85c8080c35536eaf861e6af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
