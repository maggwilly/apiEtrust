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
        $__internal_9b9f4ee6adb3f9549682dc73040808ee4b0e954cd5511cd5e4eb04d28008fc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9f4ee6adb3f9549682dc73040808ee4b0e954cd5511cd5e4eb04d28008fc73->enter($__internal_9b9f4ee6adb3f9549682dc73040808ee4b0e954cd5511cd5e4eb04d28008fc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9b9f4ee6adb3f9549682dc73040808ee4b0e954cd5511cd5e4eb04d28008fc73->leave($__internal_9b9f4ee6adb3f9549682dc73040808ee4b0e954cd5511cd5e4eb04d28008fc73_prof);

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
