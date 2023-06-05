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

/* @radix/views/views-view.twig */
class __TwigTemplate_84f6c72fccd990e1d1e372a8a4e4ad53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'exposed' => [$this, 'block_exposed'],
            'attachment_before' => [$this, 'block_attachment_before'],
            'rows' => [$this, 'block_rows'],
            'pager' => [$this, 'block_pager'],
            'more' => [$this, 'block_more'],
            'footer' => [$this, 'block_footer'],
            'feed_icons' => [$this, 'block_feed_icons'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["classes"] = [0 => ((        // line 35
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 35, $this->source))) : ("")), 1 => ((        // line 36
($context["css_name"] ?? null)) ? (("view-" . $this->sandbox->ensureToStringAllowed(($context["css_name"] ?? null), 36, $this->source))) : (""))];
        // line 39
        $context["title"] = (($context["title"]) ?? (true));
        // line 40
        echo "
<div";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
  ";
        // line 42
        $this->displayBlock('title', $context, $blocks);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('exposed', $context, $blocks);
        // line 63
        echo "
  ";
        // line 64
        $this->displayBlock('attachment_before', $context, $blocks);
        // line 71
        echo "
  ";
        // line 72
        $this->displayBlock('rows', $context, $blocks);
        // line 87
        echo "
  ";
        // line 88
        $this->displayBlock('pager', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        $this->displayBlock('more', $context, $blocks);
        // line 104
        echo "
  ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "
  ";
        // line 113
        $this->displayBlock('feed_icons', $context, $blocks);
        // line 120
        echo "</div>
";
    }

    // line 42
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "   ";
        if (($context["title"] ?? null)) {
            // line 44
            echo "    ";
            $this->loadTemplate("@radix/title/title.twig", "@radix/views/views-view.twig", 44)->display($context);
            // line 45
            echo "   ";
        }
        // line 46
        echo "  ";
    }

    // line 48
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        if (($context["header"] ?? null)) {
            // line 50
            echo "      <div class=\"view-header\">
        ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 54
        echo "  ";
    }

    // line 56
    public function block_exposed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    ";
        if (($context["exposed"] ?? null)) {
            // line 58
            echo "      <div class=\"view-filters\">
        ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 59, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 62
        echo "  ";
    }

    // line 64
    public function block_attachment_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 66
            echo "      <div class=\"attachment attachment-before\">
        ";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 67, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 70
        echo "  ";
    }

    // line 72
    public function block_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        if (($context["rows"] ?? null)) {
            // line 74
            echo "      <div class=\"view-content\">
        ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 75, $this->source), "html", null, true);
            echo "
      </div>
    ";
        } elseif (        // line 77
($context["empty"] ?? null)) {
            // line 78
            echo "      ";
            $this->loadTemplate("@radix/views/views-view.twig", "@radix/views/views-view.twig", 78, "1641197506")->display(twig_array_merge($context, ["type" => "warning", "heading" => false, "content" =>             // line 81
($context["empty"] ?? null), "alert_utility_classes" => [0 => "view-empty"]]));
            // line 85
            echo "    ";
        }
        // line 86
        echo "  ";
    }

    // line 88
    public function block_pager($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "    ";
        if (($context["pager"] ?? null)) {
            // line 90
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 90, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 92
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 93
            echo "      <div class=\"attachment attachment-after\">
        ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 94, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 97
        echo "  ";
    }

    // line 99
    public function block_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 101
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 101, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 103
        echo "  ";
    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 107
            echo "      <div class=\"view-footer\">
        ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 108, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 111
        echo "  ";
    }

    // line 113
    public function block_feed_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 115
            echo "      <div class=\"feed-icons\">
        ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 116, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 119
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@radix/views/views-view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 119,  289 => 116,  286 => 115,  283 => 114,  279 => 113,  275 => 111,  269 => 108,  266 => 107,  263 => 106,  259 => 105,  255 => 103,  249 => 101,  246 => 100,  242 => 99,  238 => 97,  232 => 94,  229 => 93,  226 => 92,  220 => 90,  217 => 89,  213 => 88,  209 => 86,  206 => 85,  204 => 81,  202 => 78,  200 => 77,  195 => 75,  192 => 74,  189 => 73,  185 => 72,  181 => 70,  175 => 67,  172 => 66,  169 => 65,  165 => 64,  161 => 62,  155 => 59,  152 => 58,  149 => 57,  145 => 56,  141 => 54,  135 => 51,  132 => 50,  129 => 49,  125 => 48,  121 => 46,  118 => 45,  115 => 44,  112 => 43,  108 => 42,  103 => 120,  101 => 113,  98 => 112,  96 => 105,  93 => 104,  91 => 99,  88 => 98,  86 => 88,  83 => 87,  81 => 72,  78 => 71,  76 => 64,  73 => 63,  71 => 56,  68 => 55,  66 => 48,  63 => 47,  61 => 42,  57 => 41,  54 => 40,  52 => 39,  50 => 36,  49 => 35,  48 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
    css_name ? 'view-' ~ css_name,
  ]
%}
{% set title = title ?? true %}

