<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57c6ef040c689799e10fb7cb1a1c5c675c399fbe222dbe460b93facffd4319d6 extends Twig_Template
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
        $__internal_29d903473bbafd53718b43829c1dddf0447a9487a734943e5627e69e267fcc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d903473bbafd53718b43829c1dddf0447a9487a734943e5627e69e267fcc40->enter($__internal_29d903473bbafd53718b43829c1dddf0447a9487a734943e5627e69e267fcc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_29d903473bbafd53718b43829c1dddf0447a9487a734943e5627e69e267fcc40->leave($__internal_29d903473bbafd53718b43829c1dddf0447a9487a734943e5627e69e267fcc40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
