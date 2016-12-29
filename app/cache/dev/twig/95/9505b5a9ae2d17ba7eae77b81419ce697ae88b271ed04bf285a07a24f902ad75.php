<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d2e35e1aa942e81225f17b8b7c15adb1d90d707eeb8def0cf0db6047fc6d2030 extends Twig_Template
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
        $__internal_60453b03a7f0a06f612d3ba79cda9464fd2d09a7d9ccee8fdf8f67208c067904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60453b03a7f0a06f612d3ba79cda9464fd2d09a7d9ccee8fdf8f67208c067904->enter($__internal_60453b03a7f0a06f612d3ba79cda9464fd2d09a7d9ccee8fdf8f67208c067904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_60453b03a7f0a06f612d3ba79cda9464fd2d09a7d9ccee8fdf8f67208c067904->leave($__internal_60453b03a7f0a06f612d3ba79cda9464fd2d09a7d9ccee8fdf8f67208c067904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Users\\PLATA-PC\\workspace\\apiEtrust\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
