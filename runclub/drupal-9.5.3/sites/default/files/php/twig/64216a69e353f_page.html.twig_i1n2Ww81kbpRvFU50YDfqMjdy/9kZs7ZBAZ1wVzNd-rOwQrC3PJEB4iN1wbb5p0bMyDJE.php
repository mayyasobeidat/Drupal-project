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

/* themes/excellence_simple/templates/page.html.twig */
class __TwigTemplate_c6d99e5c325acffcbb266aa02a0a6542 extends \Twig\Template
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
        // line 1
        echo "<div id=\"toTop\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>
<header id=\"navbar\" role=\"banner\" class=\"navbar navbar-static-top navbar-inverse container-fluid\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      ";
        // line 5
        if (($context["logo"] ?? null)) {
            // line 6
            echo "      <a class=\"logo navbar-btn pull-left\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\">
        <img src=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 7, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
      </a>
      ";
        }
        // line 10
        echo "
      ";
        // line 11
        if (($context["site_name"] ?? null)) {
            // line 12
            echo "\t  <div class=\"site-branding-name\">
\t    <a class=\"name navbar-brand\" href=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 13, $this->source), "html", null, true);
            echo "</a>7
\t  </div>
      ";
        }
        // line 16
        echo "\t  ";
        if (($context["site_slogan"] ?? null)) {
            // line 17
            echo "\t  <div class=\"site-branding-slogan\">
        <div class=\"site-branding__slogan\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 18, $this->source), "html", null, true);
            echo "</div>
\t  </div>
      ";
        }
        // line 21
        echo "      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div>
      <div class=\"navbar-collapse collapse\" id=\"page-template\">
        <nav role=\"navigation\">
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 30)) {
            // line 31
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
            ";
        } else {
            // line 33
            echo "            ";
            if (($context["main_menu"] ?? null)) {
                // line 34
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 34, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 36
            echo "            ";
        }
        // line 37
        echo "        </nav>
      </div>
  </div>
</header>
";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 41) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 41))) {
            // line 42
            echo "<div id=\"header-top\" class=\"masthead clearfix\">
  <div class=\"container\">
    <div id=\"header-top-inside\" class=\"clearfix\">
      <div class=\"row\">
        ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 46)) {
                // line 47
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_left_grid_class"] ?? null), 47, $this->source), "html", null, true);
                echo "\">
          <div id=\"header-top-left\" class=\"clearfix\">
            ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        ";
            }
            // line 53
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 53)) {
                // line 54
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_right_grid_class"] ?? null), 54, $this->source), "html", null, true);
                echo "\">
          <div id=\"header-top-right\" class=\"clearfix\">
            ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "
          </div>
        </div>
        ";
            }
            // line 60
            echo "      </div>
    </div>
  </div>
</div>
";
        }
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 65)) {
            // line 66
            echo "<header id=\"header\" role=\"banner\" class=\"masthead clearfix\">
  <div class=\"container\">
    <div id=\"header-inside\" class=\"clearfix\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
</header>
";
        }
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 78)) {
            // line 79
            echo "<div id=\"banner\" class=\"clearfix\">
  <div class=\"container\">
    <div id=\"banner-inside\" class=\"clearfix\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 91
        echo "<div id=\"page\" class=\"clearfix\">
  ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 92)) {
            // line 93
            echo "  <div id=\"top-content\" class=\"clearfix\">
    <div class=\"container\">
      <div id=\"top-content-inside\" class=\"clearfix\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 105
        echo "  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row inner-content\">
        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 108)) {
            // line 109
            echo "        <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null), 109, $this->source), "html", null, true);
            echo "\">
          <section id=\"sidebar-first\" class=\"sidebar clearfix\">
            ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
          </section>
        </aside>
        ";
        }
        // line 115
        echo "        <section class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 115, $this->source), "html", null, true);
        echo "\">
          <div id=\"main\" class=\"clearfix\">
            <div id=\"breadcrumb\" class=\"clearfix\">
              <div id=\"breadcrumb-inside\" class=\"clearfix\">
                ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 119, $this->source), "html", null, true);
        echo "
              </div>
            </div>
            ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 122)) {
            // line 123
            echo "            <div id=\"promoted\" class=\"clearfix\">
              <div id=\"promoted-inside\" class=\"clearfix\">
                ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "
              </div>
            </div>
            ";
        }
        // line 129
        echo "            <div id=\"content-wrapper\">
              ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 130)) {
            // line 131
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 133
        echo "            </div>
          </div>
        </section>
        ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136)) {
            // line 137
            echo "        <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null), 137, $this->source), "html", null, true);
            echo "\">
          <section id=\"sidebar-second\" class=\"sidebar clearfix\">
            ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
          </section>
        </aside>
        ";
        }
        // line 143
        echo "      </div>
    </div>
  </div>
  ";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 146)) {
            // line 147
            echo "  <div id=\"bottom-content\" class=\"clearfix\">
    <div class=\"container\">
      <div id=\"bottom-content-inside\" class=\"clearfix\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 159
        echo "</div>
