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

/* themes/marvelous/templates/page/page.html.twig */
class __TwigTemplate_bbc9c00ac768484a015b119e8fbc37cf extends \Twig\Template
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
        echo "<!--***** Preloader Start *****  -->
";
        // line 12
        echo "<!-- ***** Preloader End *****-->

<!-- ***** Header Area Start ***** -->
\t<header class=\"header-area header-sticky wow slideInDown\" id=\"header\" data-wow-duration=\"0.75s\" data-wow-delay=\"0s\"> <div class=\"container\">
\t\t";
        // line 16
        if (($context["show_header_color"] ?? null)) {
            // line 17
            echo "\t\t\t<style>
\t\t\t\t#header {
\t\t\t\t\tbackground-color: ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_color"] ?? null), 19, $this->source), "html", null, true);
            echo "
\t\t\t\t\t;
\t\t\t\t}
\t\t\t</style>
\t\t";
        }
        // line 24
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 24)) {
            // line 25
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 27
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<nav
\t\t\t\t\tclass=\"main-nav\">
\t\t\t\t\t<!-- ***** Logo Start ***** -->
\t\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 32)) {
            // line 33
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<!-- ***** Logo End ***** -->
\t\t\t\t\t<!-- ***** Menu Start ***** -->
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 38)) {
            // line 39
            echo "\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<a class='menu-trigger'>
\t\t\t\t\t\t<span>Menu</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- ***** Menu End ***** -->
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- ***** Header Area End ***** -->

<div class=\"main-banner\" id=\"top\">
\t";
        // line 54
        if (($context["hero_color"] ?? null)) {
            // line 55
            echo "\t\t<style>
\t\t\t#top {
\t\t\t\tbackground-color: ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hero_color"] ?? null), 57, $this->source), "html", null, true);
            echo "
\t\t\t\t;
\t\t\t}
\t\t</style>
\t";
        }
        // line 62
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 align-self-center\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-banner\">
\t\t\t\t\t\t\t";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 68)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t";
        if (($context["banner"] ?? null)) {
            // line 72
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slide"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<div class=\"item header-text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 74)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_title", [], "any", false, false, true, 75)) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<h6>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_title", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                        echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 78)) {
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<h2>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                        echo "</h2>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_des", [], "any", false, false, true, 81)) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_des", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"down-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-blue-button-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_1", [], "any", false, false, true, 86) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_1", [], "any", false, false, true, 86))) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_1", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_1", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"call-button\">

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_2", [], "any", false, false, true, 92) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_2", [], "any", false, false, true, 92))) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_2", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 95
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_2", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_title", [], "any", false, false, true, 102)) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t<h6>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_title", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                        echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 105)) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t<h2>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                        echo "</h2>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_des", [], "any", false, false, true, 108)) {
                        // line 109
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_des", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"down-buttons\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-blue-button-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 113
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_1", [], "any", false, false, true, 113) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_1", [], "any", false, false, true, 113))) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_1", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_1", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"call-button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 119
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_2", [], "any", false, false, true, 119) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_2", [], "any", false, false, true, 119))) {
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_2", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url_text_2", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"background-image\">
\t\t\t\t\t\t";
        // line 133
        if (($context["show_header_image"] ?? null)) {
            // line 134
            echo "\t\t\t\t\t\t  ";
            if (($context["image"] ?? null)) {
                // line 135
                echo "\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t.main-banner:before {
\t\t\t\t\t\t\t\t\tbackground-image: url(";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 137, $this->source), "html", null, true);
                echo ")
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t";
            } else {
                // line 140
                echo " 
\t\t\t\t\t\t\t<div> hello </div>
\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t.main-banner:before {
\t\t\t\t\t\t\t\t\tbackground-image: url(";
                // line 144
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 144, $this->source), "html", null, true);
                echo ")
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div>";
        // line 154
        if (($context["show_css_details"] ?? null)) {
            // line 155
            echo "
<style>
\t";
            // line 157
            if (($context["text_color"] ?? null)) {
                // line 158
                echo "\t\t.header-area .main-nav .nav li a,
\t\t.main-banner .item h2,
\t\tp,
\t\th1,
\t\th2,
\t\th3,
\t\th4,
\t\th5,
\t\th6,
\t\tfooter .footer-item h4 , footer .copyright p{
\t\t\tcolor: ";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_color"] ?? null), 168, $this->source), "html", null, true);
                echo "
\t\t\t;
\t\t}
\t";
            }
            // line 172
            echo "\t";
            if (($context["font_Size"] ?? null)) {
                // line 173
                echo "\t\t.main-content p {
\t\t\tfont-size: ";
                // line 174
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_Size"] ?? null), 174, $this->source), "html", null, true);
                echo "
\t\t}
\t";
            }
            // line 177
            echo "\t";
            if (($context["link_color"] ?? null)) {
                // line 178
                echo "\t\ta,
\t\tfooter .about a,
\t\tfooter .footer-item ul li a,
\t\tfooter .footer-item p {
\t\t\tcolor: ";
                // line 182
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_color"] ?? null), 182, $this->source), "html", null, true);
                echo "
\t\t}
\t";
            }
            // line 185
            echo "</style>";
        }
        echo "<div class=\"main-content main-background\">
