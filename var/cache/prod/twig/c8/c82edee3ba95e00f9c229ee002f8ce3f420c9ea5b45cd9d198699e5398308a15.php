<?php

/* VistaBundle:Default:index.html.twig */
class __TwigTemplate_63d0ef7b78a6458b66394bab97937deb0408412a524c9fb6a53f94682f511ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "VistaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'tendencia' => array($this, 'block_tendencia'),
            'mejorvaloradas' => array($this, 'block_mejorvaloradas'),
            'estrenos' => array($this, 'block_estrenos'),
            'proximamente' => array($this, 'block_proximamente'),
            'ultimas' => array($this, 'block_ultimas'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["i"] = 0;
        // line 127
        $context["i"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Quality Mega Pixel ";
    }

    // line 6
    public function block_tendencia($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 9
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 12
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 13
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                             
                        ";
            } else {
                // line 16
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
                        ";
            }
            // line 20
            echo "                        
                        <div class=\"caption\">
                            <h5>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 26
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 27
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 30
    public function block_mejorvaloradas($context, array $blocks = array())
    {
        // line 31
        $context["i"] = (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null);
        // line 32
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 33
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 36
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 37
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                             
                        ";
            } else {
                // line 40
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
                        ";
            }
            // line 44
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 49
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 53
    public function block_estrenos($context, array $blocks = array())
    {
        // line 54
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 2);
        // line 55
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 56
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 59
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 60
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                             
                        ";
            } else {
                // line 63
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
                        ";
            }
            // line 67
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 72
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 73
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 76
    public function block_proximamente($context, array $blocks = array())
    {
        // line 77
        echo "
";
        // line 78
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 3);
        // line 79
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 80
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 83
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 84
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                             
                        ";
            } else {
                // line 87
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
                        ";
            }
            // line 91
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 96
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 97
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 100
    public function block_ultimas($context, array $blocks = array())
    {
        // line 101
        echo "
";
        // line 102
        $context["i"] = ((isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null) * 4);
        // line 103
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["ultimas"]) ? $context["ultimas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 104
            echo "
                <div class=\"col-sm-4 col-md-4\">
                    <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getUrl("homepage");
            echo "vista/mostrarpelicula/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "id", array()), "html", null, true);
            echo "\" class=\"thumbnail movie\">
                        ";
            // line 107
            if (($this->getAttribute($context["pelicula"], "poster_path", array()) == "")) {
                // line 108
                echo "                             <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/movie.png"), "html", null, true);
                echo "\" alt=\"...\">
                             
                        ";
            } else {
                // line 111
                echo "                        
                            <img src=\"https://image.tmdb.org/t/p/w185/";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "poster_path", array()), "html", null, true);
                echo "\" alt=\"...\">
                        
                        ";
            }
            // line 115
            echo "                        <div class=\"caption\">
                            <h5>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "title", array()), "html", null, true);
            echo "<div id=\"c";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" value=\"0\" class=\"rateyo-readonly-widg\"></div></h5>
                        </div>
                    </a>
                </div>
                ";
            // line 120
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 121
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        // line 130
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$(function() {
        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["tendencia"]) ? $context["tendencia"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 134
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 146
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 147
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["mejoresValoradas"]) ? $context["mejoresValoradas"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 149
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 161
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 162
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["estrenos"]) ? $context["estrenos"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 164
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 176
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 177
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["proximamente"]) ? $context["proximamente"] : null), "results", array()), 0, (isset($context["numPeliculasDivisibleTres"]) ? $context["numPeliculasDivisibleTres"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["pelicula"]) {
            // line 179
            echo "            var rating = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pelicula"], "vote_average", array()), "html", null, true);
            echo ";
            \$(\".counter\").text(rating);
            \$(\"#c";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").rateYo({
                readOnly: true,
                rating: rating,
                numStars: 10,
                precision: 10,
                minValue: 1,
                maxValue: 10
            }).on(\"rateyo.change\", function(e, data) {
                \$(\"#c";
            // line 189
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\").val(data.rating);
            });
                ";
            // line 191
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 192
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pelicula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "     });
     </script>
