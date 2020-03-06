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

/* posts/index.html.twig */
class __TwigTemplate_addbecf0c70d274710c1d9545ecec08c6b02fbab55ee9ecb135621e16f700abc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "posts/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Arcola Blog";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (($context["posts"] ?? null)) {
            // line 7
            echo "        <table id=\"posts\" class=\"table\">
            <tbody>
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 10
                echo "                    <tr>
                        <td>
                        ";
                // line 13
                echo "                            <img src=\"/uploads/post_image/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "imageFilename", [], "any", false, false, false, 13), "html", null, true);
                echo "\" alt=\"post.imageFilename\" width=\"30%\">
                       
                        ";
                // line 15
                echo "    
                            <h1>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
                echo "</h1>
                        
                        ";
                // line 19
                echo "                            <p>";
                echo twig_escape_filter($this->env, ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 19)), 200)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 19), 0, 200) . "...")) : (twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 19))), "html", null, true);
                echo "</p>

                        ";
                // line 21
                echo "    
                            <p>Date published: ";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 22), "m/d/Y"), "html", null, true);
                echo "</p>
                            
                        ";
                // line 24
                echo "    
                            <p><i class=\"fa fa-clock-o\"></i>
                            ";
                // line 26
                $context["numberOfWords"] = twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 26), " "));
                // line 27
                echo "                            ";
                $context["wordsPerMinute"] = twig_round((($context["numberOfWords"] ?? null) / 200), 0, "common");
                echo "                             
                            ";
                // line 28
                if (0 <= twig_compare(($context["wordsPerMinute"] ?? null), 1)) {
                    // line 29
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["wordsPerMinute"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 31
                    echo "                                Less than 1
                            ";
                }
                // line 33
                echo "                            min read</p>

                        ";
                // line 36
                echo "                            <p>Tags: 
                            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 38
                    echo "                                <span class=\"badge badge-dark\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "</span>                            
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                            </p>
                            
                            <h5><a class=\"text-success\" href=\"post/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\">... Read more</a></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href=\"post/update/";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\"btn btn-green\">Update</a>
                        <a href=\"#\" id=\"delete\" class=\"btn btn-danger delete-post\" data-id=";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo ">Delete</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 55
            echo "        <p>No posts to display</p>
    ";
        }
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    <script src=\"/js/main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  182 => 59,  176 => 55,  171 => 52,  161 => 48,  157 => 47,  149 => 42,  145 => 40,  136 => 38,  132 => 37,  129 => 36,  125 => 33,  121 => 31,  115 => 29,  113 => 28,  108 => 27,  106 => 26,  102 => 24,  97 => 22,  94 => 21,  88 => 19,  83 => 16,  80 => 15,  74 => 13,  70 => 10,  66 => 9,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posts/index.html.twig", "C:\\Users\\Sara\\Documents\\xampp\\htdocs\\ArcolaBlog\\templates\\posts\\index.html.twig");
    }
}
