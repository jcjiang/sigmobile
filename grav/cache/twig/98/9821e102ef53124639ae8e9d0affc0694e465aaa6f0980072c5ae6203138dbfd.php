<?php

/* @particles/slideshow-grav.html.twig */
class __TwigTemplate_6ca72cd2725fb52b4ad8d68895d28f645af067d09b961e1d6a2a0ead82376712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/slideshow-grav.html.twig", 1);
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
        // line 12
        $context["article_settings"] = $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "article", array());
        // line 13
        $context["filter"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "filter", array());
        // line 14
        $context["sort"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "sort", array());
        // line 15
        $context["limit"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "limit", array());
        // line 16
        $context["display"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "display", array());
        // line 19
        $context["articles"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "collection", array(0 => array("items" => array("@taxonomy.category" => twig_split_filter($this->env, $this->getAttribute(        // line 20
(isset($context["filter"]) ? $context["filter"] : null), "categories", array()), " ")), "order" => array("by" => $this->getAttribute(        // line 21
(isset($context["sort"]) ? $context["sort"] : null), "orderby", array()), "dir" => $this->getAttribute((isset($context["sort"]) ? $context["sort"] : null), "ordering", array())), "url_taxonomy_filters" => false), 1 => false), "method"), "slice", array(0 => $this->getAttribute(        // line 23
(isset($context["limit"]) ? $context["limit"] : null), "start", array()), 1 => $this->getAttribute((isset($context["limit"]) ? $context["limit"] : null), "total", array())), "method");
        // line 25
        ob_start();
        // line 26
        echo "    <div class=\"g-particle-intro\">
        ";
        // line 27
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 28
            echo "            <h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
            <div class=\"g-title-separator ";
            // line 29
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
        ";
        }
        // line 30
        echo " 
        ";
        // line 31
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 32
        echo "    </div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        ob_start();
        // line 36
        echo "{
        autoplay:";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()), "true")) : ("true")));
        echo ",
        autoplayInterval:";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplayInterval", array()), 7000)) : (7000)));
        echo ",
        kenburns:";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "kenburns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "kenburns", array()), "false")) : ("false")));
        echo ",
        animation:'";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animation", array()), "fade")) : ("fade")));
        echo "',
        duration:";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animationDuration", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "animationDuration", array()), 500)) : (500)));
        echo ",
        pauseOnHover:";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array()), "true")) : ("true")));
        echo ",
        height:'";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()), "auto")) : ("auto")));
        echo "'
    }";
        $context["slideshow_settings"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        ob_start();
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "
        ";
            // line 50
            ob_start();
            // line 51
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "enabled", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "enabled", array())))) {
                // line 52
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro")) {
                    // line 53
                    $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "file", array())) : (true))) : (""));
                    // line 54
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full")) {
                    // line 55
                    echo "                    ";
                    $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "file", array())) : (true))) : (""));
                    // line 56
                    echo "                ";
                }
                // line 57
                echo "
                ";
                // line 58
                $context["imageinner"] = ((((isset($context["file"]) ? $context["file"] : null) === true)) ? (twig_first($this->env, $this->getAttribute($this->getAttribute($context["article"], "media", array()), "images", array()))) : ((((isset($context["file"]) ? $context["file"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "media", array()), "images", array()), (isset($context["file"]) ? $context["file"] : null), array(), "array")) : (""))));
                // line 59
                echo "
                <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute((isset($context["imageinner"]) ? $context["imageinner"] : null), "url", array())), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute((isset($context["imageinner"]) ? $context["imageinner"] : null), "url", array()));
                echo " alt=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array())), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : (twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()))));
                echo "\" />
            ";
            }
            // line 62
            echo "        ";
            $context["slide_media"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            echo " 

        ";
            // line 64
            ob_start();
            // line 65
            echo "
            ";
            // line 66
            ob_start();
            // line 67
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "bottom")) {
                // line 68
                echo "uk-overlay-bottom";
            }
            // line 71
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "left")) {
                // line 72
                echo "uk-overlay-left";
            }
            // line 75
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "right")) {
                // line 76
                echo "uk-overlay-right";
            }
            // line 79
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "top")) {
                // line 80
                echo "uk-overlay-top";
            }
            // line 83
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "bottom-left")) {
                // line 84
                echo "uk-flex-bottom";
            }
            // line 87
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "bottom-center")) {
                // line 88
                echo "uk-flex-bottom uk-flex-center";
            }
            // line 91
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "bottom-right")) {
                // line 92
                echo "uk-flex-bottom uk-flex-right";
            }
            // line 95
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "middle-left")) {
                // line 96
                echo "uk-flex-middle";
            }
            // line 99
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "middle-center")) {
                // line 100
                echo "uk-flex-middle uk-flex-center";
            }
            // line 103
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "middle-right")) {
                // line 104
                echo "uk-flex-middle uk-flex-right";
            }
            // line 107
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "top-left")) {
                // line 108
                echo "uk-flex-top";
            }
            // line 111
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "top-center")) {
                // line 112
                echo "uk-flex-top uk-flex-center";
            }
            // line 115
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "top-right")) {
                // line 116
                echo "uk-flex-top uk-flex-right";
            }
            $context["overlay_position"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 120
            ob_start();
            // line 121
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "fade")) {
                // line 122
                echo "uk-overlay-fade";
            }
            // line 125
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-left")) {
                // line 126
                echo "uk-overlay-slide-left";
            }
            // line 129
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-right")) {
                // line 130
                echo "uk-overlay-slide-right";
            }
            // line 133
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-top")) {
                // line 134
                echo "uk-overlay-slide-top";
            }
            // line 137
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-bottom")) {
                // line 138
                echo "uk-overlay-slide-bottom";
            }
            // line 141
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-left-short")) {
                // line 142
                echo "uk-overlay-slide-left uk-overlay-left-short";
            }
            // line 145
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-right-short")) {
                // line 146
                echo "uk-overlay-slide-right uk-overlay-right-short";
            }
            // line 149
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-top-short")) {
                // line 150
                echo "uk-overlay-slide-top uk-overlay-top-short";
            }
            // line 153
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "slide-bottom-short")) {
                // line 154
                echo "uk-overlay-slide-bottom uk-overlay-bottom-short";
            }
            // line 157
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayanimation", array()), "fade")) : ("fade")) == "scale")) {
                // line 158
                echo "uk-overlay-scale";
            }
            $context["slide_overlay_animation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 162
            ob_start();
            // line 163
            echo "                <h3 class=\"g-slideshow-title\">";
            // line 164
            if (((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array(), "any", false, true), "enabled", array()), "show")) : ("show")) == "show")) {
                // line 165
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "url", array()), "html", null, true);
                echo "\">";
                // line 166
                echo (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array())), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : (twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()))));
                // line 167
                echo "</a>";
            } else {
                // line 169
                echo (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array())), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : (twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()))));
            }
            // line 171
            echo "</h3>
            ";
            $context["articletitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 173
            echo "
            ";
            // line 174
            ob_start();
            // line 175
            echo "                <div class=\"g-article-details details-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array()), "html", null, true);
            echo "\">
                    ";
            // line 176
            if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) {
                // line 177
                echo "                        <span class=\"g-article-date\">";
                // line 178
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "published")) {
                    // line 179
                    echo "<i class=\"fa fa-clock-o\"></i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publishDate", array(), "method"), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                } elseif (($this->getAttribute($this->getAttribute(                // line 180
(isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "modified")) {
                    // line 181
                    echo "<i class=\"fa fa-clock-o\"></i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "modified", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                } else {
                    // line 183
                    echo "<i class=\"fa fa-clock-o\"></i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                }
                // line 185
                echo "</span>
                    ";
            }
            // line 187
            echo "
                    ";
            // line 188
            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array()) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "username", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "name", array())) || $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "alias", array())))) {
                // line 189
                echo "                        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "name", array())) {
                    // line 190
                    echo "                            ";
                    $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "name", array());
                    // line 191
                    echo "                        ";
                } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "alias", array())) {
                    // line 192
                    echo "                            ";
                    $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "alias", array());
                    // line 193
                    echo "                        ";
                } else {
                    // line 194
                    echo "                            ";
                    $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "username", array());
                    // line 195
                    echo "                        ";
                }
                // line 196
                echo "
                        <span class=\"g-article-author\">
                            <i class=\"fa fa-user\"></i>";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
                // line 199
                echo "</span>
                    ";
            }
            // line 201
            echo "
                    ";
            // line 202
            if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) {
                // line 203
                echo "                        ";
                $context["category_link"] = ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "route", array()) == true);
                // line 204
                echo "                        <span class=\"g-article-category\">
                            ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["article"], "taxonomy", array()), "category", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 206
                    echo "                                ";
                    if ((isset($context["category_link"]) ? $context["category_link"] : null)) {
                        // line 207
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "route", array())), "html", null, true);
                        echo "\">
                                        <i class=\"fa fa-folder-open\"></i>";
                        // line 208
                        echo $context["category"];
                        // line 209
                        echo "</a>
                                ";
                    } else {
                        // line 211
                        echo "                                    <i class=\"fa fa-folder-open\"></i>";
                        echo $context["category"];
                    }
                    // line 213
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "                        </span>
                    ";
            }
            // line 216
            echo "                </div>
            ";
            $context["articledetails"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 218
            echo "
            ";
            // line 219
            ob_start();
            // line 220
            echo "                <div class=\"g-article-read-more\">
                    <a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "url", array()), "html", null, true);
            echo "\">
                        <button class=\"button\">";
            // line 222
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
            echo "</button>
                    </a>
                </div>
            ";
            $context["readmorebutton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 226
            echo "
            ";
            // line 227
            ob_start();
            // line 228
            echo "                ";
            $context["article_text"] = ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["article"], "summary", array())) : ($this->getAttribute($context["article"], "content", array())));
            // line 229
            echo "                <div class=\"g-slideshow-desc\">";
            // line 230
            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "formatting", array()) == "text")) {
                // line 231
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
            } else {
                // line 233
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "filter", array(0 => (isset($context["article_text"]) ? $context["article_text"] : null)), "method"), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array())));
            }
            // line 236
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")) == "style2") && $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                // line 237
                echo twig_escape_filter($this->env, (isset($context["readmorebutton"]) ? $context["readmorebutton"] : null), "html", null, true);
            }
            // line 239
            echo "</div>
            ";
            $context["articletext"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 241
            echo "
            ";
            // line 242
            if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")) == "style1") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")) == "style3"))) {
                // line 243
                echo "
                ";
                // line 244
                if ((((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "bottom") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "top")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "left")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "right"))) {
                    // line 245
                    echo "                     <div class=\"uk-overlay-panel";
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")) == "style1")) {
                        echo " uk-overlay-background";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["overlay_position"]) ? $context["overlay_position"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["slide_overlay_animation"]) ? $context["slide_overlay_animation"] : null), "html", null, true);
                    echo " ";
                    if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null))));
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption\">
                            ";
                    // line 247
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 248
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletitle"]) ? $context["articletitle"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 250
                    echo "
                            ";
                    // line 251
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array()), "show")) : ("show")) == "show")) {
                        // line 252
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articledetails"]) ? $context["articledetails"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 254
                    echo "
                            ";
                    // line 255
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) {
                        // line 256
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletext"]) ? $context["articletext"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 258
                    echo "
                            ";
                    // line 259
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array()), "show")) : ("show")) == "showbottom")) {
                        // line 260
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articledetails"]) ? $context["articledetails"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 262
                    echo "
                            ";
                    // line 263
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                        // line 264
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["readmorebutton"]) ? $context["readmorebutton"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 266
                    echo "                        </div>
                    </div>
                ";
                } else {
                    // line 269
                    echo "                    <div class=\"uk-overlay-panel uk-flex ";
                    echo twig_escape_filter($this->env, (isset($context["overlay_position"]) ? $context["overlay_position"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["slide_overlay_animation"]) ? $context["slide_overlay_animation"] : null), "html", null, true);
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaycontainer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaycontainer", array()), 0)) : (0)) == 1)) {
                        echo " g-overlay-container";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption";
                    // line 270
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")) == "style1")) {
                        echo " uk-overlay-background";
                    }
                    echo " ";
                    if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null))));
                    }
                    echo "\">
                            ";
                    // line 271
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 272
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletitle"]) ? $context["articletitle"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 274
                    echo "
                            ";
                    // line 275
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array()), "show")) : ("show")) == "show")) {
                        // line 276
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articledetails"]) ? $context["articledetails"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 278
                    echo "
                            ";
                    // line 279
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) {
                        // line 280
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletext"]) ? $context["articletext"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 282
                    echo "
                            ";
                    // line 283
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array()), "show")) : ("show")) == "showbottom")) {
                        // line 284
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articledetails"]) ? $context["articledetails"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 286
                    echo "
                            ";
                    // line 287
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                        // line 288
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["readmorebutton"]) ? $context["readmorebutton"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 290
                    echo "                        </div>
                    </div>
                ";
                }
                // line 293
                echo "
            ";
            }
            // line 295
            echo "
            ";
            // line 296
            if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")) == "style2")) {
                // line 297
                echo "                
                ";
                // line 298
                if ((((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "bottom") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "top")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "left")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlayposition", array()), "bottom")) : ("bottom")) == "right"))) {
                    // line 299
                    echo "                     <div class=\"uk-overlay-panel ";
                    echo twig_escape_filter($this->env, (isset($context["overlay_position"]) ? $context["overlay_position"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["slide_overlay_animation"]) ? $context["slide_overlay_animation"] : null), "html", null, true);
                    echo " ";
                    if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null))));
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption\">
                            ";
                    // line 301
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 302
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletitle"]) ? $context["articletitle"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 304
                    echo "
                            ";
                    // line 305
                    if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                        // line 306
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletext"]) ? $context["articletext"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 308
                    echo "                        </div>
                    </div>
                ";
                } else {
                    // line 311
                    echo "                    <div class=\"uk-overlay-panel uk-flex ";
                    echo twig_escape_filter($this->env, (isset($context["overlay_position"]) ? $context["overlay_position"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["slide_overlay_animation"]) ? $context["slide_overlay_animation"] : null), "html", null, true);
                    if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaycontainer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaycontainer", array()), 0)) : (0)) == 1)) {
                        echo " g-overlay-container";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaystyle", array()), "style1")) : ("style1")));
                    echo "\">
                        <div class=\"slideshow-caption ";
                    // line 312
                    if ((twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null)))) != "auto")) {
                        echo " uk-width-1-";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "overlaywidth", array()), (isset($context["auto"]) ? $context["auto"] : null))) : ((isset($context["auto"]) ? $context["auto"] : null))));
                    }
                    echo "\">
                            ";
                    // line 313
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                        // line 314
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletitle"]) ? $context["articletitle"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 316
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                        // line 317
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["articletext"]) ? $context["articletext"] : null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 319
                    echo "                        </div>
                    </div>
                ";
                }
                // line 322
                echo "
            ";
            }
            // line 324
            echo "
        ";
            $context["slide_overlay"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 326
            echo "
        <li class=\"g-slideshow-item\">
            ";
            // line 328
            echo twig_escape_filter($this->env, (isset($context["slide_media"]) ? $context["slide_media"] : null), "html", null, true);
            echo "
            ";
            // line 329
            if (((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array()) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "articledetails", array()), "show")) : ("show")) == "show")) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                // line 330
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["slide_overlay"]) ? $context["slide_overlay"] : null), "html", null, true);
                echo "
            ";
            }
            // line 332
            echo "        </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["slideshow_slides"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 337
    public function block_particle($context, array $blocks = array())
    {
        // line 338
        echo "    
    <div class=\"g-slideshow";
        // line 339
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
        // line 340
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 341
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
            echo "
        ";
        }
        // line 343
        echo "        <div class=\"uk-slidenav-position";
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fullscreen", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fullscreen", array()), 0)) : (0))) {
            echo " fullscreen";
        }
        if ((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrowsvisible") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "bothvisible"))) {
            echo " nav-visible";
        }
        echo "\" data-uk-slideshow=\"";
        echo twig_escape_filter($this->env, (isset($context["slideshow_settings"]) ? $context["slideshow_settings"] : null), "html", null, true);
        echo "\">
            <ul class=\"uk-slideshow uk-overlay-active";
        // line 344
        if ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fullscreen", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "fullscreen", array()), 0)) : (0))) {
            echo " uk-slideshow-fullscreen";
        }
        echo "\">
                ";
        // line 345
        echo twig_escape_filter($this->env, (isset($context["slideshow_slides"]) ? $context["slideshow_slides"] : null), "html", null, true);
        echo "
            </ul>

            ";
        // line 348
        if ((((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrows") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "arrowsvisible")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "bothvisible"))) {
            // line 349
            echo "                <a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideshow-item=\"previous\"></a>
                <a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideshow-item=\"next\"></a>
            ";
        }
        // line 352
        echo "
            ";
        // line 353
        if (((((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "dots") || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "both")) || ((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "navigation", array()), "arrows")) : ("arrows")) == "bothvisible"))) {
            // line 354
            echo "                <ul class=\"uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center\">
                ";
            // line 355
            $context["counter"] = 0;
            // line 356
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 357
                echo "                    <li data-uk-slideshow-item=\"";
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "\"><a href=\"\"></a></li>
                    ";
                // line 358
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 359
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                </ul>
            ";
        }
        // line 362
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/slideshow-grav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  875 => 362,  871 => 360,  865 => 359,  863 => 358,  858 => 357,  853 => 356,  851 => 355,  848 => 354,  846 => 353,  843 => 352,  838 => 349,  836 => 348,  830 => 345,  824 => 344,  812 => 343,  806 => 341,  804 => 340,  793 => 339,  790 => 338,  787 => 337,  783 => 1,  774 => 332,  768 => 330,  766 => 329,  762 => 328,  758 => 326,  754 => 324,  750 => 322,  745 => 319,  739 => 317,  736 => 316,  730 => 314,  728 => 313,  721 => 312,  709 => 311,  704 => 308,  698 => 306,  696 => 305,  693 => 304,  687 => 302,  685 => 301,  670 => 299,  668 => 298,  665 => 297,  663 => 296,  660 => 295,  656 => 293,  651 => 290,  645 => 288,  643 => 287,  640 => 286,  634 => 284,  632 => 283,  629 => 282,  623 => 280,  621 => 279,  618 => 278,  612 => 276,  610 => 275,  607 => 274,  601 => 272,  599 => 271,  588 => 270,  576 => 269,  571 => 266,  565 => 264,  563 => 263,  560 => 262,  554 => 260,  552 => 259,  549 => 258,  543 => 256,  541 => 255,  538 => 254,  532 => 252,  530 => 251,  527 => 250,  521 => 248,  519 => 247,  500 => 245,  498 => 244,  495 => 243,  493 => 242,  490 => 241,  486 => 239,  483 => 237,  481 => 236,  478 => 233,  475 => 231,  473 => 230,  471 => 229,  468 => 228,  466 => 227,  463 => 226,  456 => 222,  452 => 221,  449 => 220,  447 => 219,  444 => 218,  440 => 216,  436 => 214,  430 => 213,  426 => 211,  422 => 209,  420 => 208,  415 => 207,  412 => 206,  408 => 205,  405 => 204,  402 => 203,  400 => 202,  397 => 201,  393 => 199,  391 => 198,  387 => 196,  384 => 195,  381 => 194,  378 => 193,  375 => 192,  372 => 191,  369 => 190,  366 => 189,  364 => 188,  361 => 187,  357 => 185,  353 => 183,  349 => 181,  347 => 180,  344 => 179,  342 => 178,  340 => 177,  338 => 176,  333 => 175,  331 => 174,  328 => 173,  324 => 171,  321 => 169,  318 => 167,  316 => 166,  312 => 165,  310 => 164,  308 => 163,  306 => 162,  302 => 158,  300 => 157,  297 => 154,  295 => 153,  292 => 150,  290 => 149,  287 => 146,  285 => 145,  282 => 142,  280 => 141,  277 => 138,  275 => 137,  272 => 134,  270 => 133,  267 => 130,  265 => 129,  262 => 126,  260 => 125,  257 => 122,  255 => 121,  253 => 120,  249 => 116,  247 => 115,  244 => 112,  242 => 111,  239 => 108,  237 => 107,  234 => 104,  232 => 103,  229 => 100,  227 => 99,  224 => 96,  222 => 95,  219 => 92,  217 => 91,  214 => 88,  212 => 87,  209 => 84,  207 => 83,  204 => 80,  202 => 79,  199 => 76,  197 => 75,  194 => 72,  192 => 71,  189 => 68,  187 => 67,  185 => 66,  182 => 65,  180 => 64,  174 => 62,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  148 => 54,  146 => 53,  144 => 52,  141 => 51,  139 => 50,  136 => 49,  131 => 48,  129 => 47,  124 => 43,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  97 => 36,  95 => 35,  91 => 32,  85 => 31,  82 => 30,  75 => 29,  70 => 28,  68 => 27,  65 => 26,  63 => 25,  61 => 23,  60 => 21,  59 => 20,  58 => 19,  56 => 16,  54 => 15,  52 => 14,  50 => 13,  48 => 12,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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

