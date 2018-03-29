<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4a9e105ded96077d00292dabdb5bba523c80414da26f4109fdca9d5764bc6c02 extends Twig_Template
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
        $__internal_d23a48398eb7cb384f092718c7cd4bf24e1ecc15085bd3013d285dff1d8ec006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23a48398eb7cb384f092718c7cd4bf24e1ecc15085bd3013d285dff1d8ec006->enter($__internal_d23a48398eb7cb384f092718c7cd4bf24e1ecc15085bd3013d285dff1d8ec006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d23a48398eb7cb384f092718c7cd4bf24e1ecc15085bd3013d285dff1d8ec006->leave($__internal_d23a48398eb7cb384f092718c7cd4bf24e1ecc15085bd3013d285dff1d8ec006_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
