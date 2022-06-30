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

/* modules/contrib/swiper_formatter/templates/swiper-formatter-slide.html.twig */
class __TwigTemplate_398a6712c6c79c4381df63b71f68bab6426ee2bc35d60b5ec5ab516610ff479e extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 19
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 19, $this->source), "html", null, true);
        echo ">
    ";
        // line 20
        if (($context["background"] ?? null)) {
            // line 21
            echo "    
      ";
            // line 22
            if (($context["slide_url"] ?? null)) {
                // line 23
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide_url"] ?? null), 23, $this->source), "html", null, true);
                echo "\"><img data-src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 23, $this->source), "html", null, true);
                echo "\" class=\"swiper-lazy\" /></a>
      ";
            } else {
                // line 25
                echo "        <img data-src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 25, $this->source), "html", null, true);
                echo "\" class=\"swiper-lazy\" /> 
      ";
            }
            // line 27
            echo "      <div class=\"swiper-lazy-preloader\"></div>
    ";
        } else {
            // line 28
            echo "   
      ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide"] ?? null), 29, $this->source), "html", null, true);
            echo "        
    ";
        }
        // line 31
        echo "      
    ";
        // line 32
        if (($context["caption"] ?? null)) {
            // line 33
            echo "      <div class=\"swiper-caption\">
        ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 34, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 37
        echo "  </div>
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
    }

    public function getTemplateName()
    {
        return "modules/contrib/swiper_formatter/templates/swiper-formatter-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  93 => 37,  87 => 34,  84 => 33,  82 => 32,  79 => 31,  74 => 29,  71 => 28,  67 => 27,  61 => 25,  53 => 23,  51 => 22,  48 => 21,  46 => 20,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/swiper_formatter/templates/swiper-formatter-slide.html.twig", "/var/www/html/web/modules/contrib/swiper_formatter/templates/swiper-formatter-slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 18, "if" => 20);
        static $filters = array("escape" => 19, "spaceless" => 18);
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