{% set article_settings = particle.article %}
{% set filter = article_settings.filter %}
{% set sort = article_settings.sort %}
{% set limit = article_settings.limit %}
{% set display = article_settings.display %}

{# Content Finder #}
{% set articles = grav.page.collection({
    items: {'@taxonomy.category': filter.categories|split(' ')},
    order: {by: sort.orderby, dir: sort.ordering},
    url_taxonomy_filters: false
}, false).slice(limit.start, limit.total) %}

{% set particleheading %}
    <div class=\"g-particle-intro\">
        {% if particle.mainheading %}
            <h3 class=\"g-title g-main-title\">{{ particle.mainheading|raw }}</h3>
            <div class=\"g-title-separator {% if particle.introtext == false %}no-intro-text{% endif %}\"></div>
        {% endif %} 
        {% if particle.introtext %}<p class=\"g-introtext\">{{ particle.introtext|raw }}</p>{% endif %}
    </div>
{% endset %}

{%- set slideshow_settings -%}
    {
        autoplay:{{ particle.autoplay|default(\"true\")|e }},
        autoplayInterval:{{ particle.autoplayInterval|default(7000)|e }},
        kenburns:{{ particle.kenburns|default(\"false\")|e }},
        animation:'{{ particle.animation|default('fade')|e }}',
        duration:{{ particle.animationDuration|default(500)|e }},
        pauseOnHover:{{ particle.pauseOnHover|default(\"true\")|e }},
        height:'{{ particle.height|default('auto')|e }}'
    }
{%- endset -%}

{% set slideshow_slides %}
    {% for article in articles %}

        {% set slide_media %}
            {% if display.image.enabled and (article.header.image.summary.enabled or article.header.image.text.enabled) %}
                {%- if display.image.enabled == 'intro' -%}
                    {% set file = article.header.image.summary.enabled|defined(false) ? (article.header.image.summary.file ?: true) %}
                {% elseif display.image.enabled == 'full' %}
                    {% set file = article.header.image.text.enabled|defined(false) ? (article.header.image.text.file ?: true) %}
                {% endif %}

                {% set imageinner = file is same as(true) ? article.media.images|first : (file ? article.media.images[file]) %}

                <img src=\"{{ url(imageinner.url) }}\" {{ imageinner.url|imagesize|raw }} alt=\"{{- (display.title.limit ? article.title|e|truncate_text(display.title.limit) : article.title|e)|raw }}\" />
            {% endif %}
        {% endset %} 

        {% set slide_overlay %}

            {% set overlay_position %}
                {%- if particle.overlayposition|default('bottom') == 'bottom' -%}
                    uk-overlay-bottom
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'left' -%}
                    uk-overlay-left
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'right' -%}
                    uk-overlay-right
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'top' -%}
                    uk-overlay-top
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'bottom-left' -%}
                    uk-flex-bottom
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'bottom-center' -%}
                    uk-flex-bottom uk-flex-center
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'bottom-right' -%}
                    uk-flex-bottom uk-flex-right
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'middle-left' -%}
                    uk-flex-middle
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'middle-center' -%}
                    uk-flex-middle uk-flex-center
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'middle-right' -%}
                    uk-flex-middle uk-flex-right
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'top-left' -%}
                    uk-flex-top
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'top-center' -%}
                    uk-flex-top uk-flex-center
                {%- endif -%}

                {%- if particle.overlayposition|default('bottom') == 'top-right' -%}
                    uk-flex-top uk-flex-right
                {%- endif -%}
            {%- endset -%}

            {%- set slide_overlay_animation -%}
                {%- if particle.overlayanimation|default('fade') == 'fade' -%}
                    uk-overlay-fade
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-left' -%}
                    uk-overlay-slide-left
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-right' -%}
                    uk-overlay-slide-right
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-top' -%}
                    uk-overlay-slide-top
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-bottom' -%}
                    uk-overlay-slide-bottom
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-left-short' -%}
                    uk-overlay-slide-left uk-overlay-left-short
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-right-short' -%}
                    uk-overlay-slide-right uk-overlay-right-short
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-top-short' -%}
                    uk-overlay-slide-top uk-overlay-top-short
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'slide-bottom-short' -%}
                    uk-overlay-slide-bottom uk-overlay-bottom-short
                {%- endif -%}

                {%- if particle.overlayanimation|default('fade') == 'scale' -%}
                    uk-overlay-scale
                {%- endif -%}
            {%- endset -%}

            {% set articletitle %}
                <h3 class=\"g-slideshow-title\">
                    {%- if display.title.enabled|default('show') == 'show' -%}
                        <a href=\"{{ article.url }}\">
                            {{- (display.title.limit ? article.title|e|truncate_text(display.title.limit) : article.title|e)|raw -}}
                        </a>
                    {%- else -%}
                        {{- (display.title.limit ? article.title|e|truncate_text(display.title.limit) : article.title|e)|raw -}}
                    {%- endif -%}
                </h3>
            {% endset %}

            {% set articledetails %}
                <div class=\"g-article-details details-{{ particle.articledetails }}\">
                    {% if display.date.enabled %}
                        <span class=\"g-article-date\">
                            {%- if display.date.enabled == 'published' -%}
                                <i class=\"fa fa-clock-o\"></i>{{- article.publishDate()|date(display.date.format) -}}
                            {%- elseif display.date.enabled == 'modified' -%}
                                <i class=\"fa fa-clock-o\"></i>{{- article.modified|date(display.date.format) -}}
                            {%- else -%}
                                <i class=\"fa fa-clock-o\"></i>{{- article.date|date(display.date.format) -}}
                            {%- endif -%}
                        </span>
                    {% endif %}

                    {% if display.author.enabled and (article.header.author.username or article.header.author.name or article.header.author.alias) %}
                        {% if article.header.author.name %}
                            {% set author = article.header.author.name %}
                        {% elseif article.header.author.alias %}
                            {% set author = article.header.author.alias %}
                        {% else %}
                            {% set author = article.header.author.username %}
                        {% endif %}

                        <span class=\"g-article-author\">
                            <i class=\"fa fa-user\"></i>{{- author -}}
                        </span>
                    {% endif %}

                    {% if display.category.enabled %}
                        {% set category_link = display.category.route == true %}
                        <span class=\"g-article-category\">
                            {% for category in article.taxonomy.category %}
                                {% if category_link %}
                                    <a href=\"{{ base_url ~ display.category.route }}\">
                                        <i class=\"fa fa-folder-open\"></i>{{- category|raw -}}
                                    </a>
                                {% else %}
                                    <i class=\"fa fa-folder-open\"></i>{{- category|raw -}}
                                {% endif %}
                            {% endfor %}
                        </span>
                    {% endif %}
                </div>
            {% endset %}

            {% set readmorebutton %}
                <div class=\"g-article-read-more\">
                    <a href=\"{{ article.url }}\">
                        <button class=\"button\">{{ display.read_more.label|default('Read More...') }}</button>
                    </a>
                </div>
            {% endset %}

            {% set articletext %}
                {% set article_text = display.text.type == 'intro' ? article.summary : article.content %}
                <div class=\"g-slideshow-desc\">
                    {%- if display.text.formatting == 'text' -%}
                        {{- article_text|truncate_text(display.text.limit)|raw -}}
                    {%- else -%}
                        {{- gantry.platform.filter(article_text)|truncate_html(display.text.limit)|html|raw -}}
                    {%- endif -%}

                    {%- if particle.overlaystyle|default('style1') == 'style2' and display.read_more.enabled -%}
                        {{ readmorebutton }}
                    {%- endif -%}
                </div>
            {% endset %}

            {% if particle.overlaystyle|default('style1') == 'style1' or particle.overlaystyle|default('style1') == 'style3' %}

                {% if (particle.overlayposition|default('bottom') == 'bottom') or (particle.overlayposition|default('bottom') == 'top') or (particle.overlayposition|default('bottom') == 'left') or (particle.overlayposition|default('bottom') == 'right') %}
                     <div class=\"uk-overlay-panel{% if particle.overlaystyle|default('style1') == 'style1' %} uk-overlay-background{% endif %} {{ overlay_position }} {{ slide_overlay_animation }} {% if particle.overlaywidth|default(auto)|e != 'auto' %} uk-width-1-{{ particle.overlaywidth|default(auto)|e }}{% endif %} {{ particle.overlaystyle|default(\"style1\")|e }}\">
                        <div class=\"slideshow-caption\">
                            {% if display.title.enabled %}
                                {{ articletitle }}
                            {% endif %}

                            {% if particle.articledetails|default('show') == 'show' %}
                                {{ articledetails }}
                            {% endif %}

                            {% if display.text.type %}
                                {{ articletext }}
                            {% endif %}

                            {% if particle.articledetails|default('show') == 'showbottom' %}
                                {{ articledetails }}
                            {% endif %}

                            {% if display.read_more.enabled %}
                                {{ readmorebutton }}
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"uk-overlay-panel uk-flex {{ overlay_position }} {{ slide_overlay_animation }}{% if particle.overlaycontainer|default(0) == 1 %} g-overlay-container{% endif %} {{ particle.overlaystyle|default(\"style1\")|e }}\">
                        <div class=\"slideshow-caption{% if particle.overlaystyle|default('style1') == 'style1' %} uk-overlay-background{% endif %} {% if particle.overlaywidth|default(auto)|e != 'auto' %} uk-width-1-{{ particle.overlaywidth|default(auto)|e }}{% endif %}\">
                            {% if display.title.enabled %}
                                {{ articletitle }}
                            {% endif %}

                            {% if particle.articledetails|default('show') == 'show' %}
                                {{ articledetails }}
                            {% endif %}

                            {% if display.text.type %}
                                {{ articletext }}
                            {% endif %}

                            {% if particle.articledetails|default('show') == 'showbottom' %}
                                {{ articledetails }}
                            {% endif %}

                            {% if display.read_more.enabled %}
                                {{ readmorebutton }}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

            {% endif %}

            {% if particle.overlaystyle|default('style1') == 'style2' %}
                
                {% if (particle.overlayposition|default('bottom') == 'bottom') or (particle.overlayposition|default('bottom') == 'top') or (particle.overlayposition|default('bottom') == 'left') or (particle.overlayposition|default('bottom') == 'right') %}
                     <div class=\"uk-overlay-panel {{ overlay_position }} {{ slide_overlay_animation }} {% if particle.overlaywidth|default(auto)|e != 'auto' %} uk-width-1-{{ particle.overlaywidth|default(auto)|e }}{% endif %} {{ particle.overlaystyle|default(\"style1\")|e }}\">
                        <div class=\"slideshow-caption\">
                            {% if display.title.enabled %}
                                {{ articletitle }}
                            {% endif %}

                            {% if display.text.type or display.read_more.enabled %}
                                {{ articletext }}
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"uk-overlay-panel uk-flex {{ overlay_position }} {{ slide_overlay_animation }}{% if particle.overlaycontainer|default(0) == 1 %} g-overlay-container{% endif %} {{ particle.overlaystyle|default(\"style1\")|e }}\">
                        <div class=\"slideshow-caption {% if particle.overlaywidth|default(auto)|e != 'auto' %} uk-width-1-{{ particle.overlaywidth|default(auto)|e }}{% endif %}\">
                            {% if display.title.enabled %}
                                {{ articletitle }}
                            {% endif %}
                            {% if display.text.type or display.read_more.enabled %}
                                {{ articletext }}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

            {% endif %}

        {% endset %}

        <li class=\"g-slideshow-item\">
            {{ slide_media }}
            {% if display.title.enabled or particle.articledetails|default('show') == 'show' or display.text.type or display.read_more.enabled %}
                {{ slide_overlay }}
            {% endif %}
        </li>

    {% endfor %}
{% endset %}

