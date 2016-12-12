<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1da00da3f51380ec8c3d9e8e53c0ef420505caf21919493ae5dad73992c3641a extends Twig_Template
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
        $__internal_79a0489ca14e2a9f6a2483e73adac5ce0d91a0be463194f3e9fdeba69bd97629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a0489ca14e2a9f6a2483e73adac5ce0d91a0be463194f3e9fdeba69bd97629->enter($__internal_79a0489ca14e2a9f6a2483e73adac5ce0d91a0be463194f3e9fdeba69bd97629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_79a0489ca14e2a9f6a2483e73adac5ce0d91a0be463194f3e9fdeba69bd97629->leave($__internal_79a0489ca14e2a9f6a2483e73adac5ce0d91a0be463194f3e9fdeba69bd97629_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
