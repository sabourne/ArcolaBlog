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

/* posts/tag.html.twig */
class __TwigTemplate_eadef714f3afa272f1023e2002ecef04f59d622fa042506241b83ca09730588b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/tag.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "posts/tag.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Arcola Blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <table id=\"posts\" class=\"table\">
            <tbody>
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 9, $this->source); })()));
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
                $context["wordsPerMinute"] = twig_round(((isset($context["numberOfWords"]) || array_key_exists("numberOfWords", $context) ? $context["numberOfWords"] : (function () { throw new RuntimeError('Variable "numberOfWords" does not exist.', 27, $this->source); })()) / 200), 0, "common");
                echo "                             
                            ";
                // line 28
                if (0 <= twig_compare((isset($context["wordsPerMinute"]) || array_key_exists("wordsPerMinute", $context) ? $context["wordsPerMinute"] : (function () { throw new RuntimeError('Variable "wordsPerMinute" does not exist.', 28, $this->source); })()), 1)) {
                    // line 29
                    echo "                                ";
                    echo twig_escape_filter($this->env, (isset($context["wordsPerMinute"]) || array_key_exists("wordsPerMinute", $context) ? $context["wordsPerMinute"] : (function () { throw new RuntimeError('Variable "wordsPerMinute" does not exist.', 29, $this->source); })()), "html", null, true);
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
                    echo "                                <span class=\"badge badge-light\"><a href=\"post/relevant/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 38), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "</a></span>                            
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <script src=\"/js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "posts/tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 60,  202 => 59,  193 => 55,  188 => 52,  178 => 48,  174 => 47,  166 => 42,  162 => 40,  151 => 38,  147 => 37,  144 => 36,  140 => 33,  136 => 31,  130 => 29,  128 => 28,  123 => 27,  121 => 26,  117 => 24,  112 => 22,  109 => 21,  103 => 19,  98 => 16,  95 => 15,  89 => 13,  85 => 10,  81 => 9,  77 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Arcola Blog{% endblock %}

{% block body %}
    {% if posts %}
        <table id=\"posts\" class=\"table\">
            <tbody>
                {% for post in posts %}
                    <tr>
                        <td>
                        {# Image #}
                            <img src=\"/uploads/post_image/{{post.imageFilename}}\" alt=\"post.imageFilename\" width=\"30%\">
                       
                        {# Title #}    
                            <h1>{{ post.title }}</h1>
                        
                        {# Body #}
                            <p>{{ post.body|length > 200 ? post.body|slice(0, 200) ~ '...' : post.body  }}</p>

                        {# Date #}    
                            <p>Date published: {{ post.date|date(\"m/d/Y\") }}</p>
                            
                        {# Minutes to read #}    
                            <p><i class=\"fa fa-clock-o\"></i>
                            {% set numberOfWords = post.body|split(' ')|length%}
                            {% set wordsPerMinute = (numberOfWords/200)|round(0, 'common') %}                             
                            {% if wordsPerMinute >= 1 %}
                                {{wordsPerMinute}}
                            {% else %}
                                Less than 1
                            {% endif %}
                            min read</p>

                        {# Tags #}
                            <p>Tags: 
                            {% for tag in post.tags %}
                                <span class=\"badge badge-light\"><a href=\"post/relevant/{{tag.id}}\">{{ tag.name }}</a></span>                            
                            {% endfor %}
                            </p>
                            
                            <h5><a class=\"text-success\" href=\"post/{{ post.id }}\">... Read more</a></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href=\"post/update/{{ post.id }}\" class=\"btn btn-green\">Update</a>
                        <a href=\"#\" id=\"delete\" class=\"btn btn-danger delete-post\" data-id={{ post.id }}>Delete</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No posts to display</p>
    {% endif %}
{% endblock %}

{% block javascripts %}
    <script src=\"/js/main.js\"></script>
{% endblock %}", "posts/tag.html.twig", "C:\\Users\\Sara\\Documents\\xampp\\htdocs\\ArcolaBlog\\templates\\posts\\tag.html.twig");
    }
}
