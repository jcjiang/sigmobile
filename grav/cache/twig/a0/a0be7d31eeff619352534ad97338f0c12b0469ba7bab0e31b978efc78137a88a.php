<?php

/* @particles/uikit.html.twig */
class __TwigTemplate_2da21725c541aa980b098359fc61d69b2bcca8dee954425321b3d4b06c40b632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/uikit.html.twig", 1);
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
        echo "    ";
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" => 11);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 6
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://uikit/css/uikit.min.css"), "html", null, true);
            echo "\" type=\"text/css\"/>
        ";
        }
        // line 8
        echo "    ";
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 10
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" => 10);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "jslocation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "jslocation", array()), "footer")) : ("footer"));
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 11
        echo "        ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 12
            echo "            ";
            $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "load", array(0 => "jquery"), "method");
            // line 13
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://uikit/js/uikit.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
        ";
        }
        // line 15
        echo "    ";
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
    }

    public function getTemplateName()
    {
        return "@particles/uikit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  75 => 13,  72 => 12,  69 => 11,  57 => 10,  53 => 8,  47 => 6,  44 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    {% assets in 'head' with { priority: 11 } %}
        {% if particle.enabled %}
            <link rel=\"stylesheet\" href=\"{{ url('gantry-theme://uikit/css/uikit.min.css') }}\" type=\"text/css\"/>
        {% endif %}
    {% endassets -%}

    {% assets in particle.jslocation|default('footer') with { priority: 10 } %}
        {% if particle.enabled %}
            {% do gantry.load('jquery') %}
            <script src=\"{{ url('gantry-theme://uikit/js/uikit.min.js') }}\" type=\"text/javascript\"></script>
        {% endif %}
    {% endassets -%}
{% endblock %}", "@particles/uikit.html.twig", "/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/uikit.html.twig");
    }
}
