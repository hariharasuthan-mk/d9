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

/* themes/bootstrap4/templates/paragraphs/paragraph--text-image--default.html.twig */
class __TwigTemplate_9e40e348d66fd238c56dae86be1fb09ec68a49b279cd2bdf9a40fdebf376c172 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
        // line 136
        echo "





";
    }

    // line 49
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "
<div class=\"container\">

    ";
        // line 55
        if ((($context["opt_wrap"] ?? null) == 1)) {
            echo "     

      <div class=\"row single-post mt-5 no-gutters\">
            <div class=\"col-sm-12\">            
            ";
            // line 59
            if ( !twig_test_empty(($context["card_title"] ?? null))) {
                // line 60
                echo "            <h1 class=\"text-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 60, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["card_title"] ?? null), 60, $this->source), "html", null, true);
                echo "</h1>
            ";
            }
            // line 62
            echo "            ";
            if ( !twig_test_empty(($context["img_src"] ?? null))) {
                // line 63
                echo "            <div class=\"image-wrapper float-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 63, $this->source), "html", null, true);
                echo " pr-3\">
                <img src=\"";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_src"] ?? null), 64, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 64), "alt", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\"  title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 64), "alt", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\" />
            </div>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if ( !twig_test_empty(($context["body_desc"] ?? null))) {
                // line 69
                echo "            <div class=\"single-post-content-wrapper p-3\">
                ";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body_desc"] ?? null), 70, $this->source));
                echo "
            </div>
            ";
            }
            // line 73
            echo "        </div>
      </div>

     ";
        } else {
            // line 76
            echo "  

      <div class=\"row single-post mt-5 no-gutters\">

            <div class=\"col-sm-6\">     

                ";
            // line 82
            if ( !twig_test_empty(($context["card_title"] ?? null))) {
                echo "       
                <h1 class=\"text-";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 83, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["card_title"] ?? null), 83, $this->source), "html", null, true);
                echo "</h1>
                ";
            }
            // line 85
            echo "                
                ";
            // line 86
            if ( !twig_test_empty(($context["img_src"] ?? null))) {
                // line 87
                echo "                <div class=\"pr-3\">
                    <img src=\"";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_src"] ?? null), 88, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 88), "alt", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\"  title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 88), "alt", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\"  />
                </div>
                ";
            }
            // line 91
            echo "
            </div>

            <div class=\"col-sm-6\">
            ";
            // line 95
            if ( !twig_test_empty(($context["body_desc"] ?? null))) {
                // line 96
                echo "            <div class=\"single-post-content-wrapper p-3\">
                ";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body_desc"] ?? null), 97, $this->source));
                echo "
            </div>
            ";
            }
            // line 100
            echo "
            </div>

      </div>


         


    ";
        }
        // line 110
        echo "


</div>

  

    









      
     


        

    ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/paragraphs/paragraph--text-image--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 110,  192 => 100,  186 => 97,  183 => 96,  181 => 95,  175 => 91,  165 => 88,  162 => 87,  160 => 86,  157 => 85,  150 => 83,  146 => 82,  138 => 76,  132 => 73,  126 => 70,  123 => 69,  121 => 68,  118 => 67,  108 => 64,  103 => 63,  100 => 62,  92 => 60,  90 => 59,  83 => 55,  78 => 52,  74 => 51,  69 => 134,  67 => 51,  62 => 50,  58 => 49,  48 => 136,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/paragraphs/paragraph--text-image--default.html.twig", "C:\\xampp\\htdocs\\drupal9_latest\\themes\\bootstrap4\\templates\\paragraphs\\paragraph--text-image--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "if" => 55);
        static $filters = array("clean_class" => 44, "escape" => 50, "raw" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw'],
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
