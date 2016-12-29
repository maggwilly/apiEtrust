<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_2616b717d28513ef86ff5c67eb9852ecc9cd805dcc1d41fc32662d1e5d22ec8b extends Twig_Template
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
        $__internal_5aeb8eb8a9ddd6d5abbef2aca8e85a3cd45d15a8f84becbbcdae906d0c049e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeb8eb8a9ddd6d5abbef2aca8e85a3cd45d15a8f84becbbcdae906d0c049e70->enter($__internal_5aeb8eb8a9ddd6d5abbef2aca8e85a3cd45d15a8f84becbbcdae906d0c049e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5aeb8eb8a9ddd6d5abbef2aca8e85a3cd45d15a8f84becbbcdae906d0c049e70->leave($__internal_5aeb8eb8a9ddd6d5abbef2aca8e85a3cd45d15a8f84becbbcdae906d0c049e70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