";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 186)) {
            // line 187
            echo "\t";
            if (($context["show_content_color"] ?? null)) {
                // line 188
                echo "\t\t";
                if (($context["Content_color"] ?? null)) {
                    // line 189
                    echo "\t\t\t<style>
\t\t\t\t.main-content {
\t\t\t\t\tbackground-color: ";
                    // line 191
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["Content_color"] ?? null), 191, $this->source), "html", null, true);
                    echo "
\t\t\t\t}
\t\t\t</style>
\t\t";
                }
                // line 195
                echo "\t";
            }
            // line 196
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            echo "
";
        }
        // line 197
        echo "</div><div class=\"footer-dec\">
<img src=\"assets/images/footer-dec.png\" alt=\"\"></div><footer id=\"footer-color\">
";
        // line 199
        if (($context["show_footer_color"] ?? null)) {
            // line 200
            echo "\t<style>
\t\t#footer-color {
\t\t\tbackground-color: ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_color"] ?? null), 202, $this->source), "html", null, true);
            echo "
\t\t\t;
\t\t}
\t</style>
";
        }
        // line 207
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-3\">
\t\t\t<div class=\"about footer-item\">
\t\t\t ";
        // line 211
        if (($context["footer_logo"] ?? null)) {
            // line 212
            echo "\t\t\t\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_logo", [], "any", false, false, true, 212), 212, $this->source), "html", null, true);
            echo "
\t\t\t ";
        }
        // line 214
        echo "\t\t\t";
        if (($context["show_footer_first_details"] ?? null)) {
            // line 215
            echo "\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_image"] ?? null), 216, $this->source), "html", null, true);
            echo "\" alt=\"Footer logo\"></a>
\t\t\t\t</div>
\t\t\t\t\t ";
            // line 218
            if (($context["footer_first"] ?? null)) {
                // line 219
                echo "\t\t\t\t  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
                echo "
\t\t\t ";
            }
            // line 221
            echo "\t\t\t\t";
            if (($context["footer_text"] ?? null)) {
                // line 222
                echo "\t\t\t\t\t<span>
\t\t\t\t\t\t<h3>";
                // line 223
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_text"] ?? null), 223, $this->source), "html", null, true);
                echo "</h3>
\t\t\t\t\t</span>
\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t<br>
\t\t\t\t";
            // line 227
            if (($context["footer_email"] ?? null)) {
                // line 228
                echo "\t\t\t\t\t<a href=\"#\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 228, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            // line 230
            echo "\t\t\t\t<br>
\t\t\t\t";
            // line 231
            if (($context["footer_phone"] ?? null)) {
                // line 232
                echo "\t\t\t\t\t<a href=\"#\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 232, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            // line 234
            echo "\t\t\t\t<br>
\t\t\t\t";
            // line 235
            if (($context["footer_address"] ?? null)) {
                // line 236
                echo "\t\t\t\t\t<a href=\"#\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_address"] ?? null), 236, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            // line 238
            echo "\t\t\t\t<br>
\t\t\t";
        }
        // line 240
        echo "\t\t\t<ul>
\t\t\t\t";
        // line 241
        if (($context["show_social_icon"] ?? null)) {
            // line 242
            echo "\t\t\t\t\t";
            if (($context["facebook_url"] ?? null)) {
                // line 243
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 244
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 244, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t";
            if (($context["twitter_url"] ?? null)) {
                // line 250
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 251
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 251, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t";
            if (($context["linkedin_url"] ?? null)) {
                // line 257
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 258, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 263
            echo "\t\t\t\t\t";
            if (($context["instagram_url"] ?? null)) {
                // line 264
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 265
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 265, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 270
            echo "\t\t\t\t";
        }
        // line 271
        echo "
\t\t\t</ul>

\t\t</div>
\t</div>
\t<div class=\"col-lg-3\">
\t\t<div class=\"services footer-item\">
\t\t\t<ul>
\t\t\t\t ";
        // line 279
        if (($context["footer_second"] ?? null)) {
            // line 280
            echo "\t\t\t\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
            echo "
\t\t\t ";
        }
        // line 282
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 282)) {
            // line 283
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 285
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3\">
\t\t<div class=\"community footer-item\">

\t\t\t<ul>
\t\t\t\t ";
        // line 292
        if (($context["footer_third"] ?? null)) {
            // line 293
            echo "\t\t\t\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
            echo "
\t\t\t ";
        }
        // line 295
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 295)) {
            // line 296
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 298
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"col-lg-3\">
\t\t<div class=\"subscribe-newsletters footer-item\">
\t\t\t ";
        // line 303
        if (($context["footer_fourth"] ?? null)) {
            // line 304
            echo "\t\t\t\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 304), 304, $this->source), "html", null, true);
            echo "
\t\t\t ";
        }
        // line 306
        echo "\t\t\t";
        if (($context["show_footer_fourth_details"] ?? null)) {
            // line 307
            echo "\t\t\t\t";
            if (($context["footer_head"] ?? null)) {
                // line 308
                echo "\t\t\t\t\t<h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_head"] ?? null), 308, $this->source), "html", null, true);
                echo "</h4>
\t\t\t\t";
            }
            // line 310
            echo "\t\t\t\t";
            if (($context["footer_des"] ?? null)) {
                // line 311
                echo "\t\t\t\t\t<p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_des"] ?? null), 311, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            // line 313
            echo "\t\t\t";
        }
        // line 314
        echo "\t\t\t<form action=\"#\" method=\"get\">
