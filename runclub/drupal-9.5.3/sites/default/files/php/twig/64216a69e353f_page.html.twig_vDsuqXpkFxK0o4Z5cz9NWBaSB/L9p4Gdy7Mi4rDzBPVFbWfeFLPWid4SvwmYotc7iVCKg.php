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

/* themes/yg_sports/templates/page.html.twig */
class __TwigTemplate_37ea992a25831f5d00e5daa8a083b61d extends \Twig\Template
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
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 61))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 86
        echo "  </div>
</nav>


 ";
        // line 91
        $this->displayBlock('main', $context, $blocks);
        // line 171
        echo "<!-- <div id=\"join\" class=\"text-center\">
  <div class=\"container\">
    <div class=\"col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-10\">
       <p>";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["joinus_description"] ?? null), 176, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-md-2\">
          <a href='";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["joinusurl"] ?? null), 179, $this->source), "html", null, true);
        echo "' class=\"btn btn-custom center-block btn-lg\">JOIN US</a>
        </div>
      </div>
    </div>
  </div>
</div> -->
<div id=\"footer\">
  <div class=\"container text-center\">
    <p>&copy; 2017. All Rights Reserved.<br />Theme Powered By <a href=\"http://www.youngglobes.com\" target=\"_blank\">Young Globes</a></p>
  </div>
</div>
<a id=\"back-to-top\" href=\"#home\" class=\"btn btn-custom btn-lg page-scroll\" role=\"button\" title=\"Go To Top\"><span class=\"glyphicon glyphicon-chevron-up\"></span></a>
";
    }

    // line 62
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    <div class=\"navbar-header\">
        ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
        ";
        // line 66
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 66)) {
            // line 67
            echo "          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 74
        echo "        <a class=\"navbar-brand page-scroll\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 74, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 74, $this->source), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"logo\" title=\"logo\"></a>
      </div>
      ";
        // line 77
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 77)) {
            // line 78
            echo "    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
          ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
      </ul>
    </div>
      ";
        }
        // line 84
        echo "  ";
    }

    // line 91
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "  <div role=\"main\" class=\"container blog-container js-quickedit-main-content\">
    <div class=\"row\">


      ";
        // line 97
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 97)) {
            // line 98
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 103
            echo "      ";
        }
        // line 104
        echo "
      ";
        // line 106
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106)) {
            // line 107
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 112
            echo "      ";
        }
        // line 113
        echo "
      ";
        // line 115
        echo "      ";
        // line 116
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 117
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 117))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 118
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 118) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 118)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 119
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 119) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 120
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120)))) ? ("col-sm-12") : (""))];
        // line 123
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 123), 123, $this->source), "html", null, true);
        echo ">

        ";
        // line 126
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 126)) {
            // line 127
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 130
            echo "        ";
        }
        // line 131
        echo "
        ";
        // line 133
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 134
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 137
            echo "        ";
        }
        // line 138
        echo "
        ";
        // line 140
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 141
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 147
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 147)) {
            // line 148
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 151
            echo "        ";
        }
        // line 152
        echo "
        ";
        // line 154
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "      </section>

      ";
        // line 161
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 161)) {
            // line 162
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 167
            echo "      ";
        }
        // line 168
        echo "   </div>
   </div>
";
    }

    // line 98
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 107
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 127
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 134
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 135, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 141
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 142, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 148
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 154
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "          <a id=\"main-content\"></a>
          ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 162
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_sports/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 164,  356 => 163,  352 => 162,  346 => 156,  343 => 155,  339 => 154,  332 => 149,  328 => 148,  321 => 142,  317 => 141,  310 => 135,  306 => 134,  299 => 128,  295 => 127,  288 => 109,  285 => 108,  281 => 107,  274 => 100,  271 => 99,  267 => 98,  261 => 168,  258 => 167,  255 => 162,  252 => 161,  248 => 158,  245 => 154,  242 => 152,  239 => 151,  236 => 148,  233 => 147,  230 => 145,  227 => 144,  224 => 141,  221 => 140,  218 => 138,  215 => 137,  212 => 134,  209 => 133,  206 => 131,  203 => 130,  200 => 127,  197 => 126,  191 => 123,  189 => 120,  188 => 119,  187 => 118,  186 => 117,  185 => 116,  183 => 115,  180 => 113,  177 => 112,  174 => 107,  171 => 106,  168 => 104,  165 => 103,  162 => 98,  159 => 97,  153 => 92,  149 => 91,  145 => 84,  138 => 80,  134 => 78,  131 => 77,  123 => 74,  114 => 68,  111 => 67,  108 => 66,  104 => 64,  101 => 63,  97 => 62,  80 => 179,  74 => 176,  67 => 171,  65 => 91,  59 => 86,  55 => 62,  53 => 61,  49 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_sports/templates/page.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\yg_sports\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 61, "block" => 62, "set" => 116);
        static $filters = array("escape" => 176, "t" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 't'],
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
