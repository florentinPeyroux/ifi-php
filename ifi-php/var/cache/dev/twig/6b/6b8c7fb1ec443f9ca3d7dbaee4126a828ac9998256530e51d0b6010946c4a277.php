<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_9ecea4136384be746a55747b3aa97ea27e6c32c79d3ba6d4164c902c068bbdbf extends Twig_Template
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
        $__internal_2e4bd6787635f99c1ad64ac6fd58c8cca4e2f4e1958702f965cb1b65abfff25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4bd6787635f99c1ad64ac6fd58c8cca4e2f4e1958702f965cb1b65abfff25c->enter($__internal_2e4bd6787635f99c1ad64ac6fd58c8cca4e2f4e1958702f965cb1b65abfff25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2e4bd6787635f99c1ad64ac6fd58c8cca4e2f4e1958702f965cb1b65abfff25c->leave($__internal_2e4bd6787635f99c1ad64ac6fd58c8cca4e2f4e1958702f965cb1b65abfff25c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
