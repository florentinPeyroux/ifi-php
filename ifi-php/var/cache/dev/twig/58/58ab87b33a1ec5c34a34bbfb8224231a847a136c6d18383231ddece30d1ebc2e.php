<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7a81a6a37741dcadebd3e485ae8ca49c971598697da539178e71d9e79fadd778 extends Twig_Template
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
        $__internal_2a35acbf66c1a5f622338cf4adeb7ea9667bd5920d5a2e79b88c9f49f342d43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a35acbf66c1a5f622338cf4adeb7ea9667bd5920d5a2e79b88c9f49f342d43d->enter($__internal_2a35acbf66c1a5f622338cf4adeb7ea9667bd5920d5a2e79b88c9f49f342d43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2a35acbf66c1a5f622338cf4adeb7ea9667bd5920d5a2e79b88c9f49f342d43d->leave($__internal_2a35acbf66c1a5f622338cf4adeb7ea9667bd5920d5a2e79b88c9f49f342d43d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
