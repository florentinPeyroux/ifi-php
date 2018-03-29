<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_12f37101f7fdfbb8539c57cef20b063191f6eb18c0ac1461d546db7fb3c8a466 extends Twig_Template
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
        $__internal_34a8c45ffae60cf18f4f8442f1b27b39ba76825ba651ae1578d1204bf6dd4269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a8c45ffae60cf18f4f8442f1b27b39ba76825ba651ae1578d1204bf6dd4269->enter($__internal_34a8c45ffae60cf18f4f8442f1b27b39ba76825ba651ae1578d1204bf6dd4269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_34a8c45ffae60cf18f4f8442f1b27b39ba76825ba651ae1578d1204bf6dd4269->leave($__internal_34a8c45ffae60cf18f4f8442f1b27b39ba76825ba651ae1578d1204bf6dd4269_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
