<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ba60d88adbf5e76f48f1481afd533a0440bb31164a45d09ae31d3d09d17113eb extends Twig_Template
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
        $__internal_4fb6643e5e6d7bade84f9138505f8d36b23dbf0313ab77fdb883531a836e2acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb6643e5e6d7bade84f9138505f8d36b23dbf0313ab77fdb883531a836e2acf->enter($__internal_4fb6643e5e6d7bade84f9138505f8d36b23dbf0313ab77fdb883531a836e2acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4fb6643e5e6d7bade84f9138505f8d36b23dbf0313ab77fdb883531a836e2acf->leave($__internal_4fb6643e5e6d7bade84f9138505f8d36b23dbf0313ab77fdb883531a836e2acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