<div{{ attributes.addClass(classes) }}>
  {% block title %}
   {% if title %}
    {% include \"@radix/title/title.twig\" %}
   {% endif %}
  {% endblock %}

  {% block header %}
    {% if header %}
      <div class=\"view-header\">
        {{ header }}
      </div>
    {% endif %}
  {% endblock %}

  {% block exposed %}
    {% if exposed %}
      <div class=\"view-filters\">
        {{ exposed }}
      </div>
    {% endif %}
  {% endblock %}

  {% block attachment_before %}
    {% if attachment_before %}
      <div class=\"attachment attachment-before\">
        {{ attachment_before }}
      </div>
    {% endif %}
  {% endblock %}

  {% block rows %}
    {% if rows %}
      <div class=\"view-content\">
        {{ rows }}
      </div>
    {% elseif empty %}
      {% embed '@radix/alert/alert.twig' with {
        type: 'warning',
        heading: false,
        content: empty,
        alert_utility_classes: ['view-empty']
      } %}
      {% endembed %}
    {% endif %}
  {% endblock %}

  {% block pager %}
    {% if pager %}
      {{ pager }}
    {% endif %}
    {% if attachment_after %}
      <div class=\"attachment attachment-after\">
        {{ attachment_after }}
      </div>
    {% endif %}
  {% endblock %}

  {% block more %}
    {% if more %}
      {{ more }}
    {% endif %}
  {% endblock %}

  {% block footer %}
    {% if footer %}
      <div class=\"view-footer\">
        {{ footer }}
      </div>
    {% endif %}
  {% endblock %}

  {% block feed_icons %}
    {% if feed_icons %}
      <div class=\"feed-icons\">
        {{ feed_icons }}
      </div>
    {% endif %}
  {% endblock %}
</div>
", "@radix/views/views-view.twig", "themes/contrib/radix/src/components/views/views-view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "block" => 42, "if" => 43, "include" => 44, "embed" => 78);
        static $filters = array("escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include', 'embed'],
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


/* @radix/views/views-view.twig */
class __TwigTemplate_84f6c72fccd990e1d1e372a8a4e4ad53___1641197506 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 78
        return "@radix/alert/alert.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/alert/alert.twig", "@radix/views/views-view.twig", 78);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@radix/views/views-view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 78,  295 => 119,  289 => 116,  286 => 115,  283 => 114,  279 => 113,  275 => 111,  269 => 108,  266 => 107,  263 => 106,  259 => 105,  255 => 103,  249 => 101,  246 => 100,  242 => 99,  238 => 97,  232 => 94,  229 => 93,  226 => 92,  220 => 90,  217 => 89,  213 => 88,  209 => 86,  206 => 85,  204 => 81,  202 => 78,  200 => 77,  195 => 75,  192 => 74,  189 => 73,  185 => 72,  181 => 70,  175 => 67,  172 => 66,  169 => 65,  165 => 64,  161 => 62,  155 => 59,  152 => 58,  149 => 57,  145 => 56,  141 => 54,  135 => 51,  132 => 50,  129 => 49,  125 => 48,  121 => 46,  118 => 45,  115 => 44,  112 => 43,  108 => 42,  103 => 120,  101 => 113,  98 => 112,  96 => 105,  93 => 104,  91 => 99,  88 => 98,  86 => 88,  83 => 87,  81 => 72,  78 => 71,  76 => 64,  73 => 63,  71 => 56,  68 => 55,  66 => 48,  63 => 47,  61 => 42,  57 => 41,  54 => 40,  52 => 39,  50 => 36,  49 => 35,  48 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
    css_name ? 'view-' ~ css_name,
  ]
%}
{% set title = title ?? true %}

<div{{ attributes.addClass(classes) }}>
  {% block title %}
   {% if title %}
    {% include \"@radix/title/title.twig\" %}
   {% endif %}
  {% endblock %}

  {% block header %}
    {% if header %}
      <div class=\"view-header\">
        {{ header }}
      </div>
    {% endif %}
  {% endblock %}

  {% block exposed %}
    {% if exposed %}
      <div class=\"view-filters\">
        {{ exposed }}
      </div>
    {% endif %}
  {% endblock %}

  {% block attachment_before %}
    {% if attachment_before %}
      <div class=\"attachment attachment-before\">
        {{ attachment_before }}
      </div>
    {% endif %}
  {% endblock %}

  {% block rows %}
    {% if rows %}
      <div class=\"view-content\">
        {{ rows }}
      </div>
    {% elseif empty %}
      {% embed '@radix/alert/alert.twig' with {
        type: 'warning',
        heading: false,
        content: empty,
        alert_utility_classes: ['view-empty']
      } %}
      {% endembed %}
    {% endif %}
  {% endblock %}

  {% block pager %}
    {% if pager %}
      {{ pager }}
    {% endif %}
    {% if attachment_after %}
      <div class=\"attachment attachment-after\">
        {{ attachment_after }}
      </div>
    {% endif %}
  {% endblock %}

  {% block more %}
    {% if more %}
      {{ more }}
    {% endif %}
  {% endblock %}

  {% block footer %}
    {% if footer %}
      <div class=\"view-footer\">
        {{ footer }}
      </div>
    {% endif %}
  {% endblock %}

  {% block feed_icons %}
    {% if feed_icons %}
      <div class=\"feed-icons\">
        {{ feed_icons }}
      </div>
    {% endif %}
  {% endblock %}
</div>
", "@radix/views/views-view.twig", "themes/contrib/radix/src/components/views/views-view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
