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

/* themes/contrib/radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_b3b7ab433da615fbd4397b65bd08f94d extends Template
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
        $this->loadTemplate("themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 7, "2113018298")->display(twig_array_merge($context, ["html_tag" => "div", "utility_classes" => [0 => "block--system-branding"]]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the branding block.
 */
#}
{% embed '@radix/block/block.twig' with {
  html_tag: 'div',
  utility_classes: [
    'block--system-branding',
  ],
} %}

  {% block content %}
    {% include '@radix/navbar/navbar-brand.twig' with {
      text: site_name,
      image: site_logo,
      width: 30,
      height: 'auto',
      path: path('<front>'),
      alt: elements.content.site_name['#markup'] ~ ' logo' ,
    } %}
  {% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "/app/web/themes/contrib/radix/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
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


/* themes/contrib/radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_b3b7ab433da615fbd4397b65bd08f94d___2113018298 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        return "@radix/block/block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/block/block.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("@radix/navbar/navbar-brand.twig", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", 15)->display(twig_array_merge($context, ["text" =>         // line 16
($context["site_name"] ?? null), "image" =>         // line 17
($context["site_logo"] ?? null), "width" => 30, "height" => "auto", "path" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "alt" => ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["elements"] ?? null), "content", [], "any", false, false, true, 21), "site_name", [], "any", false, false, true, 21)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) . " logo")]));
        // line 23
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 23,  157 => 21,  156 => 17,  155 => 16,  153 => 15,  149 => 14,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the branding block.
 */
#}
{% embed '@radix/block/block.twig' with {
  html_tag: 'div',
  utility_classes: [
    'block--system-branding',
  ],
} %}

  {% block content %}
    {% include '@radix/navbar/navbar-brand.twig' with {
      text: site_name,
      image: site_logo,
      width: 30,
      height: 'auto',
      path: path('<front>'),
      alt: elements.content.site_name['#markup'] ~ ' logo' ,
    } %}
  {% endblock %}

{% endembed %}
", "themes/contrib/radix/templates/block/block--system-branding-block.html.twig", "/app/web/themes/contrib/radix/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 15);
        static $filters = array();
        static $functions = array("path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                ['path']
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