\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"Your Email\" required=\"\">
\t\t\t\t<button type=\"submit\" id=\"form-submit\" class=\"main-button \">
\t\t\t\t\t<i class=\"fa fa-paper-plane-o\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t</div>

\t<div class=\"col-lg-12\">
\t\t<div class=\"copyright\" style=\"background-color:";
        // line 324
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_color"] ?? null), 324, $this->source), "html", null, true);
        echo "\">
\t\t\t";
        // line 325
        if (($context["footer_details"] ?? null)) {
            // line 326
            echo "\t\t\t\t";
            if (($context["footer_copyright"] ?? null)) {
                // line 327
                echo "\t\t\t\t\t<p>

\t\t\t\t\t\t";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_copyright"] ?? null), 329, $this->source), "html", null, true);
                echo "

\t\t\t\t\t</p>
                    
                    
                    
\t\t\t\t";
            }
            // line 336
            echo "                <br>
                ";
            // line 337
            if (($context["footer_text"] ?? null)) {
                // line 338
                echo "\t\t\t\t\t<p>

\t\t\t\t\t\t";
                // line 340
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_deve_text"] ?? null), 340, $this->source), "html", null, true);
                echo "

\t\t\t\t\t</p>
                    <br>
                    
                    
\t\t\t\t";
            }
            // line 347
            echo "\t\t\t";
        }
        // line 348
        echo "\t\t</div>
\t</div>
</div></div></footer>";
    }

    public function getTemplateName()
    {
        return "themes/marvelous/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  761 => 348,  758 => 347,  748 => 340,  744 => 338,  742 => 337,  739 => 336,  729 => 329,  725 => 327,  722 => 326,  720 => 325,  716 => 324,  704 => 314,  701 => 313,  695 => 311,  692 => 310,  686 => 308,  683 => 307,  680 => 306,  674 => 304,  672 => 303,  665 => 298,  659 => 296,  656 => 295,  650 => 293,  648 => 292,  639 => 285,  633 => 283,  630 => 282,  624 => 280,  622 => 279,  612 => 271,  609 => 270,  601 => 265,  598 => 264,  595 => 263,  587 => 258,  584 => 257,  581 => 256,  573 => 251,  570 => 250,  567 => 249,  559 => 244,  556 => 243,  553 => 242,  551 => 241,  548 => 240,  544 => 238,  538 => 236,  536 => 235,  533 => 234,  527 => 232,  525 => 231,  522 => 230,  516 => 228,  514 => 227,  511 => 226,  505 => 223,  502 => 222,  499 => 221,  493 => 219,  491 => 218,  486 => 216,  483 => 215,  480 => 214,  474 => 212,  472 => 211,  466 => 207,  458 => 202,  454 => 200,  452 => 199,  448 => 197,  442 => 196,  439 => 195,  432 => 191,  428 => 189,  425 => 188,  422 => 187,  420 => 186,  415 => 185,  409 => 182,  403 => 178,  400 => 177,  394 => 174,  391 => 173,  388 => 172,  381 => 168,  369 => 158,  367 => 157,  363 => 155,  361 => 154,  354 => 149,  351 => 148,  344 => 144,  338 => 140,  331 => 137,  327 => 135,  324 => 134,  322 => 133,  315 => 128,  312 => 127,  298 => 126,  292 => 122,  284 => 120,  282 => 119,  277 => 116,  269 => 114,  267 => 113,  263 => 111,  257 => 109,  254 => 108,  248 => 106,  245 => 105,  239 => 103,  236 => 102,  230 => 98,  224 => 95,  218 => 93,  216 => 92,  211 => 89,  203 => 87,  201 => 86,  197 => 84,  191 => 82,  188 => 81,  182 => 79,  179 => 78,  173 => 76,  170 => 75,  168 => 74,  165 => 73,  147 => 72,  144 => 71,  138 => 69,  136 => 68,  128 => 62,  120 => 57,  116 => 55,  114 => 54,  99 => 41,  93 => 39,  91 => 38,  86 => 35,  80 => 33,  78 => 32,  71 => 27,  65 => 25,  62 => 24,  54 => 19,  50 => 17,  48 => 16,  42 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/marvelous/templates/page/page.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\marvelous\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "for" => 72);
        static $filters = array("escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
