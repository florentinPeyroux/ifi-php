<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f8edf676cc92f80274dc6377e1e8b72a4389a25064f8694ab75b220f19291c69 extends Twig_Template
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
        $__internal_636fbe4f0df760e3ec9cf6de03107c4c6d3b95d5fa0093824f84aa3ff9a5aabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636fbe4f0df760e3ec9cf6de03107c4c6d3b95d5fa0093824f84aa3ff9a5aabf->enter($__internal_636fbe4f0df760e3ec9cf6de03107c4c6d3b95d5fa0093824f84aa3ff9a5aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_636fbe4f0df760e3ec9cf6de03107c4c6d3b95d5fa0093824f84aa3ff9a5aabf->leave($__internal_636fbe4f0df760e3ec9cf6de03107c4c6d3b95d5fa0093824f84aa3ff9a5aabf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
