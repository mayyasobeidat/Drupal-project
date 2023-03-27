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

/* themes/yg_hotel/templates/page--404.html.twig */
class __TwigTemplate_a6d8e4f5a9c10754390925ed7f0131b5 extends \Twig\Template
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
        // line 59
        echo "<header id=\"header\"  class=\"other-page-header\">
  <div id=\"header-top\">
    <div class=\"container\">
      <div class=\"header-right\">
        <ul>
          <li>";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reachus"] ?? null), 64, $this->source), "html", null, true);
        echo "<a class=\"phone\" href=\"tel:123 456 7890\"><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 64, $this->source), "html", null, true);
        echo "</span></a></li>
          ";
        // line 65
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null))) {
            // line 66
            echo "          <li>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["followus"] ?? null), 66, $this->source), "html", null, true);
            echo "
          ";
            // line 67
            if (($context["facebook"] ?? null)) {
                // line 68
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 68, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-facebook-f\"></i></a>
          ";
            }
            // line 70
            echo "
          ";
            // line 71
            if (($context["facebook"] ?? null)) {
                // line 72
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 72, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
          ";
            }
            // line 74
            echo "          ";
            if (($context["facebook"] ?? null)) {
                // line 75
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 75, $this->source), "html", null, true);
                echo "\" class=\"social\" ><i class=\"fa fa-youtube-play\"></i></a>
          ";
            }
            // line 77
            echo "          </li>
          ";
        }
        // line 79
        echo "        </ul>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\"> <a href=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\" class=\"logo\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 84, $this->source), "html", null, true);
        echo "\" alt=\"logo\"></a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
        ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </nav>
</header>

    
";
        // line 94
        echo "<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 104, $this->source), "html", null, true);
        echo "\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>
 

<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
            ";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "
          </div>
          ";
        // line 118
        if (((($context["footerphone"] ?? null) || ($context["fax"] ?? null)) || ($context["mail"] ?? null))) {
            // line 119
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          <h6>";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["getintitle"] ?? null), 120, $this->source), "html", null, true);
            echo "</h6>

            ";
            // line 122
            if (($context["footerphone"] ?? null)) {
                // line 123
                echo "            <p><a href=\"tel:123 456 7890\"><i class=\"fa fa-phone\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerphone"] ?? null), 123, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 125
            echo "
            ";
            // line 126
            if (($context["fax"] ?? null)) {
                // line 127
                echo "            <p><a href=\"#\"><i class=\"fa fa-fax\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fax"] ?? null), 127, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 129
            echo "
            ";
            // line 130
            if (($context["mail"] ?? null)) {
                // line 131
                echo "            <p><a href=\"mailto:";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 131, $this->source), "html", null, true);
                echo "\"><i class=\"fa fa-envelope\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail"] ?? null), 131, $this->source), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 133
            echo "          </div>
          ";
        }
        // line 135
        echo "          <div class=\"col-md-2 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.6s\">
          ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "
          </div>

          ";
        // line 139
        if (((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["linkedin"] ?? null))) {
            // line 140
            echo "          <div class=\"col-md-3 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.9s\">
          <h6>SOCIAL</h6>
            <div class=\"social\">
              <ul>
              ";
            // line 144
            if (($context["facebook"] ?? null)) {
                // line 145
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 145, $this->source), "html", null, true);
                echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i> Facebook</a></li>
              ";
            }
            // line 147
            echo "
              ";
            // line 148
            if (($context["twitter"] ?? null)) {
                // line 149
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 149, $this->source), "html", null, true);
                echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i> Twitter</a></li>
              ";
            }
            // line 151
            echo "               
              ";
            // line 152
            if (($context["linkedin"] ?? null)) {
                // line 153
                echo "               <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 153, $this->source), "html", null, true);
                echo "\" class=\"linkedin\"><i class=\"  fa fa-linkedin\"></i> Linkedin</a></li>
              ";
            }
            // line 154
            echo " 
              </ul>  
            </div>
          </div>
          ";
        }
        // line 159
        echo "
        </div>
      </div>
    </section>
    <div class=\"copyright\">
     <div class=\"container\">
     <div class=\"row\">  
      <div class=\"col-md-6 mx-auto text-center wow fadeInUp\" data-wow-delay=\"0.3s\"> 
        <p>Theme By<a href=\"https://www.drupaldevelopersstudio.com/\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\">Young Globes</a></p>  
      </div>
     </div>
     </div>
  </div>
<!-- End footer section -->";
    }

    public function getTemplateName()
    {
        return "themes/yg_hotel/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 159,  240 => 154,  234 => 153,  232 => 152,  229 => 151,  223 => 149,  221 => 148,  218 => 147,  212 => 145,  210 => 144,  204 => 140,  202 => 139,  196 => 136,  193 => 135,  189 => 133,  181 => 131,  179 => 130,  176 => 129,  170 => 127,  168 => 126,  165 => 125,  159 => 123,  157 => 122,  152 => 120,  149 => 119,  147 => 118,  142 => 116,  127 => 104,  115 => 94,  105 => 86,  98 => 84,  91 => 79,  87 => 77,  81 => 75,  78 => 74,  72 => 72,  70 => 71,  67 => 70,  61 => 68,  59 => 67,  54 => 66,  52 => 65,  46 => 64,  39 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_hotel/templates/page--404.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\yg_hotel\\templates\\page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 65);
        static $filters = array("escape" => 64);
        static $functions = array("path" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
