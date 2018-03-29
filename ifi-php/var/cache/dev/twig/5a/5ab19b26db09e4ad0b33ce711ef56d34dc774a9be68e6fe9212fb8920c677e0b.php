<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_25c6ecf604397f1aeaefc85b253622cdbf85793a7c81217986ddfe85d8386425 extends Twig_Template
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
        $__internal_103e821d8fd31e5f0893f8f434ed5e56c3b74c47be128456779813bf32725b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103e821d8fd31e5f0893f8f434ed5e56c3b74c47be128456779813bf32725b77->enter($__internal_103e821d8fd31e5f0893f8f434ed5e56c3b74c47be128456779813bf32725b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_103e821d8fd31e5f0893f8f434ed5e56c3b74c47be128456779813bf32725b77->leave($__internal_103e821d8fd31e5f0893f8f434ed5e56c3b74c47be128456779813bf32725b77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
