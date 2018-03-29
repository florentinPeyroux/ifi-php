<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a12fe4c190422aa3a7a9af12158642785dab83c0e55a80afe4aa2c697710db3 extends Twig_Template
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
        $__internal_4fc6cfe35fabde6a0ed3c4a6728172de753f408ea3c849bf46e46b969ce7eb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc6cfe35fabde6a0ed3c4a6728172de753f408ea3c849bf46e46b969ce7eb8c->enter($__internal_4fc6cfe35fabde6a0ed3c4a6728172de753f408ea3c849bf46e46b969ce7eb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4fc6cfe35fabde6a0ed3c4a6728172de753f408ea3c849bf46e46b969ce7eb8c->leave($__internal_4fc6cfe35fabde6a0ed3c4a6728172de753f408ea3c849bf46e46b969ce7eb8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