{% block particle %}
    
    <div class=\"g-slideshow{% if particle.css.class %} {{ particle.css.class|e }}{% endif %}\" {% if particle.extra %}{{ attr_extra|raw }}{% endif %}>
        {% if particle.mainheading or particle.introtext %}
            {{ particleheading }}
        {% endif %}
        <div class=\"uk-slidenav-position{% if particle.fullscreen|default(0) %} fullscreen{% endif %}{% if particle.navigation|default('arrows') == 'arrowsvisible' or particle.navigation|default('arrows') == 'bothvisible' %} nav-visible{% endif %}\" data-uk-slideshow=\"{{ slideshow_settings }}\">
            <ul class=\"uk-slideshow uk-overlay-active{% if particle.fullscreen|default(0) %} uk-slideshow-fullscreen{% endif %}\">
                {{ slideshow_slides }}
            </ul>

            {% if (particle.navigation|default('arrows') == 'arrows') or (particle.navigation|default('arrows') == 'arrowsvisible') or (particle.navigation|default('arrows') == 'both') or (particle.navigation|default('arrows') == 'bothvisible') %}
                <a href=\"\" class=\"uk-slidenav uk-slidenav-previous\" data-uk-slideshow-item=\"previous\"></a>
                <a href=\"\" class=\"uk-slidenav uk-slidenav-next\" data-uk-slideshow-item=\"next\"></a>
            {% endif %}

            {% if (particle.navigation|default('arrows') == 'dots') or (particle.navigation|default('arrows') == 'both') or (particle.navigation|default('arrows') == 'bothvisible') %}
                <ul class=\"uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center\">
                {% set counter = 0 %}
                {% for article in articles %}
                    <li data-uk-slideshow-item=\"{{ counter }}\"><a href=\"\"></a></li>
                    {% set counter = counter + 1 %}
                {% endfor %}
                </ul>
            {% endif %}
        </div>
    </div>
{% endblock %}", "@particles/slideshow-grav.html.twig", "/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/slideshow-grav.html.twig");
    }
}
