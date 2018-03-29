<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_050cece084d5ca029579d22b108684910971a898195422b065ae59d9362712b5 extends Twig_Template
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
        $__internal_748d9d780b467cb478d5b1e0660252eef0418d6e8a4ac5fe3b1ea76e8f8644ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748d9d780b467cb478d5b1e0660252eef0418d6e8a4ac5fe3b1ea76e8f8644ea->enter($__internal_748d9d780b467cb478d5b1e0660252eef0418d6e8a4ac5fe3b1ea76e8f8644ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_748d9d780b467cb478d5b1e0660252eef0418d6e8a4ac5fe3b1ea76e8f8644ea->leave($__internal_748d9d780b467cb478d5b1e0660252eef0418d6e8a4ac5fe3b1ea76e8f8644ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
