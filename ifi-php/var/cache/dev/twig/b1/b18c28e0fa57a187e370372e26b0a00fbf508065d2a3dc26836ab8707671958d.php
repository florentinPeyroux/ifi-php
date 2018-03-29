<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0e30d6929496ba5b8f9993ece037a413a53e1dfe5120623475f7f0d1e13eb23c extends Twig_Template
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
        $__internal_b7b04a37fb972dd57350b28fdf23f659ba8d08612dc535b9eb91800659a38299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b04a37fb972dd57350b28fdf23f659ba8d08612dc535b9eb91800659a38299->enter($__internal_b7b04a37fb972dd57350b28fdf23f659ba8d08612dc535b9eb91800659a38299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b7b04a37fb972dd57350b28fdf23f659ba8d08612dc535b9eb91800659a38299->leave($__internal_b7b04a37fb972dd57350b28fdf23f659ba8d08612dc535b9eb91800659a38299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
