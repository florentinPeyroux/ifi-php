<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c445f3b3a65c8c4eef33f9044fb609d1b59b1289fc609fc0f75b9291ee17f063 extends Twig_Template
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
        $__internal_320aed58b1646d3758a0b66924674a1a5b6d87b9c5faac54a45412b822b3c45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320aed58b1646d3758a0b66924674a1a5b6d87b9c5faac54a45412b822b3c45b->enter($__internal_320aed58b1646d3758a0b66924674a1a5b6d87b9c5faac54a45412b822b3c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_320aed58b1646d3758a0b66924674a1a5b6d87b9c5faac54a45412b822b3c45b->leave($__internal_320aed58b1646d3758a0b66924674a1a5b6d87b9c5faac54a45412b822b3c45b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
