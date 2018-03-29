<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b4d897ca57f2875afcc540b943ed2cfd891f0026fbd56ddb56a814d0779f3acf extends Twig_Template
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
        $__internal_60e300f18ba92dc80aedb4ebca12d0b92e94bb12b99bccb08e27adab55a9538a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e300f18ba92dc80aedb4ebca12d0b92e94bb12b99bccb08e27adab55a9538a->enter($__internal_60e300f18ba92dc80aedb4ebca12d0b92e94bb12b99bccb08e27adab55a9538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_60e300f18ba92dc80aedb4ebca12d0b92e94bb12b99bccb08e27adab55a9538a->leave($__internal_60e300f18ba92dc80aedb4ebca12d0b92e94bb12b99bccb08e27adab55a9538a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
