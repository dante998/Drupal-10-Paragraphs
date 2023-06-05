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

/* themes/custom/subtheme_misho/templates/navigation/links.html.twig */
class __TwigTemplate_40282bf7a3f25dc56419884323f19f6f extends Template
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
        if (($context["links"] ?? null)) {
            // line 8
            $this->loadTemplate("themes/custom/subtheme_misho/templates/navigation/links.html.twig", "themes/custom/subtheme_misho/templates/navigation/links.html.twig", 8, "241780815")->display(twig_array_merge($context, ["items" =>             // line 9
($context["links"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme_misho/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for links.
 */
#}
{% if links -%}
  {% embed '@radix/nav/nav.twig' with {
    items: links,
  } %}

    {% block items %}
      {% for item in links %}
        <li{{ item.attributes.addClass('nav-item') }}>
          {%- if item.link -%}
            <span{{ item.link.text_attributes.addClass('nav-link') }}>{{ item.link }}</span>
          {%- elseif item.text_attributes -%}
            <span{{ item.text_attributes.addClass('nav-link') }}>{{ item.text }}</span>
          {%- else -%}
            <span class=\"nav-link\">{{ item.text }}</span>
          {%- endif -%}
        </li>
      {% endfor %}
    {% endblock %}
  {% endembed %}
{%- endif %}
", "themes/custom/subtheme_misho/templates/navigation/links.html.twig", "/app/web/themes/custom/subtheme_misho/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "embed" => 8);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
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


/* themes/custom/subtheme_misho/templates/navigation/links.html.twig */
class __TwigTemplate_40282bf7a3f25dc56419884323f19f6f___241780815 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "@radix/nav/nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/nav/nav.twig", "themes/custom/subtheme_misho/templates/navigation/links.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 14), "addClass", [0 => "nav-item"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo ">";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 15)) {
                // line 16
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 16), "text_attributes", [], "any", false, false, true, 16), "addClass", [0 => "nav-link"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</span>";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 17
$context["item"], "text_attributes", [], "any", false, false, true, 17)) {
                // line 18
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 18), "addClass", [0 => "nav-link"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</span>";
            } else {
                // line 20
                echo "<span class=\"nav-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</span>";
            }
            // line 22
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme_misho/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 24,  190 => 22,  185 => 20,  178 => 18,  176 => 17,  170 => 16,  168 => 15,  164 => 14,  159 => 13,  155 => 12,  144 => 8,  42 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for links.
 */
#}
{% if links -%}
  {% embed '@radix/nav/nav.twig' with {
    items: links,
  } %}

    {% block items %}
      {% for item in links %}
        <li{{ item.attributes.addClass('nav-item') }}>
          {%- if item.link -%}
            <span{{ item.link.text_attributes.addClass('nav-link') }}>{{ item.link }}</span>
          {%- elseif item.text_attributes -%}
            <span{{ item.text_attributes.addClass('nav-link') }}>{{ item.text }}</span>
          {%- else -%}
            <span class=\"nav-link\">{{ item.text }}</span>
          {%- endif -%}
        </li>
      {% endfor %}
    {% endblock %}
  {% endembed %}
{%- endif %}
", "themes/custom/subtheme_misho/templates/navigation/links.html.twig", "/app/web/themes/custom/subtheme_misho/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13, "if" => 15);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
