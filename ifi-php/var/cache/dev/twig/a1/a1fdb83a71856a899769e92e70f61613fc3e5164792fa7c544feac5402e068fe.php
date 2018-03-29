<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_5bb8d3f89b9e4eb9d01eef9b9a2de214fc55bb284dc4dc8b6d8b9be5fdfbc55a extends Twig_Template
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
        $__internal_32c80d5e20453e2ee8d9c7ee1523887f6b389b4574a8fc167aa642489bf53b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c80d5e20453e2ee8d9c7ee1523887f6b389b4574a8fc167aa642489bf53b30->enter($__internal_32c80d5e20453e2ee8d9c7ee1523887f6b389b4574a8fc167aa642489bf53b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_32c80d5e20453e2ee8d9c7ee1523887f6b389b4574a8fc167aa642489bf53b30->leave($__internal_32c80d5e20453e2ee8d9c7ee1523887f6b389b4574a8fc167aa642489bf53b30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/range_widget.html.php");
    }
}
