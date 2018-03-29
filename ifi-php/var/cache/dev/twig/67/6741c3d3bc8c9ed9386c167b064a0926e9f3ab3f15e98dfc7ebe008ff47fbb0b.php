<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e90bf31675ef2720099c5cf6426490f5c2f793b4122b0fbfeda68f2042e7b763 extends Twig_Template
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
        $__internal_ec5b5b9d69f9daf20176dc49c24cea70c742642d6361b94f18335148098087d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5b5b9d69f9daf20176dc49c24cea70c742642d6361b94f18335148098087d9->enter($__internal_ec5b5b9d69f9daf20176dc49c24cea70c742642d6361b94f18335148098087d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ec5b5b9d69f9daf20176dc49c24cea70c742642d6361b94f18335148098087d9->leave($__internal_ec5b5b9d69f9daf20176dc49c24cea70c742642d6361b94f18335148098087d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
