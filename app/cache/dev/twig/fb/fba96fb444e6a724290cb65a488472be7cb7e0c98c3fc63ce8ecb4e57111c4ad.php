<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f560e9927970e0ebf8fe8481fca6d29e7e681c26dabb8cf79a9311cf00ad128b extends Twig_Template
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
        $__internal_ad9df477a56d3ec199359e2335414b3a2810b0c7124110ea87ad8c5a9ff7f676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9df477a56d3ec199359e2335414b3a2810b0c7124110ea87ad8c5a9ff7f676->enter($__internal_ad9df477a56d3ec199359e2335414b3a2810b0c7124110ea87ad8c5a9ff7f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ad9df477a56d3ec199359e2335414b3a2810b0c7124110ea87ad8c5a9ff7f676->leave($__internal_ad9df477a56d3ec199359e2335414b3a2810b0c7124110ea87ad8c5a9ff7f676_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
