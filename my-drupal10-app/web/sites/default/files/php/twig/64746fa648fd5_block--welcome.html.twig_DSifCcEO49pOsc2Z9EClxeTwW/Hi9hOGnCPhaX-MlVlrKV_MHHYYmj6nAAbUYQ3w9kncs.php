<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/subtheme_misho/templates/block/block--welcome.html.twig */
class __TwigTemplate_9a7e25ea77b888422785c15038e42af5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $this->loadTemplate("@radix/block/block.twig", "themes/custom/subtheme_misho/templates/block/block--welcome.html.twig", 7)->display(twig_array_merge($context, ["html_tag" => "div"]));
        // line 10
        echo "

<style>


  h2 {
    text-align: center;
  }


</style>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme_misho/templates/block/block--welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for a block.
 */
#}
{% include '@radix/block/block.twig' with {
  html_tag: 'div',
} %}


<style>


  h2 {
    text-align: center;
  }


</style>
", "themes/custom/subtheme_misho/templates/block/block--welcome.html.twig", "/app/web/themes/custom/subtheme_misho/templates/block/block--welcome.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
