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

/* themes/yg_sports/templates/page--front.html.twig */
class __TwigTemplate_bc77e261f14f38da1b4405a4769cbcbf extends \Twig\Template
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
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav id=\"menu\" class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 3) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 3))) {
            // line 4
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 27
        echo "  </div>
</nav>
";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 100
        echo "<div id=\"join\" class=\"text-center\">
  <div class=\"container\">
    <div class=\"col-md-12\">
      <div class=\"row\">
        <div class=\"col-md-10 col-sm-8 text-left\">
       <p>";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["joinus_description"] ?? null), 105, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-md-2 col-sm-4\">
          <a href='";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["joinusurl"] ?? null), 108, $this->source), "html", null, true);
        echo "' class=\"btn btn-custom center-block btn-lg\">JOIN US</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id=\"contact\" class=\"text-center\">
  <div class=\"container\">
    <div class=\"col-md-12\">
      <div class=\"row\">
        <div class=\"section-title\">
          <h2>Contact</h2>
        </div>
        <div class=\"col-md-4\">
        ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 122)) {
            // line 123
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 125
        echo "        </div>
        <div class=\"col-md-6\">
        ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 127)) {
            // line 128
            echo "          <div id=\"map\">
            ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 132
        echo "        </div>
    <div class=\"col-md-2 text-left call-us\">
        <div class=\"widget col-md-12 col-sm-4 col-xs-12\">
        <h2>Call Us</h2>
        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["phone_numbers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 137
            echo "          <h4>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["number"], 137, $this->source), "html", null, true);
            echo "</h4>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "      </div>
      <div class=\"widget col-md-12 col-sm-4 col-xs-12\">
        <h2>Mail Us</h2>
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emails"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 143
            echo "          <h4><a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["email"], 143, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["email"], 143, $this->source), "html", null, true);
            echo "</a></h4>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "      </div>
      <div class=\"widget col-md-12 col-sm-4 col-xs-12\">
        <h2>Follow Us</h2>
        <div class=\"social-links\">
        <a href=\"";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 149, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 150, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 151, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
<div id=\"footer\">
  ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 160)) {
            // line 161
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 166
            echo "  ";
        }
        // line 167
        echo "  <div class=\"container text-center\">
    <p>&copy; 2017. All Rights Reserved.<br />Theme Powered By <a href=\"http://www.youngglobes.com\" target=\"_blank\">Young Globes</a></p>
  </div>
</div>
<a id=\"back-to-top\" href=\"#home\" class=\"btn btn-custom page-scroll\" role=\"button\" title=\"Go To Top\"><span class=\"glyphicon glyphicon-chevron-up\"></span></a>
";
    }

    // line 4
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"navbar-header\">
        ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
        ";
        // line 8
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 8)) {
            // line 9
            echo "          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
            <span class=\"sr-only\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 16
        echo "        <a class=\"navbar-brand page-scroll\" href=\"#home\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 16, $this->source), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"logo\" title=\"logo\"></a>
      </div>
      ";
        // line 19
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 19)) {
            // line 20
            echo "    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      
          ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
    </div>
      ";
        }
        // line 25
        echo "  ";
    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">
    <div class=\"\">
      ";
        // line 34
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 34)) {
            // line 35
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 40
            echo "      ";
        }
        // line 41
        echo "      ";
        // line 42
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 42)) {
            // line 43
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 48
            echo "      ";
        }
        // line 49
        echo "      ";
        // line 50
        echo "      ";
        // line 51
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 52
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 52) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 52))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 53
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 53) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 54
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 54) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 54)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 55
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 55)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 55)))) ? ("col-sm-12") : (""))];
        // line 58
        echo "      <section>
        ";
        // line 60
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 60)) {
            // line 61
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 67
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 70
            echo "        ";
        }
        // line 71
        echo "        ";
        // line 72
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 73
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 76
            echo "        ";
        }
        // line 77
        echo "        ";
        // line 78
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 78)) {
            // line 79
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 82
            echo "        ";
        }
        // line 83
        echo "        ";
        // line 84
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "      </section>
      ";
        // line 90
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90)) {
            // line 91
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 96
            echo "      ";
        }
        // line 97
        echo "   </div>
 </div>
";
    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 43
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 61
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 67
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 68, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 73
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 74, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 79
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "          <a id=\"main-content\"></a>
          ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 91
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 161
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "      <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 162, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
        ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
        echo "
      </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/yg_sports/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 163,  459 => 162,  455 => 161,  448 => 93,  445 => 92,  441 => 91,  435 => 86,  432 => 85,  428 => 84,  421 => 80,  417 => 79,  410 => 74,  406 => 73,  399 => 68,  395 => 67,  388 => 62,  384 => 61,  377 => 45,  374 => 44,  370 => 43,  363 => 37,  360 => 36,  356 => 35,  350 => 97,  347 => 96,  344 => 91,  341 => 90,  338 => 88,  335 => 84,  333 => 83,  330 => 82,  327 => 79,  324 => 78,  322 => 77,  319 => 76,  316 => 73,  313 => 72,  311 => 71,  308 => 70,  305 => 67,  302 => 66,  300 => 65,  297 => 64,  294 => 61,  291 => 60,  288 => 58,  286 => 55,  285 => 54,  284 => 53,  283 => 52,  282 => 51,  280 => 50,  278 => 49,  275 => 48,  272 => 43,  269 => 42,  267 => 41,  264 => 40,  261 => 35,  258 => 34,  254 => 31,  250 => 30,  246 => 25,  240 => 22,  236 => 20,  233 => 19,  227 => 16,  218 => 10,  215 => 9,  212 => 8,  208 => 6,  205 => 5,  201 => 4,  192 => 167,  189 => 166,  186 => 161,  184 => 160,  172 => 151,  168 => 150,  164 => 149,  158 => 145,  147 => 143,  143 => 142,  138 => 139,  129 => 137,  125 => 136,  119 => 132,  113 => 129,  110 => 128,  108 => 127,  104 => 125,  98 => 123,  96 => 122,  79 => 108,  73 => 105,  66 => 100,  64 => 30,  60 => 27,  56 => 4,  54 => 3,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_sports/templates/page--front.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\yg_sports\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "block" => 4, "for" => 136, "set" => 51);
        static $filters = array("escape" => 105, "t" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for', 'set'],
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
