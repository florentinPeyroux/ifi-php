<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0aaf5b1785f624e0f4fc8a0486ca6787c9435194f2390fa3649a073aa93a26cb extends Twig_Template
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
        $__internal_59ae9df2a8ae5208eec9fa53026f86c332e6716c7a9b9a5a04fbeb113bc3ba20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ae9df2a8ae5208eec9fa53026f86c332e6716c7a9b9a5a04fbeb113bc3ba20->enter($__internal_59ae9df2a8ae5208eec9fa53026f86c332e6716c7a9b9a5a04fbeb113bc3ba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_59ae9df2a8ae5208eec9fa53026f86c332e6716c7a9b9a5a04fbeb113bc3ba20->leave($__internal_59ae9df2a8ae5208eec9fa53026f86c332e6716c7a9b9a5a04fbeb113bc3ba20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
