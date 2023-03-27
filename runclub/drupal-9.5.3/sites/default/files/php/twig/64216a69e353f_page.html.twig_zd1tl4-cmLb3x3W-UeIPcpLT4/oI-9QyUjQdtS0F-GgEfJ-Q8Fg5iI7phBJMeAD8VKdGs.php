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

/* themes/bootstrap_business/templates/page.html.twig */
class __TwigTemplate_460b10f21cd587a99e8100fa78d46b00 extends \Twig\Template
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

";
        // line 3
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_first", [], "any", false, false, true, 3) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_second", [], "any", false, false, true, 3)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_third", [], "any", false, false, true, 3))) {
            // line 4
            echo "<!-- #pre-header -->
<div id=\"pre-header\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_first", [], "any", false, false, true, 12)) {
                // line 13
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_first", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 17
            echo "                </div>
                
                <div class=\"col-md-4\">
                    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_second", [], "any", false, false, true, 20)) {
                // line 21
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_second", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 25
            echo "                </div>

                <div class=\"col-md-4\">
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_third", [], "any", false, false, true, 28)) {
                // line 29
                echo "
                    <div class=\"pre-header-area\">
                    ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_third", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class=\"toggle-control\"><a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
";
        }
        // line 44
        echo "
";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 45) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 45))) {
            // line 46
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 54)) {
                // line 55
                echo "            <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_left_grid_class"] ?? null), 55, $this->source), "html", null, true);
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 63
            echo "            
            ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 64)) {
                // line 65
                echo "            <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_right_grid_class"] ?? null), 65, $this->source), "html", null, true);
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 73
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 82
        echo "
";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 83)) {
            // line 84
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->
        <div id=\"header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 102
        echo "
<!-- #main-navigation --> 
<div id=\"main-navigation\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #main-navigation-inside -->
        <div id=\"main-navigation-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 112)) {
            // line 113
            echo "                        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
                        ";
        } else {
            // line 115
            echo "                            ";
            if (($context["main_menu"] ?? null)) {
                // line 116
                echo "                            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 116, $this->source), "html", null, true);
                echo "
                            ";
            }
            // line 118
            echo "                        ";
        }
        // line 119
        echo "                    </nav>
                </div>
            </div>
        </div>
        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 129)) {
            // line 130
            echo "<!-- #banner -->
<div id=\"banner\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
";
        }
        // line 148
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 151)) {
            // line 152
            echo "    <!-- #top-content -->
    <div id=\"top-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #top-content-inside -->
            <div id=\"top-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    ";
        }
        // line 170
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
        
            <div class=\"row\">
                ";
        // line 176
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 176)) {
            // line 177
            echo "                <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null), 177, $this->source), "html", null, true);
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 185
        echo "
                <section class=\"";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 186, $this->source), "html", null, true);
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        <!-- #breadcrumb -->
                        <div id=\"breadcrumb\" class=\"clearfix\">
                            <!-- #breadcrumb-inside -->
                            <div id=\"breadcrumb-inside\" class=\"clearfix\">
                            ";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 195, $this->source), "html", null, true);
        echo "
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->

                        ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 201)) {
            // line 202
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 210
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 214
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 214)) {
            // line 215
            echo "                                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "
                            ";
        }
        // line 217
        echo "
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 226)) {
            // line 227
            echo "                <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_grid_class"] ?? null), 227, $this->source), "html", null, true);
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 230
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 235
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 242
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 242)) {
            // line 243
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 251
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_content", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    ";
        }
        // line 261
        echo "
</div>
<!-- EOF:#page -->

";
        // line 265
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 265) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 265)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 265)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 265))) {
            // line 266
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 274
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 274)) {
                // line 275
                echo "                    <div class=\"footer-area\">
                    ";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 279
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 282
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 282)) {
                // line 283
                echo "                    <div class=\"footer-area\">
                    ";
                // line 284
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 284), 284, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 287
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 290
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 290)) {
                // line 291
                echo "                    <div class=\"footer-area\">
                    ";
                // line 292
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 295
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 298
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 298)) {
                // line 299
                echo "                    <div class=\"footer-area\">
                    ";
                // line 300
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
                echo "
                    </div>
                    ";
            }
            // line 303
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 312
        echo "
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #subfooter-inside -->
        <div id=\"subfooter-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- #subfooter-left -->
                    <div class=\"subfooter-area\">
                    ";
        // line 322
        if (($context["secondary_menu"] ?? null)) {
            // line 323
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 324
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 324, $this->source), "html", null, true);
            echo "
                    </nav>
                    ";
        }
        // line 326
        echo "                    

                    ";
        // line 328
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 328)) {
            // line 329
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 331
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 331,  558 => 329,  556 => 328,  552 => 326,  546 => 324,  543 => 323,  541 => 322,  529 => 312,  518 => 303,  512 => 300,  509 => 299,  507 => 298,  502 => 295,  496 => 292,  493 => 291,  491 => 290,  486 => 287,  480 => 284,  477 => 283,  475 => 282,  470 => 279,  464 => 276,  461 => 275,  459 => 274,  449 => 266,  447 => 265,  441 => 261,  428 => 251,  418 => 243,  416 => 242,  407 => 235,  399 => 230,  392 => 227,  390 => 226,  379 => 217,  373 => 215,  371 => 214,  365 => 210,  357 => 205,  352 => 202,  350 => 201,  341 => 195,  329 => 186,  326 => 185,  318 => 180,  311 => 177,  309 => 176,  301 => 170,  288 => 160,  278 => 152,  276 => 151,  271 => 148,  258 => 138,  248 => 130,  246 => 129,  234 => 119,  231 => 118,  225 => 116,  222 => 115,  216 => 113,  214 => 112,  202 => 102,  189 => 92,  179 => 84,  177 => 83,  174 => 82,  163 => 73,  155 => 68,  148 => 65,  146 => 64,  143 => 63,  135 => 58,  128 => 55,  126 => 54,  116 => 46,  114 => 45,  111 => 44,  99 => 34,  93 => 31,  89 => 29,  87 => 28,  82 => 25,  76 => 22,  73 => 21,  71 => 20,  66 => 17,  60 => 14,  57 => 13,  55 => 12,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_business/templates/page.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\bootstrap_business\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 14);
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
