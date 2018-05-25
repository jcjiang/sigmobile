<?php

/* @particles/accordion-grav.html.twig */
class __TwigTemplate_012ba6e7a21432ee332857ef85eed10a5009138a4191f2ba37d26a7da8a0addb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/accordion-grav.html.twig", 1);
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
        // line 34
        ob_start();
        // line 35
        echo "    <div class=\"g-particle-intro\">
        ";
        // line 36
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array())) {
            // line 37
            echo "            <h3 class=\"g-title g-main-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array());
            echo "</h3>
            <div class=\"g-title-separator ";
            // line 38
            if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()) == false)) {
                echo "no-intro-text";
            }
            echo "\"></div>
        ";
        }
        // line 39
        echo " 
        ";
        // line 40
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array())) {
            echo "<p class=\"g-introtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array());
            echo "</p>";
        }
        // line 41
        echo "    </div>
";
        $context["particleheading"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "enabled", array())) {
            // line 27
            echo "        ";
            $this->displayParentBlock("stylesheets", $context, $blocks);
            echo "
        <style type=\"text/css\">
            .uk-accordion {display: block !important;}
        </style>
    ";
        }
    }

    // line 44
    public function block_particle($context, array $blocks = array())
    {
        // line 45
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
        // line 46
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "mainheading", array()) || $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "introtext", array()))) {
            // line 47
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["particleheading"]) ? $context["particleheading"] : null), "html", null, true);
            echo "
        ";
        }
        // line 49
        echo "        
        <div class=\"uk-accordion\" data-uk-accordion=\"{collapse: ";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "collapse", array()), "true")) : ("true")));
        echo ", showfirst: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "showfirst", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "showfirst", array()), "true")) : ("true")));
        echo "}\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 52
            echo "                <div class=\"g-accordion-item\">
                    <h3 class=\"uk-accordion-title\">
                        ";
            // line 54
            echo (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array())), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : (twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()))));
            echo "
                    </h3>
                    <div class=\"uk-accordion-content\">
                        <div class=\"g-grid\">
                            <div class=\"g-block\">
                                ";
            // line 59
            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "enabled", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "enabled", array())))) {
                // line 60
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro")) {
                    // line 61
                    $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "summary", array()), "file", array())) : (true))) : (""));
                    // line 62
                    echo "                                    ";
                } elseif (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full")) {
                    // line 63
                    echo "                                        ";
                    $context["file"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "enabled", array()), false)) ? ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "file", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "image", array()), "text", array()), "file", array())) : (true))) : (""));
                    // line 64
                    echo "                                    ";
                }
                // line 65
                echo "
                                    ";
                // line 66
                $context["imageinner"] = ((((isset($context["file"]) ? $context["file"] : null) === true)) ? (twig_first($this->env, $this->getAttribute($this->getAttribute($context["article"], "media", array()), "images", array()))) : ((((isset($context["file"]) ? $context["file"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "media", array()), "images", array()), (isset($context["file"]) ? $context["file"] : null), array(), "array")) : (""))));
                // line 67
                echo "
                                    <div class=\"g-accordion-image\">
                                        ";
                // line 69
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "disable")) : ("disable")) == "enable")) {
                    // line 70
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute((isset($context["imageinner"]) ? $context["imageinner"] : null), "url", array()), false, 0), "html", null, true);
                    echo "\" data-uk-lightbox class=\"uk-overlay uk-overlay-hover\">
                                            <span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
                                        ";
                }
                // line 73
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute((isset($context["imageinner"]) ? $context["imageinner"] : null), "url", array())), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute((isset($context["imageinner"]) ? $context["imageinner"] : null), "url", array()));
                echo " alt=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array())), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : (twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()))));
                echo "\" />
                                        ";
                // line 74
                if (((($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "lightbox", array()), "disable")) : ("disable")) == "enable")) {
                    // line 75
                    echo "                                            </a>
                                        ";
                }
                // line 77
                echo "                                    </div>
                                ";
            }
            // line 79
            echo "                                ";
            if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array()))) {
                // line 80
                echo "                                    ";
                $context["article_text"] = ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["article"], "summary", array())) : ($this->getAttribute($context["article"], "content", array())));
                // line 81
                echo "                                    <div class=\"g-accordion-desc\">
                                        ";
                // line 82
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "formatting", array()) == "text")) {
                    // line 83
                    echo "                                            ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                    echo "
                                        ";
                } else {
                    // line 85
                    echo "                                            ";
                    echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->htmlFilter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "filter", array(0 => (isset($context["article_text"]) ? $context["article_text"] : null)), "method"), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array())));
                    echo "
                                        ";
                }
                // line 87
                echo "                                        ";
                if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                    // line 88
                    echo "                                            <span class=\"g-article-read-more\">
                                                <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "url", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 90
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array()), "Read More")) : ("Read More")), "html", null, true);
                    echo "
                                                </a>
                                            </span>
                                        ";
                }
                // line 94
                echo "                                    </div>
                                ";
            }
            // line 96
            echo "                                ";
            if ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array()))) {
                // line 97
                echo "                                    <div class=\"g-article-details\">
                                        ";
                // line 98
                if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) {
                    // line 99
                    echo "                                            <span class=\"g-article-date\">";
                    // line 100
                    if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "published")) {
                        // line 101
                        echo "<i class=\"fa fa-clock-o\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publishDate", array(), "method"), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 102
(isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "modified")) {
                        // line 103
                        echo "<i class=\"fa fa-clock-o\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "modified", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                    } else {
                        // line 105
                        echo "<i class=\"fa fa-clock-o\"></i>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                    }
                    // line 107
                    echo "</span>
                                        ";
                }
                // line 109
                echo "
                                        ";
                // line 110
                if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array()) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "username", array()) || $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "name", array())) || $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "alias", array())))) {
                    // line 111
                    echo "                                            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "name", array())) {
                        // line 112
                        echo "                                                ";
                        $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "name", array());
                        // line 113
                        echo "                                            ";
                    } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "alias", array())) {
                        // line 114
                        echo "                                                ";
                        $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "alias", array());
                        // line 115
                        echo "                                            ";
                    } else {
                        // line 116
                        echo "                                                ";
                        $context["author"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["article"], "header", array()), "author", array()), "username", array());
                        // line 117
                        echo "                                            ";
                    }
                    // line 118
                    echo "
                                            <span class=\"g-article-author\">
                                                <i class=\"fa fa-user\"></i>";
                    // line 120
                    echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
                    // line 121
                    echo "</span>
                                        ";
                }
                // line 123
                echo "
                                        ";
                // line 124
                if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) {
                    // line 125
                    echo "                                            ";
                    $context["category_link"] = ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "route", array()) == true);
                    // line 126
                    echo "                                            <span class=\"g-article-category\">
                                                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["article"], "taxonomy", array()), "category", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 128
                        echo "                                                    ";
                        if ((isset($context["category_link"]) ? $context["category_link"] : null)) {
                            // line 129
                            echo "                                                        <a href=\"";
                            echo twig_escape_filter($this->env, ((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "route", array())), "html", null, true);
                            echo "\">
                                                            <i class=\"fa fa-folder-open\"></i>";
                            // line 130
                            echo $context["category"];
                            // line 131
                            echo "</a>
                                                    ";
                        } else {
                            // line 133
                            echo "                                                        <i class=\"fa fa-folder-open\"></i>";
                            echo $context["category"];
                        }
                        // line 135
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                                            </span>
                                        ";
                }
                // line 138
                echo "                                    </div>
                                ";
            }
            // line 140
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/accordion-grav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 145,  373 => 140,  369 => 138,  365 => 136,  359 => 135,  355 => 133,  351 => 131,  349 => 130,  344 => 129,  341 => 128,  337 => 127,  334 => 126,  331 => 125,  329 => 124,  326 => 123,  322 => 121,  320 => 120,  316 => 118,  313 => 117,  310 => 116,  307 => 115,  304 => 114,  301 => 113,  298 => 112,  295 => 111,  293 => 110,  290 => 109,  286 => 107,  282 => 105,  278 => 103,  276 => 102,  273 => 101,  271 => 100,  269 => 99,  267 => 98,  264 => 97,  261 => 96,  257 => 94,  250 => 90,  246 => 89,  243 => 88,  240 => 87,  234 => 85,  228 => 83,  226 => 82,  223 => 81,  220 => 80,  217 => 79,  213 => 77,  209 => 75,  207 => 74,  198 => 73,  191 => 70,  189 => 69,  185 => 67,  183 => 66,  180 => 65,  177 => 64,  174 => 63,  171 => 62,  169 => 61,  167 => 60,  165 => 59,  157 => 54,  153 => 52,  149 => 51,  143 => 50,  140 => 49,  134 => 47,  132 => 46,  120 => 45,  117 => 44,  106 => 27,  103 => 26,  100 => 25,  96 => 1,  92 => 41,  86 => 40,  83 => 39,  76 => 38,  71 => 37,  69 => 36,  66 => 35,  64 => 34,  62 => 23,  61 => 21,  60 => 20,  59 => 19,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  38 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
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
            {% for article in articles %}
                <div class=\"g-accordion-item\">
                    <h3 class=\"uk-accordion-title\">
                        {{ (display.title.limit ? article.title|e|truncate_text(display.title.limit) : article.title|e)|raw }}
                    </h3>
                    <div class=\"uk-accordion-content\">
                        <div class=\"g-grid\">
                            <div class=\"g-block\">
                                {% if display.image.enabled and (article.header.image.summary.enabled or article.header.image.text.enabled) %}
                                    {%- if display.image.enabled == 'intro' -%}
                                        {% set file = article.header.image.summary.enabled|defined(false) ? (article.header.image.summary.file ?: true) %}
                                    {% elseif display.image.enabled == 'full' %}
                                        {% set file = article.header.image.text.enabled|defined(false) ? (article.header.image.text.file ?: true) %}
                                    {% endif %}

                                    {% set imageinner = file is same as(true) ? article.media.images|first : (file ? article.media.images[file]) %}

                                    <div class=\"g-accordion-image\">
                                        {% if particle.lightbox|default('disable') == 'enable' %}
                                            <a href=\"{{ url(imageinner.url, false, 0) }}\" data-uk-lightbox class=\"uk-overlay uk-overlay-hover\">
                                            <span class=\"uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-fade\"></span>
                                        {% endif %}
                                            <img src=\"{{ url(imageinner.url) }}\" {{ imageinner.url|imagesize|raw }} alt=\"{{- (display.title.limit ? article.title|e|truncate_text(display.title.limit) : article.title|e)|raw }}\" />
                                        {% if particle.lightbox|default('disable') == 'enable' %}
                                            </a>
                                        {% endif %}
                                    </div>
                                {% endif %}
                                {% if display.text.type or display.read_more.enabled %}
                                    {% set article_text = display.text.type == 'intro' ? article.summary : article.content %}
                                    <div class=\"g-accordion-desc\">
                                        {% if display.text.formatting == 'text' %}
                                            {{ article_text|truncate_text(display.text.limit)|raw }}
                                        {% else %}
                                            {{ gantry.platform.filter(article_text)|truncate_html(display.text.limit)|html|raw }}
                                        {% endif %}
                                        {% if display.read_more.enabled %}
                                            <span class=\"g-article-read-more\">
                                                <a href=\"{{ article.url }}\">
                                                    {{ display.read_more.label|default('Read More') }}
                                                </a>
                                            </span>
                                        {% endif %}
                                    </div>
                                {% endif %}
                                {% if display.date.enabled or display.author.enabled or display.category.enabled %}
                                    <div class=\"g-article-details\">
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
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "@particles/accordion-grav.html.twig", "/Users/jc/Downloads/SIGMobile-Web/grav/user/data/gantry5/themes/g5_helium/particles/accordion-grav.html.twig");
    }
}
