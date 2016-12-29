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
        $__internal_f40d2c7de8cf5b1122489456b7b4c100ef8b63b971c2ba1e63b937a55824e0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40d2c7de8cf5b1122489456b7b4c100ef8b63b971c2ba1e63b937a55824e0d6->enter($__internal_f40d2c7de8cf5b1122489456b7b4c100ef8b63b971c2ba1e63b937a55824e0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f40d2c7de8cf5b1122489456b7b4c100ef8b63b971c2ba1e63b937a55824e0d6->leave($__internal_f40d2c7de8cf5b1122489456b7b4c100ef8b63b971c2ba1e63b937a55824e0d6_prof);

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
