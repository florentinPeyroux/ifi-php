<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_18a5e90e9e034ced601491c3de8d39425bc1128a0a029dc4c93270981a4688bb extends Twig_Template
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
        $__internal_10033b778b93762ae53bef1a161cec070326c2f2c7bcb7c2b8840bf04d2090cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10033b778b93762ae53bef1a161cec070326c2f2c7bcb7c2b8840bf04d2090cb->enter($__internal_10033b778b93762ae53bef1a161cec070326c2f2c7bcb7c2b8840bf04d2090cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_10033b778b93762ae53bef1a161cec070326c2f2c7bcb7c2b8840bf04d2090cb->leave($__internal_10033b778b93762ae53bef1a161cec070326c2f2c7bcb7c2b8840bf04d2090cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/choice_options.html.php");
    }
}
