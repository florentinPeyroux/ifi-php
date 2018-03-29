<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_972dcdc9974cd4c2d38b87552ac077f24434f4f9995e80bd59e2cfe5e451fc72 extends Twig_Template
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
        $__internal_c9d1342370e6dc1d5099beeaaf4bd4ae6f9167a6635dec4799229b6430b6a5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d1342370e6dc1d5099beeaaf4bd4ae6f9167a6635dec4799229b6430b6a5f2->enter($__internal_c9d1342370e6dc1d5099beeaaf4bd4ae6f9167a6635dec4799229b6430b6a5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c9d1342370e6dc1d5099beeaaf4bd4ae6f9167a6635dec4799229b6430b6a5f2->leave($__internal_c9d1342370e6dc1d5099beeaaf4bd4ae6f9167a6635dec4799229b6430b6a5f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