";
        // line 160
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 160) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 160)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 160)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 160))) {
            // line 161
            echo "<footer id=\"footer\" class=\"clearfix\">
  <div class=\"container\">
    <div id=\"footer-inside\" class=\"clearfix\">
      <div class=\"row\">
        <div class=\"col-md-3\">
          ";
            // line 166
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 166)) {
                // line 167
                echo "          <div class=\"footer-area\">
            ";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 171
            echo "        </div>
        <div class=\"col-md-3\">
          ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 173)) {
                // line 174
                echo "          <div class=\"footer-area\">
            ";
                // line 175
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 178
            echo "        </div>
        <div class=\"col-md-3\">
          ";
            // line 180
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 180)) {
                // line 181
                echo "          <div class=\"footer-area\">
            ";
                // line 182
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 185
            echo "        </div>
        <div class=\"col-md-3\">
          ";
            // line 187
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 187)) {
                // line 188
                echo "          <div class=\"footer-area\">
            ";
                // line 189
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
                echo "
          </div>
          ";
            }
            // line 192
            echo "        </div>
      </div>
    </div>
  </div>
</footer>
";
        }
        // line 198
        echo "<footer id=\"subfooter\" class=\"clearfix\">
  <div class=\"container\">
    <div id=\"subfooter-inside\" class=\"clearfix\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"subfooter-area\">
            ";
        // line 204
        if (($context["secondary_menu"] ?? null)) {
            // line 205
            echo "            <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
              ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 206, $this->source), "html", null, true);
            echo "
            </nav>
            ";
        }
        // line 208
        echo "                    
            ";
        // line 209
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 209)) {
            // line 210
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 212
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/excellence_simple/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 212,  437 => 210,  435 => 209,  432 => 208,  426 => 206,  423 => 205,  421 => 204,  413 => 198,  405 => 192,  399 => 189,  396 => 188,  394 => 187,  390 => 185,  384 => 182,  381 => 181,  379 => 180,  375 => 178,  369 => 175,  366 => 174,  364 => 173,  360 => 171,  354 => 168,  351 => 167,  349 => 166,  342 => 161,  340 => 160,  337 => 159,  327 => 152,  320 => 147,  318 => 146,  313 => 143,  306 => 139,  300 => 137,  298 => 136,  293 => 133,  287 => 131,  285 => 130,  282 => 129,  275 => 125,  271 => 123,  269 => 122,  263 => 119,  255 => 115,  248 => 111,  242 => 109,  240 => 108,  235 => 105,  225 => 98,  218 => 93,  216 => 92,  213 => 91,  203 => 84,  196 => 79,  194 => 78,  184 => 71,  177 => 66,  175 => 65,  168 => 60,  161 => 56,  155 => 54,  152 => 53,  145 => 49,  139 => 47,  137 => 46,  131 => 42,  129 => 41,  123 => 37,  120 => 36,  114 => 34,  111 => 33,  105 => 31,  103 => 30,  92 => 21,  86 => 18,  83 => 17,  80 => 16,  70 => 13,  67 => 12,  65 => 11,  62 => 10,  54 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/excellence_simple/templates/page.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\excellence_simple\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("t" => 6, "escape" => 7);
        static $functions = array("path" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
