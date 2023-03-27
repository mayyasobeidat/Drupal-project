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

/* themes/yg_hotel/templates/page--front.html.twig */
class __TwigTemplate_df1a32b3ddac0728ea95543a20888d44 extends \Twig\Template
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
            echo "<header id=\"header\"  class=\"main\" >
";
        } else {
            // line 4
            echo "<header id=\"header\" >
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
            echo "
          ";
            // line 17
            if (($context["facebook"] ?? null)) {
                // line 18
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 18, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
          ";
            }
            // line 20
            echo "          ";
            if (($context["facebook"] ?? null)) {
                // line 21
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 21, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-youtube-play\"></i></a>
          ";
            }
            // line 23
            echo "          </li>
          ";
        }
        // line 25
        echo "        </ul>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\"> <a href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" class=\"logo\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 30, $this->source), "html", null, true);
        echo "\" alt=\"logo\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
      </div>
      </div>
    </nav>
</header>

";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "

<section ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">

        ";
        // line 44
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "</section>

<!-- footer section -->
<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
            ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 58
        if (((($context["footerphone"] ?? null) || ($context["fax"] ?? null)) || ($context["mail"] ?? null))) {
            // line 59
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          <h6>";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["getintitle"] ?? null), 60, $this->source), "html", null, true);
            echo "</h6>

            ";
            // line 62
            if (($context["footerphone"] ?? null)) {
                // line 63
                echo "            <p><a href=\"tel:123 456 7890\"><i class=\"fa fa-phone\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerphone"] ?? null), 63, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if (($context["fax"] ?? null)) {
                // line 67
                echo "            <p><a href=\"#\"><i class=\"fa fa-fax\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fax"] ?? null), 67, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 69
            echo "
            ";
            // line 70
            if (($context["mail"] ?? null)) {
                // line 71
                echo "            <p><a href=\"mailto:";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 71, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-envelope\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 71, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 73
            echo "          </div>
          ";
        }
        // line 75
        echo "          <div class=\"col-md-2 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
          </div>

          ";
        // line 79
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["linkedin"] ?? null))) {
            // line 80
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.9s\">
          <h6>";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null), 81, $this->source), "html", null, true);
            echo "</h6>
            <div class=\"social\">
              <ul>
              ";
            // line 84
            if (($context["facebook"] ?? null)) {
                // line 85
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 85, $this->source), "html", null, true);
                echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i> Facebook</a></li>
              ";
            }
            // line 87
            echo "
              ";
            // line 88
            if (($context["twitter"] ?? null)) {
                // line 89
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 89, $this->source), "html", null, true);
                echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i> Twitter</a></li>
              ";
            }
            // line 91
            echo "               
              ";
            // line 92
            if (($context["linkedin"] ?? null)) {
                // line 93
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 93, $this->source), "html", null, true);
                echo "\" class=\"linkedin\"><i class=\"  fa fa-linkedin\"></i> Linkedin</a></li>
              ";
            }
            // line 94
            echo " 
              </ul>  
            </div>
          </div>
          ";
        }
        // line 99
        echo "
        </div>
      </div>
    </section>
    <div class=\"copyright\">
     <div class=\"container\">
     <div class=\"row\">  
      <div class=\"col-md-6 mx-auto text-center wow fadeInUp\" data-wow-delay=\"0.3s\"> 
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/ target=\"_blank\"\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>  
      </div>
     </div>
     </div>
  </div>
<!-- End footer section -->";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "          <a id=\"main-content\"></a>
          ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_hotel/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 46,  277 => 45,  273 => 44,  256 => 99,  249 => 94,  243 => 93,  241 => 92,  238 => 91,  232 => 89,  230 => 88,  227 => 87,  221 => 85,  219 => 84,  213 => 81,  210 => 80,  208 => 79,  202 => 76,  199 => 75,  195 => 73,  187 => 71,  185 => 70,  182 => 69,  176 => 67,  174 => 66,  171 => 65,  165 => 63,  163 => 62,  158 => 60,  155 => 59,  153 => 58,  148 => 56,  138 => 48,  135 => 44,  130 => 41,  125 => 39,  116 => 33,  108 => 30,  101 => 25,  97 => 23,  91 => 21,  88 => 20,  82 => 18,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  64 => 12,  62 => 11,  56 => 10,  50 => 6,  46 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_hotel/templates/page--front.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\yg_hotel\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "block" => 44);
        static $filters = array("escape" => 10);
        static $functions = array("path" => 30);

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
