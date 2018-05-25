<?php

/* @particles/accordion.html.twig */
class __TwigTemplate_6e698df8cd72029538391b9ed33151df3fa74e8a685c081c8c2f3bad1decbd89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/accordion.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = ((((((isset($context["attr_extra"]) ? $context["attr_extra"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        ob_start();
        // line 22
        echo "    <div class=\"g-particle-intro\">
        ";
        // line 23
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 24
            echo "            <h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
            <div class=\"g-title-separator ";
            // line 25
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
        ";
        }
        // line 26
        echo " 
        ";
        // line 27
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 28
        echo "    </div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 14
            echo "        ";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
        <style type=\"text/css\">
            .uk-accordion {display: block !important;}
        </style>
    ";
        }
    }

    // line 31
    public function block_particle($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"g-accordion";
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()));
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">
        ";
        // line 33
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 34
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
            echo "
        ";
        }
        // line 36
        echo "        
        <div class=\"uk-accordion\" data-uk-accordion=\"{collapse: ";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "collapse", array()), "true")) : ("true")));
        echo ", showfirst: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "showfirst", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "showfirst", array()), "true")) : ("true")));
        echo "}\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                ";
            $context["attr_extra_item"] = "";
            // line 40
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 41
                echo "                    ";
                $context["attr_extra_item"] = ((((((isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null) . " ") . twig_escape_filter($this->env, twig_first($this->env, twig_get_array_keys_filter($context["extra"])))) . "=\"") . twig_escape_filter($this->env, twig_first($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter($context["extra"])), "html_attr")) . "\"");
                // line 42
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                <div class=\"g-accordion-item";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
            }
            echo "\" ";
            if ($this->getAttribute($context["item"], "extra", array())) {
                echo (isset($context["attr_extra_item"]) ? $context["attr_extra_item"] : null);
            }
            echo ">
                    ";
            // line 44
            if ($this->getAttribute($context["item"], "title", array())) {
                // line 45
                echo "                        <h3 class=\"uk-accordion-title\">";
                // line 46
                echo $this->getAttribute($context["item"], "title", array());
                // line 47
                echo "</h3>
                    ";
            }
            // line 49
            echo "
                    ";
            // line 50
            if ($this->getAttribute($context["item"], "description", array())) {
                // line 51
                echo "                        <div class=\"uk-accordion-content\">";
                // line 52
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "filter", array(0 => $this->getAttribute($context["item"], "description", array())), "method"));
                // line 53
                echo "</div>
                    ";
            }
            // line 55
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 57,  190 => 55,  186 => 53,  184 => 52,  182 => 51,  180 => 50,  177 => 49,  173 => 47,  171 => 46,  169 => 45,  167 => 44,  155 => 43,  149 => 42,  146 => 41,  141 => 40,  138 => 39,  134 => 38,  128 => 37,  125 => 36,  119 => 34,  117 => 33,  105 => 32,  102 => 31,  91 => 14,  88 => 13,  85 => 12,  81 => 1,  77 => 28,  71 => 27,  68 => 26,  61 => 25,  56 => 24,  54 => 23,  51 => 22,  49 => 21,  38 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% set attr_extra = '' %}
{% if particle.extra %}
    {% for attributes in particle.extra %}
        {% for key, value in attributes %}
            {% set attr_extra = attr_extra ~ ' ' ~ key|e ~ '=\"' ~ value|e('html_attr') ~ '\"' %}
        {% endfor %}
    {% endfor %}
{% endif %}

{% block stylesheets %}
    {% if particle.enabled %}
        {{ parent() }}
        <style type=\"text/css\">
            .uk-accordion {display: block !important;}
        </style>
    {% endif %}
{% endblock %}

{% set particleheading %}
    <div class=\"g-particle-intro\">
        {% if particle.mainheading %}
            <h3 class=\"g-title g-main-title\">{{ particle.mainheading|raw }}</h3>
            <div class=\"g-title-separator {% if particle.introtext == false %}no-intro-text{% endif %}\"></div>
        {% endif %} 
        {% if particle.introtext %}<p class=\"g-introtext\">{{ particle.introtext|raw }}</p>{% endif %}
    </div>
{% endset %}

{% block particle %}
    <div class=\"g-accordion{% if particle.css.class %} {{ particle.css.class|e }}{% endif %}\" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>
        {% if particle.mainheading or particle.introtext %}
            {{ particleheading }}
        {% endif %}
        
        <div class=\"uk-accordion\" data-uk-accordion=\"{collapse: {{ particle.collapse|default(\"true\")|e }}, showfirst: {{ particle.showfirst|default(\"true\")|e }}}\">
            {% for item in particle.items %}
                {% set attr_extra_item = '' %}
                {% for extra in item.extra %}
                    {% set attr_extra_item = attr_extra_item ~ ' ' ~ extra|keys|first|e ~ '=\"' ~ extra|values|first|e('html_attr') ~ '\"' %}
                {% endfor %}
                <div class=\"g-accordion-item{% if item.class %} {{ item.class|e }}{% endif %}\" {% if item.extra %}{{ attr_extra_item|raw }}{% endif %}>
                    {% if item.title %}
                        <h3 class=\"uk-accordion-title\">
                            {{- item.title|raw -}}
                        </h3>
                    {% endif %}

                    {% if item.description %}
                        <div class=\"uk-accordion-content\">
                            {{- gantry.platform.filter(item.description)|html|raw -}}
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "@particles/accordion.html.twig", "/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/accordion.html.twig");
    }
}
