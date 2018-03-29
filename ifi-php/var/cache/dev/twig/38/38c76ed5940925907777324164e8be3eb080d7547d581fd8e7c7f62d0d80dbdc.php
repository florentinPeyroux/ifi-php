<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_823f051e84ae12b5c0189e27d41ec0d1117271f0df6abb52548e8adcc7f9b275 extends Twig_Template
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
        $__internal_43cdd5097ea55cc7f2c5fa94ba1de7e1739b3600497bce6e476c74c94967201f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cdd5097ea55cc7f2c5fa94ba1de7e1739b3600497bce6e476c74c94967201f->enter($__internal_43cdd5097ea55cc7f2c5fa94ba1de7e1739b3600497bce6e476c74c94967201f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_43cdd5097ea55cc7f2c5fa94ba1de7e1739b3600497bce6e476c74c94967201f->leave($__internal_43cdd5097ea55cc7f2c5fa94ba1de7e1739b3600497bce6e476c74c94967201f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
