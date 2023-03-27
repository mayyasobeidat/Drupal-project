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

/* themes/yg_hotel/templates/page.html.twig */
class __TwigTemplate_e3e6e3776f7ae0c31d388383ea32be33 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["whiteheader"] ?? null)) {
            // line 2
            echo "<header id=\"header\"    class=\"main\" >
";
        } else {
            // line 4
            echo "<header id=\"header\" class=\"other-page-header\">
";
        }
        // line 6
        echo "  <div id=\"header-top\">
    <div class=\"container\">
      <div class=\"header-right\">
        <ul>
          <li>";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reachus"] ?? null), 10, $this->source), "html", null, true);
        echo "<a class=\"phone\" href=\"tel:123 456 7890\"><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 10, $this->source), "html", null, true);
        echo "</span></a></li>
          ";
        // line 11
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null))) {
            // line 12
            echo "          <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["followus"] ?? null), 12, $this->source), "html", null, true);
            echo "
          ";
            // line 13
            if (($context["facebook"] ?? null)) {
                // line 14
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 14, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-facebook-f\"></i></a>
          ";
            }
            // line 16
            echo "          ";
            if (($context["facebook"] ?? null)) {
                // line 17
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 17, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
          ";
            }
            // line 19
            echo "          ";
            if (($context["facebook"] ?? null)) {
                // line 20
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 20, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-youtube-play\"></i></a>
          ";
            }
            // line 22
            echo "          </li>
          ";
        }
        // line 24
        echo "        </ul>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\"> <a href=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" class=\"logo\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 29, $this->source), "html", null, true);
        echo "\" alt=\"logo\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </nav>
</header>
<section ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
  ";
        // line 39
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "</section>
<!-- footer section -->
<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
            ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 52
        if (((($context["footerphone"] ?? null) || ($context["fax"] ?? null)) || ($context["mail"] ?? null))) {
            // line 53
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          <h6>";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["getintitle"] ?? null), 54, $this->source), "html", null, true);
            echo "</h6>
            ";
            // line 55
            if (($context["footerphone"] ?? null)) {
                // line 56
                echo "            <p><a href=\"tel:123 456 7890\"><i class=\"fa fa-phone\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerphone"] ?? null), 56, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 58
            echo "            ";
            if (($context["fax"] ?? null)) {
                // line 59
                echo "            <p><a href=\"#\"><i class=\"fa fa-fax\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fax"] ?? null), 59, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 61
            echo "            ";
            if (($context["mail"] ?? null)) {
                // line 62
                echo "            <p><a href=\"mailto:";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 62, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-envelope\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 62, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 64
            echo "          </div>
          ";
        }
        // line 66
        echo "          <div class=\"col-md-2 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 69
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["linkedin"] ?? null))) {
            // line 70
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.9s\">
          <h6>";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null), 71, $this->source), "html", null, true);
            echo "</h6>
            <div class=\"social\">
              <ul>
              ";
            // line 74
            if (($context["facebook"] ?? null)) {
                // line 75
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 75, $this->source), "html", null, true);
                echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i> Facebook</a></li>
              ";
            }
            // line 77
            echo "              ";
            if (($context["twitter"] ?? null)) {
                // line 78
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 78, $this->source), "html", null, true);
                echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i> Twitter</a></li>
              ";
            }
            // line 79
            echo "               
              ";
            // line 80
            if (($context["linkedin"] ?? null)) {
                // line 81
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 81, $this->source), "html", null, true);
                echo "\" class=\"linkedin\"><i class=\"  fa fa-linkedin\"></i> Linkedin</a></li>
              ";
            }
            // line 82
            echo " 
              </ul>  
            </div>
          </div>
          ";
        }
        // line 87
        echo "
        </div>
      </div>
    </section>
    <div class=\"copyright\">
     <div class=\"container\">
     <div class=\"row\">  
      <div class=\"col-md-6 mx-auto text-center wow fadeInUp\" data-wow-delay=\"0.3s\"> 
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>  
      </div>
     </div>
     </div>
  </div>
<!-- End footer section -->";
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <a id=\"main-content\"></a>
    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/yg_hotel/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 41,  259 => 40,  255 => 39,  238 => 87,  231 => 82,  225 => 81,  223 => 80,  220 => 79,  214 => 78,  211 => 77,  205 => 75,  203 => 74,  197 => 71,  194 => 70,  192 => 69,  187 => 67,  184 => 66,  180 => 64,  172 => 62,  169 => 61,  163 => 59,  160 => 58,  154 => 56,  152 => 55,  148 => 54,  145 => 53,  143 => 52,  138 => 50,  129 => 43,  126 => 39,  122 => 37,  114 => 32,  106 => 29,  99 => 24,  95 => 22,  89 => 20,  86 => 19,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  64 => 12,  62 => 11,  56 => 10,  50 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_hotel/templates/page.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\yg_hotel\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "block" => 39);
        static $filters = array("escape" => 10);
        static $functions = array("path" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
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
