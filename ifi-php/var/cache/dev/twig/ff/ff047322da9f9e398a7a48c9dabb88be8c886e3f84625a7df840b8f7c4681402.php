<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_376861722b5477087ec23e8129df9cd6742cb343141b964582701c5d71eff1a5 extends Twig_Template
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
        $__internal_a7d07d3a9c2cb5e32f43fc4a263f919ec5e775bf0002ad5fb07241a2d70093cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d07d3a9c2cb5e32f43fc4a263f919ec5e775bf0002ad5fb07241a2d70093cf->enter($__internal_a7d07d3a9c2cb5e32f43fc4a263f919ec5e775bf0002ad5fb07241a2d70093cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a7d07d3a9c2cb5e32f43fc4a263f919ec5e775bf0002ad5fb07241a2d70093cf->leave($__internal_a7d07d3a9c2cb5e32f43fc4a263f919ec5e775bf0002ad5fb07241a2d70093cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
