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

/* @radix/title/title.twig */
class __TwigTemplate_78f8017ff462794421c3e01ede24bab6 extends Template
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
        $context["title_tag"] = (($context["title_tag"]) ?? ("h1"));
        // line 8
        $context["is_page_title"] = (($context["is_page_title"]) ?? (true));
        // line 9
        $context["link"] = (($context["link"]) ?? (false));
        // line 10
        echo "
";
        // line 11
        $context["title_classes"] = twig_array_merge([0 => ((        // line 12
($context["is_page_title"] ?? null)) ? ("page-title") : ("")), 1 => ((        // line 13
($context["display_size"] ?? null)) ? (("display-" . $this->sandbox->ensureToStringAllowed(($context["display_size"] ?? null), 13, $this->source))) : (""))], ((        // line 14
($context["title_utility_classes"] ?? null)) ? (($context["title_utility_classes"] ?? null)) : ([])));
        // line 15
        echo "
";
        // line 16
        $context["title_link_classes"] = twig_array_merge([0 => ((        // line 17
($context["is_page_title"] ?? null)) ? ("page-title__link") : (""))], ((        // line 18
($context["_title_link_classes"] ?? null)) ? (($context["_title_link_classes"] ?? null)) : ([])));
        // line 19
        echo "
";
        // line 20
        if (twig_test_empty(($context["title_link_attributes"] ?? null))) {
            // line 21
            echo "  ";
            $context["title_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 23
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 24, $this->source), "html", null, true);
        echo "

";
        // line 26
        if (($context["title"] ?? null)) {
            // line 27
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_tag"] ?? null), 27, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
            echo ">
    ";
            // line 28
            if (($context["link"] ?? null)) {
                // line 29
                echo "      <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 29, $this->source), "html", null, true);
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_link_attributes"] ?? null), "addClass", [0 => ($context["title_link_classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 29, $this->source), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 31
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 31, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 33
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_tag"] ?? null), 33, $this->source), "html", null, true);
            echo ">
";
        }
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 35, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@radix/title/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  104 => 33,  98 => 31,  88 => 29,  86 => 28,  79 => 27,  77 => 26,  72 => 24,  69 => 23,  65 => 21,  63 => 20,  60 => 19,  58 => 18,  57 => 17,  56 => 16,  53 => 15,  51 => 14,  50 => 13,  49 => 12,  48 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the page title.
 */
#}
{% set title_tag = title_tag ?? 'h1' %}
{% set is_page_title = is_page_title ?? true %}
{% set link = link ?? false %}

{% set title_classes = [
  is_page_title ? 'page-title',
  display_size ? 'display-' ~ display_size
]|merge(title_utility_classes ? title_utility_classes : []) %}

{% set title_link_classes = [
  is_page_title ? 'page-title__link',
]|merge(_title_link_classes ? _title_link_classes : []) %}

{% if title_link_attributes is empty %}
  {% set title_link_attributes = create_attribute() %}
{% endif %}

{{ title_prefix }}

{% if title %}
  <{{title_tag}} {{ title_attributes.addClass(title_classes) }}>
    {% if link %}
      <a href=\"{{ url }}\" {{ title_link_attributes.addClass(title_link_classes) }}>{{ title }}</a>
    {% else %}
      {{ title }}
    {% endif %}
  </{{title_tag}}>
{% endif %}
{{ title_suffix }}
", "@radix/title/title.twig", "themes/contrib/radix/src/components/title/title.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "if" => 20);
        static $filters = array("merge" => 14, "escape" => 24);
        static $functions = array("create_attribute" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
                ['create_attribute']
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
