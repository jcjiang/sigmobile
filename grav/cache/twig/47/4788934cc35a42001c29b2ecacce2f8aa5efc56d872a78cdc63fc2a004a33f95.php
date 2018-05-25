<?php

/* @particles/contentvertcubes.html.twig */
class __TwigTemplate_732cd89ffe9bd63d1fa39c1f2e78c41c6bd8195914ddb681cdc21f31f8e0ea0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentvertcubes.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"g-contentcubes ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 7
        echo "
    ";
        // line 8
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array())) {
            // line 9
            echo "        <div class=\"vert-cube-items-wrapper\">
                <div class=\"item cube-row g-grid\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "                    <div class=\"g-block size-30\">
                        ";
                // line 13
                if ($this->getAttribute($context["item"], "image", array())) {
                    // line 14
                    echo "                            <div class=\"vert-cube-image-wrapper\">
                                <img src=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                    echo "\" class=\"cube-image\" />
                            </div>
                        ";
                }
                // line 18
                echo "
                        <div class=\"vert-cube-text-wrapper\">
                            ";
                // line 20
                if ($this->getAttribute($context["item"], "label", array())) {
                    // line 21
                    echo "                                <div class=\"item-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()));
                    echo "</div>
                            ";
                }
                // line 23
                echo "
                            <div class=\"item-title\">
                            <p>
                                ";
                // line 26
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 27
                    echo "                                <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"item-link ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">
                                    ";
                }
                // line 29
                echo "
                                    ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "

                                    ";
                // line 32
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 33
                    echo "                                    <span class=\"item-link-text\">";
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "</span>
                                </a>
                                ";
                }
                // line 36
                echo "                            </p>    
                            </div>

                            ";
                // line 39
                if ($this->getAttribute($context["item"], "tags", array())) {
                    // line 40
                    echo "                                <div class=\"item-tags\">

                                    ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "tags", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 43
                        echo "                                        <span class=\"tag\">
                                            <a target=\"";
                        // line 44
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["tag"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tag"], "target", array()), "_self")) : ("_self")));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "link", array()));
                        echo "\">
                                                ";
                        // line 45
                        if ($this->getAttribute($context["tag"], "icon", array())) {
                            echo "<i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "icon", array()), "html", null, true);
                            echo "\"></i> ";
                        }
                        // line 46
                        echo "                                                ";
                        echo $this->getAttribute($context["tag"], "text", array());
                        echo "
                                            </a>
                                        </span>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "
                                </div>
                            ";
                }
                // line 53
                echo "                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </div>
        </div>
    ";
        }
        // line 59
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentvertcubes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  173 => 56,  165 => 53,  160 => 50,  149 => 46,  143 => 45,  137 => 44,  134 => 43,  130 => 42,  126 => 40,  124 => 39,  119 => 36,  112 => 33,  110 => 32,  105 => 30,  102 => 29,  92 => 27,  90 => 26,  85 => 23,  79 => 21,  77 => 20,  73 => 18,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  53 => 11,  49 => 9,  47 => 8,  44 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% block particle %}

<div class=\"g-contentcubes {{ particle.css.class }}\">
    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

    {% if particle.items %}
        <div class=\"vert-cube-items-wrapper\">
                <div class=\"item cube-row g-grid\">
                    {% for item in particle.items %}
                    <div class=\"g-block size-30\">
                        {% if item.image %}
                            <div class=\"vert-cube-image-wrapper\">
                                <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\" class=\"cube-image\" />
                            </div>
                        {% endif %}

                        <div class=\"vert-cube-text-wrapper\">
                            {% if item.label %}
                                <div class=\"item-label\">{{ item.label|e }}</div>
                            {% endif %}

                            <div class=\"item-title\">
                            <p>
                                {% if item.link %}
                                <a target=\"{{ item.buttontarget|default('_self')|e }}\" class=\"item-link {{ item.buttonclass|e }}\" href=\"{{ item.link|e }}\">
                                    {% endif %}

                                    {{ item.title|e }}

                                    {% if item.link %}
                                    <span class=\"item-link-text\">{{ item.linktext|raw }}</span>
                                </a>
                                {% endif %}
                            </p>    
                            </div>

                            {% if item.tags %}
                                <div class=\"item-tags\">

                                    {% for tag in item.tags %}
                                        <span class=\"tag\">
                                            <a target=\"{{ tag.target|default('_self')|e }}\" href=\"{{ tag.link|e }}\">
                                                {% if tag.icon %}<i class=\"{{ tag.icon }}\"></i> {% endif %}
                                                {{ tag.text|raw }}
                                            </a>
                                        </span>
                                    {% endfor %}

                                </div>
                            {% endif %}
                        </div>
                    </div>
                    {% endfor %}
                </div>
        </div>
    {% endif %}
</div>

{% endblock %}
", "@particles/contentvertcubes.html.twig", "/Users/jc/Downloads/SIGMobile-Web/grav/user/themes/g5_helium/particles/contentvertcubes.html.twig");
    }
}
