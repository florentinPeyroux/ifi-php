<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_75517ae100ce42e1244f5224d5a8eae16122fdb83faa59791174f78cd442e912 extends Twig_Template
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
        $__internal_a2926796f9ee5e5d637cf7f525db70daeff74f0261a46c4ec935ad82ddb46106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2926796f9ee5e5d637cf7f525db70daeff74f0261a46c4ec935ad82ddb46106->enter($__internal_a2926796f9ee5e5d637cf7f525db70daeff74f0261a46c4ec935ad82ddb46106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a2926796f9ee5e5d637cf7f525db70daeff74f0261a46c4ec935ad82ddb46106->leave($__internal_a2926796f9ee5e5d637cf7f525db70daeff74f0261a46c4ec935ad82ddb46106_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
