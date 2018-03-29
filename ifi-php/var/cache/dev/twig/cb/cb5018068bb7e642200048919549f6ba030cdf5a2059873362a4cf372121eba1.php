<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_943f7b05a862e1c0ed96e8959a4858660428823396743400efb03eae5c8b1fb6 extends Twig_Template
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
        $__internal_2e21bf38515fe682dd9d0a4012fa38835509877d525f5f7f5825b9f9ead259ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e21bf38515fe682dd9d0a4012fa38835509877d525f5f7f5825b9f9ead259ad->enter($__internal_2e21bf38515fe682dd9d0a4012fa38835509877d525f5f7f5825b9f9ead259ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_2e21bf38515fe682dd9d0a4012fa38835509877d525f5f7f5825b9f9ead259ad->leave($__internal_2e21bf38515fe682dd9d0a4012fa38835509877d525f5f7f5825b9f9ead259ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
