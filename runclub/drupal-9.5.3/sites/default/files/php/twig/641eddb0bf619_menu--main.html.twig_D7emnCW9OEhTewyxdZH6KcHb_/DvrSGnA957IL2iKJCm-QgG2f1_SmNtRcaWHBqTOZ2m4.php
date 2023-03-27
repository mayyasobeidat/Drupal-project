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

/* themes/yg_hotel/templates/menu--main.html.twig */
class __TwigTemplate_f86225bafe38b29ac75cb2144e28ff17 extends \Twig\Template
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
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo " ";
            $macros["menus"] = $this;
            // line 28
            echo " 
 
        <ul class=\"navbar-nav ml-auto sf-js-enabled sf-arrows\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "        ";
                // line 33
                $context["classes"] = [0 => "nav-link", 1 => ((twig_get_attribute($this->env, $this->source,                 // line 35
$context["item"], "is_expanded", [], "any", false, false, true, 35)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                 // line 36
$context["item"], "is_expanded", [], "any", false, false, true, 36)) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                 // line 37
$context["item"], "is_collapsed", [], "any", false, false, true, 37)) ? ("menu-item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["item"], "in_active_trail", [], "any", false, false, true, 38)) ? ("active") : (""))];
                // line 41
                echo "
          ";
                // line 43
                echo "
        ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44)) {
                    // line 45
                    echo "         <li class=\"nav-item dropdown\">
            <a ";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 46), "addClass", [0 => ($context["classes"] ?? null), 1 => "item"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo " href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo " <i class=\"fa fa-plus\"></i>
            </a>
      
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            ";
                    // line 52
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 53
                        echo "                <a class=\"dropdown-item\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "</a>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "            </ul>
          </li>
          ";
                    // line 58
                    echo "
      ";
                } else {
                    // line 60
                    echo "
        ";
                    // line 62
                    echo "           <li class=\"nav-item\">
                <a ";
                    // line 63
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 63), "addClass", [0 => ($context["classes"] ?? null), 1 => "item"], "method", false, false, true, 63), 63, $this->source), "html", null, true);
                    echo " href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                    echo "</a>
                </li>

      ";
                }
                // line 67
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </ul>
    


";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/yg_hotel/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  153 => 67,  142 => 63,  139 => 62,  136 => 60,  132 => 58,  128 => 55,  115 => 53,  110 => 52,  103 => 47,  97 => 46,  94 => 45,  92 => 44,  89 => 43,  86 => 41,  84 => 38,  83 => 37,  82 => 36,  81 => 35,  80 => 33,  78 => 32,  74 => 31,  69 => 28,  66 => 27,  51 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_hotel/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\runclub\\drupal-9.5.3\\themes\\yg_hotel\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "for" => 31, "set" => 33, "if" => 44);
        static $filters = array("escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
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
