<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_67dd71ef936382902b2ce7f4baaacc42026371ba845660990e14c85a8c9b30b7 extends Twig_Template
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
        $__internal_c3615d99507475795f99b80524942910ef593a5e5615dc6069aca020ce94b338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3615d99507475795f99b80524942910ef593a5e5615dc6069aca020ce94b338->enter($__internal_c3615d99507475795f99b80524942910ef593a5e5615dc6069aca020ce94b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c3615d99507475795f99b80524942910ef593a5e5615dc6069aca020ce94b338->leave($__internal_c3615d99507475795f99b80524942910ef593a5e5615dc6069aca020ce94b338_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
