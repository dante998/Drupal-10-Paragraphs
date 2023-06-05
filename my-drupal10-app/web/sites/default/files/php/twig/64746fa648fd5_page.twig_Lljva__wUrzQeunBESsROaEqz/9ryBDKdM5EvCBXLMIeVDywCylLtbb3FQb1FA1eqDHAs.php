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

/* @radix/page/page.twig */
class __TwigTemplate_b330e1bd92cc41ddf3cdf01594c5e960 extends Template
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
        $context["page_classes"] = twig_array_merge([0 => "py-5"], ((        // line 9
($context["page_utility_classes"] ?? null)) ? (($context["page_utility_classes"] ?? null)) : ([])));
        // line 10
        echo "
<div class=\"page\">
  ";
        // line 12
        $this->loadTemplate("@radix/page/page.twig", "@radix/page/page.twig", 12, "169155793")->display(twig_array_merge($context, ["container" => "fixed", "color" => "light", "utility_classes" => [0 => "bg-light"]]));
        // line 40
        echo "
  <main";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["page_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 43
        echo "
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 44)) {
            // line 45
            echo "      <header class=\"page__header mb-3\">
        <div class=\"container\">
          ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
        </div>
      </header>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 52)) {
            // line 53
            echo "      <div class=\"page__content\">
        <div class=\"container\">
          ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 59
        echo "  </main>

  ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 61)) {
            // line 62
            echo "    <footer class=\"page__footer\">
      <div class=\"container\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </footer>
  ";
        }
        // line 70
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@radix/page/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 70,  98 => 65,  93 => 62,  91 => 61,  87 => 59,  80 => 55,  76 => 53,  74 => 52,  71 => 51,  64 => 47,  60 => 45,  58 => 44,  55 => 43,  51 => 41,  48 => 40,  46 => 12,  42 => 10,  40 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the main page.
 */
#}
{% set page_classes = [
  'py-5'
]|merge(page_utility_classes ? page_utility_classes : []) %}

<div class=\"page\">
  {% embed '@radix/navbar/navbar.twig' with {
    container: 'fixed',
    color: 'light',
    utility_classes: ['bg-light'],
  } %}

    {% block branding %}
      {% if page.navbar_branding %}
        {{ page.navbar_branding }}
      {% endif %}
    {% endblock %}

    {% block left %}
      {% if page.navbar_left %}
        <div class=\"me-auto\">
          {{ page.navbar_left }}
        </div>
      {% endif %}
    {% endblock %}

    {% block right %}
      {% if page.navbar_right %}
\t<div class=\"ms-auto\">
\t  {{ page.navbar_right }}
\t</div>
      {% endif %}
    {% endblock %}
  {% endembed %}

  <main{{ content_attributes.addClass(page_classes) }}>
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    {% if page.header %}
      <header class=\"page__header mb-3\">
        <div class=\"container\">
          {{ page.header }}
        </div>
      </header>
    {% endif %}

    {% if page.content %}
      <div class=\"page__content\">
        <div class=\"container\">
          {{ page.content }}
        </div>
      </div>
    {% endif %}
  </main>

  {% if page.footer %}
    <footer class=\"page__footer\">
      <div class=\"container\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          {{ page.footer }}
        </div>
      </div>
    </footer>
  {% endif %}
</div>
", "@radix/page/page.twig", "themes/contrib/radix/src/components/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "embed" => 12, "if" => 44);
        static $filters = array("merge" => 9, "escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed', 'if'],
                ['merge', 'escape'],
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


/* @radix/page/page.twig */
class __TwigTemplate_b330e1bd92cc41ddf3cdf01594c5e960___169155793 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@radix/navbar/navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@radix/navbar/navbar.twig", "@radix/page/page.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 19)) {
            // line 20
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 22
        echo "    ";
    }

    // line 24
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 25)) {
            // line 26
            echo "        <div class=\"me-auto\">
          ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 30
        echo "    ";
    }

    // line 32
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 33)) {
            // line 34
            echo "\t<div class=\"ms-auto\">
\t  ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
\t</div>
      ";
        }
        // line 38
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@radix/page/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 38,  312 => 35,  309 => 34,  306 => 33,  302 => 32,  298 => 30,  292 => 27,  289 => 26,  286 => 25,  282 => 24,  278 => 22,  272 => 20,  269 => 19,  265 => 18,  254 => 12,  106 => 70,  98 => 65,  93 => 62,  91 => 61,  87 => 59,  80 => 55,  76 => 53,  74 => 52,  71 => 51,  64 => 47,  60 => 45,  58 => 44,  55 => 43,  51 => 41,  48 => 40,  46 => 12,  42 => 10,  40 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Template for the main page.
 */
#}
{% set page_classes = [
  'py-5'
]|merge(page_utility_classes ? page_utility_classes : []) %}

<div class=\"page\">
  {% embed '@radix/navbar/navbar.twig' with {
    container: 'fixed',
    color: 'light',
    utility_classes: ['bg-light'],
  } %}

    {% block branding %}
      {% if page.navbar_branding %}
        {{ page.navbar_branding }}
      {% endif %}
    {% endblock %}

    {% block left %}
      {% if page.navbar_left %}
        <div class=\"me-auto\">
          {{ page.navbar_left }}
        </div>
      {% endif %}
    {% endblock %}

    {% block right %}
      {% if page.navbar_right %}
\t<div class=\"ms-auto\">
\t  {{ page.navbar_right }}
\t</div>
      {% endif %}
    {% endblock %}
  {% endembed %}

  <main{{ content_attributes.addClass(page_classes) }}>
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    {% if page.header %}
      <header class=\"page__header mb-3\">
        <div class=\"container\">
          {{ page.header }}
        </div>
      </header>
    {% endif %}

    {% if page.content %}
      <div class=\"page__content\">
        <div class=\"container\">
          {{ page.content }}
        </div>
      </div>
    {% endif %}
  </main>

  {% if page.footer %}
    <footer class=\"page__footer\">
      <div class=\"container\">
        <div class=\"d-flex justify-content-md-between align-items-md-center\">
          {{ page.footer }}
        </div>
      </div>
    </footer>
  {% endif %}
</div>
", "@radix/page/page.twig", "themes/contrib/radix/src/components/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
