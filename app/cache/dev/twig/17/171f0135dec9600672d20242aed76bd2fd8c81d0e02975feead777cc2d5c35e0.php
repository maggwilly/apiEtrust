<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0c9038a712f8d5ef5d68111ed5d5c680d4f107c1f06967930e432d3a1b7b4002 extends Twig_Template
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
        $__internal_9d6e4ecb0a4f5680cd846a2ee9285b53e93c4b1da6ac61ade9fa14ecaefee1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6e4ecb0a4f5680cd846a2ee9285b53e93c4b1da6ac61ade9fa14ecaefee1b4->enter($__internal_9d6e4ecb0a4f5680cd846a2ee9285b53e93c4b1da6ac61ade9fa14ecaefee1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9d6e4ecb0a4f5680cd846a2ee9285b53e93c4b1da6ac61ade9fa14ecaefee1b4->leave($__internal_9d6e4ecb0a4f5680cd846a2ee9285b53e93c4b1da6ac61ade9fa14ecaefee1b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
