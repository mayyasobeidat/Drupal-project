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

/* themes/base_bootstrap_4/templates/layout/page.html.twig */
class __TwigTemplate_875b795a34db5b017b16442c4c2c5cc3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 43)) {
            // line 44
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 63
        echo "
<main class=\"container\">
  ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 65)) {
            // line 66
            echo "    <div id=\"highlighted\" class=\"row\">
      <div class=\"col\">
        ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 73)) {
            // line 74
            echo "    <div id=\"help\" class=\"row\">
      <div class=\"col\">
        ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 80
        echo "
  ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 81) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 81))) {
            // line 82
            echo "    <div id=\"content\" class=\"row\">
      ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 83)) {
                // line 84
                echo "        ";
                $context["content_classes"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 84)) ? ("col-md-9") : (""));
                // line 85
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 85, $this->source), "html", null, true);
                echo "\">
          ";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 89
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 89)) {
                // line 90
                echo "        ";
                $context["sidebar_classes"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 90)) ? ("col-md-3") : (""));
                // line 91
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_classes"] ?? null), 91, $this->source), "html", null, true);
                echo "\">
          ";
                // line 92
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 95
            echo "    </div>
  ";
        }
        // line 97
        echo "</main>

";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 99)) {
            // line 100
            echo "  <footer class=\"container\">
    ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
    }

    // line 44
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    <header>
      <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container\">
          ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 48)) {
            // line 49
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 51
        echo "          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-navigation\" aria-controls=\"main-navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div id=\"main-navigation\" class=\"collapse navbar-collapse\">
            ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </nav>
    </header>
  ";
    }

    public function getTemplateName()
    {
        return "themes/base_bootstrap_4/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  158 => 51,  152 => 49,  150 => 48,  145 => 45,  141 => 44,  133 => 101,  130 => 100,  128 => 99,  124 => 97,  120 => 95,  114 => 92,  109 => 91,  106 => 90,  103 => 89,  97 => 86,  92 => 85,  89 => 84,  87 => 83,  84 => 82,  82 => 81,  79 => 80,  72 => 76,  68 => 74,  66 => 73,  63 => 72,  56 => 68,  52 => 66,  50 => 65,  46 => 63,  42 => 44,  40 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/base_bootstrap_4/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\base_bootstrap_4\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43, "block" => 44, "set" => 84);
        static $filters = array("escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
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