";
    }

    public function getTemplateName()
    {
        return "VistaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 193,  495 => 192,  493 => 191,  488 => 189,  477 => 181,  471 => 179,  466 => 178,  460 => 177,  458 => 176,  453 => 174,  442 => 166,  436 => 164,  431 => 163,  425 => 162,  423 => 161,  418 => 159,  407 => 151,  401 => 149,  396 => 148,  390 => 147,  388 => 146,  383 => 144,  372 => 136,  366 => 134,  362 => 133,  355 => 130,  352 => 129,  344 => 121,  342 => 120,  333 => 116,  330 => 115,  324 => 112,  321 => 111,  314 => 108,  312 => 107,  306 => 106,  302 => 104,  297 => 103,  295 => 102,  292 => 101,  289 => 100,  281 => 97,  279 => 96,  270 => 92,  267 => 91,  261 => 88,  258 => 87,  251 => 84,  249 => 83,  243 => 82,  239 => 80,  234 => 79,  232 => 78,  229 => 77,  226 => 76,  218 => 73,  216 => 72,  207 => 68,  204 => 67,  198 => 64,  195 => 63,  188 => 60,  186 => 59,  180 => 58,  176 => 56,  171 => 55,  169 => 54,  166 => 53,  158 => 50,  156 => 49,  147 => 45,  144 => 44,  138 => 41,  135 => 40,  128 => 37,  126 => 36,  120 => 35,  116 => 33,  111 => 32,  109 => 31,  106 => 30,  98 => 27,  96 => 26,  87 => 22,  83 => 20,  77 => 17,  74 => 16,  67 => 13,  65 => 12,  59 => 11,  55 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 2,  35 => 1,  33 => 127,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'index.html.twig' %}*/
/* {%block title%} Quality Mega Pixel {%endblock%}*/
/* {%set i = 0%}*/
/* */
/* */
/* {%block tendencia%}*/
/* */
/*     {%for pelicula in tendencia.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*                         {% endif %}*/
/*                         */
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i =( i + 1)%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block mejorvaloradas%}*/
/* {% set i = numPeliculasDivisibleTres %}*/
/*     {%for pelicula in mejoresValoradas.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i = i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block estrenos%}*/
/* {% set i = numPeliculasDivisibleTres * 2%}*/
/*     {%for pelicula in estrenos.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i =i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block proximamente%}*/
/* */
/* {% set i = numPeliculasDivisibleTres * 3%}*/
/*     {%for pelicula in proximamente.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i = i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* {%block ultimas%}*/
/* */
/* {% set i = numPeliculasDivisibleTres * 4%}*/
/*     {%for pelicula in ultimas.results|slice(0,numPeliculasDivisibleTres)%}*/
/* */
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <a href="{{ url('homepage') }}vista/mostrarpelicula/{{pelicula.id}}" class="thumbnail movie">*/
/*                         {% if pelicula.poster_path == "" %}*/
/*                              <img src="{{asset('assets/images/movie.png')}}" alt="...">*/
/*                              */
/*                         {% else %}*/
/*                         */
/*                             <img src="https://image.tmdb.org/t/p/w185/{{pelicula.poster_path}}" alt="...">*/
/*                         */
/*                         {% endif %}*/
/*                         <div class="caption">*/
/*                             <h5>{{ pelicula.title }}<div id="c{{i}}" value="0" class="rateyo-readonly-widg"></div></h5>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 {%set i = i + 1%}*/
/*     {%endfor%}*/
/* {%endblock%}*/
/* */
/* */
/* */
/* */
/* {% set i = 0 %}*/
/* */
/* {%block javascripts%}*/
/*  {{ parent() }}*/
/* <script>*/
/*      $(function() {*/
/*         {%for pelicula in tendencia.results|slice(0,numPeliculasDivisibleTres)%}*/
/*             var rating = {{pelicula.vote_average}};*/
/*             $(".counter").text(rating);*/
/*             $("#c{{i}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c{{i}}").val(data.rating);*/
/*             });*/
/*                 {%set i = i + 1%}*/
/*         {%endfor%}*/
/*       {%for pelicula in mejoresValoradas.results|slice(0,numPeliculasDivisibleTres)%}*/
/*             var rating = {{pelicula.vote_average}};*/
/*             $(".counter").text(rating);*/
/*             $("#c{{i}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c{{i}}").val(data.rating);*/
/*             });*/
/*                 {%set i = i + 1%}*/
/*         {%endfor%}*/
/*           {%for pelicula in estrenos.results|slice(0,numPeliculasDivisibleTres)%}*/
/*             var rating = {{pelicula.vote_average}};*/
/*             $(".counter").text(rating);*/
/*             $("#c{{i}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c{{i}}").val(data.rating);*/
/*             });*/
/*                 {%set i = i + 1%}*/
/*         {%endfor%}*/
/*           {%for pelicula in proximamente.results|slice(0,numPeliculasDivisibleTres)%}*/
/*             var rating = {{pelicula.vote_average}};*/
/*             $(".counter").text(rating);*/
/*             $("#c{{i}}").rateYo({*/
/*                 readOnly: true,*/
/*                 rating: rating,*/
/*                 numStars: 10,*/
/*                 precision: 10,*/
/*                 minValue: 1,*/
/*                 maxValue: 10*/
/*             }).on("rateyo.change", function(e, data) {*/
/*                 $("#c{{i}}").val(data.rating);*/
/*             });*/
/*                 {%set i = i + 1%}*/
/*         {%endfor%}*/
/*      });*/
/*      </script>*/
/* {%endblock%}*/
/* */
/* */
/* */
