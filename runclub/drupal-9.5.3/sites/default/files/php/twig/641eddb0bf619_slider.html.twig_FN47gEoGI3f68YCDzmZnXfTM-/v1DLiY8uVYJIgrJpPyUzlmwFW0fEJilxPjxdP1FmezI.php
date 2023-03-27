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

/* @mili/template-parts/slider.html.twig */
class __TwigTemplate_16e215071c1f80b7f42467e739c4a874 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mili/slider"), "html", null, true);
        echo "
<section class=\"slider\">
  <div class=\"container\">
\t\t<div class=\"slider-container\">
\t\t\t<div class=\"slider-section slider-text\">
\t\t\t\t<ul class=\"js-rotating\">
\t\t\t\t";
        // line 7
        if ((($context["slider_code"] ?? null) != "")) {
            // line 8
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 8, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>"));
            echo "
\t\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<h1>Mili is Multipurpose Drupal theme</h1>
\t\t\t\t\t\t<p>Mili Theme is packed full of all the amazing features and options for you to create a successful website</p>
\t\t\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<h1>Welcome To Drupar Design Studio</h1>
\t\t\t\t\t\t<p>We present you material design. We put our hearts and soul into making every project.</p>
\t\t\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<h1>We Create Awesome Drupal Themes!</h1>
\t\t\t\t\t\t<p>Our themes are of high quality, flexible and beautifully crafted that stand out of crowd.</p>
\t\t\t\t\t\t<a class=\"button\" href=\"#\">Get Started</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</ul><!--/.home-slider -->
\t\t\t</div><!--/slider-text -->
\t\t\t<div class=\"slider-section slider-image\">
\t\t\t\t";
        // line 29
        if ((($context["slider_image_path"] ?? null) != "")) {
            // line 30
            echo "\t\t\t\t\t<img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image_path"] ?? null), 30, $this->source), "html", null, true);
            echo "\" alt=\"slider image\" />
\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t<img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 32, $this->source), "html", null, true);
            echo "/images/slider.svg\" alt=\"image\" />
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t
\t\t\t</div><!--/slider-image -->
\t\t</div><!--/slider-container -->
  </div><!--/.container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "@mili/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  87 => 32,  81 => 30,  79 => 29,  74 => 26,  56 => 10,  50 => 8,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@mili/template-parts/slider.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\mili\\templates\\template-parts\\slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 1, "raw" => 8, "striptags" => 8);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'striptags'],
                ['attach_library']
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
