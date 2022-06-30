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

/* modules/contrib/swiper_formatter/templates/swiper-formatter.html.twig */
class __TwigTemplate_4d03a4aeb1487f59e66a67a7c952466dc12db1ae1f2ae16e12054e02eb61e640 extends \Twig\Template
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
        // line 17
        echo "
";
        // line 18
        ob_start(function () { return ''; });
        // line 19
        echo "  ";
        if ( !twig_test_empty(($context["content"] ?? null))) {
            // line 20
            echo "
   ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "swiper_title", [], "any", false, false, true, 21)) {
                // line 22
                echo "      <h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "swiper_title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</h3>
    ";
            }
            // line 24
            echo "
   
    <div";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 26, $this->source), "html", null, true);
            echo ">

      ";
            // line 29
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 29, $this->source), "html", null, true);
            echo ">
        ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 30, $this->source), "html", null, true);
            echo "
      </div>
      
      ";
            // line 34
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pagination", [], "any", false, false, true, 34), "enabled", [], "any", false, false, true, 34)) {
                // line 35
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_attributes"] ?? null), 35, $this->source), "html", null, true);
                echo "></div>
      ";
            }
            // line 37
            echo "
      ";
            // line 39
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "navigation", [], "any", false, false, true, 39), "enabled", [], "any", false, false, true, 39)) {
                // line 40
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navigation_attributes"] ?? null), "prev", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "></div>
        <div";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navigation_attributes"] ?? null), "next", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "></div>
      ";
            }
            // line 43
            echo "    
    </div>
    
  ";
        }
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
    }

    public function getTemplateName()
    {
        return "modules/contrib/swiper_formatter/templates/swiper-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 18,  103 => 43,  98 => 41,  93 => 40,  90 => 39,  87 => 37,  81 => 35,  78 => 34,  72 => 30,  67 => 29,  62 => 26,  58 => 24,  52 => 22,  50 => 21,  47 => 20,  44 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/swiper_formatter/templates/swiper-formatter.html.twig", "/var/www/html/web/modules/contrib/swiper_formatter/templates/swiper-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 18, "if" => 19);
        static $filters = array("escape" => 22, "spaceless" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if'],
                ['escape', 'spaceless'],
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
