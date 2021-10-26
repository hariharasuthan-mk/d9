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

/* modules/custom/text_image_para/templates/paragraph--text-image.html.twig */
class __TwigTemplate_cd98ad0f982ef0024473eb20cd49696db4e42130228b1c139030abd8d3d0ec07 extends \Twig\Template
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
        // line 135
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
        // line 133
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "<div class=\"container\">

    ";
        // line 54
        if ((($context["opt_wrap"] ?? null) == 1)) {
            echo "     

      <div class=\"row single-post mt-5 no-gutters\">
            <div class=\"col-sm-12\">            
            ";
            // line 58
            if ( !twig_test_empty(($context["card_title"] ?? null))) {
                // line 59
                echo "            <h1 class=\"text-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 59, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["card_title"] ?? null), 59, $this->source), "html", null, true);
                echo "</h1>
            ";
            }
            // line 61
            echo "            ";
            if ( !twig_test_empty(($context["img_src"] ?? null))) {
                // line 62
                echo "            <div class=\"image-wrapper float-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 62, $this->source), "html", null, true);
                echo " pr-3\">
                <img src=\"";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_src"] ?? null), 63, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 63), "alt", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\"  title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 63), "alt", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\" />
            </div>
            ";
            }
            // line 66
            echo "
            ";
            // line 67
            if ( !twig_test_empty(($context["body_desc"] ?? null))) {
                // line 68
                echo "            <div class=\"single-post-content-wrapper p-3\">
                ";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body_desc"] ?? null), 69, $this->source));
                echo "
            </div>
            ";
            }
            // line 72
            echo "        </div>
      </div>

     ";
        } else {
            // line 75
            echo "  

      <div class=\"row single-post mt-5 no-gutters\">

            <div class=\"col-sm-6\">     

                ";
            // line 81
            if ( !twig_test_empty(($context["card_title"] ?? null))) {
                echo "       
                <h1 class=\"text-";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 82, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["card_title"] ?? null), 82, $this->source), "html", null, true);
                echo "</h1>
                ";
            }
            // line 84
            echo "                
                ";
            // line 85
            if ( !twig_test_empty(($context["img_src"] ?? null))) {
                // line 86
                echo "                <div class=\"pr-3\">
                    <img src=\"";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_src"] ?? null), 87, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 87), "alt", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "\"  title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image", [], "any", false, false, true, 87), "alt", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "\"  />
                </div>
                ";
            }
            // line 90
            echo "
            </div>

            <div class=\"col-sm-6\">
            ";
            // line 94
            if ( !twig_test_empty(($context["body_desc"] ?? null))) {
                // line 95
                echo "            <div class=\"single-post-content-wrapper p-3\">
                ";
                // line 96
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body_desc"] ?? null), 96, $this->source));
                echo "
            </div>
            ";
            }
            // line 99
            echo "
            </div>

      </div>


         


    ";
        }
        // line 109
        echo "


</div>

  

    









      
     


        

    ";
    }

    public function getTemplateName()
    {
        return "modules/custom/text_image_para/templates/paragraph--text-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 109,  191 => 99,  185 => 96,  182 => 95,  180 => 94,  174 => 90,  164 => 87,  161 => 86,  159 => 85,  156 => 84,  149 => 82,  145 => 81,  137 => 75,  131 => 72,  125 => 69,  122 => 68,  120 => 67,  117 => 66,  107 => 63,  102 => 62,  99 => 61,  91 => 59,  89 => 58,  82 => 54,  78 => 52,  74 => 51,  69 => 133,  67 => 51,  62 => 50,  58 => 49,  48 => 135,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/text_image_para/templates/paragraph--text-image.html.twig", "C:\\xampp\\htdocs\\task\\modules\\custom\\text_image_para\\templates\\paragraph--text-image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 49, "if" => 54);
        static $filters = array("clean_class" => 44, "escape" => 50, "raw" => 69);
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
