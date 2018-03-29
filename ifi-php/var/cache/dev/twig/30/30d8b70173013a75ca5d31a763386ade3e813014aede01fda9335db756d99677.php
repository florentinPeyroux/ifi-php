<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_260f4ef5e38e720b0df2a8658759f4637b696cecf5e4e63d70c89efbb580c91d extends Twig_Template
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
        $__internal_5a3b454d1d8386d0e80d8ed9673af19c7717c48846bf8460e27689c2c4298fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3b454d1d8386d0e80d8ed9673af19c7717c48846bf8460e27689c2c4298fc0->enter($__internal_5a3b454d1d8386d0e80d8ed9673af19c7717c48846bf8460e27689c2c4298fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5a3b454d1d8386d0e80d8ed9673af19c7717c48846bf8460e27689c2c4298fc0->leave($__internal_5a3b454d1d8386d0e80d8ed9673af19c7717c48846bf8460e27689c2c4298fc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
