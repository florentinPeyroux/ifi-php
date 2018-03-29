<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ab2d45f78f43b8394e6f28ed33057da419fd7ece05e7bb99665836ce8fd85f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455aafd94578b6546f42849da7425300ff2646b07acfd792d81a37d6b951d460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455aafd94578b6546f42849da7425300ff2646b07acfd792d81a37d6b951d460->enter($__internal_455aafd94578b6546f42849da7425300ff2646b07acfd792d81a37d6b951d460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_455aafd94578b6546f42849da7425300ff2646b07acfd792d81a37d6b951d460->leave($__internal_455aafd94578b6546f42849da7425300ff2646b07acfd792d81a37d6b951d460_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f36a52bcd1ca3070fde9c47aee590411a50b386288d243b5f614c4b06c36f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f36a52bcd1ca3070fde9c47aee590411a50b386288d243b5f614c4b06c36f3c->enter($__internal_1f36a52bcd1ca3070fde9c47aee590411a50b386288d243b5f614c4b06c36f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1f36a52bcd1ca3070fde9c47aee590411a50b386288d243b5f614c4b06c36f3c->leave($__internal_1f36a52bcd1ca3070fde9c47aee590411a50b386288d243b5f614c4b06c36f3c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6aa424e4715a8865989a59cea3ead110d1bd80eaba794bcf9d7e2c1360096a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa424e4715a8865989a59cea3ead110d1bd80eaba794bcf9d7e2c1360096a66->enter($__internal_6aa424e4715a8865989a59cea3ead110d1bd80eaba794bcf9d7e2c1360096a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6aa424e4715a8865989a59cea3ead110d1bd80eaba794bcf9d7e2c1360096a66->leave($__internal_6aa424e4715a8865989a59cea3ead110d1bd80eaba794bcf9d7e2c1360096a66_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_75051b2ccd211710e89334451ae866755647b43aa1050441adc50699ee640d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75051b2ccd211710e89334451ae866755647b43aa1050441adc50699ee640d84->enter($__internal_75051b2ccd211710e89334451ae866755647b43aa1050441adc50699ee640d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75051b2ccd211710e89334451ae866755647b43aa1050441adc50699ee640d84->leave($__internal_75051b2ccd211710e89334451ae866755647b43aa1050441adc50699ee640d84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/m2eserv/peyroux/project/ifi-php/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
