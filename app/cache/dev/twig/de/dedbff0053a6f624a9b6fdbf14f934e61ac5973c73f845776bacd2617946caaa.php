<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ed2ac355a0273e33d32712b73b39d234061fbcc9cd2fcc965c541be9730c85a1 extends Twig_Template
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
        $__internal_95b581c7890f1834fc5c3933fef47d6b46a5ab7f12a50a5112c061e0ac3069cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b581c7890f1834fc5c3933fef47d6b46a5ab7f12a50a5112c061e0ac3069cf->enter($__internal_95b581c7890f1834fc5c3933fef47d6b46a5ab7f12a50a5112c061e0ac3069cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_95b581c7890f1834fc5c3933fef47d6b46a5ab7f12a50a5112c061e0ac3069cf->leave($__internal_95b581c7890f1834fc5c3933fef47d6b46a5ab7f12a50a5112c061e0ac3069cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
